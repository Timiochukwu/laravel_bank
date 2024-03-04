
<!-- #/ container -->
</div>
<!--**********************************
            Content body end
        ***********************************-->



<!--**********************************
        Main wrapper end
    ***********************************-->



<div class="footer">
    <div class="copyright">
        <p>Copyright &copy; Designed & Developed by Client
                {{ now()->year }}
        </p>
    </div>
</div>
<!--**********************************
        Scripts
    ***********************************-->
    <script>
        console.log("I GOT HERE");
    
    function calculateInstallment(){
        const amountInput = document.getElementById('amount');
        const installmentCountInput = document.getElementById('installment_counts');
        const installmentAmountInput = document.getElementById('installment_amount');
        const amountPlusTenPercentInput = document.getElementById('amount_plus_ten_percent');

        console.log(installmentCountInput.value);

       const amountValue = parseFloat(amountInput.value);
       const installmentCountValue = parseFloat(installmentCountInput.value);
       

        if(!isNaN(amountValue) && !isNaN(installmentCountValue) && installmentCountValue != 0){

            
            if(installmentCountValue <= 3){
                const installmentAmountValue = (amountValue * 1.1) / installmentCountValue;
                const amountPlusTenPercentValue = amountValue * 1.1;
                
                installmentAmountInput.value = installmentAmountValue.toFixed(2);
             amountPlusTenPercentInput.value = amountPlusTenPercentValue.toFixed(2);
            }else{
                const installmentAmountValue = (amountValue * 1.2) / installmentCountValue;
                const amountPlusTenPercentValue = amountValue * 1.2;
                
                installmentAmountInput.value = installmentAmountValue.toFixed(2);
             amountPlusTenPercentInput.value = amountPlusTenPercentValue.toFixed(2);
                
            }
                     
}else{
    
    installmentAmountInput.value =    '';
    amountPlusTenPercentInput.value = '';

        }
    }

</script>

<script src="{{asset('Layout/plugins/common/common.min.js')}} "></script>
<script src="{{asset('Layout/js/custom.min.js')}}"></script>
<script src="{{asset('Layout/js/settings.js')}}"></script>
<script src="{{asset('Layout/js/gleek.js')}}"></script>
<script src="{{asset('Layout/js/styleSwitcher.js')}}"></script>



</body>

</html>