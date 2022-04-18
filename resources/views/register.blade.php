<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bookface - Register</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet">


    </head>
    <body>
        <section id="header-section">
            <h1>Register</h1>
        </section>
        <section id="actions-section">
            <table>
                <form method="post" action=" {{ route('registerUser') }}" id="registration-form">
                    {{ csrf_field() }}
                    <tr>
                        <td><label for="name">Name:</label></td>
                        <td><input type="text" name="name" id="form-input-name-field"></td>
                    </tr>
                    <tr>
                        <td><label for="email">Email:</label></td>
                        <td><input type="text" name="email" id="form-input-email-field"></td>
                    </tr>
                    <tr>
                        <td><label for="password">Password:</label></td>
                        <td><input type="text" name="password" id="form-input-password-field"></td>
                    </tr>
                    <tr>
                        <td><button type="submit" id="form-button-submit">Register</button></td>
                    </tr>
                </form>
            </table>
        </section>
    </body>
</html>
