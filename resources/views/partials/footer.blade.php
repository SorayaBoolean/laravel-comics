<div>
    <div class="footer_menu">
        <div class="header_footer">

            <div class="footer_menu_list">
                <div>
                    <h5>DC COMICS</h5>
                    <ul>
                    <li> 
                      <a href="">Characters</a>
                    </li>
                    <li> 
                      <a href="">Movies</a>
                    </li>
                    <li> 
                      <a href="">Tv</a>
                    </li>
                    <li> 
                      <a href="">Videos</a>
                    </li>
                    <li> 
                      <a href="">Games</a>
                    </li>
                    <li> 
                      <a href="">News</a>
                    </li>
                    </ul>   
                </div>
                <div>
                    <h5>DC</h5>
                    <ul v-for="(doc, index) in Dc" :key="index">
                        <li><a href="">ciao</a></li>
                        <li><a href="">ciao</a></li>
                        <li><a href="">ciao</a></li>
                        <li><a href="">ciao</a></li>
                        <li><a href="">ciao</a></li>
                        <li><a href="">ciao</a></li>
                    </ul>   
                </div>
                <div>
                    <h5>SITES</h5>
                    <ul v-for="(site, index) in Sites" :key="index">
                    <li> 
                      <a href="">ciao</a>
                    </li>
                    <li> 
                      <a href="">ciao</a>
                    </li>
                    <li> 
                      <a href="">ciao</a>
                    </li>
                    <li> 
                      <a href="">ciao</a>
                    </li>
                    <li> 
                      <a href="">ciao</a>
                    </li>
                    </ul>   
                </div>
                  <div>
                     <h5 class="position">SHOP</h5>
                    <ul class="position">
                    <li> 
                      <a href="">Shop DC</a>
                    </li>
                    <li> 
                      <a href="">Shop DC Collectibles</a>
                    </li>
                    </ul>   
                </div>
               
            </div>
        
        <div class="Logo_Container">
            <img src="{{asset('images/logo-bg.jpg')}}" alt="logo-big">
        </div>
    </div>
        

        <div class="bottom_footer">
            <div id="sign_up">
                <h4><a href="#">SIGN-UP NOW!</a></h4>
            </div>
            <div id="follow_us">
                <h4>FOLLOW US!</h4>
                <div id="social_links">
                    <img src="@/assets/img/footer-facebook.png" alt="logo-fb">
                    <img src="@/assets/img/footer-twitter.png" alt="logo-tw">
                    <img src="@/assets/img/footer-youtube.png" alt="logo-y">
                    <img src="@/assets/img/footer-pinterest.png" alt="logo-p">
                    <img src="@/assets/img/footer-facebook.png" alt=""> 
                </div>
            </div>

        </div>
        
    </div>

    
</div>