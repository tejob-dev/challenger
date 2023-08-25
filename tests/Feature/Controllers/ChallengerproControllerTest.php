<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\Challengerpro;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ChallengerproControllerTest extends TestCase
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
    public function it_displays_index_view_with_challengerpros()
    {
        $challengerpros = Challengerpro::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('challengerpros.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.challengerpros.index')
            ->assertViewHas('challengerpros');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_challengerpro()
    {
        $response = $this->get(route('challengerpros.create'));

        $response->assertOk()->assertViewIs('app.challengerpros.create');
    }

    /**
     * @test
     */
    public function it_stores_the_challengerpro()
    {
        $data = Challengerpro::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('challengerpros.store'), $data);

        $this->assertDatabaseHas('challengerpros', $data);

        $challengerpro = Challengerpro::latest('id')->first();

        $response->assertRedirect(route('challengerpros.edit', $challengerpro));
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_challengerpro()
    {
        $challengerpro = Challengerpro::factory()->create();

        $response = $this->get(route('challengerpros.show', $challengerpro));

        $response
            ->assertOk()
            ->assertViewIs('app.challengerpros.show')
            ->assertViewHas('challengerpro');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_challengerpro()
    {
        $challengerpro = Challengerpro::factory()->create();

        $response = $this->get(route('challengerpros.edit', $challengerpro));

        $response
            ->assertOk()
            ->assertViewIs('app.challengerpros.edit')
            ->assertViewHas('challengerpro');
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

        $response = $this->put(
            route('challengerpros.update', $challengerpro),
            $data
        );

        $data['id'] = $challengerpro->id;

        $this->assertDatabaseHas('challengerpros', $data);

        $response->assertRedirect(route('challengerpros.edit', $challengerpro));
    }

    /**
     * @test
     */
    public function it_deletes_the_challengerpro()
    {
        $challengerpro = Challengerpro::factory()->create();

        $response = $this->delete(
            route('challengerpros.destroy', $challengerpro)
        );

        $response->assertRedirect(route('challengerpros.index'));

        $this->assertDeleted($challengerpro);
    }
}
