<!DOCTYPE html>
<html>
<head>
    <title>
    
    </title>
    
</head>
<body>
<table border=1>

<thead>
   <tr>
   <th >Shop Name</th>
   <th>Product</th>
   <th>Stock</th>
   
   <th colspan="2">Action</th>

   </tr>
</thead>
 <tbody>
   @foreach($data as $value)
       <tr>
       <td>{{$value->name}}</td>
       <td>{{$value->product}}</td>
       <td>{{$value->stock}}</td>

       <td><a href={{"update/".$value->id}}>Edit</a></td>
       <td><a href={{"delete/".$value->id}}>Delete</a></td>
       </tr>

   @endforeach
 </tbody>
 
</table>
</div>
<div>
{{$data->links()}}

<style>
 .page-item{
     display:inline-block;
     padding:10px;
 }
 </style>
   </div>
   <a href="stock">Home </a> 
</body>
</html>