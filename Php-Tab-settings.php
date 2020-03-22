
    <style>
        .admin-tab {
            background: #fff;
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, .15);
            overflow: hidden;
        }

        .admin-tab li {
            float: left;
            margin: 0 10px;
        }

        .admin-tab li a {
            line-height: 50px;
            padding: 0 10px;
            display: block;
        }

        .admin-tab li.active a {
            box-shadow: 0 2px 0 0 #00a0d2 inset;
            font-weight: 600;
        }

        .tab-container {
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, .15);
        }
    </style>


    <script>
        $(function(){
        $("[tab]").each(function (e) {
            let tabList = ($("[tab-list] li", this));
            let tabContent = ($("[tab-content]", this));
            tabList.filter(":first").addClass("active");
            tabContent.filter(":not(:first)").hide();
            tabList.on("click", function (e) {
                var index = $(this).index();
                tabList.removeClass("active").filter(this).addClass("active");
                tabContent.hide().filter(":eq("+index+")").fadeIn(300);
                e.preventDefault();
            });
        });
    });
    </script>


    <div class="box-" tab>
        <div class="admin-tab">
            <ul tab-list>
                <li>
                    <a href="#">Genel</a>
                </li>
                <li>
                    <a href="#">Bakım Modu</a>
                </li>
                <li>
                    <a href="#">SMTP</a>
                </li>
                <li>
                    <a href="#">Footer</a>
                </li>
            </ul>
        </div>
        <form action="" method="POST" class="form label">
            <div class="tab-container">
                <div tab-content>
                    <ul>
                        <li>Genel</li>
                        <li>Genel2</li>
                        <li>Genel3</li>
                        <li>Genel4</li>
                    </ul>
                </div>
                <div tab-content>
                    <ul>
                        <li>bakım1</li>
                        <li>bakım2</li>
                        <li>bakım3</li>
                        <li>bakım4</li>
                    </ul>
                </div>
                <div tab-content>
                    <ul>
                        <li>smtp1</li>
                        <li>smtp2</li>
                        <li>smtp3</li>
                        <li>smtp4</li>
                    </ul>
                </div>
                <div tab-content>
                    <ul>
                        <li>Footer1</li>
                        <li>Footer2</li>
                        <li>Footer3</li>
                        <li>Footer4</li>
                    </ul>
                </div>
                <ul>
                    <li class="submit">
                        <input type="hidden" name="submit" value="1">
                        <button type="submit">Ayarları kaydet</button>
                    </li>
                </ul>
            </div>
        </form>
    </div>


