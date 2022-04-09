<?php
/*
Template Name: Customer
 */
?>
<?php
get_header();
?>

<main class="content-customer-service">

<h2 class="title-style-1  theme-normal">
    <span class="content">Chăm Sóc Khách Hàng</span>
</h2>
    <div class="mt-100 d-none d-lg-block"></div>

    <section class="topics">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-5">
                <div class="col d-none d-lg-flex"></div>
                <div class="col mb-20">
                    <a class="topic d-flex d-lg-block" href="https://quatvietnam.com.vn/vi/warranty-policy-vi/">
                        <div class="thumbnail">
                            <img src="https://quatvietnam.com.vn/wp-content/themes/asiavina/assets/images/cs-warranty.png" alt="Warranty">
                        </div>

                        <div>
                            <h3 class="title">Chính sách bảo hành</h3>
                            <p>Tìm hiểu thêm về chính sách bảo hành</p>
                        </div>
                    </a>
                </div>
                <div class="col mb-20">
                    <a class="topic d-flex d-lg-block" href="https://quatvietnam.com.vn/vi/exchange-policy-vi/">
                        <div class="thumbnail">
                            <img src="https://quatvietnam.com.vn/wp-content/themes/asiavina/assets/images/cs-exchange.png" alt="Exchange Policy">
                        </div>

                        <div>
                            <h3 class="title">Chính sách đổi trả</h3>
                            <p>Tìm hiểu thêm về quy định đổi trả</p>
                        </div>
                    </a>
                </div>
                <div class="col mb-20">
                    <a class="topic d-flex d-lg-block" href="https://quatvietnam.com.vn/vi/usage-tips-vi/">
                        <div class="thumbnail">
                            <img src="https://quatvietnam.com.vn/wp-content/themes/asiavina/assets/images/cs-usage-tips.png" alt="Usage Tips">
                        </div>

                        <div>
                            <h3 class="title">Mẹo sử dụng
</h3>
                            <p>Tìm hiểu thêm về cách sử dụng</p>
                        </div>
                    </a>
                </div>
                <div class="col d-none d-lg-flex"></div>
            </div>
        </div>
    </section>

    <div class="container">

<h2 class="title-style-2 ">
    <span class="content">Tìm kiếm trung tâm bảo hành gần nhất</span>
</h2>    </div>

    <section class="service-partners">
        <div class="container">

<div class="service-partners-finder" id="service-partners-finder-624d93eac3075">
    <div class="row d-none d-md-flex">
        <div class="col-5">
            <i class="fas fa-map-marker-alt"></i>
            <select class="custom-select cities">
                <option selected>Chọn Khu Vực</option>
            </select>
        </div>

        <div class="col-5">
            <i class="fas fa-search"></i>
            <input type="text" placeholder=" " class="filter">
        </div>

        <div class="col-2">
            <button class="btn btn-theme fl-r">Tìm kiếm</button>
        </div>
    </div>

    <div class="mobile row d-block d-md-none">
        <div class="input">
            <i class="fas fa-map-marker-alt"></i>
            <select class="custom-select cities">
                <option selected>Chọn Khu Vực</option>
            </select>
        </div>

        <div class="input">
            <div class="row">
                <div class="col-8 col-va-m">
                    <div>
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder=" " class="filter">
                    </div>
                </div>

                <div class="col ta-r">
                    <button class="btn btn-theme fl-r">Tìm kiếm</button>
                </div>
            </div>
        </div>
    </div>
</div>

<table id="search-result" class="table table-striped table-bordered" style="display:none; width: 100%; margin: 30px 0px">
    <thead>
        <tr>
            <th>Province/ City</th>
            <th>Partner Name</th>
            <th>Địa chỉ</th>
            <th>Phone</th>
        </tr>
    </thead>

    <tbody>

    </tbody>
