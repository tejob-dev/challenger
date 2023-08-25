<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\Acquereur;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AcquereurControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();

        $this->actingAs(
            User::factory()->create(['email' => 'admin@admin.com'])
        );

        $this->seed(\Database\Seeders\PermissionsSeeder::class);

        $this->withoutExceptionHandling();
    }

    /**
     * @test
     */
    public function it_displays_index_view_with_acquereurs()
    {
        $acquereurs = Acquereur::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('acquereurs.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.acquereurs.index')
            ->assertViewHas('acquereurs');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_acquereur()
    {
        $response = $this->get(route('acquereurs.create'));

        $response->assertOk()->assertViewIs('app.acquereurs.create');
    }

    /**
     * @test
     */
    public function it_stores_the_acquereur()
    {
        $data = Acquereur::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('acquereurs.store'), $data);

        $this->assertDatabaseHas('acquereurs', $data);

        $acquereur = Acquereur::latest('id')->first();

        $response->assertRedirect(route('acquereurs.edit', $acquereur));
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_acquereur()
    {
        $acquereur = Acquereur::factory()->create();

        $response = $this->get(route('acquereurs.show', $acquereur));

        $response
            ->assertOk()
            ->assertViewIs('app.acquereurs.show')
            ->assertViewHas('acquereur');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_acquereur()
    {
        $acquereur = Acquereur::factory()->create();

        $response = $this->get(route('acquereurs.edit', $acquereur));

        $response
            ->assertOk()
            ->assertViewIs('app.acquereurs.edit')
            ->assertViewHas('acquereur');
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

        $response = $this->put(route('acquereurs.update', $acquereur), $data);

        $data['id'] = $acquereur->id;

        $this->assertDatabaseHas('acquereurs', $data);

        $response->assertRedirect(route('acquereurs.edit', $acquereur));
    }

    /**
     * @test
     */
    public function it_deletes_the_acquereur()
    {
        $acquereur = Acquereur::factory()->create();

        $response = $this->delete(route('acquereurs.destroy', $acquereur));

        $response->assertRedirect(route('acquereurs.index'));

        $this->assertDeleted($acquereur);
    }
}
