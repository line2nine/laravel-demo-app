<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('css/product.css')}}">
    <title>Product Discount Calculator</title>
</head>
<body>
<div class="wrapper">
    <form action="/result" method="post">
        @csrf
        <h1>Product Discount Calculator</h1>
        <div class="group">
            <input type="text" required="required" name="product"/><span class="highlight"></span><span class="bar"></span>
            <label>Product Name:</label>
        </div>
        <div class="group">
            <input type="text" required="required" name="price"/><span class="highlight"></span><span class="bar"></span>
            <label>Price:</label>
        </div>
        <div class="group">
            <input type="text" required="required" name="discount"/><span class="highlight"></span><span class="bar"></span>
            <label>Discount:</label>
        </div>
        <div class="btn-box">
            <button class="btn btn-submit" type="submit">submit</button>
            <button class="btn btn-cancel" type="button">cancel</button>
            <h5><span class="emoji">&#x1F609;</span></h5>
        </div>
    </form>
</div>
{{--<div class="container">--}}
{{--    <div class="col-12 col-md-6">--}}
{{--        <form method="post" action="/result">--}}
{{--            @csrf--}}
{{--            <div class="form-group">--}}
{{--                <h2>Product Discount Calculator</h2>--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label>Product Name:</label>--}}
{{--                <input type="text" name="product" class="form-control" placeholder="Ex: Samsung Galaxy Note 10">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label>Price</label>--}}
{{--                <input type="text" name="price" class="form-control" placeholder="$">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label>Discount Percent</label>--}}
{{--                <input type="text" name="discount" class="form-control" placeholder="%">--}}
{{--            </div>--}}
{{--            <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--</div>--}}
</body>
</html>
