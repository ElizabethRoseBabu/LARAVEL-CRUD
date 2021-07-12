
<form method="get" action="addstock" >

<div class="container">
    <div class="row">
        <div class="col-md-5">
            <h1>Purchase Details</h1>
            <hr>
            Shop Name: <select name="name" >
                @foreach($users as $shname)
                    <option>{{ $shname->name}}</option>
                @endforeach
            </select><br><br>
            Product: <select name="product" >
                @foreach($oname as $sname)
                    <option >{{ $sname->product}}</option>
                @endforeach
            </select><br><br>
            Stock:<input type="text" name="stock"><br><br>
        </div>
    </div>
</div>
<input type="submit" name="submit" value="submit"> 
</form>
<a href="view">View List</a> 
