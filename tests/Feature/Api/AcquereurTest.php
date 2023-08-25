<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Acquereur;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AcquereurTest extends TestCase
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
    public function it_gets_acquereurs_list()
    {
        $acquereurs = Acquereur::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.acquereurs.index'));

        $response->assertOk()->assertSee($acquereurs[0]->nompre);
    }

    /**
     * @test
     */
    public function it_stores_the_acquereur()
    {
        $data = Acquereur::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(route('api.acquereurs.store'), $data);

        $this->assertDatabaseHas('acquereurs', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_updates_the_acquereur()
    {
        $acquereur = Acquereur::factory()->create();

        $data = [
            'nompre' => $this->faker->text(255),
            'telephone' => $this->faker->text(255),
            'email' => $this->faker->email,
            'typlog' => 'Villa basse',
            'emplacement' => $this->faker->text(255),
            'nbrpiece' => 'Studio',
            'budget' => $this->faker->randomNumber,
            'apporinit' => $this->faker->randomNumber,
            'engagannee' => $this->faker->randomNumber,
            'peopletype' => $this->faker->text(255),
            'nbrannee' => '7 ans',
            'result1' => $this->faker->text(255),
            'result2' => $this->faker->text(255),
            'result3' => $this->faker->text(255),
        ];

        $response = $this->putJson(
            route('api.acquereurs.update', $acquereur),
            $data
        );

        $data['id'] = $acquereur->id;

        $this->assertDatabaseHas('acquereurs', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_acquereur()
    {
        $acquereur = Acquereur::factory()->create();

        $response = $this->deleteJson(
            route('api.acquereurs.destroy', $acquereur)
        );

        $this->assertDeleted($acquereur);

        $response->assertNoContent();
    }
}
