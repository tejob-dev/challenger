<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\Parraine;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ParraineControllerTest extends TestCase
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
    public function it_displays_index_view_with_parraines()
    {
        $parraines = Parraine::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('parraines.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.parraines.index')
            ->assertViewHas('parraines');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_parraine()
    {
        $response = $this->get(route('parraines.create'));

        $response->assertOk()->assertViewIs('app.parraines.create');
    }

    /**
     * @test
     */
    public function it_stores_the_parraine()
    {
        $data = Parraine::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('parraines.store'), $data);

        $this->assertDatabaseHas('parraines', $data);

        $parraine = Parraine::latest('id')->first();

        $response->assertRedirect(route('parraines.edit', $parraine));
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_parraine()
    {
        $parraine = Parraine::factory()->create();

        $response = $this->get(route('parraines.show', $parraine));

        $response
            ->assertOk()
            ->assertViewIs('app.parraines.show')
            ->assertViewHas('parraine');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_parraine()
    {
        $parraine = Parraine::factory()->create();

        $response = $this->get(route('parraines.edit', $parraine));

        $response
            ->assertOk()
            ->assertViewIs('app.parraines.edit')
            ->assertViewHas('parraine');
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

        $response = $this->put(route('parraines.update', $parraine), $data);

        $data['id'] = $parraine->id;

        $this->assertDatabaseHas('parraines', $data);

        $response->assertRedirect(route('parraines.edit', $parraine));
    }

    /**
     * @test
     */
    public function it_deletes_the_parraine()
    {
        $parraine = Parraine::factory()->create();

        $response = $this->delete(route('parraines.destroy', $parraine));

        $response->assertRedirect(route('parraines.index'));

        $this->assertDeleted($parraine);
    }
}
