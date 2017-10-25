<?php get_header(); ?>
<!-- .secondary-banner -->
<div class="secondary-banner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/bannerinterior3-2.jpg);">
  <div class="container">
    <h1>Loans</h1>
  </div>
</div>
<!-- end .secondary-banner  -->


<!-- #form -->
<section id="about" class="section border-block __up">
  <div class="container">
    <div class="row" style ="margin-bottom:125px;">
      <div class="col-md-8">
        <div class="loan-title">
          <h1 class ="section-title">Business Loans for construction companies and independent contractors</h1>
        </div>
      </div>
      <div class="col-md-4">
          <a href = "<?php echo get_field('file')['url']; ?>" target="_blank" target="_blank" class = "btn btn-lg btn-primary btn-download"> Download Credit Application </a>
      </div>  
      <div class="col-md-8">
        <div class="loan-content">
          <h2>Loan Description</h2>
          <p>
            The loan is based on a line of credit of no more than $500,000 and is project specific.  Advances under the line of credit are discounted whereby the subcontractor or small prime will receive 95% of the requested advance amount.  CFA will directly be repaid 100% of the requested advance either from the public sector unit or the contractor once funds are disbursed by the public sector unit.<br><br>

            The term of the line of credit is generally for sixty days.  If advances under the line of credit are not repaid at the end of sixty days, interest will begin to accrue on the sixty-first day for a period not to exceed ninety days from the initial advance; at which time those advances still outstanding  on the ninetieth day must be repaid.<br><br>

            As stated, repayment of the loan will generally come from the public unit to which the subcontractor/prime have entered into an agreement to perform certain services.  The repayment will generally be based on the contractor’s draw request/account receivable as submitted to the public sector unit.<br>
            All parties to the transaction will acknowledge CFA’s security interest in the draw request and the reimbursement proceeds from the public sector unit.<br>
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <h2 class ="hidden-xs"><br><br></h2>
        <span class = "side-text">
          - Funding lines up to $500,000<br>
          - Line of credit is for 60 Days
        </span>
      </div>
      <!-- -->

      <div class="col-md-8">
        <div class="loan-content">
          <h2>Candidates</h2>
          <p>
            CFA will approve candidates who have met the qualifications necessary to be authorized contractors on public sector projects and who also meet certain credit requirements of CFA.<br><br>

            Accordingly, CFA will provide financing of approved and valid draw requests/accounts receivable due from public sectors, as long as the contractor is in keeping with the qualification requirements of the public sector unit.
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <h2 class ="hidden-xs"><br><br></h2>
        <span class = "side-text2">
          - Construction Companies<br>
          - Independent Contractors
        </span>
      </div>

      <!-- -->

      <div class="col-md-8">
        <div class="loan-content">
          <h2>Loan Checklist</h2>
          <p>
            • Completion of CFA application (<a href="<?php echo get_field('file')['url']; ?>" target="_blank" target="_blank" class ="link">Click here to Download Application</a>)<br>
            • Copy of construction contract with either the prime or the public sector unit<br>
            • At least three years in business, listing approved and completed projects<br>
            • No history of bankruptcies in the last seven years<br>
            • Two unrelated business references<br>
          </p>
        </div>
      </div>
      <div class="col-md-4">
          <a href = "<?php echo get_field('file')['url']; ?>" target="_blank" target="_blank" class = "btn btn-lg btn-primary btn-download"> Download Credit Application </a>
      </div>

      <!-- -->
    </div>
  </div>
</section>
    <!-- end #form -->
<?php get_footer(); ?>