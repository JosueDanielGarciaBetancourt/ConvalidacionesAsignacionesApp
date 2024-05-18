<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginControllerFeatureTest extends TestCase
{
    use DatabaseTransactions;

    public function test_user_can_login_with_correct_credentials()
    {
        $password = '123456';
        $user = User::factory()->create([
            'email' => '77043114@continental.edu.pe',
            'password' => Hash::make($password),
        ]);
    
        $response = $this->post(route('inicia-sesion'), [
            'email' => '77043114@continental.edu.pe',
            'password' => $password,
        ]);
    
        $response->assertRedirect(route('pagina-inicio.convalidar-cursos'));
        $this->assertAuthenticatedAs($user);
    }

    public function test_user_cannot_login_with_incorrect_credentials()
    {
        $user = User::factory()->create([
            'email' => '12345678@continental.edu.pe',
            'password' => Hash::make('123456'),
        ]);

        $response = $this->post('/inicia-sesion', [
            'email' => '12345678@continental.edu.pe',
            'password' => 'wrongpassword', 
        ]);

        $response->assertSessionHasErrors('email');
        $this->assertGuest();
    }

    public function test_user_can_stay_authenticated_with_remember_me()
    {
        // Creamos un usuario
        $password = '123456';
        $user = User::factory()->create([
            'email' => '77043114@continental.edu.pe',
            'password' => Hash::make($password),
        ]);

        // Iniciamos sesión con la opción "remember me"
        $response = $this->post(route('inicia-sesion'), [
            'email' => '77043114@continental.edu.pe',
            'password' => $password,
            'remember' => true,
        ]);

        // Verificamos que la respuesta sea una redirección a la página de inicio
        $response->assertRedirect(route('pagina-inicio.convalidar-cursos'));

        // Verificamos que el usuario esté autenticado
        $this->assertAuthenticatedAs($user);

        // Cerramos sesión
        $this->post(route('logout'));

        // Volvemos a abrir el navegador y verificamos si el usuario sigue autenticado
        $this->assertGuest();
    }

}
