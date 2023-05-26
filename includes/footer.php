<script>
    function search(){
        var input = document.getElementById("check_search");
        if(input.checked == false){
        document.getElementById("search").classList.add("block");
        document.getElementById("search").classList.remove("hidden");
        document.getElementById("svg_search").classList.add("animate-spin");
        input.checked = true
        }else{
             document.getElementById("search").classList.add("hidden")
             document.getElementById("search").classList.remove("block")
             document.getElementById("svg_search").classList.remove("animate-spin");
             input.checked = false
        }
    }
</script>