</table>


    <script>
    var partners = [{"title":"C\u00f4ng ty TNHH DV &#038; TM Tu\u1ea5n Long","cities":["H\u1ea3i Ph\u00f2ng"],"address":"S\u1ed1 516 T\u00f4n \u0110\u1ee9c Th\u1eafng , Huy\u1ec7n An D\u01b0\u01a1ng, H\u1ea3i Ph\u00f2ng","phone":"0817637773"},{"title":"C\u00f4ng ty TNHH V\u0129nh T\u00edn","cities":["Gia Lai"],"address":"62 Ho\u00e0ng V\u0103n Th\u1ee5, Tp Pleiku, Gia Lai","phone":"0269 3872722"},{"title":"C\u00f4ng ty TNHH TM Li\u00ean S\u01a1n","cities":["Kh\u00e1nh H\u00f2a"],"address":"70 V\u00f5 Tr\u1ee9, P T\u00e2n L\u1eadp, Tp. Nha Trang, Kh\u00e1nh H\u00f2a","phone":"0258.6275999"},{"title":"Cty TNHH B\u1eb1ng Ng\u1ecdc","cities":["\u0110\u00e0 N\u1eb5ng"],"address":"179 Ng\u00f4 T\u1ea5t T\u1ed1, Tp. \u0110\u00e0 N\u1eb5ng","phone":"02363 699568"},{"title":"Cty TNHH Thi Ph\u00fac","cities":["\u0110\u00e0 N\u1eb5ng"],"address":"466 Nguy\u1ec5n H\u1eefu Th\u1ecd, Tp. \u0110\u00e0 N\u1eb5ng","phone":"02363 626655"},{"title":"C\u01a1 s\u1edf Th\u00e1i Ng\u1ecdc Th\u00f4ng","cities":["\u0110\u1ed3ng Nai"],"address":"50\/81 \u0111g Kh\u1ed5ng T\u1eed, KP 4, P. Xu\u00e2n Trung, Long Kh\u00e1nh","phone":"0947 212972"},{"title":"Cty TNHH SXTM &#038; DV H\u00e0 Minh C\u01b0\u1eddng","cities":["Tp HCM"],"address":"75-77 \u0110\u01b0\u1eddng S11, Ph\u01b0\u1eddng T\u00e2y Th\u1ea1nh, Qu\u1eadn T\u00e2n Ph\u00fa","phone":"0285 4449575"},{"title":"CH TB\u0110 \u00c1nh S\u00e1ng","cities":["Qu\u1ea3ng Nam"],"address":"20 Nguy\u1ec5n Ho\u00e0ng, P. An Xu\u00e2n, Tp Tam K\u1ef3, Qu\u1ea3ng Nam","phone":"0946115548"},{"title":"Cty TNHH TM DV H\u01b0ng V\u00f5 Long An","cities":["Long An"],"address":"63 H\u00f9ng V\u01b0\u01a1ng, Ph\u01b0\u1eddng 02, TP. T\u00e2n An, Long An","phone":"072.3525911"},{"title":"H\u1ed9 Kinh Doanh M\u1ea1c Thu\u1eadn Th\u00e0nh","cities":["C\u1ea7n Th\u01a1"],"address":"163 Khu v\u1ef1c Y\u00ean H\u1ea1, P. L\u00ea B\u00ecnh, Q. C\u00e1i R\u0103ng, C\u1ea7n Th\u01a1","phone":"0907 015 559"},{"title":"Trung T\u00e2m B\u1ea3o H\u00e0nh \u0110\u00e0 N\u1eb5ng","cities":["\u0110\u00e0 N\u1eb5ng"],"address":"195 L\u00ea \u0110\u00ecnh L\u00fd, H\u00f2a Thu\u1eadn Nam, Q. H\u1ea3i Ch\u00e2u, \u0110\u00e0 N\u1eb5ng","phone":"02363620471"},{"title":"Trung T\u00e2m B\u1ea3o H\u00e0nh H\u00e0 N\u1ed9i","cities":["H\u00e0 N\u1ed9i"],"address":"S\u1ed1 1 D4 Ng\u00f5 9, Khu\u1ea5t Duy Ti\u1ebfn, Thanh Xu\u00e2n, H\u00e0 N\u1ed9i","phone":"02435430363"},{"title":"Trung T\u00e2m B\u1ea3o H\u00e0nh H\u1ed3 Ch\u00ed Minh","cities":["Tp HCM"],"address":"25 Nguy\u1ec5n Th\u1ecb Nh\u1ecf, P. 9, Qu\u1eadn T\u00e2n B\u00ecnh, Tp HCM","phone":"02822150385"},{"title":"C\u1eeda H\u00e0ng Hu\u1ef3nh Quang","cities":["Qu\u1ea3ng Nam"],"address":"122 H\u1ed3 Nghinh, Th\u00e0nh Ph\u1ed1 Tam K\u1ef3, T\u1ec9nh Qu\u1ea3ng Nam","phone":"0905812052"},{"title":"C\u00f4ng Ty TNHH SXKD C\u1ea7m Th\u00eau","cities":["Nam \u0110\u1ecbnh"],"address":"\u0110\u1ed9i 1, X\u00e3 Giao Nh\u00e2n, Huy\u1ec7n giao th\u1ee7y, Tp. Nam \u0110\u1ecbnh","phone":"0943060474"},{"title":"C\u00f4ng ty TNHH Ph\u01b0\u1edbc L\u1ed9c Gia","cities":["Ninh Thu\u1eadn"],"address":"106 \u0110\u01b0\u1eddng 21\/8, Phan Rang, Th\u00e1p Ch\u00e0m, Ninh Thu\u1eadn","phone":"0259 2211119"},{"title":"CH Nguy\u00ean H\u1ed3ng","cities":["B\u00ecnh \u0110\u1ecbnh"],"address":"15 L\u00ea Xu\u00e2n Tr\u1eef, P. L\u00fd Th\u01b0\u1eddng Ki\u1ec7t, Tp. Quy Nh\u01a1n","phone":"0256.6535809"},{"title":"CH Ph\u00e1t N\u0103m Ch\u00e2u","cities":["Qu\u1ea3ng Nam"],"address":"QL 1A, Th\u1ecb Tr\u1ea5n Nam Ph\u01b0\u1edbc, H. Duy Xuy\u00ean, Qu\u1ea3ng Nam","phone":"0905877398"},{"title":"C\u00f4ng ty TNHH TM DV X\u00e2y D\u1ef1ng Quang Ph\u00e1t","cities":["B\u00e0 R\u1ecba - V\u0169ng T\u00e0u"],"address":"35 Hu\u1ef3nh Kh\u01b0\u01a1ng Ninh P. 3, Tp. V\u0169ng T\u00e0u","phone":"0901236026"},{"title":"C\u00f4ng ty TNHH \u0110\u1ea1i H\u1eefu","cities":["H\u1ea3i Ph\u00f2ng"],"address":"Th\u00f4n Ki\u1ebfn Phong, X\u00e3 \u0110\u1ed3ng Th\u00e1i, Huy\u1ec7n An D\u01b0\u01a1ng, H\u1ea3i Ph\u00f2ng","phone":"0902017616"},{"title":"CH Minh Ngh\u0129a","cities":["Hu\u1ebf"],"address":"104 Nguy\u1ec5n Tr\u00e3i,P. Thu\u1eadn H\u00f2a, Tp. Hu\u1ebf","phone":"0905154536"},{"title":"C\u00f4ng ty TNHH MTV TM DV XNK Hoa Trang Th\u00fay","cities":["An Giang"],"address":"L\u00f4 8B2 Phan Huy \u00edch, P. M\u1ef9 Qu\u00fd, Tp. Long Xuy\u00ean","phone":"0918799192"},{"title":"C\u00f4ng ty TNHH TM \u0110i\u1ec7n T\u1eed Vi\u1ec5n Th\u00f4ng Thi\u00ean Ph\u00fac","cities":["C\u00e0 Mau"],"address":"35B Nguy\u1ec5n Ng\u1ecdc Sanh, P. 5, C\u00e0 Mau","phone":"0290 3833888"},{"title":"C\u1eeda h\u00e0ng \u0111i\u1ec7n Ph\u00fa Kh\u00e1nh","cities":["Kh\u00e1nh H\u00f2a"],"address":"68 \u00c2u C\u01a1, P. Ph\u01b0\u1edbc T\u00e2n, Tp. Nha Trang, Kh\u00e1nh H\u00f2a","phone":"0982855755"},{"title":"C\u00f4ng ty TNHH Ng\u1ecdc Vi\u1ec7t &#8211; VP","cities":["V\u0129nh Ph\u00fac"],"address":"39 Ng\u00f4 Gia T\u1ef1, Tp.V\u0129nh Y\u00ean, t\u1ec9nh V\u0129nh Ph\u00fac","phone":"02113 847 670"},{"title":"C\u00f4ng ty TNHH MTV Huy Ph\u00e1t V\u0129nh Long","cities":["V\u0129nh Long"],"address":"184 (49\/8C: s\u1ed1 c\u0169) Tr\u1ea7n \u0110\u1ea1i Ngh\u0129a, P4, V\u0129nh Long","phone":"0270 3826809"},{"title":"C\u00f4ng ty TNHH MTV TM &#038; DV K\u1ef9 Thu\u1eadt T\u00e2m Vi\u1ec7t","cities":["Tuy\u00ean Quang"],"address":"T\u1ed5 27, \u0111\u01b0\u1eddng B\u00ecnh Thu\u1eadn, P.T\u00e2n Quang, Tuy\u00ean Quang","phone":"0207 3815800"},{"title":"C\u00f4ng ty TNHH MTV Thi\u1ec7n T\u00e0i","cities":["Tr\u00e0 Vinh"],"address":"522 \u0110\u1ed3ng Kh\u1edfi, Kh\u00f3m 1, P.9, Tp Tr\u00e0 Vinh","phone":"0294 3860753"},{"title":"C\u00f4ng ty CP \u0110\u1ea7u T\u01b0 Ph\u00e1t Tri\u1ec3n TM DV DHP","cities":["Tp HCM"],"address":"395 Kha V\u1ea1n C\u00e2n, Hi\u1ec7p B\u00ecnh Ch\u00e1nh, Th\u1ee7 \u0110\u1ee9c, Tp.HCM","phone":"0908880047"},{"title":"C\u00f4ng ty TNHH KD DV SX Trung Anh","cities":["Tp HCM"],"address":"07 L\u00ea L\u01a1\u0323i, Q9, Tp HCM","phone":"028 37309082"},{"title":"C\u00f4ng ty TNHH MTV Phan D\u0169ng","cities":["Tp HCM"],"address":"1210 Quang Trung, P8, G\u00f2 V\u1ea5p, Tp HCM","phone":"0286 2955839"},{"title":"\u0110i\u1ec7n T\u1eed H\u00f9ng","cities":["Ti\u1ec1n Giang"],"address":"85 L\u00ea \u0110\u1ea1i H\u00e0nh, P1, Tp Ti\u1ec1n Giang, T\u1ec9nh Ti\u1ec1n Giang","phone":"0273 3585178"},{"title":"Cty TNHH C\u00f4ng Ngh\u1ec7 \u0110T \u0110L M\u1ea1nh Tu\u1ea5n","cities":["Thanh H\u00f3a"],"address":"S\u1ed1 258 Tr\u01b0\u1eddng Thi, Tp Thanh H\u00f3a, T\u1ec9nh Thanh H\u00f3a","phone":"0237 3717866"},{"title":"C\u00f4ng ty TNHH TM DV Ng\u1ecdc Th\u01a1m","cities":["Th\u00e1i Nguy\u00ean"],"address":"16 \u0111\u01b0\u1eddng CMT8,T\u1ed5 5, P. Phan \u0110\u00ecnh Ph\u00f9ng, Th\u00e1i Nguy\u00ean","phone":"0208 3854070"},{"title":"Cty TNHH \u0110i\u1ec7n L\u1ea1nh R\u0129nh Long","cities":["Th\u00e1i B\u00ecnh"],"address":"15B Nguy\u1ec5n T\u00f4ng Quai, Ph\u01b0\u1eddng Tr\u1ea5n L\u00e3m, Th\u00e1i B\u00ecnh","phone":"0227 3844339"},{"title":"H\u1ed9 Kinh Doanh DV TM T\u1ed5ng H\u1ee3p Ph\u01b0\u01a1ng Nam","cities":["T\u00e2y Ninh"],"address":"S\u1ed1 183 Ho\u00e0ng L\u00ea Kha, khu ph\u1ed1 4, Ph\u01b0\u1eddng 3, Tp. T\u00e2y Ninh","phone":"0276 3821 293"},{"title":"\u0110i\u1ec7n T\u1eed \u0110i\u1ec7n L\u1ea1nh Tr\u1ecdng Ngo\u00e3n","cities":["S\u00f3c Tr\u0103ng"],"address":"29 Tr\u01b0\u01a1ng C\u00f4ng \u0110\u1ecbnh, Kh\u00f3m 4, P2, Tp S\u00f3c Tr\u0103ng","phone":"0916476477"},{"title":"\u0110i\u1ec7n T\u1eed Minh","cities":["Qu\u1ea3ng Tr\u1ecb"],"address":"82 L\u00ea Th\u1ebf Hi\u1ebfu, Tp \u0110\u00f4ng H\u00e0, Qu\u1ea3ng Tr\u1ecb","phone":"0233 3554285"},{"title":"C\u00f4ng ty CP TM&#038;DV Ng\u1ecdc Tu\u1ea5n","cities":["Qu\u1ea3ng Ninh"],"address":"196 Nguy\u1ec5n V\u0103n C\u1eeb,  H\u1ea1 Long, Qu\u1ea3ng Ninh","phone":"0203 3826385"},{"title":"C\u00f4ng ty TNHH \u0110i\u1ec7n T\u1eed Tu\u1ea5n Th\u1eafng","cities":["Qu\u1ea3ng Ninh"],"address":"179 Tr\u1ea7n Ph\u00fa, C\u1ea9m T\u00e2y, C\u1ea9m ph\u1ea3, Qu\u1ea3ng Ninh","phone":"0203 3863534"},{"title":"C\u00f4ng ty TNHH MTV DV Ti\u1ebfn Trung","cities":["Qu\u1ea3ng Ng\u00e3i"],"address":"430 Phan \u0110\u00ecnh Ph\u00f9ng, T\u1ed5 16, P Ch\u00e1nh L\u1ed9, Qu\u1ea3ng Ng\u00e3i","phone":"0255 3817234"},{"title":"C\u00f4ng ty TNHH MTV Quang Trang","cities":["Qu\u1ea3ng B\u00ecnh"],"address":"126A L\u00fd Th\u01b0\u1eddng Ki\u1ec7t, \u0110\u1ed3ng H\u1edbi, Qu\u1ea3ng B\u00ecnh","phone":"0232 3822570"},{"title":"TTBH \u0110i\u1ec7n T\u1eed &#8211; \u0110i\u1ec7n L\u1ea1nh Thanh Kha","cities":["Ph\u00fa Y\u00ean"],"address":"61 Tr\u1ea7n Huy C\u00e1p,P3, Tp. Tuy H\u00f2a, Ph\u00fa Y\u00ean","phone":"0919 411544"},{"title":"C\u00f4ng ty TNHH \u0110i\u1ec7n T\u1eed \u0110i\u1ec7n L\u1ea1nh S\u01a1n T\u00f9ng","cities":["Ph\u00fa Th\u1ecd"],"address":"1646 \u0110\u1ea1i L\u1ed9 H\u00f9ng V\u01b0\u01a1ng, T\u1ed5 35C, Khu 16, Gia C\u1ea9m, Vi\u1ec7t Tr\u00ec, Ph\u00fa Th\u1ecd","phone":"0210 3847613"},{"title":"H\u1ed9 Kinh Doanh  S\u1eeda Ch\u1eefa \u0110i\u1ec7n T\u1eed Ng\u1ecdc Minh","cities":["Ninh Thu\u1eadn"],"address":"340 Th\u1ed1ng Nh\u1ea5t, Tp. Phan Rang, Th\u00e1p Ch\u00e0m, Ninh Thu\u1eadn","phone":"0259 3820616"},{"title":"C\u00f4ng ty TNHH MTV TM \u0110i\u1ec7n T\u1eed Ph\u00f9ng Th\u1ecbnh","cities":["Ninh B\u00ecnh"],"address":"409 H\u1ea3i Th\u01b0\u1ee3ng L\u00e3n \u00d4ng, Nam Th\u00e0nh, Ninh B\u00ecnh","phone":"0229 3871126"},{"title":"Doanh nghi\u1ec7p t\u01b0 nh\u00e2n \u0111i\u1ec7n l\u1ea1nh \u0110\u1ee9c Vinh","cities":["Ngh\u1ec7 An"],"address":"7\/A2 Hermann, Kh\u1ed1i Y\u00ean Vinh, H\u01b0ng Ph\u00fac, Tp Vinh","phone":"0238 3830034"},{"title":"Cty TNHH TMDV An Khoa","cities":["L\u00e2m \u0110\u1ed3ng"],"address":"34 L\u00ea Th\u1ecb Pha, P1, B\u1ea3o L\u1ed9c, L\u00e2m \u0110\u1ed3ng","phone":"0263 3710235"},{"title":"Cty TNHH MTV TMDV Hai Kh\u00f4i","cities":["Ki\u00ean Giang"],"address":"801 Nguy\u1ec5n Trung Tr\u1ef1c, P. An H\u00f2a, TP. R\u1ea1ch Gi\u00e1, Ki\u00ean Giang","phone":"02973 911955"},{"title":"C\u00f4ng ty TNHH K\u1ef9 Thu\u1eadt Th\u00e0nh \u0110\u1ea1t","cities":["H\u1eadu Giang"],"address":"19 Ho\u00e0ng Hoa Th\u00e1m, P1, Tp V\u1ecb Thanh, H\u1eadu Giang","phone":"0979333311"},{"title":"C\u00f4ng ty TNHH B\u00e1ch Vi\u1ec7t","cities":["H\u1ea3i Ph\u00f2ng"],"address":"575 Nguy\u1ec5n B\u1ec9nh Khi\u00eam,P \u0110\u00f4ng H\u1ea3i 1, H\u1ea3i An, H\u1ea3i Ph\u00f2ng","phone":"02252641629"},{"title":"C\u00f4ng ty TNHH MTV TM &#038; DV Huy Ho\u00e0ng","cities":["H\u1ea3i D\u01b0\u01a1ng"],"address":"405-407 Thanh Ni\u00ean, P. H\u1ea3i T\u00e2n, Tp.H\u1ea3i D\u01b0\u01a1ng","phone":"0220 3860666"},{"title":"TTBH Ng\u00f4 Nh\u01b0 \u00dd &#8211; Ng\u00f4 Nh\u01b0 \u00dd","cities":["H\u00e0 T\u0129nh"],"address":"Kiot 64 H\u00e0 T\u00f4n M\u1ee5c, Ch\u1ee3 Trung T\u00e2m, Tp H\u00e0 T\u0129nh","phone":"0984965463"},{"title":"Cty TNHH \u0110\u1ea7u T\u01b0 v\u00e0 PT CN Ti\u1ebfn Minh","cities":["H\u00e0 N\u1ed9i"],"address":"761 Ng\u00f4 Gia T\u1ef1, P. \u0110\u1ee9c Giang, Q. Long Bi\u00ean, H\u00e0 N\u1ed9i","phone":"0243 6558788"},{"title":"C\u00f4ng ty TNHH Th\u01b0\u01a1ng M\u1ea1i v\u00e0 D\u1ecbch V\u1ee5 H\u00e0 Y\u00ean","cities":["H\u00e0 N\u1ed9i"],"address":"S\u1ed1 1 Ng\u00f5 185, Ph\u1ed1 \u0110\u1eb7ng Ti\u1ebfn \u0110\u00f4ng, Trung Li\u1ec7t, \u0110\u1ed1ng \u0110a, H\u00e0 N\u1ed9i","phone":"024 22413329"},{"title":"TTBH B\u00f9i Qu\u00e2n H\u00e0 Nam","cities":["H\u00e0 Nam"],"address":"53 ph\u1ed1 Ph\u1ea1m Ng\u1ecdc Th\u1ea1ch, Ph\u1ee7 L\u00fd, H\u00e0 Nam","phone":"0226 3856885"},{"title":"Trung T\u00e2m B\u1ea3o H\u00e0nh Ph\u01b0\u1edbc D\u0169ng","cities":["Gia Lai"],"address":"15 Hai B\u00e0 Tr\u01b0ng, Pleiku, Gia Lai","phone":"0269 3716787"},{"title":"Trung T\u00e2m B\u1ea3o H\u00e0nh C\u00f4ng L\u1ef1u","cities":["\u0110\u1ed3ng Th\u00e1p"],"address":"65 L\u00fd Th\u01b0\u1eddng Ki\u1ec7t, P.2, Tp Cao L\u00e3nh, \u0110\u1ed3ng Th\u00e1p","phone":"0277 3851776"},{"title":"C\u00f4ng ty TNHH Ngh\u0129a Hi\u1ebfu Ph\u00e1t","cities":["\u0110\u1ed3ng Nai"],"address":"613 Nguy\u1ec5n \u00c1i Qu\u1ed1c,  KP2, P. H\u1ed1 Nai, Bi\u00ean H\u00f2a","phone":"0251 3887413"},{"title":"C\u00f4ng ty TNHH TM v\u00e0 DV \u0110i\u1ec7n Phong Th\u00e0nh","cities":["\u0110\u0103k N\u00f4ng"],"address":"S\u1ed1 6 P. Ngh\u0129a Ph\u00fa, Tp. Gia Ngh\u0129a, \u0110\u0103k N\u00f4ng","phone":"0261 3546195"},{"title":"C\u00f4ng ty TNHH \u0110i\u1ec7n L\u1ea1nh Anh Ti\u1ebfn","cities":["\u0110\u0103k L\u0103k"],"address":"13 B\u00e0 Tri\u1ec7u,P. T\u1ef1 An, Tp Bu\u00f4n Ma Thu\u1ed9t, \u0110\u0103k L\u0103k","phone":"0262 3851399"},{"title":"C\u01a1 \u0111i\u1ec7n l\u1ea1nh \u00dat L\u1ef1c","cities":["B\u00e0 R\u1ecba - V\u0169ng T\u00e0u"],"address":"156 B\u00ecnh Gi\u00e3, Ph\u01b0\u1eddng 8, Tp V\u0169ng T\u00e0u","phone":"0254 3525753"},{"title":"\u0110i\u1ec7n T\u1eed Ho\u00e0ng Phong","cities":["B\u00e0 R\u1ecba - V\u0169ng T\u00e0u"],"address":"114 Hai B\u00e0 Tr\u01b0ng, P.Ph\u01b0\u1edbc Hi\u1ec7p, Tp. B\u00e0 R\u1ecba, T\u1ec9nh V\u0169ng T\u00e0u","phone":"0982383482"},{"title":"C\u00f4ng ty TNHH \u0110i\u1ec7n T\u1eed Thu\u1eadn","cities":["B\u00ecnh Thu\u1eadn"],"address":"50 Nguy\u1ec5n H\u1ed9i, P. Ph\u00fa Trinh, Tp. Phan Thi\u1ebft","phone":"0252 3831616"},{"title":"C\u00f4ng ty TNHH \u0110i\u1ec7n T\u1eed \u0110i\u1ec7n L\u1ea1nh Minh B\u1ea3o H\u00e0nh","cities":["B\u00ecnh D\u01b0\u01a1ng"],"address":"903 CMT8, P. Ch\u00e1nh Ngh\u0129a,Tp. Th\u1ee7 D\u1ea7u M\u1ed9t, B\u00ecnh D\u01b0\u01a1ng","phone":"1900272717"},{"title":"C\u00f4ng ty TNHH -TM D\u1ecbch V\u1ee5 Ph\u01b0\u1edbc Th\u00e0nh","cities":["B\u00ecnh \u0110\u1ecbnh"],"address":"17 Nguy\u1ec5n Tr\u00e3i, Tp Quy Nh\u01a1n, B\u00ecnh \u0110\u1ecbnh","phone":"0256 3817452"},{"title":"C\u00f4ng ty TNHH MTV TM DV Huy Ho\u00e0ng","cities":["B\u1ebfn Tre"],"address":"51 Phan Ng\u1ecdc T\u00f2ng, P.2, Tp B\u1ebfn Tre","phone":"0275 3824570"},{"title":"C\u00f4ng ty TNHH TMDV Ba Ph\u00fac","cities":["B\u1eafc Ninh"],"address":"65 Nguy\u1ec5n \u0110\u0103ng \u0110\u1ea1o, Khu 10, P. \u0110\u1ea1i Ph\u00fac, B\u1eafc Ninh","phone":"0222 3820332"},{"title":"C\u00f4ng ty TNHH MTV \u0111i\u1ec7n T\u1eed M\u1ef9 H\u00f2a","cities":["B\u1ea1c Li\u00eau"],"address":"S\u1ed1 232 \u0111\u01b0\u1eddng H\u00f2a B\u00ecnh , Kh\u00f3m7, Ph\u01b0\u1eddng 1, B\u1ea1c Li\u00eau","phone":"0291 3827676"},{"title":"C\u00f4ng ty TNHH TMDV Huy\u1ec1n L\u01b0\u01a1ng","cities":["B\u1eafc Giang"],"address":"S\u1ed1 472  X\u01b0\u01a1ng Giang, P. Ng\u00f4 Quy\u1ec1n, Tp. B\u1eafc Giang","phone":"0204 3824714"}];

    jQuery(document).ready(function() {
        const FILTER_PATTERN = /[\p{L}\d]+/uig;
        var ele = jQuery('#service-partners-finder-624d93eac3075');
        var cities = new Set();

        partners.forEach(p=> p.cities.forEach(c=> cities.add(c)));
        cities = Array.from(cities);
        cities.sort().forEach(city=> ele.find('.cities').append('<option value="'+ city +'">'+ city +'</option>'));

        ele.find('button').click(()=> {
            var city = ele.find('> .row:visible .cities').val();
            var filter = ele.find('> .row:visible .filter').val();
            var keywords = filter.toLowerCase().match(FILTER_PATTERN);

            var result = partners.filter(p=> {
                if (filter) {
                    if (!keywords) return [];
                    var pk = p.address.toLowerCase().match(FILTER_PATTERN);
                    return p.cities.includes(city) && keywords.every(k=> pk.includes(k));
                }

                return p.cities.includes(city);
            });

            jQuery('#search-result').css('display', '')
                .find('tbody').html('');

            result.forEach(r=> {
                jQuery('#search-result tbody').append(`
                    <tr>
                        <td>${ r.cities }</td>
                        <td>${ r.title }</td>
                        <td>${ r.address }</td>
                        <td>${ r.phone }</td>
                    </tr>
                `);
            });
        });
    });
    </script>        </div>
    </section>

    <section class="commitments">
        <div class="container">
            <div class="commitment-medals row row-cols-1 row-cols-lg-2">
    <div class="col mb-20">
        <div class="commitment-item">
            <div class="row">
                <div class="thumbnail col">
                    <img src="https://quatvietnam.com.vn/wp-content/themes/asiavina/assets/images/warranty.png" alt="Warranty">
                </div>

                <div class="content col-8">
                    <h3>24 tháng chính hãng</h3>
                    <p class="mb-0">Với 58 trung tâm bảo hành trên toàn quốc, quạt ASIAvina hân hạnh được hỗ trợ khách hàng bất cứ khi nào khách hàng cần đến chúng tôi</p>
                    <p><a class="seemore" href="https://quatvietnam.com.vn/vi/exchange-policy-vi/">Xem thêm</a><p>
                </div>
            </div>
        </div>
    </div>

    <div class="col mb-20">
        <div class="commitment-item">
            <div class="row">
                <div class="thumbnail col">
                    <img src="https://quatvietnam.com.vn/wp-content/themes/asiavina/assets/images/quality-commitment.png" alt="Quality Commitment">
                </div>

                <div class="content col-8">
                    <h3>Cam kết chất lượng</h3>
                    <p class="mb-0">Quạt ASIAvina luôn cam kết cung cấp các dòng quạt mát đạt chất lượng cao, mang đến cho khách hàng sự hài lòng về tính năng vượt trội của sản phẩm</p>
                    <p><a class="seemore" href="https://quatvietnam.com.vn/vi/about-us-vi/">Xem thêm</a><p>
                </div>
            </div>
        </div>
    </div>
