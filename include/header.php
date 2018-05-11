<head>
    <?php include("/include/top.php"); ?>
    <title>ShopMet - </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/style-main.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <style type="text/css">
        .carousel {
            background: white;
            margin-top: 20px;
        }

        .carousel .item {
            /* Prevent carousel from being distorted if for some reason image doesn't load */
            height: 350px;
        }

        .carousel .item img {
            height: 350px;
            width: 1350px;
        }

        .bs-example {
            margin: 20px;
        }

        .accountTab {
            height: 63px;
            color: #555555;
            font-size: 13px;
            display: inline-table;
            padding-top: 5px !important;
            cursor: pointer;
            border-left: 1px solid rgba(0, 0, 0, 0.07);
        }

        .accountInner {
            display: table-cell;
            vertical-align: middle;
            border-radius: 4px 4px 0 0;
            padding-top: 12px;
            padding-left: 22px;
        }

        .accountUserName {
            color: #fff;
            display: inline-block;
            line-height: 14px;
            text-overflow: ellipsis;
            -webkit-box-orient: vertical;
            overflow: hidden;
            max-width: 100px;
            max-height: 13px;
            text-align: center;
            padding-bottom: 1px;
            box-sizing: content-box;
        }

        .hard-hidden {
            display: none !important;
        }

        .hidden {
            display: none !important;
            visibility: hidden !important;
        }

        .dropdownAccount {
            overflow: hidden;
            text-align: left;
            white-space: nowrap;
            font-size: 13px;
            width: 215px;
            top: 62.6px;
            right: 0;
            z-index: 100;
            position: absolute;
            border-radius: 4px 0px 4px 4px;
            background-color: #333;
        }

        .dropdownAccountNonLoggedIn .accountList,
        .dropdownAccount .accountList {
            float: left;
        }

        .dropdownAccount .accountList ul {
            list-style-type: none;
            z-index: 100;
            width: 100%;
            float: left;
            padding: 15px 0px;
        }

        .dropdownAccountNonLoggedIn .accountList ul li,
        .dropdownAccount .accountList ul li {
            float: left !important;
            width: 100%;
            text-align: left !important;
        }
    </style>
    <div id="header">
        <div style="float:left;"><img id="logo" class="logo" src="image/shopmet-logo.png" /></div>
        <div style="float:right;" class="accountTab">
            <div class="accountInner">
                <span class="accountUserName">Sign In</span>
                <div class="dropdownWrapper hard-hidden">
                    <div class="dropdownAccount hiden">
                        <div class="accountList">
                            <ul>
                                <li>abc</li>
                                <li>abc</li>
                                <li>abc</li>
                                <li>abc</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="clear:both"></div>
    </div>
</head>
