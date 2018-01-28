<div class="col-sm-12">
    <div class="row col-sm-10 offset-1 window">
        <div class="col-md-3 commands">
            the commands go here
        </div>
        <div class="col-md-9">
            <ul class="dash">
                <li id="tab1" ><a href="#">Payement</a></li>
                <li id="tab2" class="current"><a href="#">Voting</a></li>
            </ul>
            <div id="panel1" class="panel1">
                <p>
                    Contents for Panel 1 go here
                </p>
            </div>
            <div id="panel2" class="panel2">
                <p>
                    Contents for Panel 2 go here
                </p>
            </div
        </div>
    </div>

</div>
<script>
    var panel2 = document.getElementById('panel2'),
            tab2 = document.getElementById('tab2'),
            tab1 = document.getElementById('tab1');
    panel2.style.display = 'none';
    var tab1 = document.getElementById('tab1');
    tab1.addEventListener('click', function(){
     tab2.removeAttribute('class');
     tab1.classList.add('current');
    });
</script>



