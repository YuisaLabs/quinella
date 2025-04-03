<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }} - Authorization</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="https://preline.co/assets/css/main.min.css">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <style>
        .passport-authorize .container {
            margin-top: 30px;
        }

        .passport-authorize .scopes {
            margin-top: 20px;
        }

        .passport-authorize .buttons {
            margin-top: 25px;
            text-align: center;
        }

        .passport-authorize .btn {
            width: 125px;
        }

        .passport-authorize .btn-approve {
            margin-right: 15px;
        }

        .passport-authorize form {
            display: inline;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="max-w-xl w-72 mx-auto flex flex-col items-center h-screen justify-center">
    <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-2xs dark:bg-neutral-900 dark:border-neutral-700">
        <div class="p-4 sm:p-7">
            <div class="text-center">
                <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Authorize {{ $client->name }}</h1>
                <p class="text-center mt-4"><strong>{{ $client->name }}</strong> is requesting permission to access your
                    account.</p>
            </div>

            <div class="mt-5">
                <!-- Form -->
                <div class="flex gap-x-2" class="w-full">
                    <!-- Cancel Button -->
                    <form method="post" action="{{ route('passport.authorizations.deny') }}">
                        @csrf
                        @method('DELETE')

                        <input type="hidden" name="state" value="{{ $request->state }}">
                        <input type="hidden" name="client_id" value="{{ $client->getKey() }}">
                        <input type="hidden" name="auth_token" value="{{ $authToken }}">
                        <button
                            class="w-full justify-center py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">Cancel</button>
                    </form>
                    <!-- Authorize Button -->
                    <form method="post" action="{{ route('passport.authorizations.approve') }}" class="w-full">
                        @csrf

                        <input type="hidden" name="state" value="{{ $request->state }}">
                        <input type="hidden" name="client_id" value="{{ $client->getKey() }}">
                        <input type="hidden" name="auth_token" value="{{ $authToken }}">
                        <button type="submit"
                            class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Authorize</button>
                    </form>
                </div>
                <!-- End Form -->
            </div>
        </div>
    </div>
</body>

</html>