</div>        </div>
    </section>

    <section class="hotline">
    <div class="hotline-container">
        <p class="mb-0">Xin gọi đến số hotline <span class="phone fs-30 ml-10">1800-555-521</span></p>
        <p>hoặc liên hệ trung tâm Dịch vụ và chăm soc khách hàng gần nhất</p>
    </div>
</section></main>


    <div id="contact-modal">
        <div class="btn btn-theme">
            <i class="far fa-comment-alt"></i>
            <span>Need help?</span>
        </div>

        <div class="modal">
            <h4 class="title">
                Xin để lại ý kiến của bạn                <div class="close"><i class="fas fa-times"></i></div>
            </h4>

            <form method="post" action="/?api=contact-form">

                    <div class="col-auto">
                        <label class="sr-only" for="input-name">Họ tên</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>

                                                            <input type="text" name="name" class="form-control" id="input-name" placeholder="Họ tên" required>
                                                    </div>
                    </div>


                    <div class="col-auto">
                        <label class="sr-only" for="input-email">Email</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </div>
                            </div>

                                                            <input type="email" name="email" class="form-control" id="input-email" placeholder="Email" required>
                                                    </div>
                    </div>


                    <div class="col-auto">
                        <label class="sr-only" for="input-content">Nội dung</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="far fa-comment-alt"></i>
                                </div>
                            </div>

                                                            <textarea class="form-control" id="input-content" name="content" placeholder="Nội dung" required></textarea>
                                                    </div>
                    </div>


                <p class="ta-c">
                    <button type="submit" class="btn btn-theme">Gửi</button>
                </p>
            </form>
        </div>

        <script>
        jQuery('#contact-modal .btn').click(function() {
            jQuery('#contact-modal .modal').stop().fadeIn(300);
        });

        jQuery('#contact-modal .close').click(function() {
            jQuery('#contact-modal .modal').stop().fadeOut(300);
        });
        </script>
    </div>

    <?php get_footer();?>

    <div id="search-form">
        <div class="container">
            <div class="close-button fs-25 ta-r c-white mt-50 cs-pointer">
                <i class="fas fa-times"></i>
            </div>

            <h2 class="ta-c fs-35 mt-50 mb-50">Bạn đang tìm kiếm gì?</h2>

            <div class="row">
                <div class="col col-lg-8 offset-lg-2 va-m">
                    <form action="https://quatvietnam.com.vn/vi/search/" method="get">
                        <div class="col-auto mb-20">
                            <label class="sr-only" for="input-search">Tìm kiếm trong Asiavina</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-search"></i>
                                    </div>
                                </div>

                                <input type="text" name="s" class="form-control" id="input-search" placeholder="Tìm kiếm trong Asiavina">
                            </div>
                        </div>

                        <div class="mt-10">

                                <a href="https://quatvietnam.com.vn/vi/product-category/quat-ban/" class="btn btn-sm btn-outline-light ml-10 mb-10">Quạt bàn</a>


                                <a href="https://quatvietnam.com.vn/vi/product-category/quat-dung/" class="btn btn-sm btn-outline-light ml-10 mb-10">Quạt đứng</a>


                                <a href="https://quatvietnam.com.vn/vi/product-category/quat-hop/" class="btn btn-sm btn-outline-light ml-10 mb-10">Quạt hộp</a>


                                <a href="https://quatvietnam.com.vn/vi/product-category/quat-lung/" class="btn btn-sm btn-outline-light ml-10 mb-10">Quạt lửng</a>


                                <a href="https://quatvietnam.com.vn/vi/product-category/quat-sac/" class="btn btn-sm btn-outline-light ml-10 mb-10">Quạt sạc</a>


                                <a href="https://quatvietnam.com.vn/vi/product-category/quat-san/" class="btn btn-sm btn-outline-light ml-10 mb-10">Quạt sàn</a>


                                <a href="https://quatvietnam.com.vn/vi/product-category/quat-thong-gio/" class="btn btn-sm btn-outline-light ml-10 mb-10">Quạt thông gió</a>


                                <a href="https://quatvietnam.com.vn/vi/product-category/quat-tran/" class="btn btn-sm btn-outline-light ml-10 mb-10">Quạt trần</a>


                                <a href="https://quatvietnam.com.vn/vi/product-category/quat-treo-tuong/" class="btn btn-sm btn-outline-light ml-10 mb-10">Quạt treo tường</a>

                                                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        jQuery('#search-form .close-button').click(function() {
            jQuery('#search-form').fadeOut(300);
        });
    </script>

    	<script type="text/javascript">
		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})()
	</script>
	<script type='text/javascript' src='https://quatvietnam.com.vn/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70' id='jquery-blockui-js'></script>
