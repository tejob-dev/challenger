<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Parraine;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ParraineTest extends TestCase
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
    public function it_gets_parraines_list()
    {
        $parraines = Parraine::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.parraines.index'));

        $response->assertOk()->assertSee($parraines[0]->nomprep);
    }

    /**
     * @test
     */
    public function it_stores_the_parraine()
    {
        $data = Parraine::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(route('api.parraines.store'), $data);

        $this->assertDatabaseHas('parraines', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_updates_the_parraine()
    {
        $parraine = Parraine::factory()->create();

        $data = [
            'nomprep' => $this->faker->text(255),
            'eamilp' => $this->faker->email,
            'telephonp' => $this->faker->text(255),
            'nomprepp' => $this->faker->email,
            'emailpp' => $this->faker->email,
            'telephonpp' => $this->faker->email,
        ];

        $response = $this->putJson(
            route('api.parraines.update', $parraine),
            $data
        );

        $data['id'] = $parraine->id;

        $this->assertDatabaseHas('parraines', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_parraine()
    {
        $parraine = Parraine::factory()->create();

        $response = $this->deleteJson(
            route('api.parraines.destroy', $parraine)
        );

        $this->assertDeleted($parraine);

        $response->assertNoContent();
    }
}
