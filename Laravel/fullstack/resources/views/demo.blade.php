<!-- <h1>Laravel</h1> -->
<!-- 
<h2>{{$name}}</h2>

<h2>{{$id}}</h2> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
    <!-- @if($name=="")
        {{"name is empty"}}
    
    @elseif($name=="Junaid")
        {{"Name is Correct"}}
    @else
        {{"Name is Incorrect"}}
    @endif -->
<!-- 
    @unless ($name=='Junaid')
        The name is Incorrect
    @endunless -->

    <!-- @isset($name)

    welcome {{$name}}
    @endisset -->
    
    @for($i=0;$i<=10;$i++)
      <h2>  {{$i}} </h2>

    @endfor
    @php   $i=0   @endphp
    @while($i<=10)
    <h2> {{$i}}  </h2>

    @php $i++ @endphp
    @endwhile
</body>
</html>