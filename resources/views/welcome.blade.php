<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insurance Form</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>

        <v-app id="app">
            <insurance-form></insurance-form>
        </v-app>

</body>
<script>
    var relative_url = '{{url('/')}}';
    var global_lang = 'pl';
</script>
<script src="{{ mix('/js/app.js') }}" defer></script>
</html>
