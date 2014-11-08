<section class="Node Bordered">


    <h3 class="Underlined">User Registration</h3>

    <div class="Panel Info">
        <p>Classes used: Bordered</p>
    </div>

    <div class="Control-Group">
        <label class="Col-XS-3" for="demo-1-1">
            E&ndash;mail
        </label>
        <div class="Input-Group Col-XS-9">
            <input id="demo-1-1" type="text" value="example@domain.com"/>
            <span class="Info">We will send there confirmation e&ndash;mail, so please, use correct address</span>
        </div>
    </div>
    <div class="Control-Group">
        <label class="Col-XS-3" for="demo-1-2">
            Password
        </label>
        <div class="Input-Group Col-XS-9">
            <input id="demo-1-2" type="password" value="example"/>
            <span class="Info">More than 6 symbols</span>
        </div>
    </div>
    <div class="Control-Group">
        <label class="Col-XS-3" for="demo-1-3">
            Password again
        </label>
        <input class="Col-XS-9" id="demo-1-3" type="password"  value="example"/>
    </div>
    <div class="Control-Group">
        <label class="Col-XS-3" for="demo-1-4">Remember me</label>
        <div class="Input-Group Col-XS-9">
            <input id="demo-1-4" type="checkbox"/>
            <button class="Button End">Sign Up</button>
        </div>
    </div>
</section>
<section class="Node Labels-Bold Labels-Right">

    <h3 class="Underlined">Create publication</h3>

    <div class="Panel Info">
        <p>Classes used: Labels-Bold, Labels-Right</p>
    </div>

    <div class="Control-Section">
        <div class="Control-Group Grid">
            <label class="Col-XS-2" for="demo-2-1">Post title:</label>
            <input class="Col-XS-10" id="demo-2-1" type="text"/>
        </div>
        <div class="Control-Group Grid">
            <label class="Col-XS-2" for="demo-2-2">Post Category:</label>
            <div class="Dropdown Col-XS-10">
                <div class="Dropdown-Title" id="demo-2-2">Choose category <span class="Dropdown-Toggle Icon Icon-chevron-down"></span></div>
                <ul class="Dropdown-Content">
                    <li><a href="#">Publications</a></li>
                    <li><a href="#">Drafts</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="Control-Section">
        <div class="Control-Group Grid">
            <label class="Col-XS-2" for="demo-2-3">Post content:</label>
            <textarea class="Col-XS-10" id="demo-2-3"></textarea>
        </div>
    </div>

</section>

<section class="Node">
    <h3 class="Underlined">Input-Select</h3>
    <div class="Panel Info">
        <p>Class used: Input-Select</p>
    </div>
    <div class="Control-Section">
        <div class="Control-Group">
            <label class="Col-XS-2" for="Demo-3-1">Choose item</label>
            <div class="Input-Select Col-XS-10" id="Demo-3-1">
                <input type="text" name="input-select-value" placeholder="Type"/>
                <input type="hidden" name="input-select-index"/>
                <ul class="Input-Select-Content">
                    <li data-index="1"><a href="">Caught</a></li>
                    <li data-index="2"><a href="">In</a></li>
                    <li data-index="3"><a href="">A</a></li>
                    <li data-index="4"><a href="">Web</a></li>
                    <li data-index="5"><a href="">Removed</a></li>
                    <li data-index="5"><a href="">From</a></li>
                    <li data-index="5"><a href="">The</a></li>
                    <li data-index="5"><a href="">World</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="Node">
<section class="Node Grid">
    <h3 class="Underlined">Personal Info</h3>
    <div class="Control-Group">
        <label class="Col-3" for="demo-3-1">Personal address</label>
        <div class="Col-9 Input-Group Grid Split">
            <input class="Col-6" type="text" id="demo-3-1"/>
            <input class="Col-3" type="text"/>
            <input class="Col-3" type="text"/>
        </div>
        <div class="Input-Group Grid Split Col-9 End">
            <span class="Info Col-6">Street</span>
            <span class="Info Col-3">Building</span>
            <span class="Info Col-3">Appartment</span>
        </div>
    </div>
    <div class="Control-Group">
        <label class="Col-3" for="demo-3-2">Mobile Phone Number</label>
        <div class="Col-9 Input-Group Grid Split">
            <div class="Dropdown Col-3">
                <div class="Dropdown-Title" id="demo-2-2">Country Code <span class="Dropdown-Toggle Icon Icon-chevron-down"></span></div>
                <ul class="Dropdown-Content">
                    <li><a href="#">Ukraine +3</a></li>
                    <li><a href="#">Russia +7</a></li>
                    <li><a href="#">Belarus +375</a></li>
                </ul>
            </div>
            <div class="Dropdown Col-3">
                <div class="Dropdown-Title" id="demo-2-2">Operator Code <span class="Dropdown-Toggle Icon Icon-chevron-down"></span></div>
                <ul class="Dropdown-Content">
                    <li><a href="#">MTS 050</a></li>
                    <li><a href="#">Kyivstar 096</a></li>
                    <li><a href="#">Kyivstar 097</a></li>
                    <li><a href="#">Life :) 098</a></li>
                </ul>
            </div>
            <input class="Col-6" type="text"/>
        </div>
    </div>
    <div class="Control-Group">
        <label class="Col-3" for="demo-3-2">Month salary</label>
        <div class="Col-9 Input-Group Addon">
            <span class="Prefix Col-2 Col-SM-1">$</span>
            <input class="Col-10 Col-SM-11" id="demo-3-2" type="text"/>

        <label for="demo-3-1">Month Salary</label>
        <div class="Input-Group Addon">
            <span class="Prefix Col-2">$</span>
            <input class="Col-10" id="demo-3-1" type="text"/>
        </div>
    </div>
</section>