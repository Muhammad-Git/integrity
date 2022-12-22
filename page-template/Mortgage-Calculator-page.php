<?php /* Template Name: Mortgage Calculator - Page Template */ ?>
<?php get_header(); ?>
<section class="home-sec-4"style="background-image: url('https://insitechstaging.com/demo/integrity/wp/wp-content/uploads/2022/09/Integrity-Calculator-Banner-01.png');">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 col-md-12">
            <div class="text">
               <div class="mt-4">
               	<p><?php echo wpautop(the_content()); ?></p>
               	<br><br>
                  <!-- MORTGAGE LOAN CALCULATOR BEGIN -->
                       <script type="text/javascript">
mlcalc_default_calculator = 'mortgage';
mlcalc_currency_code      = 'usd';
mlcalc_amortization       = 'year_nc';
mlcalc_purchase_price     = '300,000';
mlcalc_down_payment       = '20';
mlcalc_mortgage_term      = '30';
mlcalc_interest_rate      = '4.5';
mlcalc_property_tax       = '3,000';
mlcalc_property_insurance = '1,500';
mlcalc_pmi                = '0.52';
mlcalc_loan_amount        = '250,000';
mlcalc_loan_term          = '15';
</script>
						<script type="text/javascript">if(typeof jQuery == "undefined"){document.write(unescape("%3Cscript src='" + (document.location.protocol == 'https:' ? 'https:' : 'http:') + "//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js' type='text/javascript'%3E%3C/script%3E"));mlcalc_jquery_noconflict=1;};</script><div style="font-weight:normal;font-size:9px;font-family:Tahoma;padding:0;margin:0;border:0;text-align:center;background:transparent;color:#EEEEEE;width:300px;text-align:right;padding-right:10px;" id="mlcalcWidgetHolder"><script type="text/javascript">document.write(unescape("%3Cscript src='https://www.mlcalc.com/widget-wide.js' type='text/javascript'%3E%3C/script%3E"));</script><a href="https://www.mlcalc.com/" style="font-weight:normal;font-size:9px;font-family:Tahoma;color:#EEEEEE;text-decoration:none;">Mortgage Loan Calculator</a></div>
					<!-- MORTGAGE LOAN CALCULATOR END -->
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<?php get_footer();?>








