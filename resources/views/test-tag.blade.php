<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Tagify - pupetteer tests</title>
        <meta name="description" content="Converts HTML input/textarea into Tags component">
        <meta name="author" content="Yair Even-Or">

        <link rel="stylesheet" href="{{ url('css/tagify/tagify.css') }}">

        <script src="{{ url('css/tagify/tagify.js') }}"></script>
    </head>
<body>
    <form action="/post-tag" method="POST">
        @csrf
        <section id="section-extra-properties">
            <input class='countries' name='tag' placeholder="Try to add tags from the list">
        </section>
        <button type="submit">submit</button>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.js"></script>
    <script data-name="extra-properties"> 
        var input = document.querySelector('input[name=tag]'),
        tagify = new Tagify(input, {
            whitelist: @json($data),
            enforceWhitelist: true,
        });
        tagify.addTags(@json($myTag));
        
        tagify.on('add', function(e){
            console.log(e.detail)
        });

    </script>
</body>
</html>