<?php require_once($_SERVER['DOCUMENT_ROOT'].'/admin/inc/dochead.php'); ?>
<body id="admin">
    <link rel="stylesheet" property="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" type="text/css">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/admin/inc/header.php'); ?>
    <!-- page-header -->
    <div class="page-header">
        <h3 class="page-title">마일리지 관리</h3>
        <ol class="breadcrumb">
            <li><a href="/"><i class="icon-home"></i></a></li>
            <li><a href="#">서비스 관리</a></li>
            <li><a href="#">마일리지 관리</a></li>
        </ol>
    </div>

    <!-- Content -->
    <main id="content">
        <div class="container">

            <!-- 검색 영역 -->
            <div class="global-search">
                <form action="#">
                    <h4>검색하기</h4>
                    <div class="form-group">
                        <select class="form-control">
                            <option>마일리지명</option>
                            <option>사유</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" id="global-search" class="form-control" placeholder="검색어">
                        <label for="global-search" class="sr-only">검색</label>
                    </div>
                    <div class="btn-area">
                        <p>
                            <button type="submit" class="btn btn-blue btn-sm">검색하기</button>
                            <a href="#" class="btn btn-green btn-sm" role="button">등록하기</a>
                        </p>
                    </div>
                </form>
            </div>
            
            <!-- 날짜조회 -->
            <div class="datepicker-area">
                <form action="#">
                    <h4>검색하기</h4>
                    <div class="form-group">
                        <label for="datepicker1">
                            <i class="icon-calendar">
                                <span class="sr-only">시작일</span>
                            </i>
                        </label>
                        <input type="text" id="datepicker1" class="form-control" placeholder="시작일">
                    </div>
                    <div class="form-group">
                        <label for="datepicker2">
                            <i class="icon-calendar">
                                <span class="sr-only">종료일</span>
                            </i>
                        </label>
                        <input type="text" id="datepicker2" class="form-control" placeholder="종료일">
                    </div>
                    <div class="btn-area">
                        <p>
                            <button type="submit" class="btn btn-blue btn-sm">검색하기</button>
                        </p>
                    </div>
                </form>
            </div>
            
            <div class="btn-area">
                <p>
                    <a href="#" class="btn btn-down btn-sm btn-white" role="button">엑셀 다운로드</a>
                </p>
                <p style="margin: 20px 0;">
                    <!-- 버튼 스타일 -->
                    <a href="#" class="btn btn-sm btn-pink" role="button">버튼 스타일</a>
                    <a href="#" class="btn btn-sm btn-gray" role="button">버튼 스타일</a>
                    <a href="#" class="btn btn-sm btn-blue" role="button">버튼 스타일</a>
                    <a href="#" class="btn btn-sm btn-green" role="button">버튼 스타일</a>
                </p>
            </div>
            
            <article>
                <div class="article-header">
                    <h5>마일리지 리스트</h5>
                    <small>Toral <span>145</span> item(s)</small>
                </div>
                
                <!-- nav-tab -->
                <nav id="nav-tab">
                    <ul class="tab-list">
                        <li class="active"><a href="#">텝 제목 영역</a></li>
                        <li><a href="#">텝 제목 영역</a></li>
                        <li><a href="#">텝 제목 영역</a></li>
                        <li><a href="#">텝 제목 영역</a></li>
                        <li><a href="#">텝 제목 영역</a></li>
                        <li><a href="#">텝 제목 영역</a></li>
                        <li class="space"><a href="#">텝 제목 영역<br>텝 제목 영역</a></li>
                    </ul>
                </nav>
                
                <!-- view -->
                <div class="article-content">
                    <div class="table-wrap view">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>마일리지명</th>
                                    <td>찰칵! 우리아이 순간포착</td>
                                </tr>
                                <tr>
                                    <th>사유</th>
                                    <td>댓글등록</td>
                                </tr>
                                <tr>
                                    <th>포인트</th>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <th>횟수</th>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <th>제한일</th>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <th>제한구분</th>
                                    <td>
                                        <div class="form-group">
                                            <label><input type="radio">제한없음</label>
                                            <label><input type="radio">일</label>
                                            <label><input type="radio">주</label>
                                            <label><input type="radio">월</label>
                                            <label><input type="radio">년</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>상태</th>
                                    <td>
                                        <div class="form-group">
                                            <label><input type="radio">활성</label>
                                            <label><input type="radio">비활성</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>내용</th>
                                    <td class="content">
                                        작성한 내용이 노출되는 영역입니다 작성한 내용이 노출되는 영역입니다<br>
                                        작성한 내용이 노출되는 영역입니다 작성한 내용이 노출되는 영역입니다작성한 내용이 노출되는 영역입니다
                                        작성한 내용이 노출되는 영역입니다<br><br>
                                        작성한 내용이 노출되는 영역입니다작성한 내용이 노출되는 영역입니다<br>
                                        작성한 내용이 노출되는 영역입니다                
                                    </td>
                                </tr>
                                <tr>
                                    <th>첨부파일</th>
                                    <td><a href="#">file_name.jpg</a></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-xs btn-blue" role="button">목록으로</a>
                                <a href="#" class="btn btn-xs btn-gray" role="button">수정하기</a>
                            </p>
                        </div>
                    </div>

                    <!-- Write -->
                    <div class="table-wrap write">
                        <form action="#">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th class="essential"><label for="subject">마일리지명</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="subject" class="form-control" placeholder="찰칵! 우리아이 순간포착">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="essential"><label for="reason">사유</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="reason" class="form-control" placeholder="댓글등록">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="essential"><label for="point">포인트</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="point" class="form-control" placeholder="3">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="essential"><label for="count">횟수</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="count" class="form-control" placeholder="1">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="date">제한일</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="date" class="form-control" placeholder="0">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="essential">제한구분</th>
                                        <td>
                                            <div class="form-group">
                                                <label><input type="radio">제한없음</label>
                                                <label><input type="radio">일</label>
                                                <label><input type="radio">주</label>
                                                <label><input type="radio">월</label>
                                                <label><input type="radio">년</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="essential">상태</th>
                                        <td>
                                            <div class="form-group">
                                                <label><input type="radio">활성</label>
                                                <label><input type="radio">비활성</label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="btn-area">
                                <p>
                                    <button type="submit" class="btn btn-xs btn-blue">저장하기</button>
                                    <a href="#" class="btn btn-xs btn-gray" role="button">취소하기</a>
                                </p>
                            </div>
                        </form>
                    </div>

                    <!-- list -->
                    <div class="table-wrap list">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="subject none-order">
                                        <a href="#">마일리지명
                                            <span>
                                                <i class="icon-up-micro"></i>
                                                <i class="icon-down-micro"></i>
                                            </span>
                                        </a>
                                    </th>
                                    <th class="none-order">
                                        <a href="#">구분
                                            <span>
                                                <i class="icon-up-micro"></i>
                                                <i class="icon-down-micro"></i>
                                            </span>
                                        </a>
                                    </th>
                                    <th class="none-order">
                                        <a href="#">사유
                                            <span>
                                                <i class="icon-up-micro"></i>
                                                <i class="icon-down-micro"></i>
                                            </span>
                                        </a>
                                    </th>
                                    <th>포인트</th>
                                    <th>제한</th>
                                    <th>싱테</th>
                                    <th>기능</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="subject">찰칵! 우리아이 순간포착</td>
                                    <td></td>
                                    <td>댓글등록</td>
                                    <td>3</td>
                                    <td>1 / 0</td>
                                    <td>활성</td>
                                    <td>
                                        <a href="#" class="btn-write">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="subject">찰칵! 우리아이 순간포착</td>
                                    <td></td>
                                    <td>댓글등록</td>
                                    <td>3</td>
                                    <td>1 / 0</td>
                                    <td>활성</td>
                                    <td>
                                        <a href="#" class="btn-write">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </a>
                                    </td>
                                </tr>


                                <tr>
                                    <td class="subject">도전 양주랭킹</td>
                                    <td></td>
                                    <td>댓글등록</td>
                                    <td>3</td>
                                    <td>1 / 0</td>
                                    <td>활성</td>
                                    <td>
                                        <a href="#" class="btn-write">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="subject">도전 앙쥬 랭킹</td>
                                    <td></td>
                                    <td>게시물등록</td>
                                    <td>10</td>
                                    <td>1 / 0</td>
                                    <td>활성</td>
                                    <td>
                                        <a href="#" class="btn-write">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="subject">공연후기</td>
                                    <td></td>
                                    <td>댓글등록</td>
                                    <td>3</td>
                                    <td>1 / 0</td>
                                    <td>활성</td>
                                    <td>
                                        <a href="#" class="btn-write">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="subject">스토어후기</td>
                                    <td></td>
                                    <td>댓글등록</td>
                                    <td>3</td>
                                    <td>1 / 0</td>
                                    <td>활성</td>
                                    <td>
                                        <a href="#" class="btn-write">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="subject">스토어후기</td>
                                    <td></td>
                                    <td>게시물등록</td>
                                    <td>200</td>
                                    <td>1 / 0</td>
                                    <td>활성</td>
                                    <td>
                                        <a href="#" class="btn-write">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="subject">피플 맛집</td>
                                    <td></td>
                                    <td>댓글등록</td>
                                    <td>3</td>
                                    <td>0 / 0</td>
                                    <td>활성</td>
                                    <td>
                                        <a href="#" class="btn-write">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="subject">피플 맛집</td>
                                    <td></td>
                                    <td>게시물등록</td>
                                    <td>15</td>
                                    <td>1 / 0</td>
                                    <td>활성</td>
                                    <td>
                                        <a href="#" class="btn-write">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="subject">이벤트 후기</td>
                                    <td></td>
                                    <td>댓글등록</td>
                                    <td>200</td>
                                    <td>1 / 0</td>
                                    <td>활성</td>
                                    <td>
                                        <a href="#" class="btn-write">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </article>
            <nav class="paging" aria-label="Page navigation">
                <ul class="pagination">
                    <li class="previous">
                        <a href="#" aria-label="Previous">
                            <i class="icon-left-open-1">
                                <span class="sr-only">이전</span>
                            </i>
                        </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#">8</a></li>
                    <li><a href="#">9</a></li>
                    <li><a href="#">10</a></li>
                    <li class="next">
                        <a href="#" aria-label="Next">
                            <i class="icon-right-open-2">
                                <span class="sr-only">다음</span>
                            </i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </main>





    <!-- 
        Modal popup 
        팝업 등록시
        button , a > data-toggle="modal" data-target="#popup-content"
        .modal > id = " popup-content "
        <button type="button" class="btn btn-primary btn-modal" data-toggle="modal" data-target="#popup-content">
            팝업버튼
        </button>

        <div class="modal-popup modal fade" id="popup-content" tabindex="-1" role="dialog" aria-labelledby="popup-contentLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="/admin/assets/images/img_close_btn.png" alt="">
                        </button>
                        <h4 class="modal-title" id="popup-contentLabel">팝업창 타이틀 노출 영역</h4>
                    </div>
                    <div class="modal-body">
                        <article>
                            <div class="article-header">
                                <h5>마일리지 리스트</h5>
                            </div>
                            <div class="article-content">
                                <div class="table-wrap view">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>마일리지명</th>
                                                <td>찰칵! 우리아이 순간포착</td>
                                            </tr>
                                            <tr>
                                                <th>사유</th>
                                                <td>댓글등록</td>
                                            </tr>
                                            <tr>
                                                <th>포인트</th>
                                                <td>3</td>
                                            </tr>
                                            <tr>
                                                <th>횟수</th>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <th>제한일</th>
                                                <td>0</td>
                                            </tr>
                                            <tr>
                                                <th>제한구분</th>
                                                <td>
                                                    <div class="form-group">
                                                        <label><input type="radio">제한없음</label>
                                                        <label><input type="radio">일</label>
                                                        <label><input type="radio">주</label>
                                                        <label><input type="radio">월</label>
                                                        <label><input type="radio">년</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>상태</th>
                                                <td>
                                                    <div class="form-group">
                                                        <label><input type="radio">활성</label>
                                                        <label><input type="radio">비활성</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>내용</th>
                                                <td class="content">
                                                    작성한 내용이 노출되는 영역입니다 작성한 내용이 노출되는 영역입니다<br>
                                                    작성한 내용이 노출되는 영역입니다 작성한 내용이 노출되는 영역입니다작성한 내용이 노출되는 영역입니다
                                                    작성한 내용이 노출되는 영역입니다<br><br>
                                                    작성한 내용이 노출되는 영역입니다작성한 내용이 노출되는 영역입니다<br>
                                                    작성한 내용이 노출되는 영역입니다                
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>첨부파일</th>
                                                <td><a href="#">file_name.jpg</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="btn-area">
                                        <p>
                                            <a href="#" class="btn btn-xs btn-blue" role="button">목록으로</a>
                                            <a href="#" class="btn btn-xs btn-gray" role="button">수정하기</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    -->

    <button type="button" class="btn btn-primary btn-modal" onclick="onPopupWindow()">
        팝업버튼
    </button>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/admin/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/admin/inc/docfoot.php'); ?>
    
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   
    <script>
        $(function($) {
            $.datepicker.setDefaults({
                dateFormat: 'yy-mm-dd',
                prevText: '이전 달',
                nextText: '다음 달',
                monthNames: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
                monthNamesShort: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
                dayNames: ['일', '월', '화', '수', '목', '금', '토'],
                dayNamesShort: ['일', '월', '화', '수', '목', '금', '토'],
                dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
                showMonthAfterYear: true,
                yearSuffix: '년'
            });
            $('#datepicker1').datepicker();
            $('#datepicker2').datepicker();
        }(jQuery));
        
        function onPopupWindow(){  
            window.open('popup.php', '_blank', 'top=10, left=10, width=898, height=969');
        }
    </script>
</body>
</html>