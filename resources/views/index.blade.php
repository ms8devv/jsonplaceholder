<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    
    <title>Document</title>

</head>
<body>
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mx-md-5 ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">ms8dev</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('index')}}">صفحه اصلی</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('contact')}}">ارتباط با ما</a>
              </li>
            
            </ul>
            <a class="navbar-brand" href="#">JSONplaceholder</a>
          </div>
          
        </div>
      </nav>
      
    <div class="container">
      <div class="row w-100 mt-3" >

        <div class="col-md-6 text-center mt-5">
          <p class="header-text-en">
            JSONplaceholder
          </p>
          <p class="header-text">
            ارائه <span class="text-primary">API</span>  ساختگی برای تست ارتباط بین کلاینت و سرور
          </p>
        </div>

        <div class="row col-md-6">
          <img src="img/An-Introduction-to-JSON.jpg" alt="JSON">
        </div>
      </div>

      <p class="mt-5 description mx-5">
        این api ها قابلیت انجام تمامی عملیات های چهارگانه ارتباط با دیتابیس را با استفاده از مهمترین متد های Http یعنی <span class="text-primary">GET</span>  ,<span class="text-primary">POST</span>  , <span class="text-primary">PUT</span>  ,<span class="text-primary">PATCH</span>  و <span class="text-primary">DELETE</span>  را دارند و شما میتوانید برای تست ارتباط اپلیکیشن های خود با سرور به راحتی از آنها استفاده کنید.      </p>

      <div class="content mt-5 mx-md-5 px-lg-5 ">
        <h2 >کاربران</h2>
        <hr class="bg-light">
        <ul class=" mx-md-3">
          <li class=" ">گرفتن همه کاربران</li>
            <div class="row ">
              <span class="col-lg-6 text-end mt-2 mb-2">
                <p class="d-inline   text-gray">Method : </p>
                <p class="d-inline   ">GET</p>
              </span>
              <span class="col-lg-6 text-end mt-2 mb-2">
                <p class="d-inline   text-gray">Url : </p>
                
                <a class="d-inline" target="_blank" href="http://jsonplaceholder.ms8dev.ir/users" >http://jsonplaceholder.ms8dev.ir/users</a>
              </span>
            </div>

            <li class=" ">گرفتن کاربر براساس id</li>
            <div class="row ">
              <span class="col-lg-6 text-end mt-2 mb-2">
                <p class="d-inline   text-gray">Method : </p>
                <p class="d-inline   ">GET</p>
              </span>
              <span class="col-lg-6 text-end mt-2 mb-2">
                <p class="d-inline   text-gray">Url : </p>
                <a class="d-inline" target="_blank" href="http://jsonplaceholder.ms8dev.ir/posts/1">http://jsonplaceholder.ms8dev.ir/users/1</a>
              </span>
            </div>

            <li class=" ">حذف یک کاربر</li>
            <div class="row ">
              <span class="col-lg-6 text-end mt-2 mb-2">
                <p class="d-inline   text-gray">Method : </p>
                <p class="d-inline   ">DELETE</p>
              </span>
              <span class="col-lg-6 text-end mt-2 mb-2">
                <p class="d-inline   text-gray">Url : </p>
                <a class="d-inline " target="_blank" href="http://jsonplaceholder.ms8dev.ir/posts/1">http://jsonplaceholder.ms8dev.ir/users/1</a>
              </span>
            </div>


            <li class=" ">ثبت نام یک کاربر</li>
            <div class="row ">
              <span class="col-lg-6 text-end mt-2 mb-2">
                <p class="d-inline   text-gray">Method : </p>
                <p class="d-inline  ">POST</p>
              </span>
              <span class="col-lg-6 text-end mt-2 mb-2">
                <p class="d-inline   text-gray">Url : </p>
                <a class="d-inline" target="_blank" href="http://jsonplaceholder.ms8dev.ir/posts">http://jsonplaceholder.ms8dev.ir/user/register</a>
              </span>
              <span class="text-end mt-2 mb-2">
                <p class="d-inline   text-gray">Params : </p>
                <p class="d-inline  ">name , email , password </p>
              </span>
            </div>

            <li class=" ">لاگین کردن کاربر</li>
            <div class="row ">
              <span class="col-lg-6 text-end mt-2 mb-2">
                <p class="d-inline   text-gray">Method : </p>
                <p class="d-inline  ">POST</p>
              </span>
              <span class="col-lg-6 text-end mt-2 mb-2">
                <p class="d-inline   text-gray">Url : </p>
                <a class="d-inline" target="_blank" href="http://jsonplaceholder.ms8dev.ir/posts">http://jsonplaceholder.ms8dev.ir/user/login</a>
              </span>
              <span class="col-lg-6 mt-2 mb-2 text-end">
                <p class="d-inline   text-gray">password : </p>
                <p class="d-inline  "> password </p>
              </span>
              <span class="col-lg-6 text-end mt-2 mb-2 ">
                <p class="d-inline   text-gray">Params : </p>
                <p class="d-inline  "> email , password </p>
              </span>
            </div>


        </ul>
      </div>

      
      <div class="content mt-5 mx-md-5 px-lg-5">
        <h2 >پست ها</h2>
        <hr class="bg-light">
        <ul class="mt-5  mx-3">
          <li class="">گرفتن همه پست ها</li>
            <div class="row mt-2 mb-2">
              <span class="col-lg-6 text-end">
                <p class="d-inline   text-gray">Method : </p>
                <p class="d-inline   ">GET</p>
              </span>
              <span class="col-lg-6 text-end">
                <p class="d-inline   text-gray">Url : </p>
                <a class="d-inline" target="_blank" href="http://jsonplaceholder.ms8dev.ir/posts">http://jsonplaceholder.ms8dev.ir/posts</a>
              </span>
            </div>

            <li class="">گرفتن پست براساس id</li>
            <div class="row ">
              <span class="col-lg-6 text-end mt-2 mb-2">
                <p class="d-inline   text-gray">Method : </p>
                <p class="d-inline   ">GET</p>
              </span>
              <span class="col-lg-6 text-end mt-2 mb-2">
                <p class="d-inline   text-gray">Url : </p>
                <a class="d-inline " target="_blank" href="http://jsonplaceholder.ms8dev.ir/posts/1">http://jsonplaceholder.ms8dev.ir/posts/1</a>
              </span>
            </div>

            <li class="">ایجاد یک پست</li>
            <div class="row ">
              <span class="col-lg-6 text-end mt-2 mb-2">
                <p class="d-inline   text-gray">Method : </p>
                <p class="d-inline   ">POST</p>
              </span>
              <span class="col-lg-6 text-end mt-2 mb-2">
                <p class="d-inline   text-gray">Url : </p>
                <a class="d-inline" target="_blank" href="http://jsonplaceholder.ms8dev.ir/posts">http://jsonplaceholder.ms8dev.ir/posts</a>
              </span>
              <span class="text-end mt-2 mb-2">
                <p class="d-inline   text-gray">Params : </p>
                <p class="d-inline  ">title , body , user_id , category_id</p>
              </span>
            </div>

            <li class="">ویرایش یک پست</li>
            <div class="row ">
              <span class="col-lg-6 text-end mt-2 mb-2">
                <p class="d-inline   text-gray">Method : </p>
                <p class="d-inline   ">PUT or PATCH</p>
              </span>
              <span class="col-lg-6 text-end mt-2 mb-2">
                <p class="d-inline   text-gray">Url : </p>
                <a class="d-inline" target="_blank" href="http://jsonplaceholder.ms8dev.ir/posts/1">http://jsonplaceholder.ms8dev.ir/posts/1</a>
              </span>
              <span class="text-end mt-2 mb-2">
                <p class="d-inline   text-gray">Params : </p>
                <p class="d-inline  ">title , body</p>
              </span>
            </div>

            <li class="">حذف یک پست</li>
            <div class="row ">
              <span class="col-lg-6 text-end mt-2 mb-2">
                <p class="d-inline   text-gray">Method : </p>
                <p class="d-inline   ">DELETE</p>
              </span>
              <span class="col-lg-6 text-end mt-2 mb-2">
                <p class="d-inline   text-gray">Url : </p>
                <a class="d-inline" target="_blank" href="http://jsonplaceholder.ms8dev.ir/posts/1">http://jsonplaceholder.ms8dev.ir/posts/1</a>
              </span>
            </div>
        </ul>
      </div>

      <div class="content mt-5 mx-md-5 px-lg-5">
        <h2 >کامنت ها</h2>
        <hr class="bg-light">
        <ul class="mt-5  mx-3">
          <li class=" ">گرفتن همه کامنت ها</li>
            <div class="row mt-2 mb-2">
              <span class="col-lg-6 text-end">
                <p class="d-inline   text-gray">Method : </p>
                <p class="d-inline   ">GET</p>
              </span>
              <span class="col-lg-6 text-end">
                <p class="d-inline   text-gray">Url : </p>
                <a class="d-inline" target="_blank" href="http://jsonplaceholder.ms8dev.ir/comments">http://jsonplaceholder.ms8dev.ir/comments</a>
              </span>
            </div>

            <li class=" ">گرفتن کامنت براساس id</li>
            <div class="row ">
              <span class="col-lg-6 text-end mt-2 mb-2">
                <p class="d-inline   text-gray">Method : </p>
                <p class="d-inline   ">GET</p>
              </span>
              <span class="col-lg-6 text-end mt-2 mb-2">
                <p class="d-inline   text-gray">Url : </p>
                <a class="d-inline " target="_blank" href="http://jsonplaceholder.ms8dev.ir/comments/1">http://jsonplaceholder.ms8dev.ir/comments/1</a>
              </span>
            </div>

            <li class=" ">ایجاد یک کامنت</li>
            <div class="row ">
              <span class="col-lg-6 text-end mt-2 mb-2">
                <p class="d-inline   text-gray">Method : </p>
                <p class="d-inline   ">POST</p>
              </span>
              <span class="col-lg-6 text-end mt-2 mb-2">
                <p class="d-inline   text-gray">Url : </p>
                <a class="d-inline" target="_blank" href="http://jsonplaceholder.ms8dev.ir/comments">http://jsonplaceholder.ms8dev.ir/comments</a>
              </span>
              <span class="text-end mt-2 mb-2">
                <p class="d-inline   text-gray">Params : </p>
                <p class="d-inline  ">comment , user_id , post_id</p>
              </span>
            </div>

            <li class=" ">ویرایش یک کامنت</li>
            <div class="row ">
              <span class="col-lg-6 text-end mt-2 mb-2">
                <p class="d-inline   text-gray">Method : </p>
                <p class="d-inline   ">POST</p>
              </span>
              <span class="col-lg-6 text-end mt-2 mb-2">
                <p class="d-inline   text-gray">Url : </p>
                <a class="d-inline" target="_blank" href="http://jsonplaceholder.ms8dev.ir/comments/1">http://jsonplaceholder.ms8dev.ir/comments/1</a>
              </span>
              <span class="text-end mt-2 mb-2">
                <p class="d-inline   text-gray">Params : </p>
                <p class="d-inline  ">comment</p>
              </span>
            </div>

            <li class=" ">حذف یک کامنت</li>
            <div class="row ">
              <span class="col-lg-6 text-end mt-2 mb-2">
                <p class="d-inline   text-gray">Method : </p>
                <p class="d-inline">DELETE</p>
              </span>
              <span class="col-lg-6 text-end mt-2 mb-2">
                <p class="d-inline   text-gray">Url : </p>
                <a class="d-inline" target="_blank" href="http://jsonplaceholder.ms8dev.ir/comments/1">http://jsonplaceholder.ms8dev.ir/comments/1</a>
              </span>
            </div>
        </ul>
      </div>

      <div class="content mt-5 mx-md-5 px-lg-5 pb-5">
        <h2 >دسته بندی ها</h2>
        <hr class="bg-light">
        <ul class="mt-5  mx-3">
          <li class=" ">گرفتن همه دسته بندی ها</li>
            <div class="row mt-2 mb-2">
              <span class="col-lg-6 text-end">
                <p class="d-inline   text-gray">Method : </p>
                <p class="d-inline   ">GET</p>
              </span>
              <span class="col-lg-6 text-end">
                <p class="d-inline   text-gray">Url : </p>
                <a class="d-inline " target="_blank" href="http://jsonplaceholder.ms8dev.ir/categories">http://jsonplaceholder.ms8dev.ir/categories</a>
              </span>
            </div>

            <li class=" ">گرفتن دسته بندی براساس id</li>
            <div class="row ">
              <span class="col-lg-6 text-end mt-2 mb-2">
                <p class="d-inline   text-gray">Method : </p>
                <p class="d-inline   ">GET</p>
              </span>
              <span class="col-lg-6 text-end mt-2 mb-2">
                <p class="d-inline   text-gray">Url : </p>
                <a class="d-inline" target="_blank" href="http://jsonplaceholder.ms8dev.ir/categories/1">http://jsonplaceholder.ms8dev.ir/categories/1</a>
              </span>
            </div>
          </div>
        </ul>
      </div>

      <hr class="mt-5">
      <footer class="pt-5 pb-5 " >

        <div class="text-center mt-5 ">
          <p class="text-center" >با من در ارتباط باشید</p>
        </div>
        <div class="text-center socials "> 
          <a href="https://www.instagram.com/ms8dev" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          <a href="https://tt.linkedin.com/in/ms8dev" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          <a href="https://t.me/ms8dev" target="_blank"><i class="fa fa-telegram" aria-hidden="true"></i></a>
          <a href="https://github.com/ms8devv" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
          
          
          
          
        </div>

      </footer>
    </div>


    <script src="{{url('js/bootstrap.bundle.min.js')}}"></script>


</body>
</html>