
    <title>Laravel Assignment</title>

    <style>
    



.home p {
  font-size: 16px;
  color: #333;
  line-height: 1.6;
  margin:20px;
  padding:20px;
}

    </style>

<body>
    @include('pages.header')

<div>
<h1>Welcome ,{{$name}}</h1>
</div>

<div class="home">
<p><b>"I have two pages: one is the footer and the other is the header, which I included in the welcome file using(include).
In the Laravel assignment, I passed data to the route using dynamic data.
I also used another method to pass dynamic data to the route where after /about/any-name the page is shown."</b></p>
    </div>

@include('pages.footer')
</body>


