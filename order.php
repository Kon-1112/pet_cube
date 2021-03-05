<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Pet Cube お申込み</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>

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
      .container{
        width:30%;
      }
    </style>
    <link href="form-validation.css" rel="stylesheet">
    <?php
      require_once('plan.php')
    ?>
</head>

<body class="bg-light">
<hr>
<div class="container">
  <main>
    <div class="py-5 text-center">
      <h2>新規お申込み</h2>
      <p class="red"><b>現在開発中です。暗号化しておりません。絶対に個人情報を入力しないでください。</b></p>
      <p class="lead">Pet Cubeのお届け先や支払方法を入力してください。</p>
    </div>

    <div class="row g-2">
      <div class="">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">注文内容</span>
        </h4>
        <ul class="list-group mb-2">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <p class="my-0"><?php echo $Product_name; ?></p>
            </div>
            <span class="text-muted"><?php echo $Product_value; ?>円</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <p class="my-0">配送料(全国一律)</p>
            </div>
            <span class="text-muted">1000円</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span><b>合計請求額</b></span>
            <strong><?php echo $Sum_value; ?>円</strong>
          </li>
        </ul>
      </div>
    
      <div class="">
        <h4 class="mb-3">お客様情報</h4>
        <form class="needs-validation" method="POST" action="post.php" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">姓</label>
              <!----required----->
              <input type="text" class="form-control" name="firstname" placeholder="姓を入力してください" required>
              <div class="invalid-feedback">
                姓が入力されていません。
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">名</label>
              <input type="text" class="form-control" name="lastname" placeholder="名を入力してください" required>
              <div class="invalid-feedback">
                名が入力されていません。
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">ユーザー名</label>
              <div class="input-group">
                <input type="text" class="form-control" name="username" placeholder="半角英数文字で入力してください" required>
              <div class="invalid-feedback">
                ユーザー名が入力されていません。
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">メールアドレス</label>
              <input type="email" class="form-control"name="email" required>
              <div class="invalid-feedback">
                メールアドレスが入力されていません。
              </div>
            </div>

            <div class="col-12">
              <label for="password" class="form-label">パスワード</label>
              <input type="password" class="form-control"name="password" required>
              <div class="invalid-feedback">
                パスワードが入力されていません。
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">郵便番号</label>
              <input type="text" class="form-control"  name="zip01" onKeyUp="AjaxZip3.zip2addr(this,'','pref01','addr01');" required>
              <div class="invalid-feedback">
                郵便番号が入力されていません。
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">都道府県</label>
              <input type="text" class="form-control" name="pref01" required>
              <div class="invalid-feedback">
                都道府県が入力されていません。
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">住所</label>
              <input type="text" class="form-control" name="addr01" required>
              <div class="invalid-feedback">
                住所が入力されていません。
              </div>
            </div>      
          </div>

          <hr class="my-4">

          <h4 class="mb-3">支払方法</h4>
          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="credit">商品代引引換</label>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">注文確認へ</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2021 Pet Cube</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">製品紹介</a></li>
      <li class="list-inline-item"><a href="#">サポート</a></li>
    </ul>
  </footer>
</div>


    <script src="dist/js/bootstrap.bundle.min.js"></script>

      <script src="form-validation.js"></script>
  </body>
</html>
