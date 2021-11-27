<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    var dd = 0;
    $(".minimize").click(function(){
        $(".link-title").toggleClass("hidden");
        $(".body-container").toggleClass("width-controller-body");

        if(dd==0){
            $("#sidebar").css("width","5vw");
            dd=1;
        }else{
            $("#sidebar").css("width","16vw");
            dd=0;
        }

    });

</script>
</body>
</html>

