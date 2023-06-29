window.onscroll = () => sampleFunction();

function sampleFunction() {
    let top = document.getElementById("logoTop")
    let side = document.getElementById("leftHeaderPart")
    let search = document.getElementById("searchNavbar")
    let head = document.getElementById("header")
    let scrollSearch = document.getElementById("scrollSearch")
    let scroll = window.scrollY;
    if (scroll >60) {
        if (!top.classList.contains("d-lg-none")) top.classList.add("d-lg-none");
        if (top.classList.contains('d-lg-flex')) {
            top.classList.remove('d-lg-flex');
        }
        if (!side.classList.contains("d-flex")) side.classList.add("d-flex");
        if (side.classList.contains('d-none')) {
            side.classList.remove('d-none');
        }
        if (!search.classList.contains("searchNavbar")) search.classList.add("searchNavbar");
        if (search.classList.contains('w-md-75')) {
            search.classList.remove('w-md-75');
        }
        if (!scrollSearch.classList.contains("scrollSearch")) scrollSearch.classList.add("scrollSearch");
        if (scrollSearch.classList.contains('scrollSearchReverse')) {
            scrollSearch.classList.remove('scrollSearchReverse');
        }
        if (!head.classList.contains("headerTransform")) head.classList.add("headerTransform");


    }
    else {
        if (!top.classList.contains("d-lg-flex")) top.classList.add("d-lg-flex");
        if (top.classList.contains('d-lg-none')) top.classList.remove('d-lg-none');

        if (!side.classList.contains("d-none")) side.classList.add("d-none");
        if (side.classList.contains('d-md-flex')) side.classList.remove('d-md-flex');

        if (!search.classList.contains("w-md-75")) search.classList.add("w-md-75");
        if (search.classList.contains('searchNavbar')) search.classList.remove('searchNavbar');

        if (!scrollSearch.classList.contains("scrollSearchReverse")) scrollSearch.classList.add("scrollSearchReverse");
        if (search.classList.contains('scrollSearch')) search.classList.remove('scrollSearch');

        if (head.classList.contains('headerTransform')) head.classList.remove('headerTransform');
    }
}