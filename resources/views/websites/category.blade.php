<h2>Category</h2>
<ul>
    @foreach ($datas as $item)
         <li><a href="#"> {{ $item->name }}</a></li>
         <div>
             
         </div> 
    @endforeach
   
</ul>