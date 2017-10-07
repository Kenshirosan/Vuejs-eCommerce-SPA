<?php

// namespace Tests\Feature;

// use App\Product;
// use Tests\TestCase;
// use Illuminate\Foundation\Testing\RefreshDatabase;
// use Illuminate\Foundation\Testing\DatabaseMigrations;

// class CreateProductsTest extends TestCase
// {
//     use RefreshDatabase, DatabaseMigrations;


//     /** @test */
//     public function guests_may_not_add_products()
//     {
//         $this->withExceptionHandling();
//         $product = ['name' => 'toto', 'option_group_id' => 999, 'category_id'=> 999, 'category' => 'Appetizers', 'slug' => 'toto', 'price' => 1900,
//             'description' => 'description', 'image' => 'image.jpg'];
//         $this->post('/add-product', $product)
//             ->assertRedirect('/');
//     }
// }