<script type='text/javascript' id='wc-add-to-cart-js-extra'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/vi\/?wc-ajax=%%endpoint%%","i18n_view_cart":"Xem gi\u1ecf h\u00e0ng","cart_url":"https:\/\/quatvietnam.com.vn","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='https://quatvietnam.com.vn/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=4.8.0' id='wc-add-to-cart-js'></script>
<script type='text/javascript' src='https://quatvietnam.com.vn/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4' id='js-cookie-js'></script>
<script type='text/javascript' id='woocommerce-js-extra'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/vi\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='https://quatvietnam.com.vn/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=4.8.0' id='woocommerce-js'></script>
<script type='text/javascript' id='wc-cart-fragments-js-extra'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/vi\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_ae6c55961a072dde02057ccee1b545c7","fragment_name":"wc_fragments_ae6c55961a072dde02057ccee1b545c7","request_timeout":"5000"};
/* ]]> */
</script>
<script type='text/javascript' src='https://quatvietnam.com.vn/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=4.8.0' id='wc-cart-fragments-js'></script>
<script type='text/javascript' src='https://quatvietnam.com.vn/wp-content/themes/asiavina/assets/bootstrap/js/bootstrap.bundle.min.js?ver=1.0' id='asiavina-bootstrap-js'></script>
<script type='text/javascript' src='https://quatvietnam.com.vn/wp-content/themes/asiavina/assets/fontawesome/js/all.min.js?ver=1.0' id='asiavina-fa-js'></script>
<script type='text/javascript' src='https://quatvietnam.com.vn/wp-content/themes/asiavina/assets/js/theme.js?ver=1.0' id='asiavina-theme-js'></script>
<script type='text/javascript' src='https://quatvietnam.com.vn/wp-includes/js/underscore.min.js?ver=1.8.3' id='underscore-js'></script>
<script type='text/javascript' id='wp-util-js-extra'>
/* <![CDATA[ */
var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
/* ]]> */
</script>
<script type='text/javascript' src='https://quatvietnam.com.vn/wp-includes/js/wp-util.min.js?ver=5.5.9' id='wp-util-js'></script>
<script type='text/javascript' id='woo-variation-swatches-js-extra'>
/* <![CDATA[ */
var woo_variation_swatches_options = {"is_product_page":"","show_variation_label":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='https://quatvietnam.com.vn/wp-content/plugins/woo-variation-swatches/assets/js/frontend.min.js?ver=1.1.2' id='woo-variation-swatches-js'></script>
<script type='text/javascript' src='https://quatvietnam.com.vn/wp-includes/js/wp-embed.min.js?ver=5.5.9' id='wp-embed-js'></script>
<script type="text/javascript">(function() {
				var expirationDate = new Date();
				expirationDate.setTime( expirationDate.getTime() + 31536000 * 1000 );
				document.cookie = "pll_language=vi; expires=" + expirationDate.toUTCString() + "; path=/; secure; SameSite=Lax";
			}());</script>
</body>
</html>
