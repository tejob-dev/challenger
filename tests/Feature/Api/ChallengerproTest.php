<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Challengerpro;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ChallengerproTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();

        $user = User::factory()->create(['email' => 'admin@admin.com']);

        Sanctum::actingAs($user, [], 'web');

        $this->seed(\Database\Seeders\PermissionsSeeder::class);

        $this->withoutExceptionHandling();
    }

    /**
     * @test
     */
    public function it_gets_challengerpros_list()
    {
        $challengerpros = Challengerpro::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.challengerpros.index'));

        $response->assertOk()->assertSee($challengerpros[0]->nomentr);
    }

    /**
     * @test
     */
    public function it_stores_the_challengerpro()
    {
        $data = Challengerpro::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(route('api.challengerpros.store'), $data);

        $this->assertDatabaseHas('challengerpros', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_updates_the_challengerpro()
    {
        $challengerpro = Challengerpro::factory()->create();

        $data = [
            'nomentr' => $this->faker->name(),
            'telephone' => $this->faker->phoneNumber,
            'creation' => $this->faker->date,
            'nompredirig' => $this->faker->name(),
            'typeprog' => 'Programme en cours',
            'objectif' => 'Des clients',
            'messagacquis' => $this->faker->sentence(20),
            'rdventre' => $this->faker->date,
        ];

        $response = $this->putJson(
            route('api.challengerpros.update', $challengerpro),
            $data
        );

        $data['id'] = $challengerpro->id;

        $this->assertDatabaseHas('challengerpros', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_challengerpro()
    {
        $challengerpro = Challengerpro::factory()->create();

        $response = $this->deleteJson(
            route('api.challengerpros.destroy', $challengerpro)
        );

        $this->assertDeleted($challengerpro);

        $response->assertNoContent();
    }
}
