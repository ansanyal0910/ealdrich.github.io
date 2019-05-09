<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <?php include("../../head.php"); ?>
  <?php $page = "Teaching"; ?>
  <?php $subpage = "Econ211C"; ?>
  <body>
    <div><?php include("../../mainMenu.php"); ?></div>
    <div><?php include("../teachingMenu.php"); ?></div>
    <div class="outer">
      <div id="section">Econ 211C - Time Series</div>
      <div id="subSection">Course Description (<a class="body" href="syllabus.pdf">Syllabus</a>)</div>
      <div style="line-height: 140%; padding-left: 50px">
        This course is a foundational time series course for doctoral students in Economics.
        Lectures will cover the mathematics, notation and theory of time series and homework
        assignments will be designed to apply the methods learned in lecture to actual data.
        Computing will be an essential component of the assignments - Matlab and R are
        recommend software programs.
      </div>
      <div id="subSection">Course Notes</div>
      <div id="lecUnit">Unit 1 - ARMA Processes</div>
      <div id="lecSection">
        <a class="body" href="LectureSlides/unit1-sec1-stationarity.pdf">Section 1 - Stationarity</a>
      </div>
      <div id="lecSection">
        <span><a class="body" href="LectureSlides/unit1-sec2-lag.pdf">Section 2 - Lag Operators</a></span>
      </div>
      <div id="lecSection">
        <span>
          <a class="body" href="LectureSlides/unit1-sec3-ma.pdf">Section 3 - Moving Average Processes</a>
        </span>
        <span style="margin-left:10px">
          (<a class="body", href="RScripts/ma-example.R">ma-example.R</a>,
           <a class="body", href="RScripts/correlation-linearity.R">correlation-linearity.R</a>)
        </span>
      </div>
      <div id="lecSection">
        <span>
          <a class="body" href="LectureSlides/unit1-sec4-ar.pdf">Section 4 - Autoregressive Processes</a>
        </span>
        <span style="margin-left:10px">(<a class="body", href="RScripts/ar1-sim.R">ar1-sim.R</a>)</span>
      </div>
      <div id="lecSection">
        <span><a class="body" href="LectureSlides/unit1-sec5-arma.pdf">Section 5 - ARMA Processes</a></span>
      </div>
      <div id="lecSection">
        <span><a class="body" href="LectureSlides/4-16-13.pdf">Section 6 - Autocovariance Generating Function/Causality</a></span>
      </div>
      <div id="lecSection">
        <span><a class="body" href="LectureSlides/4-18-13.pdf">Section 7 - Invertibility/Causality</a></span>
      </div>
      <div id="lecUnit">Unit 2 - Forecasting</div>
      <div id="lecSection">
        <span><a class="body" href="LectureSlides/unit2-sec1-linproj.pdf">Section 1 - Linear Projection</a></span>
      </div>
      <div id="lecSection">
        <span><a class="body" href="LectureSlides/unit2-sec2-forecasting.pdf">Section 2 - Forecasting</a></span>
      </div>
      <div id="lecUnit">Unit 3 - Maximum Likelihood Estimation</div>
      <div id="lecSection">
        <span><a class="body" href="LectureSlides/unit3-sec1-mle.pdf">Section 1 - Likelihoods</a></span>
      </div>
      <div id="lecSection">
        <span><a class="body" href="LectureSlides/unit3-sec2-numerical.pdf">Section 2 - Numerical Optimization</a></span>
      </div>
      <div id="lecUnit">Unit 4 - Vector Autoregression</div>
      <div id="lecSection">
        <span><a class="body" href="LectureSlides/unit4-sec1-var.pdf">Section 1 - Vector Autoregression</a></span>
      </div>
      <div id="lecSection">
        <span><a class="body" href="LectureSlides/unit4-sec2-acf.pdf">Section 2 - Autocovariances of VARs</a></span>
      </div>
      <div id="lecUnit">Unit 5 - The Kalman Filter</div>
      <div id="lecSection">
        <span><a class="body" href="LectureSlides/unit5-sec1-statespace.pdf">Section 1 - State Space Models</a></span>
      </div>
      <div id="lecSection">
        <span><a class="body" href="LectureSlides/unit5-sec2-kalman.pdf">Section 2 - The Kalman Filter</a></span>
      </div>
      <div id="lecSection">
        <span><a class="body" href="LectureSlides/unit5-sec3-mle.pdf">Section 3 - Maximum Likelihood Estimation of State-Space Models</a></span>
      </div>
      <div id="lecUnit">Unit 6 - Generalize Method of Moments</div>
      <div id="lecSection">
        <span><a class="body" href="LectureSlides/unit6-sec1-gmm.pdf">Section 1 - Generalized Method of Moments</a></span>
      </div>
      <div id="lecSection">
        <span><a class="body" href="LectureSlides/unit6-sec2-optmat.pdf">Section 2 - Optimal Weighting Matrix for GMM</a></span>
      </div>
      <div id="lecSection">
        <span><a class="body" href="LectureSlides/unit6-sec3-restrict.pdf">Section 3 - Testing GMM Overidentifying Restrictions </a></span>
      </div>
    </div>
    </div>
  </body>
</html>
