<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Naming Conventions</title>
    <style>
        h1,h2,h3,h4,p {
            font-family: sans-serif;
        }
        pre {
            background: #333333;
            color: #fff;
            padding: 2em 1em;
        }
    </style>
</head>
<body>

<h1>Naming Conventions</h1>

<p>This document serves the purpose to make to anybody who works on the bendenprojects the coding-style transparent.</p>

<p>A consistent coding-style is the key to readability.</p>

<h2>Tabs vs. Spaces</h2>
<p>We use tabs to indent the code. There is no need to press four times blank, when you simply can press one time tab.</p>
<p>Besides that: Teach your IDE to use tabs instead of blanks.</p>

<h2>If Statements</h2>
<p>When possible use this notation:</p>
<pre>
    $s = ($foo > 1) ? 'bar' : '';
</pre>

<p>If the line would get to long:</p>

<pre>
    $s = ($foo > 1)
        ? $this->VeryLongFunctionNameThatIsUsedInRareOcassions($parameter)
        : 'bar'
    ;
</pre>

<p>In case you absolutely need to make make than one statement in an if or else case:</p>

<pre>
    if ($foo < $bar->length()) {
        $this->DoSomething($foo);
        $i++;
    } else {
        ...
    }
</pre>

<p>For a full if/ifelse/else statement use this syntax:</p>

<pre>
    if ($foo < $bar->length()) {
        $this->DoSomething($foo);
        $i++;
    } elseif ($foo < 1000) {
        ...
    } else {
        ...
    }
</pre>

<h2>Loops</h2>
<p>The most used loop for us is the <em>for</em> or <em>foreach</em> loop:</p>

<pre>
    foreach ($l as $item) {
        $ret .= $this->RenderItem($item);
    }

    for ($i=0; $i < count($array); $i++) {
        ...
    }
</pre>

<h2>Functions</h2>

<p>Functions start with one line</p>

<pre>
    public static function (int $descriptiveName, string $descriptiveNameForTheString) : returnType {
        // leave this line blank.
        $ret = ''; // But the return var in the first line; The return var is always $ret
        // Blank line
        ...

        // Blank line
        return $ret;
    }
</pre>

<h3>Function-names</h3>

<p>Function-names start with a UpperCase and use camelcase to word-separation.</p>

<pre>
    function RenderSomeStuffYouOnlyNeedInThisClass() {
        ...
    }
</pre>

<h3>Getter and setter</h3>
<p>For a reason I can not explain, getter and setter look ugly to me, when started with a uppercase, so getter and setter should start lowercase.</p>

<pre>
    function getPrice() {
        ...
    }

    function setName(string $Value) {
        ...
    }
</pre>

<h3>Variable-Names</h3>

<p>When used in a small scope, than variable names should be as short as possible.</p>

<pre>
    private function Bar(int $id) : string {

        $p = ProductFactory::getByID($id);
        return $p->getPrice();
    
    }
</pre>

<p>$p is only one char long.</p>

<h3>Types</h3>
<p>Since PHP 7.0 the parameter types and return types are fully supported. Use this when ever possible.</p>

<p>Example:</p>

<pre>
    private function Bar(int $id) : string {

        $p = ProductFactory::getByID($id);
        return $p->getPrice();
    
    }
</pre>

<p>The benefit is that you can avoid the need to create a lot of type-checks.</p>

<h2>Classes</h2>

<p>Classes should follow a certain build-up.</p>

<p>First come the vars, than the constructor, than the public functions and then the protected or private functions.</p>

<pre>

Namespace Core;

class InvoiceRenderer {

    var $Invoice;

    function __construct(\oInvoice $Invoice) {
        $this->Invoice = $Invoice;
    }

    public function Render() {
        return
            $this->RenderHead()
            ...
            . $this->RenderFoot()
        ;
    }

        protected function RenderHead() {
            ...
        }

        ...

        private function RenderFoot() {
            ...
        }
}
</pre>

<p>In some classes the hungarian notation is used for the var-names. The internal used vars like for example mTable have a leading <em>m</em> indicates, that the var contains something, that the class needs to function.</p>
<p>The vars that have a leading small <em>d</em> indicates that the var is a datatype. It usually contains data from a MySQL data cell.</p>
<p>Declare first the mVars and then the dVars.</p>

<pre>
class oVideo {

    var $mTable;

    var $dVideoID;
    var $dPlattform;

    ...
}
</pre>

</body>
</html>
