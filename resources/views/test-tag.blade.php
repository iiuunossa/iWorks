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
        <section id='section-basic'>
            <input name='tags' class='some_class_name' placeholder='write some tags'>
        </section>
    </form>
<script data-name="basic">
(function(){

var input = document.querySelector('input[name=tags]');

    // init Tagify script on the above inputs
window.tagify__basic = new Tagify(input, {
        whitelist : ["A# .NET", "A# (Axiom)", "A-0 System", "A+", "A++", "ABAP", "ABC", "ABC ALGOL", "ABSET", "ABSYS", "ACC", "Accent", "Ace DASL", "ACL2", "Avicsoft", "ACT-III", "Action!", "ActionScript", "Ada", "Adenine", "Agda", "Agilent VEE", "Agora", "AIMMS", "Alef", "ALF", "ALGOL 58", "ALGOL 60", "ALGOL 68", "ALGOL W", "Alice", "Alma-0", "AmbientTalk", "Amiga E", "AMOS", "AMPL", "Apex (Salesforce.com)", "APL", "AppleScript", "Arc", "ARexx", "Argus", "AspectJ", "Assembly language", "ATS", "Ateji PX", "AutoHotkey", "Autocoder", "AutoIt", "AutoLISP / Visual LISP", "Averest", "AWK", "Axum", "Active Server Pages", "ASP.NET", "B", "Babbage", "Bash", "BASIC", "bc", "BCPL", "BeanShell", "Batch (Windows/Dos)", "Bertrand", "BETA", "Bigwig", "Bistro", "BitC", "BLISS", "Blockly", "BlooP", "Blue", "Boo", "Boomerang", "Bourne shell (including bash and ksh)", "BREW", "BPEL", "B", "C--", "C++ – ISO/IEC 14882", "C# – ISO/IEC 23270", "C/AL", "Caché ObjectScript", "C Shell", "Caml", "Cayenne", "CDuce", "Cecil", "Cesil", "Céu", "Ceylon", "CFEngine", "CFML", "Cg", "Ch", "Chapel", "Charity", "Charm", "Chef", "CHILL", "CHIP-8", "chomski", "ChucK", "CICS", "Cilk", "Citrine (programming language)", "CL (IBM)", "Claire", "Clarion", "Clean", "Clipper", "CLIPS", "CLIST", "Clojure", "CLU", "CMS-2", "COBOL – ISO/IEC 1989", "CobolScript – COBOL Scripting language", "Cobra", "CODE", "CoffeeScript", "ColdFusion", "COMAL", "Combined Programming Language (CPL)", "COMIT", "Common Intermediate Language (CIL)", "Common Lisp (also known as CL)", "COMPASS", "Component Pascal", "Constraint Handling Rules (CHR)", "COMTRAN", "Converge", "Cool", "Coq", "Coral 66", "Corn", "CorVision", "COWSEL", "CPL", "CPL", "Cryptol", "csh", "Csound", "CSP", "CUDA", "Curl", "Curry", "Cybil", "Cyclone", "Cython", "Java", "Javascript", "M2001", "M4", "M#", "Machine code", "MAD (Michigan Algorithm Decoder)", "MAD/I", "Magik", "Magma", "make", "Maple", "MAPPER now part of BIS", "MARK-IV now VISION:BUILDER", "Mary", "MASM Microsoft Assembly x86", "MATH-MATIC", "Mathematica", "MATLAB", "Maxima (see also Macsyma)", "Max (Max Msp – Graphical Programming Environment)", "Maya (MEL)", "MDL", "Mercury", "Mesa", "Metafont", "Microcode", "MicroScript", "MIIS", "Milk (programming language)", "MIMIC", "Mirah", "Miranda", "MIVA Script", "ML", "Model 204", "Modelica", "Modula", "Modula-2", "Modula-3", "Mohol", "MOO", "Mortran", "Mouse", "MPD", "Mathcad", "MSIL – deprecated name for CIL", "MSL", "MUMPS", "Mystic Programming L"],
        blacklist : [".NET", "PHP"], // <-- passed as an attribute in this demo
        dropdown : {
            classname: "basicDropdown"
        }
    })


// Chainable event listeners
tagify__basic
    .on('add', onAddTag)
    .on('remove', onRemoveTag)
    .on('input', onInput)
    .on('edit', onTagEdit)
    .on('invalid', onInvalidTag)
    .on('click', onTagClick)
    .on('dropdown:show', onDropdownShow)
    .on('dropdown:hide', onDropdownHide)

// tag added callback
function onAddTag(e){
    console.log("onAddTag: ", e.detail);
    console.log("original input value: ", input.value)
    tagify__basic.off('add', onAddTag) // exmaple of removing a custom Tagify event
}

// tag remvoed callback
function onRemoveTag(e){
    console.log(e.detail);
    console.log("tagify instance value:", tagify__basic.value)
}

// on character(s) added/removed (user is typing/deleting)
function onInput(e){
    console.log(e.detail);
    console.log("onInput: ", e.detail);
}

function onTagEdit(e){
    console.log("onTagEdit: ", e.detail);
}

// invalid tag added callback
function onInvalidTag(e){
    console.log("onInvalidTag: ", e.detail);
}

// invalid tag added callback
function onTagClick(e){
    console.log(e.detail);
    console.log("onTagClick: ", e.detail);
}

function onDropdownShow(e){
    console.log("onDropdownShow: ", e.detail)
}

function onDropdownHide(e){
    console.log("onDropdownHide: ", e.detail)
}

})()
</script>
</body>
</html>