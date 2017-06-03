<h1>Hello Maker</h1>

<form action="/hello" method="POST">
    {{ csrf_field() }}
    <input type="text" name="name" value="">
    <button type="submit">Enviar</button>
</form>