<?php require_once($_SERVER['DOCUMENT_ROOT'].'/admin/inc/dochead.php'); ?>
<body id="login">
    <!-- Content -->
    <main id="content">
        <section class="login-form">
            <div class="container">
                <div class="section-header">
                    <h1><img src="/admin/assets/images/logo_login.gif" alt="ange logo"></h1>
                </div>
                <form action="#">
                    <div class="section-content">
                        <div class="form-group">
                            <input type="text" id="user-id" class="form-control" placeholder="아이디">
                            <label for="user-id" class="sr-only">아이디</label>
                        </div>
                        <div class="form-group">
                            <input type="password" id="user-pw" class="form-control" placeholder="비밀번호">
                            <label for="user-pw" class="sr-only">비밀번호</label>
                        </div>
                        <div class="btn-login">
                            <p>
                                <button type="submit" class="btn btn-lg btn-blue">관리자 로그인하기</button>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/admin/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/admin/inc/docfoot.php'); ?>
</body>
</html>