@extends('layouts.app')
@section('title', 'Blog')
@section('content')
<div class="container bg-light bg-gradient shadow">
  
  <div class="p-4 p-md-5 mb-4 text-white rounded featured" style="background-image:url('https://lorempixel.com/1200/450');">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">BOOTSTRAP <span class="text-success">5</span> alpha</h1>
      <p class="lead my-3">This page is an advanced example of the original Bootstrap 5 alpha Blog-Template. Feel free to use it for your next blog theme.</p>
      <p class="lead mb-0">
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">World</strong>
          <h3 class="mb-0">Featured post</h3>
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="https://lorempixel.com/200/250?f=23f" width="200" height="250">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Design</strong>
          <h3 class="mb-0">Post title</h3>
          <div class="mb-1 text-muted">Nov 11</div>
          <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="https://lorempixel.com/200/250" width="200" height="250">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">World</strong>
          <h3 class="mb-0">Featured post</h3>
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="https://lorempixel.com/200/250?f=23f" width="200" height="250">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Design</strong>
          <h3 class="mb-0">Post title</h3>
          <div class="mb-1 text-muted">Nov 11</div>
          <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="https://lorempixel.com/200/250" width="200" height="250">
        </div>
      </div>
    </div>
  </div>
</div>

<main class="container bg-light py-4">
  <div class="row">
    <div class="col-md-8 px-4">
      <h3 class="pb-4 mb-4 font-italic border-bottom">
        From the Firehose
      </h3>

      <div class="blog-post">
        <h2 class="blog-post-title">Sample blog post</h2>
        <p class="blog-post-meta">January 1, 2014 by <a href="#" class="link-success">Mark</a></p>

        <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
        <hr>
        <p>Cum sociis natoque penatibus et magnis <a href="#" class="link-success">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
        <blockquote>
          <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        </blockquote>
        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
        <h2>Heading</h2>
        <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
        <h3>Sub-heading</h3>
        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        <pre><code>Example code block</code></pre>
        <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
        <h3>Sub-heading</h3>
        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <ul>
          <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
          <li>Donec id elit non mi porta gravida at eget metus.</li>
          <li>Nulla vitae elit libero, a pharetra augue.</li>
        </ul>
        <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
        <ol>
          <li>Vestibulum id ligula porta felis euismod semper.</li>
          <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
          <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
        </ol>
        <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
      </div><!-- /.blog-post -->

      <div class="blog-post">
        <h2 class="blog-post-title">Another blog post</h2>
        <p class="blog-post-meta">December 23, 2013 by <a href="#" class="link-success">Jacob</a></p>

        <p>Cum sociis natoque penatibus et magnis <a href="#" class="link-success">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
        <blockquote>
          <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        </blockquote>
        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
        <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
      </div><!-- /.blog-post -->

      <div class="blog-post">
        <h2 class="blog-post-title">New feature</h2>
        <p class="blog-post-meta">December 14, 2013 by <a href="#" class="link-success">Chris</a></p>

        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <ul>
          <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
          <li>Donec id elit non mi porta gravida at eget metus.</li>
          <li>Nulla vitae elit libero, a pharetra augue.</li>
        </ul>
        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
        <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
      </div><!-- /.blog-post -->

      <nav class="blog-pagination">
        <a class="btn btn-success" href="#">Older</a>
        <a class="btn btn-outline-success disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
      </nav>

    </div>

    <aside class="col-md-4">
      
      <div class="p-4 mb-3 bg-success text-white rounded shadow-sm">
        <h4 class="font-italic">About <span class="badge rounded-pill bg-warning">HOW COOL!</span></h4>
        <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
      </div>
      
      <div class="p-4">
        <h4 class="font-italic">Archives</h4>
        <ol class="list-group mb-0">
          <li class="list-group-item d-flex justify-content-between align-items-center"><a href="#" class="link-success">March 2014</a><span class="badge bg-dark rounded-pill">344</span></li>
          <li class="list-group-item d-flex justify-content-between align-items-center"><a href="#" class="link-success">February 2014</a><span class="badge bg-success rounded-pill">435</span></li>
          <li class="list-group-item d-flex justify-content-between align-items-center"><a href="#" class="link-success">January 2014</a><span class="badge bg-success rounded-pill">334</span></li>
          <li class="list-group-item d-flex justify-content-between align-items-center"><a href="#" class="link-success">December 2013</a><span class="badge bg-success rounded-pill">355</span></li>
          <li class="list-group-item d-flex justify-content-between align-items-center"><a href="#" class="link-success">November 2013</a><span class="badge bg-success rounded-pill">123</span></li>
          <li class="list-group-item d-flex justify-content-between align-items-center"><a href="#" class="link-success">October 2013</a><span class="badge bg-success rounded-pill">432</span></li>
          <li class="list-group-item d-flex justify-content-between align-items-center"><a href="#" class="link-success">September 2013</a><span class="badge bg-success rounded-pill">456</span></li>
          <li class="list-group-item d-flex justify-content-between align-items-center"><a href="#" class="link-success">August 2013</a><span class="badge bg-success rounded-pill">345</span></li>
          <li class="list-group-item d-flex justify-content-between align-items-center"><a href="#" class="link-success">July 2013</a><span class="badge bg-success rounded-pill">124</span></li>
          <li class="list-group-item d-flex justify-content-between align-items-center"><a href="#" class="link-success">June 2013</a><span class="badge bg-success rounded-pill">246</span></li>
          <li class="list-group-item d-flex justify-content-between align-items-center"><a href="#" class="link-success">May 2013</a><span class="badge bg-success rounded-pill">234</span></li>
          <li class="list-group-item d-flex justify-content-between align-items-center"><a href="#" class="link-success">April 2013</a><span class="badge bg-success rounded-pill">235</span></li>
        </ol>
      </div>

      <div class="p-4">
        <h4 class="font-italic">Elsewhere</h4>
        <ol class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-center"><a href="#" class="link-success">GitHub</a></li>
          <li class="list-group-item d-flex justify-content-between align-items-center"><a href="#" class="link-success">Twitter</a></li>
          <li class="list-group-item d-flex justify-content-between align-items-center"><a href="#" class="link-success">Facebook</a></li>
        </ol>
      </div>
     
      
      <div class="card text-center sticky-top">
        <div class="card-header">
          Featured
        </div>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-success">Go somewhere</a>
        </div>
        <div class="card-footer text-muted">
          2 days ago
        </div>
      </div>
      
    </aside>

  </div><!-- /.row -->

</main><!-- /.container -->

<footer class="blog-footer">
  <p>Blog template built for <a href="https://getbootstrap.com/" class="link-success">Bootstrap</a> by <a href="https://twitter.com/mdo" class="link-success">@mdo</a>. Modified by <a href="https://simon-koehler.com/en" class="link-success">Simon Köhler, Freelancer</a></p>
  <p>
    <a href="#" class="link-success">Back to top</a>
  </p>
</footer>

@endsection