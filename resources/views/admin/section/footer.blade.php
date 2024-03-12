
<!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
    <div class="copyright">
        <p>Copyright &copy; Designed & Developed by Client
                {{ now()->year }}
        </p>
    </div>
</div>
<!--**********************************
            Footer end
        ***********************************-->
</div>
<!--**********************************
        Main wrapper end
    ***********************************-->

<!--**********************************
        Scripts
    ***********************************-->
    
<script src="{{asset('js/sweetalert2.all.min.js')}} "></script>

<script src="{{asset('Layout/plugins/common/common.min.js')}} "></script>
<script src="{{asset('Layout/js/custom.min.js')}}"></script>
<script src="{{asset('Layout/js/settings.js')}}"></script>
<script src="{{asset('Layout/js/gleek.js')}}"></script>
<script src="{{asset('Layout/js/styleSwitcher.js')}}"></script>


<script>


    function confirmDelete(userId, itemType) {
console.log(itemType)

        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: `Yes, delete ${itemType}!`
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('deleteForm'+ userId).submit();

                Swal.fire({                    
                    title: "Deleted!",
                    text: `${itemType} has been deleted.`,
                    icon: "success"
                });
            }
        });
    }

</script>

</body>

</html>