<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>ログイン</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    <script src="dist/js/bootstrap.bundle.min.js"></script>
    <script src="form-validation.js"></script>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .red{
        color: red;
      }
    </style>
    <link href="form-validation.css" rel="stylesheet">
    <?php
      if(isset($_POST['entryplan'])){
        $Product_name = "エントリープラン";
        $Product_value = 5200;
        $Sum_value = $Product_value+1000;
      }
      elseif(isset($_POST['multiplan'])){
        $Product_name = "多機能プラン";
        $Product_value = 9200;
        $Sum_value = $Product_value+1000;
      }
    ?>
</head>
 <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded" aria-label="Twelfth navbar example">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
  
          <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Pet Cube</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="product.html">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="plan.php" >Plan</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-bs-toggle="dropdown" aria-expanded="false"><b>SERVICE</b></a>
                <ul class="dropdown-menu" aria-labelledby="dropdown10">
                  <li><a class="dropdown-item" href="login.php">ログイン</a></li>
                  <li><a class="dropdown-item" href="support.html">お問い合わせ</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
</nav>

<div class="py-5 text-center">
      <h2>プラン一覧</h2>
      <p class="red"><b>現在開発中です。暗号化しておりません。絶対に個人情報を入力しないでください。</b></p>
      <p class="lead">Pet Cubeのプランを選択してください。</p>
</div>
<main class="container">
<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
  <div class="col">
    <div class="card mb-4 shadow-sm">
    <div class="card-header">
      <h4 class="my-0 fw-normal">エントリープラン</h4>
    </div>

    <div class="card-body">
      <h1 class="card-title pricing-card-title">5,200円</h1>
      <ul class="list-unstyled mt-3 mb-4">
        <li>ネットワークカメラ本体</li>
        <li>家電制御機能</li>
        <li>1年間のサポート</li>
        <li>※カメラ部のみ</li>
      </ul>
      <form action="order.php" method="POST">
      <input type="submit" name="entryplan" class="w-100 btn btn-lg btn-outline-dark" value="購入"></button>
      </form>
    </div>
  </div>
  </div>
  <div class="col">
    <div class="card mb-4 shadow-sm">
    <div class="card-header">
      <h4 class="my-0 fw-normal">多機能プラン</h4>
    </div>
    <div class="card-body">
      <h1 class="card-title pricing-card-title">9,200円</h1>
      <ul class="list-unstyled mt-3 mb-4">
        <li>ネットワークカメラ本体</li>
        <li>家電制御機能</li>
        <li>各種センサ(※)搭載</li>
        <li>1年間のサポート</li>
      </ul>
      <form action="order.php" method="POST">
      <input type="submit" name="multiplan" class="w-100 btn btn-lg btn-outline-dark" value="購入"></button>
      </form>
    </div>
  </div>
  </div>
  <div class="col">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 fw-normal">サブスクリプション</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">800円<small class="text-muted">/ 月</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>ネットワークカメラ本体</li>
          <li>家電制御機能</li>
          <li>各種センサ(※)搭載</li>
          <li>永年サポート</li>
        </ul>
        <form action="order.php" method="POST">
        <input type="submit" name="multiplan" class="w-100 btn btn-lg btn-outline-dark" value="準備中" Disabled></button>
        </form>
      </div>
    </div>
  </div>
</main>


  
</body>
</html>

</body>
</html>