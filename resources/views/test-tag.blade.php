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
    <form>
        <section id="section-extra-properties">
            <input class='countries' name='tags3-1' placeholder="Try to add tags from the list">
        </section>

    </form>
    <script data-name="extra-properties">
        (function(){
            var tagify = new Tagify(document.querySelector('input[name=tags3-1]'), {
            enforceWhitelist : true,
            whitelist : [
              { value:'Development', code:'Dev' },
              { value:'Maintain', code:'MA' },
              { value:'Rebed', code:'RB' },
              { value:'Consult', code:'CS' },
              { value:'Hang out', code:'HO' },
            ],
            dropdown : {
                enabled: 1,
                classname : 'extra-properties'
            }
        })
        
        tagify.on('click', function(e){
            console.log(e.detail);
        });
        
        tagify.on('remove', function(e){
            console.log(e.detail);
        });
        
        tagify.on('add', function(e){
            console.log( "original Input:", tagify.DOM.originalInput);
            console.log( "original Input's value:", tagify.DOM.originalInput.value);
            console.log( "event detail:", e.detail);
        });
        
        // add the first 2 tags from the "allowedTags" Aray automatically
        // tagify.addTags(tagify.settings.whitelist.slice(0,2));
        
        })()
    </script>
        
</body>
</html>