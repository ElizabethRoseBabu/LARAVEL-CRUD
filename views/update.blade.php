<!DOCTYPE html>
<html>
<head>
    <title>
    
    </title>
    <style>
input{
    padding:10px;
    margin:20px;
    }
    </style>
</head>
<body>


    <form method="get" action="{{url('updatestock')}}">
    <h1>Purchase Details</h1>
           
            <input type="hidden" name="id"  value={{$updata->id}}>
            Shop: <input type="text" name="name"  value={{$updata->name}}><br><br>
            Product: <input type="text" name="product"  value={{$updata->product}}><br><br>
            Stock:<input type="text" name="stock"  value={{$updata->stock}}><br><br>
            <input type="submit" name="submit" value="submit"> <br>

            <a href="view">View List</a>
    
    </form>


</body>
</html>