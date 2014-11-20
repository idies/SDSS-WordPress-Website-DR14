<!DOCTYPE html>
<html class="no-js" lang="en-US">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>IDL Help for IDLUTILS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Gentium+Book+Basic:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&#038;subset=latin%2Clatin-ext&#038;ver=3.9.2">
<link rel="stylesheet" href="/wp-includes/css/dashicons.min.css?ver=3.9.2">
<link rel="stylesheet" href="/wp-includes/css/admin-bar.min.css?ver=3.9.2">
<link rel="stylesheet" href="/wp-content/plugins/easy-bootstrap-shortcodes/styles/font-awesome.min.css?ver=3.9.2">
<link rel="stylesheet" href="/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=3.8.1">
<link rel="stylesheet" href="/wp-content/plugins/easy-bootstrap-shortcodes/styles/ebs_dynamic_css.php?ver=3.9.2">
<link rel="stylesheet" href="/wp-content/themes/sdss/assets/css/main.min.css?ver=bb52954a17d98eabffff2776aa2350bf">
<script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
<script type='text/javascript' src='/wp-content/themes/sdss/assets/js/vendor/modernizr-2.7.0.min.js'></script>
<script type='text/javascript' src='/wp-content/themes/sdss/assets/js/jquery.kinetic.js'></script>
<script type='text/javascript' src='/wp-content/themes/sdss/assets/js/vendor/jquery-ui-1.10.4.custom.min.js'></script>
<script type='text/javascript' src='/wp-content/themes/sdss/assets/js/vendor/jquery.tocify.js'></script>
<link rel="shortcut icon" href="http://www.sdss.org/wp-content/uploads/2014/07/sdss-favicon.png"/>
<link rel="alternate" type="application/rss+xml" title="SDSS Feed" href="http://www.sdss.org/feed/">

</head>
<body class="error404 logged-in admin-bar no-customize-support">

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.    </div>
  <![endif]-->

  <header role="banner">
  <div class="navbar navbar-inverse navbar-static-top" >
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
            <div class="navbar-header">
                    <div class="hidden-xs">
                    <a class="navbar-brand" href="http://www.sdss.org/">
                          <img src="/wp-content/uploads/2014/05/sdsslogowhite.png" alt="sdsslogo" class="img-responsive">
                   </a>
                   </div>
                   <div class="visible-xs">
                          <img src="/wp-content/uploads/2014/05/sdsslogowhite.png" alt="sdsslogo" style="width:200px">
                   </div>
            </div>
              </div>
      <div class="col-sm-9">&nbsp;
                </div>
        </div>
        </div>
          </div>
</header>
<div class="wrap container" role="document">
    
<div class="content row">
<h1 id="Top">IDL Help for IDLUTILS</h1>
<h2>Overview</h2>
<p>This page was created by the IDL library routine
<code>make_html_help</code> (from version v5_5_8 of
idlutils).  For more information on this routine,
refer to the IDL Online Help Navigator or type: </p>
<pre>IDL&gt; ? make_html_help</pre>
<p>at the IDL command line prompt.</p>
<p>This file is based on version <strong>v5_5_8</strong> of idlutils.</p>
<p><strong>Last modified: </strong>Thu Feb 28 12:12:56 2013.</p>
<hr />
<h2 id="ROUTINELIST">List of Routines</h2>
<ul>
<li><a href="#ACSSIP_AD2XY">ACSSIP_AD2XY</a> : 
Read new ACS _flt.fits header to invert distortion matrix and</li>
<li><a href="#ACSSIP_INVERT">ACSSIP_INVERT</a> : 
Iterates the distortion correction to invert the distortion pixel map.</li>
<li><a href="#ACSSIP_XY2AD">ACSSIP_XY2AD</a> : 
Read new ACS _flt.fits header to convert pixel locations into</li>
<li><a href="#ADJUST_ERROR">ADJUST_ERROR</a> : 
given data points, uncertainties, and mean value, determines</li>
<li><a href="#ALM2HEALPIX">ALM2HEALPIX</a> : 
Compute healpix map from spherical harmonic transform (Alm)</li>
<li><a href="#ANG2PIX_RING">ANG2PIX_RING</a> : 
Renders the RING scheme pixel number Ipring for a pixel which, given the</li>
<li><a href="#ANGDIDIS">ANGDIDIS</a> : 
Compute angular diameter distancea (for c/H_0=1).</li>
<li><a href="#ANGLES_TO_XYZ">ANGLES_TO_XYZ</a> : 
Convert spherical coordinates (r,phi,theta) into Cartesion coordinates</li>
<li><a href="#ASINH">ASINH</a> : 
Return the inverse hyperbolic sine of the argument</li>
<li><a href="#ASTROM_ENGINE">ASTROM_ENGINE</a> : 
Compute astrometric solution for a list of stars &amp; catalogue stars</li>
<li><a href="#ASTROM_TWEAK">ASTROM_TWEAK</a> : 
Tweak astrometric solution, given a good initial guess</li>
<li><a href="#ATV">ATV</a> : Interactive display of 2-D images.</li>
<li><a href="#ATV_HEALCART_IND">ATV_HEALCART_IND</a> : 
Generate and cache healcart pixel index array and header for atv</li>
<li><a href="#ATV_JOE_WRITEPS">ATV_JOE_WRITEPS</a> : 
Write a PostScript file of the current ATV display w/out using a widget</li>
<li><a href="#BALKAN_PLOT">BALKAN_PLOT</a> : plot balkans of a set of polygons
</li>
<li><a href="#BEATDRIVE">BEATDRIVE</a> : 
test a new disk partition by writing it full of data and verifying</li>
<li><a href="#BEATDRIVE_CHECK">BEATDRIVE_CHECK</a> : 
test a new disk partition by reading output of beatdrive.pro</li>
<li><a href="#BH_RDFORT">BH_RDFORT</a> : 
Read 4*E(B-V) for Burstein &amp; Heiles reddening maps.</li>
<li><a href="#BITMASK_WIDGET">BITMASK_WIDGET</a> : 
Set a bitmask according to a set of radial buttons from user</li>
<li><a href="#BLANTON_ONED_MEANPLOT">BLANTON_ONED_MEANPLOT</a> : 
plot sliding mean of one quantity vs one other</li>
<li><a href="#BLANTON_WEIGHTED_MEAN_SURFACE">BLANTON_WEIGHTED_MEAN_SURFACE</a>
 : make an image of the weighted mean for a 2-d set of measurements</li>
<li><a href="#BSPLINE_ACTION">BSPLINE_ACTION</a> : 
1) Construct banded bspline matrix, with dimensions [ndata, bandwidth]</li>
<li><a href="#BSPLINE_BKPTS">BSPLINE_BKPTS</a> : 
Choose bkpts for b-spline given different constraints</li>
<li><a href="#BSPLINE_FIT">BSPLINE_FIT</a> : 
Calculate a B-spline in the least-squares sense</li>
<li><a href="#BSPLINE_ITERFIT">BSPLINE_ITERFIT</a> : 
Calculate a B-spline in the least squares sense with rejection</li>
<li><a href="#BSPLINE_MASKPOINTS">BSPLINE_MASKPOINTS</a> : 
Perform simple logic of which breakpoints to mask</li>
<li><a href="#BSPLINE_PSF_ACTION">BSPLINE_PSF_ACTION</a> : 
Calculate the action matrix for a Radial B-spline with PSF convolution</li>
<li><a href="#BSPLINE_RADIAL">BSPLINE_RADIAL</a> : 
Calculate a Radial B-spline in the least squares sense with rejection</li>
<li><a href="#BSPLINE_RADIAL_VALU">BSPLINE_RADIAL_VALU</a> : 
1) Evaluate a radial bspline set (see bspline_radial) at the 2-d</li>
<li><a href="#BSPLINE_VALU">BSPLINE_VALU</a> : 
1) Evaluate a bspline set (see create_bsplineset) at specified</li>
<li><a href="#BVALU2D">BVALU2D</a> : 
Evaluate a bspline fit over 2 dependent variables</li>
<li><a href="#CAPSTR__DEFINE">CAPSTR__DEFINE</a> : 
Create the structure for a cap</li>
<li><a href="#CAP_DISTANCE">CAP_DISTANCE</a> : 
Return distance from coordinates to a cap, in degrees.</li>
<li><a href="#CATFITS">CATFITS</a> : 
Read and concatenate a bunch of binary FITS tables</li>
<li><a href="#CCM_FITRV_F">CCM_FITRV()</a> : 
Does a simple fit to R_V and normalization</li>
<li><a href="#CIRCLE_CAP">CIRCLE_CAP</a> : 
Return a circular cap centered on a certain set of coordinates.</li>
<li><a href="#CMPS_FORM">CMPS_FORM</a> : 
This function puts up a form the user can configure a PostScript</li>
<li><a href="#CMP_FITS_FILES">CMP_FITS_FILES</a> : 
Compare the contents of two FITS files.</li>
<li><a href="#COMDIS">COMDIS</a> : 
Compute comoving line-of-sight distances (for c/H_0=1).</li>
<li><a href="#COMDIS2">COMDIS2</a> : 
Compute comoving line-of-sight distances (for c/H_0=1).</li>
<li><a href="#COMPUTECHI2">COMPUTECHI2</a> : 
Solve the linear set of equations Ax=b using SVD</li>
<li><a href="#CONSTRUCT_CAP">CONSTRUCT_CAP</a> : Create the structure for a cap
</li>
<li><a href="#CONSTRUCT_POLYGON">CONSTRUCT_POLYGON</a> : 
Create the structure for a polygon.</li>
<li><a href="#CONSTRUCT_VERTEX">CONSTRUCT_VERTEX</a> : 
Create the structure for a vertex.</li>
<li><a href="#COPY_CAPS">COPY_CAPS</a> : 
copy information about caps from one polygon to another</li>
<li><a href="#COUNT_FREELUN">COUNT_FREELUN</a> : 
Count the number of logical file pointers (LUNs) that are available</li>
<li><a href="#CPBACKUP">CPBACKUP</a> : Copy a file to a backup file name.</li>
<li><a href="#CR">CR</a> : Wrapper procedure on dpf_reject_cr().</li>
<li><a href="#CROSSPROD">CROSSPROD</a> : 
compute cross product of two vectors or arrays of vectors</li>
<li><a href="#CSURVEY2EQ">CSURVEY2EQ</a> : 
Convert from corrected lambda, eta (SDSS survey coordinates) to ra, dec</li>
<li><a href="#CURRENT_MJD">CURRENT_MJD</a> : Transform systime() to current MJD.
</li>
<li><a href="#DCOMDISDZ">DCOMDISDZ</a> : 
Compute differential comoving line-of-sight distances (for c/H_0=1).</li>
<li><a href="#DCOMVOLDZ">DCOMVOLDZ</a> : 
Compute differential comoving volume element dV_c/dz per unit solid angle.</li>
<li><a href="#DEC2HMS">DEC2HMS</a> : 
convert decimal number to HH:MM:SS (base sixty)</li>
<li><a href="#DESTRUCT_POLYGON">DESTRUCT_POLYGON</a> : 
Destroy the structure for a polygon.</li>
<li><a href="#DFPSCLOSE">DFPSCLOSE</a> : 
Finkbeiner's routine to close a PostScript file previously opened</li>
<li><a href="#DFPSPLOT">DFPSPLOT</a> : 
Finkbeiner's routine to open a PostScript file for plotting commands.</li>
<li><a href="#DIERFC">DIERFC</a> : 
Inverse of the Complementary Error Function &quot;erfc^{-1}(x)&quot;</li>
<li><a href="#DISPLAY">DISPLAY</a> : 
This procedure will display an image with the TV command that fills</li>
<li><a href="#DJS_ANGLE_GROUP">DJS_ANGLE_GROUP</a> : 
Group objects using their coordinates on the sphere.</li>
<li><a href="#DJS_ANGLE_MATCH">DJS_ANGLE_MATCH</a> : 
Given two lists of coordinates on a sphere, find matches within an</li>
<li><a href="#DJS_ANGLE_NMATCH">DJS_ANGLE_NMATCH</a> : 
Given two lists of coordinates on a sphere, find matches within an</li>
<li><a href="#DJS_ANGPOS">DJS_ANGPOS</a> : Put an angle into the range [0, 360).
</li>
<li><a href="#DJS_ANGSGN">DJS_ANGSGN</a> : 
Put an angle into the range [-180, 180).</li>
<li><a href="#DJS_ARROW">DJS_ARROW</a> : 
Modified version of ARROW to allow a string for the color(s)</li>
<li><a href="#DJS_AVSIGCLIP">DJS_AVSIGCLIP</a> : 
Average multiple images with sigma-rejection.</li>
<li><a href="#DJS_AXIS">DJS_AXIS</a> : Modified version of AXIS</li>
<li><a href="#DJS_BATCH">DJS_BATCH</a> : 
Batch processing script for running jobs locally or across a network.</li>
<li><a href="#DJS_CEIL">DJS_CEIL</a> : 
Return smallest integer not less than xvalue.</li>
<li><a href="#DJS_CONTOURPTS">DJS_CONTOURPTS</a> : 
Make a contour plot from point data, drawing contours only where the</li>
<li><a href="#DJS_CORRELATE">DJS_CORRELATE</a> : 
Compute a cross-correlation function using weights (or masks).</li>
<li><a href="#DJS_DIFF_ANGLE">DJS_DIFF_ANGLE</a> : 
Compute the angular distance between two points on a sphere.</li>
<li><a href="#DJS_FLOOR">DJS_FLOOR</a> : 
Return largest integer not greater than xvalue.</li>
<li><a href="#DJS_HEX2BIN">DJS_HEX2BIN</a> : 
Convert hexadecimal number(s) to binary numbers.</li>
<li><a href="#DJS_HEX2INT">DJS_HEX2INT</a> : 
Convert hexadecimal number(s) to long integer(s).</li>
<li><a href="#DJS_ICOLOR">DJS_ICOLOR</a> : 
Internal routine for converting a color name to an index.</li>
<li><a href="#DJS_INT2BIN">DJS_INT2BIN</a> : 
Convert integer number(s) to binary numbers.</li>
<li><a href="#DJS_ITERSTAT">DJS_ITERSTAT</a> : 
Compute the mean, median and/or sigma of data with iterative sigma clipping.
</li>
<li><a href="#DJS_LAXISGEN">DJS_LAXISGEN</a> : 
Return a longword integer array with the specified dimensions.</li>
<li><a href="#DJS_LAXISNUM">DJS_LAXISNUM</a> : 
Return a longword integer array with the specified dimensions.</li>
<li><a href="#DJS_LOCATE_FILE_F">DJS_LOCATE_FILE()</a> : 
Locate full file name (including path) of a file, searching IDL paths</li>
<li><a href="#DJS_LOCKFILE">DJS_LOCKFILE</a> : 
Test if a file is already &quot;locked&quot;, and lock it if not.</li>
<li><a href="#DJS_MASKINTERP">DJS_MASKINTERP</a> : 
Interpolate over masked pixels in a vector, image or 3-D array.</li>
<li><a href="#DJS_MEAN">DJS_MEAN</a> : Return the mean value of an array.</li>
<li><a href="#DJS_MEDIAN">DJS_MEDIAN</a> : 
Return the median of an image either with a filtering box or by collapsing</li>
<li><a href="#DJS_MODFITS">DJS_MODFITS</a> : 
Wrapper for MODFITS that allows the header to increase in size,</li>
<li><a href="#DJS_MOSAIC_RGB">DJS_MOSAIC_RGB</a> : 
Make color (RGB) images from 3 FITS files, and overplot text and points</li>
<li><a href="#DJS_NEFF">DJS_NEFF</a> : 
Return the neff statistic (effective number of pixels)</li>
<li><a href="#DJS_OPLOT">DJS_OPLOT</a> : Modified version of OPLOT.</li>
<li><a href="#DJS_OPLOTERR">DJS_OPLOTERR</a> : 
Modified version of OPLOTERR and DJS_OPLOT.</li>
<li><a href="#DJS_PHOT">DJS_PHOT</a> : 
Driver for aperture photometry with the option of re-centering and</li>
<li><a href="#DJS_PHOTCEN">DJS_PHOTCEN</a> : Recenter an object position.</li>
<li><a href="#DJS_PHOTFRAC">DJS_PHOTFRAC</a> : 
Create a list of pixel numbers and their fractional contribution to</li>
<li><a href="#DJS_PHOTSKY">DJS_PHOTSKY</a> : 
Compute the sky value within an annulus.</li>
<li><a href="#DJS_PLANCK_F">DJS_PLANCK()</a> : 
Returns the spectral radiance of a blackbody.</li>
<li><a href="#DJS_PLOT">DJS_PLOT</a> : Modified version of PLOT</li>
<li><a href="#DJS_PLOTLIMITBOX">DJS_PLOTLIMITBOX</a> : 
Plot a box that bounds the given limits in X and Y.</li>
<li><a href="#DJS_POSMOD">DJS_POSMOD</a> : 
Return the non-negative modulus x % y, in the range [0,y).</li>
<li><a href="#DJS_READCOL">DJS_READCOL</a> : 
Read a free-format ASCII data file with columns of data into IDL</li>
<li><a href="#DJS_READILINES_F">DJS_READILINES()</a> : 
Read selected lines of an ASCII file as one character string for each line.</li>
<li><a href="#DJS_READLINES_F">DJS_READLINES()</a> : 
Read an ASCII file as one character string for each line.</li>
<li><a href="#DJS_READMANY">DJS_READMANY</a> : 
Read many FITS 2-D images into a data cube.</li>
<li><a href="#DJS_REJECT">DJS_REJECT</a> : 
Routine to reject points when doing an iterative fit to data.</li>
<li><a href="#DJS_RGB_MAKE">DJS_RGB_MAKE</a> : 
Creates JPEG (or TIFF) from three images or FITS files</li>
<li><a href="#DJS_SELECTLINES">DJS_SELECTLINES</a> : 
Select the line numbers specified by INDX of a file, and print either</li>
<li><a href="#DJS_SFIT">DJS_SFIT</a> : 
Surface-fitting code to tabulated data (optionally with errors).</li>
<li><a href="#DJS_UNLOCKFILE">DJS_UNLOCKFILE</a> : 
Unlock a file if locked with DJS_LOCKFILE().</li>
<li><a href="#DJS_XYOUTS">DJS_XYOUTS</a> : Modified version of XYOUTS</li>
<li><a href="#DLOOKBACKDZ">DLOOKBACKDZ</a> : 
Compute differential lookback time dt/dz (for c/H_0=1).</li>
<li><a href="#DMEDSMOOTH">DMEDSMOOTH</a> : median smooth</li>
<li><a href="#DOBJECTS_MULTI">DOBJECTS_MULTI</a> : 
detect objects in a set of images of different bands</li>
<li><a href="#DOTPRODUCT_SPHERE">DOTPRODUCT_SPHERE</a> : 
Compute the cosign of the angle between two unit vectors on the</li>
<li><a href="#DPF_NEST2RING">DPF_NEST2RING</a> : 
Convert healpix nested pixel number to ring pixel number</li>
<li><a href="#DPF_PIX2ANG_NEST">DPF_PIX2ANG_NEST</a> : 
Compute coordinates for HEALPix pixel numbers, nested order</li>
<li><a href="#DPF_PIX2ANG_RING">DPF_PIX2ANG_RING</a> : 
Compute coordinates for HEALPix pixel numbers</li>
<li><a href="#DPF_PSF_REJECT_CR_SINGLE_F">DPF_PSF_REJECT_CR_SINGLE()</a> : 
test a list of &quot;suspect&quot; pixels for cosmic rays (CRs)</li>
<li><a href="#DPF_REJECT_CR_F">DPF_REJECT_CR()</a> : 
An old Cosmic Ray rejection routine.</li>
<li><a href="#DPROPDISDZ">DPROPDISDZ</a> : 
Compute differential proper line-of-sight distances (for c/H_0=1).</li>
<li><a href="#DPROPMOTDISDZ">DPROPMOTDISDZ</a> : 
Compute differential proper motion distance dD/dz for c=H_0=1.</li>
<li><a href="#DSMOOTH">DSMOOTH</a> : smooth with a simple gaussian</li>
<li><a href="#DUSTPLOT">DUSTPLOT</a> : 
Make a PostScript plot of the dust maps in a rectalinear projection.</li>
<li><a href="#DUST_GETMAP">DUST_GETMAP</a> : 
Reproject dust map to projection described by a FITS header</li>
<li><a href="#DUST_GETVAL">DUST_GETVAL</a> : 
Read values from BH files or our dust maps.</li>
<li><a href="#DUST_INTFILTER">DUST_INTFILTER</a> : 
Integrate the extinction curve over a given source function + filter curve.</li>
<li><a href="#DUST_SDSSFILTER">DUST_SDSSFILTER</a> : 
Integrate the extinction curve over a selection of source fuctions and</li>
<li><a href="#EFC2D">EFC2D</a> : Calculate a B-spline in the least-squares sense
</li>
<li><a href="#EFCMN">EFCMN</a> : Calculate a B-spline in the least-squares sense
</li>
<li><a href="#EMBED_STAMP">EMBED_STAMP</a> : 
Add to one image the parts which are overlapped by a second image</li>
<li><a href="#EM_PCA">EM_PCA</a> : 
Perform E-M PCA to get first k principal components</li>
<li><a href="#EM_PCA_SPARSE_MATRIX">EM_PCA_SPARSE_MATRIX</a> : 
Perform E-M PCA to get first k principal components of large sparse matrix</li>
<li><a href="#EQ2CSURVEY">EQ2CSURVEY</a> : 
Convert from ra, dec to the corrected clambda, ceta</li>
<li><a href="#ETALAMBDA_TO_RADEC">ETALAMBDA_TO_RADEC</a> : 
convert from eta, lambda (SDSS survey coordinates) to RA, Dec</li>
<li><a href="#ETA_TO_STRIPE">ETA_TO_STRIPE</a> : 
find the stripe which an eta value is in; hardwired to what astrotools</li>
<li><a href="#EULER_2000">EULER_2000</a> : 
Transform between Galactic, celestial, and ecliptic coordinates.</li>
<li><a href="#EVOLVE_ELECTRON_SPECTRUM">EVOLVE_ELECTRON_SPECTRUM</a> : 
Evolve an initial electron spectrum to a later time</li>
<li><a href="#EVOLVE_POWERLAW_ELECTRONS">EVOLVE_POWERLAW_ELECTRONS</a> : 
Evolve a power-law CR electron spectrum to a later time</li>
<li><a href="#EXACT_PHOTFRAC">EXACT_PHOTFRAC</a> : 
Create list of contribution of pixels to circular or annular aperture</li>
<li><a href="#EXTRACT_PROFMEAN">EXTRACT_PROFMEAN</a> : 
Extract a photoesque radial profile</li>
<li><a href="#EXT_CCM">EXT_CCM</a> : 
Return extinction curve from CCM (1989), defined in the wavelength</li>
<li><a href="#EXT_ODONNELL">EXT_ODONNELL</a> : 
Return extinction curve from Odonnell (1994), defined in the wavelength</li>
<li><a href="#EX_MAX">EX_MAX</a> : 
expectation-maximization iterative multi-gaussian fit to data</li>
<li><a href="#EX_MAX_PLOT">EX_MAX_PLOT</a> : 
plot ex_max outputs or other N-dimensional data sets</li>
<li><a href="#EX_MAX_PROBABILITY">EX_MAX_PROBABILITY</a> : 
Return probabilities given ex_max results</li>
<li><a href="#FAC_FLUX2TEMP">FAC_FLUX2TEMP</a> : 
Compute factor to convert from flux/sr to brightness temp</li>
<li><a href="#FAC_TEMP2FLUX">FAC_TEMP2FLUX</a> : 
Compute factor to convert from brightness temp to flux/sr</li>
<li><a href="#FASTCONV">FASTCONV</a> : 
Perform a convolution faster by binning both the image and</li>
<li><a href="#FCHEBYSHEV">FCHEBYSHEV</a> : 
Compute the first M terms in a CHEBYSHEV polynomial expansion.</li>
<li><a href="#FCHEBYSHEV_SPLIT">FCHEBYSHEV_SPLIT</a> : 
Compute the first M terms in a CHEBYSHEV polynomial expansion,</li>
<li><a href="#FILEANDPATH">FILEANDPATH</a> : 
Split a file name into the path and the file name.</li>
<li><a href="#FILLSPAN">FILLSPAN</a> : 
return an array evenly sampling a given range. The endpoints</li>
<li><a href="#FILL_BSPLINE">FILL_BSPLINE</a> : 
Calculate a B-spline in the least-squares sense</li>
<li><a href="#FINDBKPT">FINDBKPT</a> : 
Choose bkpts for b-spline given different constraints</li>
<li><a href="#FINDOPFILE">FINDOPFILE</a> : 
Find the op file corresponding to a specified MJD.</li>
<li><a href="#FIND_SB">FIND_SB</a> : 
Find objects in a 2-d image with a gaussian filter</li>
<li><a href="#FIRST_CONVERT">FIRST_CONVERT</a> : 
Convert 2008 FIRST data into format closer to 2003 version</li>
<li><a href="#FIRST_COVERAGE">FIRST_COVERAGE</a> : 
Read the FIRST survey coverage maps.</li>
<li><a href="#FIRST_READ">FIRST_READ</a> : 
Read the FIRST catalog (and generate IDL save sets)</li>
<li><a href="#FITS_PURGE_NANS">FITS_PURGE_NANS</a> : 
Purge invalid (NaN) values from FITS headers</li>
<li><a href="#FITS_WAIT">FITS_WAIT</a> : 
Wait for a FITS file to be fully written to disk.</li>
<li><a href="#FLAGFILE">FLAGFILE</a> : 
Find the index of the maskbits file corresponding to filename, or read</li>
<li><a href="#FLAGNAME">FLAGNAME</a> : 
Return bitmask labels corresponding to bit numbers.</li>
<li><a href="#FLAGVAL">FLAGVAL</a> : 
Return bitmask values corresponding to labels.</li>
<li><a href="#FLOATCOMPRESS">FLOATCOMPRESS</a> : 
Make floating-point data more compressible by trimming binary digits.</li>
<li><a href="#FRAC_PROFMEAN">FRAC_PROFMEAN</a> : 
Get the radius of a certain light fraction, given the total light radius</li>
<li><a href="#FREEFREE">FREEFREE</a> : Calculate freefree spectrum</li>
<li><a href="#FUNC_CCM_FITRV_F">FUNC_CCM_FITRV()</a> : 
compute chi2 for the ccm_fitrv function</li>
<li><a href="#FUNC_FIT">FUNC_FIT</a> : Fit X, Y positions to a functional form.
</li>
<li><a href="#GAREA">GAREA</a> : 
Calculate area of spherical polygon by calling mangle utility garea</li>
<li><a href="#GAUNTFF">GAUNTFF</a> : Compute the Gaunt factor for free-free</li>
<li><a href="#GAUSS1">GAUSS1</a> : 
Compute Gaussian curve given the mean, sigma and area.</li>
<li><a href="#GAUSS1P">GAUSS1P</a> : 
Compute Gaussian curve given the mean, sigma and area (procedure).</li>
<li><a href="#GAUSS2">GAUSS2</a> : 
Compute Gaussian curve given the mean, sigma and area.</li>
<li><a href="#GAUSSPIX1D">GAUSSPIX1D</a> : 
Routine to evaluate a 1D gaussian function (plus polynomial terms)</li>
<li><a href="#GAUSS_OVERLAP">GAUSS_OVERLAP</a> : 
calculate log integral, covariance, and mean of product of two gaussians</li>
<li><a href="#GRIDND">GRIDND</a> : 
determine positions on a grid, for easy access</li>
<li><a href="#GROUPND">GROUPND</a> : group a set of points in N dimensions</li>
<li><a href="#GROUP_INDX">GROUP_INDX</a> : 
given group indices, yield multiplicity, plus an index linked list</li>
<li><a href="#GROUP_ON_MATCHES">GROUP_ON_MATCHES</a> : 
given a list of objects and matches between them, find the groups</li>
<li><a href="#GROW_OBJECT">GROW_OBJECT</a> : 
Identify objects as the contiguous non-zero pixels in an image.</li>
<li><a href="#GSC_NSKY">GSC_NSKY</a> : 
Generate IDL structure for GSC catalogue at dec &gt; -30 and m &lt; 18.0</li>
<li><a href="#GSC_READ_TABLE">GSC_READ_TABLE</a> : 
Read one table from the GSC (Guide star catalogue)</li>
<li><a href="#GSSSPUTAST">GSSSPUTAST</a> : 
Put GSSS astrometry parameters into a given FITS header.</li>
<li><a href="#GVERTS">GVERTS</a> : Get vertices along edge of a polygon</li>
<li><a href="#GZ_FILE_TEST">GZ_FILE_TEST</a> : 
file_test, but if it fails, try .gz, .Z, .z, .bz2 versions</li>
<li><a href="#GZ_HEADFITS">GZ_HEADFITS</a> : 
headfits, but if it fails, try reading in compressed version</li>
<li><a href="#GZ_MRDFITS">GZ_MRDFITS</a> : 
mrdfits, but if it fails, try reading in compressed version</li>
<li><a href="#HDR2STRUCT">HDR2STRUCT</a> : 
Convert a string array with the format of a FITS header</li>
<li><a href="#HEALCART_BINDOWN">HEALCART_BINDOWN</a> : 
Bin down a healcart image preserving proper pixel centers</li>
<li><a href="#HEALCART_HEADER">HEALCART_HEADER</a> : 
Generate mock header for healcart image</li>
<li><a href="#HEALCART_IND">HEALCART_IND</a> : 
Generate index list for healcart projection</li>
<li><a href="#HEALNPIX_F">HEALNPIX()</a> : 
Returns the number of healpix pixels for a given resolution.</li>
<li><a href="#HEALPIX2ALM">HEALPIX2ALM</a> : 
Compute spherical harmonic transform (Alm) of a healpix map</li>
<li><a href="#HEALPIX_CL_F">HEALPIX_CL()</a> : 
A rapid power spectrum computation code.</li>
<li><a href="#HEALPIX_RING_WEIGHT">HEALPIX_RING_WEIGHT</a> : 
read healpix ring weight files</li>
<li><a href="#HEAL_REBIN">HEAL_REBIN</a> : 
rebin ring ordered healpix maps to different Nside</li>
<li><a href="#HEAL_SMOOTH">HEAL_SMOOTH</a> : 
Smooth ring-ordered healpix maps with spherical harmonic convolution</li>
<li><a href="#HELIOCENTRIC">HELIOCENTRIC</a> : 
Compute correction term to add to velocities to convert to heliocentric.</li>
<li><a href="#HELIO_TO_LG">HELIO_TO_LG</a> : 
Convert heliocentric redshifts to Local-Group-centric redshifts.</li>
<li><a href="#HMS2DEC">HMS2DEC</a> : convert base-sixty string to decimal</li>
<li><a href="#HOGG_ARROW">HOGG_ARROW</a> : Draw a vector(s) with an arrow head
</li>
<li><a href="#HOGG_AUTOCROP_IMAGE">HOGG_AUTOCROP_IMAGE</a> : 
remove whitespace border on image read by read_image</li>
<li><a href="#HOGG_BWIFY">HOGG_BWIFY</a> : 
make b/w JPG image from color JPG image</li>
<li><a href="#HOGG_CLOSE_OVERLAY">HOGG_CLOSE_OVERLAY</a> : 
close Z buffer and output contents to an image for overlaying</li>
<li><a href="#HOGG_DIRECTIONS">HOGG_DIRECTIONS</a> : 
Overplot directions to other sky locations on a picture of the</li>
<li><a href="#HOGG_GREYSCALE_PLOT">HOGG_GREYSCALE_PLOT</a> : 
Make a pretty greyscale plot from an astronomical image.</li>
<li><a href="#HOGG_HEALPIX_GREYSCALE">HOGG_HEALPIX_GREYSCALE</a> : 
make a greyscale plot from a healpix array</li>
<li><a href="#HOGG_HISTOGRAM">HOGG_HISTOGRAM</a> : 
Multi-dimensional histogramming function.</li>
<li><a href="#HOGG_IAU_NAME">HOGG_IAU_NAME</a> : 
properly format astronomical source names to the IAU convention</li>
<li><a href="#HOGG_IMAGE_OVERLAY">HOGG_IMAGE_OVERLAY</a> : 
Bitmap PostScript file to make an image overlay.</li>
<li><a href="#HOGG_IMAGE_OVERLAY_PLOT">HOGG_IMAGE_OVERLAY_PLOT</a> : 
Make bitmapped overlay for rgb images.</li>
<li><a href="#HOGG_INTERVAL">HOGG_INTERVAL</a> : 
find best interval for tickmarks on a plot</li>
<li><a href="#HOGG_ITERATED_AD2XY">HOGG_ITERATED_AD2XY</a> : 
Same as ad2xy, but assuming that xy2ad is perfect.</li>
<li><a href="#HOGG_ITER_LINFIT">HOGG_ITER_LINFIT</a> : 
Perform iterated linear least-squares fit with sigma-clipping.</li>
<li><a href="#HOGG_MAKE_ASTR">HOGG_MAKE_ASTR</a> : 
Generate the astrometric WCS for a particular pointing and</li>
<li><a href="#HOGG_MAKE_IMAGE_LABEL">HOGG_MAKE_IMAGE_LABEL</a> : 
make text label for RGB images</li>
<li><a href="#HOGG_MANYD_MEANPLOT">HOGG_MANYD_MEANPLOT</a> : 
plot N+1-dimensional data sets, in the mean!</li>
<li><a href="#HOGG_MANYD_SCATTERPLOT">HOGG_MANYD_SCATTERPLOT</a> : 
plot N-dimensional data sets</li>
<li><a href="#HOGG_MCMC">HOGG_MCMC</a> : Make a Markov Chain Monte Carlo chain.
</li>
<li><a href="#HOGG_MCMC_STEP">HOGG_MCMC_STEP</a> : 
Make one step in a Markov Chain Monte Carlo.</li>
<li><a href="#HOGG_MCMC_TEST">HOGG_MCMC_TEST</a> : Test the hogg_mcmc code.</li>
<li><a href="#HOGG_MEANPLOT">HOGG_MEANPLOT</a> : 
plot sliding mean of one quantity vs two others</li>
<li><a href="#HOGG_MRDFITS">HOGG_MRDFITS</a> : 
Wrapper on MRDFITS() to read in a FITS file one chunk at a time</li>
<li><a href="#HOGG_NAME2RADEC">HOGG_NAME2RADEC</a> : 
Takes properly-formatted iau name in &quot;J&quot; format and converts it into ra,dec
</li>
<li><a href="#HOGG_NED_NAME2RADEC">HOGG_NED_NAME2RADEC</a> : 
Takes a name, throws it at NED, retreives RA, Dec (J2000)</li>
<li><a href="#HOGG_OPEN_OVERLAY">HOGG_OPEN_OVERLAY</a> : 
open Z buffer for writing an image overlay plot</li>
<li><a href="#HOGG_OPLOT_COVAR">HOGG_OPLOT_COVAR</a> : 
Wrapper for oplot that plots covariance ellipses.</li>
<li><a href="#HOGG_PLOTHIST">HOGG_PLOTHIST</a> : 
plot histogram of weighted points</li>
<li><a href="#HOGG_PLOT_DEFAULTS">HOGG_PLOT_DEFAULTS</a> : 
Set plotting defaults for all &quot;hogg_&quot; plots</li>
<li><a href="#HOGG_READ_POSTSCRIPT">HOGG_READ_POSTSCRIPT</a> : 
read in a postscript file as an IDL data image</li>
<li><a href="#HOGG_RGB_ENTROPY">HOGG_RGB_ENTROPY</a> : 
Compute &quot;entropy&quot; of an RGB representation of an image</li>
<li><a href="#HOGG_SCATTERPLOT">HOGG_SCATTERPLOT</a> : 
plot greyscale scatterplot with contours</li>
<li><a href="#HOGG_SKY_DIRECTION">HOGG_SKY_DIRECTION</a> : 
Return the direction (Delta-alpha,Delta-delta) of one RA, Dec</li>
<li><a href="#HOGG_SNAP_INTEGER">HOGG_SNAP_INTEGER</a> : 
Randomly snap floats or doubles to nearest integers up and down so</li>
<li><a href="#HOGG_STRSPLIT">HOGG_STRSPLIT</a> : 
split strings on whitespace, except inside double quotes, plus other</li>
<li><a href="#HOGG_TP_SHIFT">HOGG_TP_SHIFT</a> : 
Shift tangent point on the sphere (CRVAL, in RA, Dec units),</li>
<li><a href="#HOGG_UNQUOTED_REGEX">HOGG_UNQUOTED_REGEX</a> : 
return the regex which matches the first occurence of the given</li>
<li><a href="#HOGG_USERSYM">HOGG_USERSYM</a> : make an n-sided plotting point
</li>
<li><a href="#HOGG_WEIGHTED_MEAN_SURFACE">HOGG_WEIGHTED_MEAN_SURFACE</a> : 
make an image of the weighted mean for a 2-d set of measurements</li>
<li><a href="#HST_GUIDETEST">HST_GUIDETEST</a> : 
Decide if a list of potential HST guide stars are good by looking</li>
<li><a href="#IAU_TO_RADEC">IAU_TO_RADEC</a> : convert an IAU name to RA and DEC
</li>
<li><a href="#IDLUTILS_SO_EXT">IDLUTILS_SO_EXT</a> : 
returns appropriate dynamic library extension given arch</li>
<li><a href="#IDLUTILS_VERSION">IDLUTILS_VERSION</a> : 
Return the version name for the idlutils product</li>
<li><a href="#IMGEXP">IMGEXP</a> : 
This function expands the array &lt;Image&gt; to fill the current plotting</li>
<li><a href="#IMGSCL">IMGSCL</a> : 
This function mimics BYTSCL() except that it maps the input range</li>
<li><a href="#INTEGRATE_K53">INTEGRATE_K53</a> : 
integrate the K 5/3 Bessel function</li>
<li><a href="#INTERP_PROFMEAN">INTERP_PROFMEAN</a> : 
Interpolates a radial profile of the sort output by photo</li>
<li><a href="#INTERSECT">INTERSECT</a> : 
Find where two sets of polygons intersect</li>
<li><a href="#INTRV">INTRV</a> : 
Find the segment between breakpoints which contain each value in</li>
<li><a href="#ISHEALPIX">ISHEALPIX</a> : 
Determine if array represents a healpix image</li>
<li><a href="#IS_CAP_USED">IS_CAP_USED</a> : 
Returns whether a cap is used in use_caps</li>
<li><a href="#IS_FILE_READABLE_F">IS_FILE_READABLE()</a> : 
Returns true if a file is readable.</li>
<li><a href="#IS_IN_CAP">IS_IN_CAP</a> : 
Is an xyz (or radec) position in a given cap?</li>
<li><a href="#IS_IN_POLYGON">IS_IN_POLYGON</a> : 
Is an xyz (or radec) position in a given polygon?</li>
<li><a href="#IS_IN_WINDOW">IS_IN_WINDOW</a> : 
Is an xyz (or radec) position in any of a given list of polygons?</li>
<li><a href="#IS_IN_WINDOW_PIX">IS_IN_WINDOW_PIX</a> : 
Is a radec position in any of a given list of polygons?</li>
<li><a href="#JSON_TO_STRUCT">JSON_TO_STRUCT</a> : 
Convert a string or array of strings JSON notation, &amp; return it as</li>
<li><a href="#LABELLOC">LABELLOC</a> : 
convert fractional positions in X and Y to those appropriate for xyouts</li>
<li><a href="#LEGENDRE_ZERO">LEGENDRE_ZERO</a> : 
Compute zeros of the m=0 Legendre polynomials</li>
<li><a href="#LG_TO_HELIO">LG_TO_HELIO</a> : 
Convert to heliocentric redshifts from Local-Group-centric redshifts.</li>
<li><a href="#LINES2STRUCT">LINES2STRUCT</a> : 
Convert a string array containing keyword-value pairs to a struct</li>
<li><a href="#LL2UV">LL2UV</a> : 
To convert from longitude/latitude to unit vectors</li>
<li><a href="#LLE">LLE</a> : Perform local linear embedding</li>
<li><a href="#LLE_SM">LLE_SM</a> : 
create sparse matrix from full matrix for LLE routines</li>
<li><a href="#LLE_SM_FULL">LLE_SM_FULL</a> : 
create full matrix from full matrix for LLE routines</li>
<li><a href="#LLE_SM_MULT">LLE_SM_MULT</a> : 
multiply two sparse matrices kind of efficiently for LLE routines</li>
<li><a href="#LLE_SM_TRANSPOSE">LLE_SM_TRANSPOSE</a> : 
transpose a sparse matrix for the LLE routines</li>
<li><a href="#LOCAL_EXTRAGALACTIC">LOCAL_EXTRAGALACTIC</a> : 
returns list of local extragalactic locations and names to plot</li>
<li><a href="#LOGSUM">LOGSUM</a> : 
sum quantities when you have them as logs (preserving dynamic range)</li>
<li><a href="#LOOKBACK">LOOKBACK</a> : Compute lookback time (for c/H_0=1).</li>
<li><a href="#LOOKFORGZIP">LOOKFORGZIP</a> : Look for a gzip-ed file,</li>
<li><a href="#LUMDIS">LUMDIS</a> : Compute luminosity distances (for c/H_0=1).
</li>
<li><a href="#MAKE_DEC_CAP">MAKE_DEC_CAP</a> : 
Creates a structure containing a cap expressing a limit in dec</li>
<li><a href="#MAKE_HTML_HELP">MAKE_HTML_HELP</a> : 
Given a list of IDL procedure files (.PRO), VMS text library</li>
<li><a href="#MAKE_RA_CAP">MAKE_RA_CAP</a> : 
Creates a structure containing a cap expressing a limit in ra</li>
<li><a href="#MAP_NEST2RING">MAP_NEST2RING</a> : 
Convert a full-sky map in nested order to ring order</li>
<li><a href="#MAP_RING2NEST">MAP_RING2NEST</a> : 
Convert a full-sky map in ring order to nested order</li>
<li><a href="#MATCHND">MATCHND</a> : match two sets of points in N dimensions
</li>
<li><a href="#MEMSHIFT">MEMSHIFT</a> : 
Shift elements in an array, which can be a structure array.</li>
<li><a href="#MJD2DATELIST">MJD2DATELIST</a> : 
Construct a list of MJDs and date strings spanning a range of MJDs</li>
<li><a href="#MMEVAL">MMEVAL</a> : evaluate a matrix multiply sparsely</li>
<li><a href="#MMSPARSE">MMSPARSE</a> : 
multiply a regular matrix by a sparse matrix</li>
<li><a href="#MODFITSCARD">MODFITSCARD</a> : 
Modify FITS card(s) in a file without changing the data.</li>
<li><a href="#MOON_ZENITH">MOON_ZENITH</a> : 
Compute zenith angle of moon, given TAI</li>
<li><a href="#MPCHILIM">MPCHILIM</a> : 
Compute confidence limits for chi-square statistic</li>
<li><a href="#MPCHITEST">MPCHITEST</a> : 
Compute the probability of a given chi-squared value</li>
<li><a href="#MPCURVEFIT">MPCURVEFIT</a> : 
Perform Levenberg-Marquardt least-squares fit (replaces CURVEFIT)</li>
<li><a href="#MPFIT">MPFIT</a> : 
Perform Levenberg-Marquardt least-squares minimization (MINPACK-1)</li>
<li><a href="#MPFIT2DFUN">MPFIT2DFUN</a> : 
Perform Levenberg-Marquardt least-squares fit to a 2-D IDL function</li>
<li><a href="#MPFIT2DPEAK">MPFIT2DPEAK</a> : 
Fit a gaussian, lorentzian or Moffat model to data</li>
<li><a href="#MPFITELLIPSE">MPFITELLIPSE</a> : 
Approximate fit to points forming an ellipse</li>
<li><a href="#MPFITEXPR">MPFITEXPR</a> : 
Perform Levenberg-Marquardt least-squares fit to arbitrary expression</li>
<li><a href="#MPFITFUN">MPFITFUN</a> : 
Perform Levenberg-Marquardt least-squares fit to IDL function</li>
<li><a href="#MPFITPEAK">MPFITPEAK</a> : 
Fit a gaussian, lorentzian or Moffat model to data</li>
<li><a href="#MPFTEST">MPFTEST</a> : Compute the probability of a given F value
</li>
<li><a href="#MPNORMLIM">MPNORMLIM</a> : 
Compute confidence limits for normally distributed variable</li>
<li><a href="#MPNORMTEST">MPNORMTEST</a> : 
Compute the probability of a given normally distributed Z value</li>
<li><a href="#MQLADVANCE">MQLADVANCE</a> : 
Generate MODIFIED associated Legendre polynomials one l at a time</li>
<li><a href="#MRDFITS_ROWS">MRDFITS_ROWS</a> : 
Wrapper on MRDFITS() to read selected rows of a FITS file</li>
<li><a href="#MULTI_PSF_FIT">MULTI_PSF_FIT</a> : 
given an image and a psf, fit a multiple psf model to the image</li>
<li><a href="#MUNU_TO_RADEC">MUNU_TO_RADEC</a> : 
Convert from SDSS great circle coordinates to equatorial coordinates.</li>
<li><a href="#MWRFITS_CHUNKS">MWRFITS_CHUNKS</a> : 
Write a FITS binary table in chunks.</li>
<li><a href="#NEAR_LIST">NEAR_LIST</a> : 
return index list of positions near a given central position</li>
<li><a href="#NMF_SPARSE">NMF_SPARSE</a> : 
non-negative PCA routine, sparse version</li>
<li><a href="#NNLS">NNLS</a> : non-negative least-square fitting routine</li>
<li><a href="#NONNEG_MULT_UPDATE">NONNEG_MULT_UPDATE</a> : 
Apply an SSL multiplicative update to iterate nonnegative quadratic problem</li>
<li><a href="#NONNEG_MULT_UPDATE_SOLVE">NONNEG_MULT_UPDATE_SOLVE</a> : 
Use nonneg_mult_update to iterate to convergence</li>
<li><a href="#NUMLINES_F">NUMLINES()</a> : 
Returns the number of lines in a file.</li>
<li><a href="#NW_AD_GRID">NW_AD_GRID</a> : Creates AD coordinate grid</li>
<li><a href="#NW_ARCSINH">NW_ARCSINH</a> : 
scales the fits image by a degree of nonlinearity specified by user</li>
<li><a href="#NW_CUT_TO_BOX">NW_CUT_TO_BOX</a> : 
Limits the pixel values of the image to a 'box', so that the colors</li>
<li><a href="#NW_FLOAT_TO_BYTE">NW_FLOAT_TO_BYTE</a> : 
Converts an array of floats in [0.0,1.0] to bytes in [0,255].</li>
<li><a href="#NW_REBIN_IMAGE">NW_REBIN_IMAGE</a> : 
Divide the dimensions of the image by specified value</li>
<li><a href="#NW_RGB_MAKE">NW_RGB_MAKE</a> : Creates JPEG (or TIFF) from images
</li>
<li><a href="#NW_SCALE_RGB">NW_SCALE_RGB</a> : 
mulitiplies the RGB image by their respective scales</li>
<li><a href="#OFFSET_FROM_PAIRS_F">OFFSET_FROM_PAIRS()</a> : 
Offset from some pairs.</li>
<li><a href="#PIE_PLOT">PIE_PLOT</a> : given r and theta, plot a pie diagram
</li>
<li><a href="#PIXFONT">PIXFONT</a> : 
pixelize a font for inclusion in a pixelized image</li>
<li><a href="#PLANCKCORR">PLANCKCORR</a> : 
Compute factor to convert from brightness temp to thermodynamic temp</li>
<li><a href="#PLOT_POLY">PLOT_POLY</a> : 
plots a mangle polygon (or passes back what you need to plot it)</li>
<li><a href="#POLYGON_OVERLAP">POLYGON_OVERLAP</a> : 
create the polygon which is the overlap between two polygons</li>
<li><a href="#POLYWARP_ROTATE">POLYWARP_ROTATE</a> : 
wrapper on polywarp to do a simple rotation</li>
<li><a href="#POLYWARP_SHIFT">POLYWARP_SHIFT</a> : 
wrapper on polywarp to do a simple shift</li>
<li><a href="#POLY_ITER">POLY_ITER</a> : 
Calls IDL poly_fit iteratively with outlier rejection</li>
<li><a href="#POPULATE_IMAGE">POPULATE_IMAGE</a> : 
Populate a vector or image with weights at the specified positions.</li>
<li><a href="#POSITRONIUM_SPECTRUM">POSITRONIUM_SPECTRUM</a> : 
Compute the Ore and Powell ortho-positronium spectrum</li>
<li><a href="#PPMTOMPEG">PPMTOMPEG</a> : 
Wrapper for ppmtompeg, the open-source UNIX mpeg writer</li>
<li><a href="#PREDICT_SYNC">PREDICT_SYNC</a> : 
Read predictions of synchtron emission and return sky intensity.</li>
<li><a href="#PREDICT_THERMAL">PREDICT_THERMAL</a> : 
Read predictions of thermal dust emission from Finkbeiner et al. maps</li>
<li><a href="#PROPMOTDIS">PROPMOTDIS</a> : 
Compute proper motion distances (for c/H_0=1).</li>
<li><a href="#PSF_CHISQ">PSF_CHISQ</a> : 
Compute chi^2 for the given PSF model, PSF stars, and ivars</li>
<li><a href="#PSF_EVAL">PSF_EVAL</a> : 
Evaluate PSF at (x,y), possibly sinc-shifted to center (dx,dy)</li>
<li><a href="#PSF_FINDSTARS">PSF_FINDSTARS</a> : 
Find stars suitable for using in PSF estimation</li>
<li><a href="#PSF_FIT_COEFFS">PSF_FIT_COEFFS</a> : 
Attempt to fit coefficients for delta-function PSF model</li>
<li><a href="#PSF_FLAGNAME">PSF_FLAGNAME</a> : 
Return bitmask labels corresponding to bit numbers.</li>
<li><a href="#PSF_FLAGVAL">PSF_FLAGVAL</a> : 
Access to PSF flag values via text labels</li>
<li><a href="#PSF_GET_MAGS">PSF_GET_MAGS</a> : 
compute psf magnitudes of objects at locations in image</li>
<li><a href="#PSF_GRID">PSF_GRID</a> : returns image of a grid of psfs</li>
<li><a href="#PSF_MULTI_FIT">PSF_MULTI_FIT</a> : 
Fit multiple PSFs to a postage stamp, given a preliminary PSF.</li>
<li><a href="#PSF_NORM">PSF_NORM</a> : 
Sum the counts inside a box of radius rad centered on stamp</li>
<li><a href="#PSF_PEAK">PSF_PEAK</a> : 
Find sinc-interpolated peak in a psf stamp</li>
<li><a href="#PSF_POLYFIT">PSF_POLYFIT</a> : 
Fit polynomial as a function of image (x,y) to each pixel in stamp</li>
<li><a href="#PSF_PSFIVAR">PSF_PSFIVAR</a> : 
compute the inverse variance of our psf model evaluated at x, y</li>
<li><a href="#PSF_REJECT_CR">PSF_REJECT_CR</a> : 
Find pixels contaminated by cosmic rays (CRs) using PSF criteria</li>
<li><a href="#PSF_REJECT_CR_SINGLE">PSF_REJECT_CR_SINGLE</a> : 
test a list of &quot;suspect&quot; pixels for cosmic rays (CRs)</li>
<li><a href="#PSF_STAMPS">PSF_STAMPS</a> : 
Cut out postage stamps around stars of interest</li>
<li><a href="#PSF_STAMP_CENTER_ITER">PSF_STAMP_CENTER_ITER</a> : 
Find sinc shift (dx,dy) such that central pixels are symmetric</li>
<li><a href="#PSF_VALIDATE">PSF_VALIDATE</a> : sanity checks on PSF fit</li>
<li><a href="#PSF_ZERO">PSF_ZERO</a> : Determine the zero point in a PSF stamp
</li>
<li><a href="#QUICK_PHOTFRAC">QUICK_PHOTFRAC</a> : 
Create a list of pixel numbers and their fractional contribution to</li>
<li><a href="#QU_TO_BAPHI">QU_TO_BAPHI</a> : 
transform q and u values to b/a and pih</li>
<li><a href="#QZAP">QZAP</a> : Remove cosmic rays from a 2-D image.</li>
<li><a href="#RADEC2STRING">RADEC2STRING</a> : 
converts RA and DEC to string versions</li>
<li><a href="#RADEC_GREATCIRCLE">RADEC_GREATCIRCLE</a> : 
Solve for the great circle for a set of RA,DEC positions at a set of times.</li>
<li><a href="#RADEC_TO_ETALAMBDA">RADEC_TO_ETALAMBDA</a> : 
convert from RA, Dec to eta, lambda (SDSS survey coordinates)</li>
<li><a href="#RADEC_TO_MUNU">RADEC_TO_MUNU</a> : 
Convert from equatorial coordinates to SDSS great circle coordinates.</li>
<li><a href="#RADEC_TO_SIMPLEPIX">RADEC_TO_SIMPLEPIX</a> : 
convert ra and dec to the pixel number in the mangle simplepix scheme</li>
<li><a href="#RDSS_FITS">RDSS_FITS</a> : 
Read a FITS file into IDL data and header variables</li>
<li><a href="#READ_BINARY_POLYGONS">READ_BINARY_POLYGONS</a> : 
Read a &quot;polygon&quot; format binary file written by mangle, and return</li>
<li><a href="#READ_DS_COOLING">READ_DS_COOLING</a> : 
Read in Dopita &amp; Sutherland 1993 cooling function</li>
<li><a href="#READ_FITS_POLYGONS">READ_FITS_POLYGONS</a> : 
Read a &quot;polygon&quot; format fits file</li>
<li><a href="#READ_MANGLE_POLYGONS">READ_MANGLE_POLYGONS</a> : 
Read a &quot;polygon&quot; format ascii file written by mangle, and return</li>
<li><a href="#READ_MANGLE_VERTICES">READ_MANGLE_VERTICES</a> : 
Read in a set of vertices, mangle style</li>
<li><a href="#READ_TBL">READ_TBL</a> : 
Read .tbl/.hdr format files output by postgres (like those of 2MASS)</li>
<li><a href="#READ_YANNY_POLYGONS">READ_YANNY_POLYGONS</a> : 
Read a &quot;polygon&quot; format yanny file</li>
<li><a href="#REBIN_SPECTRUM">REBIN_SPECTRUM</a> : 
Rebin a 1-D spectrum using CIC assignment onto arbitrary pixel boundaries.</li>
<li><a href="#REJECT_CR">REJECT_CR</a> : 
Detects cosmic rays by finding features sharper than the PSF</li>
<li><a href="#RESAMPLE_SPECTRUM">RESAMPLE_SPECTRUM</a> : 
Rebin a 1-D spectrum using CIC assignment onto arbitrary pixel boundaries.</li>
<li><a href="#RESTORE_SYSVARS">RESTORE_SYSVARS</a> : 
restore plot system variabls from structure created by sysvars</li>
<li><a href="#RMFILE">RMFILE</a> : Delete file from disk.</li>
<li><a href="#ROSAT_FITS">ROSAT_FITS</a> : Convert RASS FSC text file into FITS
</li>
<li><a href="#ROSAT__DEFINE">ROSAT__DEFINE</a> : Define a rosat structure</li>
<li><a href="#RSEX">RSEX</a> : 
Read in arbitrary SExtractor format catalogs, using native</li>
<li><a href="#SDSS_ASTROMBAD">SDSS_ASTROMBAD</a> : 
For a list of RUN, CAMCOL, FIELD, return whether each field has bad astrometry
</li>
<li><a href="#SDSS_FLAGEXIST">SDSS_FLAGEXIST</a> : Returns whether a flag exists
</li>
<li><a href="#SDSS_FLAGNAME">SDSS_FLAGNAME</a> : 
Return bitmask labels corresponding to bit numbers.</li>
<li><a href="#SDSS_FLAGVAL">SDSS_FLAGVAL</a> : 
Return bitmask values corresponding to labels.</li>
<li><a href="#SDSS_OBJID">SDSS_OBJID</a> : 
convert object identifiers to CAS-style OBJID</li>
<li><a href="#SDSS_SPECOBJID">SDSS_SPECOBJID</a> : 
convert spectrum identifiers to CAS-style SPECID</li>
<li><a href="#SDSS_SWEEP_CIRCLE">SDSS_SWEEP_CIRCLE</a> : 
Read the SDSS datasweep files and return objects around a location</li>
<li><a href="#SDSS_TRANSFORM__DEFINE">SDSS_TRANSFORM__DEFINE</a> : 
Defines a set of methods for coordinate transformations.</li>
<li><a href="#SETFITPARM">SETFITPARM</a> : 
Provide a widget interface for creating a parinfo structure.</li>
<li><a href="#SET_USE_CAPS">SET_USE_CAPS</a> : 
Set the bits in use_caps for a polygon such</li>
<li><a href="#SHUFFLE_INDX">SHUFFLE_INDX</a> : 
yield an index to randomly rearrange an array</li>
<li><a href="#SIGMA_PBAR_P">SIGMA_PBAR_P</a> : 
Annihilation cross section of pbar on p as a function of sqrt(s)</li>
<li><a href="#SLATEC_BVALU">SLATEC_BVALU</a> : Evaluate a bspline</li>
<li><a href="#SLATEC_EFC">SLATEC_EFC</a> : 
Calculate a B-spline in the least-squares sense</li>
<li><a href="#SLATEC_SPLINEFIT">SLATEC_SPLINEFIT</a> : 
Calculate a B-spline in the least squares sense with rejection</li>
<li><a href="#SOLVE_POLY_RATIO">SOLVE_POLY_RATIO</a> : 
Compute the polynomial function that multiplies one spectrum</li>
<li><a href="#SORTINPLACE">SORTINPLACE</a> : 
Sort an array in-place, without making a second copy of the data</li>
<li><a href="#SPHEREGROUP">SPHEREGROUP</a> : 
Perform friends-of-friends grouping given ra/dec type coords</li>
<li><a href="#SPHEREMATCH">SPHEREMATCH</a> : 
Take two sets of ra/dec coords and efficiently match them. It</li>
<li><a href="#SPLOG">SPLOG</a> : 
Logging routine for writing to standard output and/or a log file.</li>
<li><a href="#SPLOT">SPLOT</a> : 
Interactive plotting tool for 1-D (spectral) data.</li>
<li><a href="#SQUAREPHOT">SQUAREPHOT</a> : Simple (square) aperature photometry.
</li>
<li><a href="#SSHIFT">SSHIFT</a> : 
Shift data using a damped sinc function for fractional part.</li>
<li><a href="#SSHIFT2D">SSHIFT2D</a> : 
Shift a 2-D array using a damped sinc function for the fractional part.</li>
<li><a href="#SSHIFTROTATE">SSHIFTROTATE</a> : 
Routine to sinc-shift and rotate a 2-D image, but preserving scale.</li>
<li><a href="#STRING2RADEC">STRING2RADEC</a> : 
Convert hours, min, sec + deg, min, sec to ra dec in floating degrees</li>
<li><a href="#STRIPE_TO_ETA">STRIPE_TO_ETA</a> : 
Convert from SDSS great circle coordinates to equatorial coordinates.</li>
<li><a href="#STRIPE_TO_INCL">STRIPE_TO_INCL</a> : 
Convert from SDSS stripe number to an inclination relative to the equator.</li>
<li><a href="#STRUCT2LINES">STRUCT2LINES</a> : 
Convert a struct to string array containing keyword-value pairs</li>
<li><a href="#STRUCT_ADDTAGS">STRUCT_ADDTAGS</a> : 
Add tags from one structure (array) to another</li>
<li><a href="#STRUCT_APPEND">STRUCT_APPEND</a> : 
Append more array elements to a structure.</li>
<li><a href="#STRUCT_PRINT">STRUCT_PRINT</a> : 
Formatted print of a structure to standard out, a file, or an array.</li>
<li><a href="#STRUCT_SELECTTAGS">STRUCT_SELECTTAGS</a> : 
Trim a structure to a specified list of tags using SELECT and EXCEPT</li>
<li><a href="#STRUCT_TO_JSON">STRUCT_TO_JSON</a> : 
Convert a structure to JSON notation, &amp; return it as a string.</li>
<li><a href="#STRUCT_TRIMTAGS">STRUCT_TRIMTAGS</a> : 
Trim a structure to a list of selected and/or excluded tags</li>
<li><a href="#STR_SEP">STR_SEP</a> : 
This routine cuts a string into pieces which are separated by the</li>
<li><a href="#SXASCII_READ">SXASCII_READ</a> : 
This routine has no obvious purpose.</li>
<li><a href="#SXCOMBINEPAR">SXCOMBINEPAR</a> : 
Combine values of specified header cards from many FITS headers.</li>
<li><a href="#SYNCH_POWER">SYNCH_POWER</a> : 
Compute power per Hz per particle for synchrotron radiation</li>
<li><a href="#SYSVARS">SYSVARS</a> : 
store IDL system variables in a structure for later restoration</li>
<li><a href="#TAG_INDX">TAG_INDX</a> : 
Returns the column number of the given tag to the given structure</li>
<li><a href="#TAI2AIRMASS">TAI2AIRMASS</a> : Compute airmass.</li>
<li><a href="#TEXTOIDL">TEXTOIDL</a> : 
Convert a valid TeX string to a valid IDL string for plot labels.</li>
<li><a href="#TEXTOIDL_MATCHDELIM">TEXTOIDL_MATCHDELIM</a> : 
Match open/close delimiters in a string.</li>
<li><a href="#TEXTOIDL_NEXTTOK">TEXTOIDL_NEXTTOK</a> : 
Find the next occurance of any of a set of characters in a</li>
<li><a href="#TEXTOIDL_STRCNT">TEXTOIDL_STRCNT</a> : 
Count number of occurrences of a substring in a string.</li>
<li><a href="#TEXTOIDL_STRTOK">TEXTOIDL_STRTOK</a> : 
Retrieve portion of string up to token.</li>
<li><a href="#TEXTOIDL_STRTRANS">TEXTOIDL_STRTRANS</a> : 
Translate all occurences of one substring to another.</li>
<li><a href="#TEXTOIDL_SUB_SUP">TEXTOIDL_SUB_SUP</a> : 
Return the proper IDL font positioning command for TeX</li>
<li><a href="#TEXTOIDL_TABLE">TEXTOIDL_TABLE</a> : 
Returns a translation table from TeX to IDL.</li>
<li><a href="#TEXTOIDL_TRANS_SUB_SUPER">TEXTOIDL_TRANS_SUB_SUPER</a> : 
Translate TeX sub/superscripts to IDL sub/superscripts.</li>
<li><a href="#TMASS_ASCII2FITS">TMASS_ASCII2FITS</a> : 
Convert 2MASS ascii files to FITS tables</li>
<li><a href="#TMASS_CONE">TMASS_CONE</a> : 
Determine RA,dec regions to read and call tmass_readzone</li>
<li><a href="#TMASS_DECSLICE">TMASS_DECSLICE</a> : 
rewrite 2MASS data in 0.1 deg declination slices for fast seeks</li>
<li><a href="#TMASS_FITS_FILES">TMASS_FITS_FILES</a> : 
Convert 2MASS gzipped ASCII files to decsliced FITS tables</li>
<li><a href="#TMASS_READ">TMASS_READ</a> : Read 2MASS stars near a given RA, dec
</li>
<li><a href="#TMASS_READZONE">TMASS_READZONE</a> : 
Read 2MASS FITS files given RA range out of one deczone.</li>
<li><a href="#TMASS_REFORMAT_PSC">TMASS_REFORMAT_PSC</a> : 
reformat 2MASS PSC from ASCII to FITS files</li>
<li><a href="#TMASS_STRUC">TMASS_STRUC</a> : 
Define data structure for FITS copy of 2MASS data</li>
<li><a href="#TMASS_XSC_READ">TMASS_XSC_READ</a> : 
Read in a region of 2MASS XSC data</li>
<li><a href="#TMASS_XSC_SFILES">TMASS_XSC_SFILES</a> : 
Convert full 2MASS XSC files into RA/Dec structured format</li>
<li><a href="#TNMIN">TNMIN</a> : 
Performs function minimization (Truncated-Newton Method)</li>
<li><a href="#TRACESET2PIX">TRACESET2PIX</a> : 
Use a traceset to find the pixel numbers corresponding to a certain postion</li>
<li><a href="#TRACESET2XY">TRACESET2XY</a> : 
Convert from a trace set to an array of x,y positions</li>
<li><a href="#TRACESET_TRIM">TRACESET_TRIM</a> : 
Trim a trace set to a selected number of traces</li>
<li><a href="#TRACE_CRUDE">TRACE_CRUDE</a> : 
Create a crude trace set given one position (eg, a center) in each trace.</li>
<li><a href="#TRACE_FWEIGHT">TRACE_FWEIGHT</a> : 
Recenter a trace using flux-weighting centers.</li>
<li><a href="#TRACE_GWEIGHT">TRACE_GWEIGHT</a> : 
Recenter a trace using gaussian-weighted centers.</li>
<li><a href="#TVIMAGE">TVIMAGE</a> : 
This purpose of TVIMAGE is to enable the TV command in IDL</li>
<li><a href="#TYCHO_EPOCH">TYCHO_EPOCH</a> : 
Apply proper motion corrections to an epoch other than 2000</li>
<li><a href="#TYCHO_READ">TYCHO_READ</a> : 
Read the Tycho catalog (and generate IDL save sets)</li>
<li><a href="#UCAC2PATCH_READ">UCAC2PATCH_READ</a> : 
Read the public UCAC-2 and incorporate USNO's r14 internal catalog</li>
<li><a href="#UCAC3_READ_F">UCAC3_READ()</a> : Read the UCAC-3 catalog</li>
<li><a href="#UCAC3_READINDEX_F">UCAC3_READINDEX()</a> : 
Return the indices for seeking within the raw UCAC-3 data files.</li>
<li><a href="#UCAC3_READZONE_F">UCAC3_READZONE()</a> : 
Read the raw UCAC-3 data files for a specific declination zone within</li>
<li><a href="#UCACR14_EXTRACT">UCACR14_EXTRACT</a> : 
Convert UCAC-2 r14 data file into a set of RA/Dec chunk files</li>
<li><a href="#UCACR14_READ">UCACR14_READ</a> : Read in a region of UCAC r14 data
</li>
<li><a href="#UCAC_READ_F">UCAC_READ()</a> : Read the UCAC catalog</li>
<li><a href="#UCAC_READINDEX_F">UCAC_READINDEX()</a> : 
Return the indices for seeking within the raw UCAC data files.</li>
<li><a href="#UCAC_READZONE_F">UCAC_READZONE()</a> : 
Read the raw UCAC data files for a specific declination zone within</li>
<li><a href="#UKIDSS_CSV2FITS">UKIDSS_CSV2FITS</a> : 
Convert UKIDSS CSV file to hierarchical FITS structure</li>
<li><a href="#UKIDSS_MATCH">UKIDSS_MATCH</a> : Match a set of RA/Decs to UKIDSS
</li>
<li><a href="#UKIDSS_READ">UKIDSS_READ</a> : Read in a region of UKIDSS data
</li>
<li><a href="#UNIXFIND">UNIXFIND</a> : 
recursively search for filenames faster than IDL's FILE_SEARCH family.</li>
<li><a href="#USNOB10_EXTRACT">USNOB10_EXTRACT</a> : 
Extract information from USNO-B1.0 binary data files</li>
<li><a href="#USNO_CONE">USNO_CONE</a> : 
Determine RA,dec regions to read and call usno_readzone</li>
<li><a href="#USNO_READ">USNO_READ</a> : 
Read star list from the USNO-A2.0 catalogue</li>
<li><a href="#USNO_READGC_F">USNO_READGC()</a> : 
Read the UCAC data files for a great circle on the sky.</li>
<li><a href="#USNO_READZONE">USNO_READZONE</a> : 
Read given RA range out of one deczone. (USNO-A or B)</li>
<li><a href="#UV2LL">UV2LL</a> : 
To convert from unit vectors to longitude/latitude</li>
<li><a href="#VAGC_READ">VAGC_READ</a> : 
Read the VAGC files and return objects around a location</li>
<li><a href="#VMID">VMID</a> : Return vector within a given polygon</li>
<li><a href="#VMIDC">VMIDC</a> : 
Return vector at barycenter of polygon edges (not necessarily inside!)</li>
<li><a href="#WCS_COORD2PIX">WCS_COORD2PIX</a> : 
Transform from a world coordinate system (WCS) to (x,y) pixel numbers.</li>
<li><a href="#WCS_GETVAL">WCS_GETVAL</a> : 
Read value(s) from NGP+SGP polar projections.</li>
<li><a href="#WEIGHTED_QUANTILE">WEIGHTED_QUANTILE</a> : 
given a set of values and weights, returns weighted quantile(s)</li>
<li><a href="#WHERE_ARRAY">WHERE_ARRAY</a> : 
Return the indices of those elements in vector B which</li>
<li><a href="#WHERE_POLYGONS_OVERLAP">WHERE_POLYGONS_OVERLAP</a> : 
Check which polygons overlap a given polygon</li>
<li><a href="#WHICH">WHICH</a> : 
To search for any file in the IDL !path that contains the</li>
<li><a href="#WHICH_PIX_POLYGON">WHICH_PIX_POLYGON</a> : 
given an input structure and a set of polygons with simple pixel</li>
<li><a href="#WINDOW_IMAGE">WINDOW_IMAGE</a> : 
Given a set of mangle polygons, create a pixelized image of the</li>
<li><a href="#WISE_ASCII2FITS">WISE_ASCII2FITS</a> : 
Reformat the WISE catalog release as FITS binary table files</li>
<li><a href="#WISE_MATCH">WISE_MATCH</a> : Match a set of RA/Decs to WISE</li>
<li><a href="#WRITE_FITS_POLYGONS">WRITE_FITS_POLYGONS</a> : 
Write a &quot;polygon&quot; format fits file from the IDL format</li>
<li><a href="#WRITE_MANGLE_POLYGONS">WRITE_MANGLE_POLYGONS</a> : 
Create a &quot;polygon&quot; format ascii file that mangle will understand</li>
<li><a href="#WRITE_REGIONS_POLYGONS">WRITE_REGIONS_POLYGONS</a> : 
Create a Regions format ascii file of spherical polygons</li>
<li><a href="#WRITE_YANNY_POLYGONS">WRITE_YANNY_POLYGONS</a> : 
Write a &quot;polygon&quot; format Yanny file from the IDL format</li>
<li><a href="#WSEX">WSEX</a> : 
Write out arbitrary SExtractor format catalogs, using native</li>
<li><a href="#XY2TRACESET">XY2TRACESET</a> : 
Convert from an array of x,y positions to a trace set</li>
<li><a href="#XYZ_TO_ANGLES">XYZ_TO_ANGLES</a> : 
Convert Cartesian coordinates (x,y,z) to spherical coordinates</li>
<li><a href="#YANNY_DIFF">YANNY_DIFF</a> : 
Compare two Yanny files, optionally copying values from one to another.</li>
<li><a href="#YANNY_FREE">YANNY_FREE</a> : 
Free memory allocated from reading a Yanny parameter file</li>
<li><a href="#YANNY_PAR">YANNY_PAR</a> : 
Obtain the value of a parameter in the header of a Yanny file.</li>
<li><a href="#YANNY_READ">YANNY_READ</a> : 
Read a Yanny parameter file into an IDL structure.</li>
<li><a href="#YANNY_READONE">YANNY_READONE</a> : 
Read one structure from a Yanny parameter file into an IDL structure.</li>
<li><a href="#YANNY_WRITE">YANNY_WRITE</a> : 
Write a Yanny parameter file from an IDL structure.</li>
<li><a href="#ZGROUP">ZGROUP</a> : Group objects in ra, dec, and z</li>
<li><a href="#ZMATCH">ZMATCH</a> : Match objects in ra, dec, and z</li>
</ul>
<hr />
<h2>Routine Descriptions</h2>
<h3 id="ACSSIP_AD2XY">ACSSIP_AD2XY</h3>
<p><a href="#ACSSIP_INVERT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
  NAME:
    acssip_ad2xy

  PURPOSE:
    Read new ACS _flt.fits header to invert distortion matrix and
    find distorted x &amp; y positions given tangent RA/Dec in arcseconds
    relative to the center pixel (CRPIX1,2). Will only work with headers 
    that have A_p_q, B_p_q keywords (after Aug 2004), 
    and are only found in extensions 1 (CCD #2) and 4 (CCD #1).

  CALLING SEQUENCE:
    acssip_xy2ad,  ra, dec, hdr, xd, yd

  INPUT:
    ra          : right ascension in arcseconds in the tangent plane from 
                  the pixel desginated by (CRPIX1-1, CRPIX2-1)
    dec         : declination in arcseconds
    hdr         : ACS header, designed for WFC, from HDU #1 or #4 in _flt files
    
  OUTPUT:
    xd          : distorted pixel column in native CCD frame
    yd          : distorted pixel row in native CCD frame

  SUBROUTINES CALLED:
    sxpar()

  COMMENTS: 
    Based on the reference of &quot;The SIP Convention for Representing 
      Distortion in FITS Image Headers&quot;
    by Shupe et al. 2005.

  BUGS:
    Doesn't do the tangent-plane projection correctly; i.e., this
      assumes that tan(theta)=theta.

  REVISION HISTORY
    Implemented by S. Burles during the lost year of 05. 

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/astrom/acssip_ad2xy.pro">$IDLUTILS_DIR/pro/astrom/acssip_ad2xy.pro</a>)</strong></p>
<hr />
<h3 id="ACSSIP_INVERT">ACSSIP_INVERT</h3>
<p><a href="#ACSSIP_AD2XY">[Previous Routine]</a></p>
<p><a href="#ACSSIP_XY2AD">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
  NAME:
    acssip_invert

  PURPOSE:
    Iterates the distortion correction to invert the distortion pixel map.

  COMMENTS: 
    Based on the reference of &quot;The SIP Convention for Representing 
      Distortion in FITS Image Headers&quot;, by Shupe et al. 2005.

  EXAMPLE:

    adxy, hdr, ra, dec, xl, yl
    acssip_invert, xl, yl, hdr, x, y

  REVISION HISTORY:
    Implemented by S. Burles during the lost year of 05. 
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/astrom/acssip_invert.pro">$IDLUTILS_DIR/pro/astrom/acssip_invert.pro</a>)</strong></p>
<hr />
<h3 id="ACSSIP_XY2AD">ACSSIP_XY2AD</h3>
<p><a href="#ACSSIP_INVERT">[Previous Routine]</a></p>
<p><a href="#ADJUST_ERROR">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
  NAME:
    acssip_xy2ad

  PURPOSE:
    Read new ACS _flt.fits header to convert pixel locations into
    RA/Dec pairs relative to CRPIX1,2.  Will only work with headers
    that have A_p_q, B_p_q keywords (after Aug 2004), and are only found
    in extensions 1 (CCD #2) and 4 (CCD #1)

  CALLING SEQUENCE:
    acssip_xy2ad,  pix_col, pix_row, hdr, ra, dec

  INPUT:
    pix_col     : any dimension array containing pixel column positions
    pix_row     : any dimension array containing pixel row positions
    hdr         : ACS header, designed for WFC, from HDU #1 or #4 in _flt files
    
  OUTPUT:
    ra          : right ascension in arcseconds in the tangent plane from 
                  the pixel desginated by (CRPIX1-1, CRPIX2-1)
    dec         : declination in arcseconds

  SUBROUTINES CALLED:
    sxpar()

  COMMENTS: 
    Based on the reference of &quot;The SIP Convention for Representing 
      Distortion in FITS Image Headers&quot;
    by Shupe et al. 2005.

  BUGS:
    Doesn't do the tangent-plane projection correctly; i.e., this
      assumes that tan(theta)=theta.

  REVISION HISTORY
    Implemented by S. Burles during the lost year of 05. 

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/astrom/acssip_xy2ad.pro">$IDLUTILS_DIR/pro/astrom/acssip_xy2ad.pro</a>)</strong></p>
<hr />
<h3 id="ADJUST_ERROR">ADJUST_ERROR</h3>
<p><a href="#ACSSIP_XY2AD">[Previous Routine]</a></p>
<p><a href="#ALM2HEALPIX">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
     adjust_error
 PURPOSE:
     given data points, uncertainties, and mean value, determines
     what extra uncertainty yields chi^2/dof=1?
 CALLING SEQUENCE
      adjustment = adjust_error( x, xerr, mean=mean, dof=dof)
 INPUTS:
     x - [N] array of measurements
     xerr - [N] array of estimated measurement uncertainties
 OPTIONAL INPUTS:
     mean - mean value if known [default is computed from x, xerr]
     dof - degrees of freedom, defaults to N; value (even the
           default) is reduced by 1 if mean is not input
     tol - tolerance in adjustment in chi^2 units [default is
           0.01*sqrt(dof)]
     maxiter - maximum number of binary search iterations
 OUTPUT:
     adjustment - minimum uncertainty to add to each xerr (in
                  quadrature) to yield chi^2 &lt;= dof 
 OPTIONAL OUTPUTS:
     niter - number of iterations executed
     chisq - chi^2 corresponding to adjustment
 METHOD:
     dunno
 REVISION HISTORY:
     Blanton &amp; Hogg 2003-07-15 written, tested a bit
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/adjust_error.pro">$IDLUTILS_DIR/pro/math/adjust_error.pro</a>)</strong></p>
<hr />
<h3 id="ALM2HEALPIX">ALM2HEALPIX</h3>
<p><a href="#ADJUST_ERROR">[Previous Routine]</a></p>
<p><a href="#ANG2PIX_RING">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   alm2healpix

 PURPOSE:
   Compute healpix map from spherical harmonic transform (Alm)

 CALLING SEQUENCE:
   map = alm2healpix(nside, alm, lmax=lmax)

 INPUTS:
   nside   - healpix nside (number of pixels is 12*nside^2)
   alm     - dcomplex array of Alm coefficients (Alm[l, m])
                Of course this is zero for l&lt;m
   
 KEYWORDS:
   lmax   - maximum l to compute (Default determined by alm array size)

 OUTPUTS:
   map    - healpix map

 OPTIONAL OUTPUTS:
   
 RESTRICTIONS:
   
 EXAMPLES:
   
 COMMENTS:
   Something is a little funny (part in 1 million) at the poles

 REVISION HISTORY:
   2003-Mar-14  Written by Douglas Finkbeiner, Princeton
   2003-Nov-12  Can do many maps at once, sped up - DPF &amp; NP
   2009-May-13  Fix underflows for nside &gt; 512 - EFS

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/healpix/alm2healpix.pro">$IDLUTILS_DIR/pro/healpix/alm2healpix.pro</a>)</strong></p>
<hr />
<h3 id="ANG2PIX_RING">ANG2PIX_RING</h3>
<p><a href="#ALM2HEALPIX">[Previous Routine]</a></p>
<p><a href="#ANGDIDIS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
    ANG2PIX_RING

 PURPOSE:
    Renders the RING scheme pixel number Ipring for a pixel which, given the
    map resolution parameter Nside, contains the point on the sphere
    at angular coordinates Theta and Phi

 INPUT
    ANG2PIX_RING, Nside, Theta, Phi, Ipring

    Nside     : determines the resolution (Npix = 12* Nside^2)
	SCALAR
    Theta : angle (along meridian), in [0,Pi], theta=0 : north pole,
	can be an ARRAY
    Phi   : angle (along parallel), in [0,2*Pi]
	can be an ARRAY of same size as theta

 OUTPUT
    Ipring  : pixel number in the RING scheme of HEALPIX pixelisation in [0,Npix-1]
	can be an ARRAY of same size as Theta and Phi
    pixels are numbered along parallels (ascending phi), 
    and parallels are numbered from north pole to south pole (ascending theta)


 HISTORY
    June-October 1997,  Eric Hivon &amp; Kris Gorski, TAC, 
            original ang_pix
    Feb 1999,           Eric Hivon,               Caltech
            name changed to ang2pix_ring

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/healpix/ang2pix_ring.pro">$IDLUTILS_DIR/pro/healpix/ang2pix_ring.pro</a>)</strong></p>
<hr />
<h3 id="ANGDIDIS">ANGDIDIS</h3>
<p><a href="#ANG2PIX_RING">[Previous Routine]</a></p>
<p><a href="#ANGLES_TO_XYZ">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   angdidis
 PURPOSE:
   Compute angular diameter distancea (for c/H_0=1).
 CALLING SEQUENCE:
   D= angdidis(z,OmegaM,OmegaL, weq=weq)
 INPUTS:
   z       - redshift or vector of redshifts
   OmegaM  - Omega-matter at z=0
   OmegaL  - Omega-Lambda at z=0
 OPTIONAL INPUTS:
   weq     - Equation of state (Default=-1)
 KEYWORDS
 OUTPUTS:
   angular diameter distance in units of the Hubble length c/H_0
 COMMENTS:
 BUGS:
   May not work for pathological parts of the OmegaM-OmegaL plane.
 EXAMPLES:
 PROCEDURES CALLED:
   propmotdis()
 REVISION HISTORY:
   25-Jun-2000  Written by Hogg (IAS)
   2004-Sep-8, Added equation of state for OmegaL, Padmanabhan
   (Princeton)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/cosmography/angdidis.pro">$IDLUTILS_DIR/pro/cosmography/angdidis.pro</a>)</strong></p>
<hr />
<h3 id="ANGLES_TO_XYZ">ANGLES_TO_XYZ</h3>
<p><a href="#ANGDIDIS">[Previous Routine]</a></p>
<p><a href="#ASINH">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
  angles_to_xyz
 PURPOSE:
  Convert spherical coordinates (r,phi,theta) into Cartesion coordinates
  (x,y,z).  The angles must be in the following ranges:
    0 &lt;= phi &lt; 360
    0 &lt;= theta &lt;= 180
  where theta=0 corresponds to the N pole, and theta=180 is the S pole.
  If you want to convert from RA and DEC, pass the following
  arguments (in degrees):  RA, 90-DEC
 REVISION HISTORY:
  2005-09-10  tweaked - Hogg (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/coord/angles_to_xyz.pro">$IDLUTILS_DIR/pro/coord/angles_to_xyz.pro</a>)</strong></p>
<hr />
<h3 id="ASINH">ASINH</h3>
<p><a href="#ANGLES_TO_XYZ">[Previous Routine]</a></p>
<p><a href="#ASTROM_ENGINE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
     ASINH
 PURPOSE:
     Return the inverse hyperbolic sine of the argument
 EXPLANATION:
     The inverse hyperbolic sine is used for the calculation of asinh 
     magnitudes, see Lupton et al. (1999, AJ, 118, 1406)

 CALLING SEQUENCE
     result = asinh( x) 
 INPUTS:
     X - hyperbolic sine, numeric scalar or vector (not complex) 

 OUTPUT:
     result - inverse hyperbolic sine, same number of elements as X
              double precision if X is double, otherwise floating pt.

 METHOD:
     Expression given in  Numerical Recipes, Press et al. (1992), eq. 5.6.7 
     Note that asinh(-x) = -asinh(x) and that asinh(0) = 0. and that
     if y = asinh(x) then x = sinh(y).     

 REVISION HISTORY:
     Written W. Landsman                 February, 2001
     Bug fixed for multiple elements  M Blanton Mar 2002
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/asinh2.pro">$IDLUTILS_DIR/pro/math/asinh2.pro</a>)</strong></p>
<hr />
<h3 id="ASTROM_ENGINE">ASTROM_ENGINE</h3>
<p><a href="#ASINH">[Previous Routine]</a></p>
<p><a href="#ASTROM_TWEAK">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   astrom_engine

 PURPOSE:
   Compute astrometric solution for a list of stars &amp; catalogue stars

 CALLING SEQUENCE:
   gsa_out = astrom_engine( xpos, ypos, catlon, catlat, gsa_in, $
    [ search_rad=, search_scale=, search_angle=, $
    poserr=, nmatch=, catind=, obsind=, /radial, /verbose ] )

 INPUTS:
   xpos       - X positions in CCD coordinates
   ypos       - Y positions in CCD coordinates
   catlon     - Catalog star longitudes in the same coordinate system as GSA_IN
   catlat     - Catalog star latitutes in the same coordinate system as GSA_IN
   gsa_in     - Input GSSS structure with initial guess for astrometric
                solution
   radial     - (Not used.)

 OPTIONAL INPUTS:
   search_rad   - Unused ???
   search_scale - Unused ???
   search_angle - If set, then search for rotations offset by +/-SEARCH_ANGLE
                  relative to the input astrometric guess.
   poserr       - Maximum position error in CCD coordinates; default to 1.
                  No stars will be matched at distances further than this.
   verbose      - If set, then be verbose.

 OUTPUTS:
   gsa_out    - Output GSSS structure with astrometric solution;
                return 0 if astrometry failed

 OPTIONAL OUTPUTS:
   nmatch     - Number of matched objects with the input catalog.
   catind     - Indices of CATLON,CATLAT for matched objects.
   obsind     - Indices of XPOS,YPOS for matched objects.

 COMMENTS:
   We assume that we know the scale and rotation well enough, then solve
   for the X,Y offsets by correlating with catalog stars.

 BUGS:
   The match distances are **hard-wired** to 6 arcsec on the first iteration,
   and 3 arcsec on the 2nd iteration???

 PROCEDURES CALLED:
   angle_from_pairs()
   astrom_tweak
   gsssadxy
   gsssxyad
   offset_from_pairs

 REVISION HISTORY:
   10-Jun-2002  Written by D. Schlegel &amp; D. Finkbeiner, Princeton.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/astrom/astrom_engine.pro">$IDLUTILS_DIR/pro/astrom/astrom_engine.pro</a>)</strong></p>
<hr />
<h3 id="ASTROM_TWEAK">ASTROM_TWEAK</h3>
<p><a href="#ASTROM_ENGINE">[Previous Routine]</a></p>
<p><a href="#ATV">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   astrom_tweak

 PURPOSE:
   Tweak astrometric solution, given a good initial guess

 CALLING SEQUENCE:
   gsa_out = astrom_tweak( gsa_in, catra, catdec, imx, imy, $
    [ dtheta=, errflag=, nmatch=, catind=, obsind=, /verbose ] )

 INPUTS:
   gsa_in     - Initial guess for astrometric solution (struct)
   cat        - Structure (with fields .ra, .dec) of catalogue positions
   im         - Structure (with fields .x, .y) of image star positions

 OPTIONAL KEYWORDS:
   dtheta     - Match distance between catalog and image stars;
                default to 5 arcsec
   verbose    - If set, then print sizes of offsets
  
 OUTPUTS:
   gsa_out    - returned guess for astrometric solution (struct);
                0 if solution failed

 OUTPUT OUTPUTS:
   errflag    - Set to 1 if fatal error occurs, 0 otherwise
   nmatch     - Number of matched stars
   catind     - Indices of CATLON,CATLAT for matched objects.
   obsind     - Indices of XPOS,YPOS for matched objects.

 COMMENTS:
   Uses preliminary solution given in astr structure to match image
   and catalogue stars within maxsep pixels of each other.  These
   are then used by astrom_warp to determine a new solution, returned
   in astr.
 
 BUGS:
   The terms AMDX[4],AMDY[4] in the GSSS structure should actually *not*
    be fit for since they are higher-order, but this was the easiest
    way to implement this code???

 PROCEDURES CALLED:
   djs_angle_match()
   gsssadxy
   gsssxyad

 REVISION HISTORY:
   02-Feb-2003  Written by D. Schlegel and D. Hogg, APO
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/astrom/astrom_tweak.pro">$IDLUTILS_DIR/pro/astrom/astrom_tweak.pro</a>)</strong></p>
<hr />
<h3 id="ATV">ATV</h3>
<p><a href="#ASTROM_TWEAK">[Previous Routine]</a></p>
<p><a href="#ATV_HEALCART_IND">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
       ATV
 
 PURPOSE: 
       Interactive display of 2-D images.

 CATEGORY: 
       Image display.

 CALLING SEQUENCE:
       atv [,array_name OR fits_file] [,min = min_value] [,max=max_value] 
           [,/linear] [,/log] [,/histeq] [,/block]
           [,/align] [,/stretch] [,header = header]

 REQUIRED INPUTS:
       None.  If atv is run with no inputs, the window widgets
       are realized and images can subsequently be passed to atv
       from the command line or from the pull-down file menu.

 OPTIONAL INPUTS:
       array_name: a 2-D data array to display
          OR
       fits_file:  a fits file name, enclosed in single quotes

 KEYWORDS:
       min:        minimum data value to be mapped to the color table
       max:        maximum data value to be mapped to the color table
       linear:     use linear stretch
       log:        use log stretch 
       histeq:     use histogram equalization
       block:      block IDL command line until ATV terminates
       align:      align image with previously displayed image
       stretch:    keep same min and max as previous image
       header:     FITS image header (string array) for use with data array
       
 OUTPUTS:
       None.  
 
 COMMON BLOCKS:
       atv_state:  contains variables describing the display state
       atv_images: contains the internal copies of the display image
       atv_color:  contains colormap vectors
       atv_pdata:  contains plot and text annotation information

 RESTRICTIONS:
       Requires IDL version 5.1 or greater.
       Requires Craig Markwardt's cmps_form.pro routine.
       Requires the GSFC IDL astronomy user's library routines.
       Some features may not work under all operating systems.

 SIDE EFFECTS:
       Modifies the color table.

 EXAMPLE:
       To start atv running, just enter the command 'atv' at the idl
       prompt, either with or without an array name or fits file name 
       as an input.  Only one atv window will be created at a time,
       so if one already exists and another image is passed to atv
       from the idl command line, the new image will be displayed in 
       the pre-existing atv window.

 MODIFICATION HISTORY:
       Written by Aaron J. Barth, with contributions by 
       Douglas Finkbeiner, Michael Liu, David Schlegel, and
       Wesley Colley.  First released 17 December 1998.

       This version is 1.4, last modified 23 June 2003.

       For the most current version, revision history, instructions,
       list of known bugs, and further information, go to:
              http://www.astro.caltech.edu/~barth/atv

       Hacked up by Finkbeiner 5 December 2003 to support healpix.
;-
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/atv.pro">$IDLUTILS_DIR/pro/plot/atv.pro</a>)</strong></p>
<hr />
<h3 id="ATV_HEALCART_IND">ATV_HEALCART_IND</h3>
<p><a href="#ATV">[Previous Routine]</a></p>
<p><a href="#ATV_JOE_WRITEPS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   atv_healcart_ind

 PURPOSE:
   Generate and cache healcart pixel index array and header for atv

 CALLING SEQUENCE:
   ind = atv_healcart_ind(image, nest=, header=)

 INPUTS:
   image   - healpix array

 KEYWORDS:
   nest    - indicate nested ordering

 OUTPUTS:
   ind     - index array

 OPTIONAL OUTPUTS:
   header  - mock FITS header for nonstandard HCT projection

 COMMENTS:
   Used by atv. 
   IDLUTILS version of wcsxy2sph.pro recognizes this projection, even
    though it is NOT STANDARD FITS!
   
 REVISION HISTORY:
   2003-May-10  Written by Douglas Finkbeiner, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/healpix/atv_healcart_ind.pro">$IDLUTILS_DIR/pro/healpix/atv_healcart_ind.pro</a>)</strong></p>
<hr />
<h3 id="ATV_JOE_WRITEPS">ATV_JOE_WRITEPS</h3>
<p><a href="#ATV_HEALCART_IND">[Previous Routine]</a></p>
<p><a href="#BALKAN_PLOT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   atv_joe_writeps

 PURPOSE:
   Write a PostScript file of the current ATV display w/out using a widget

 CALLING SEQUENCE:
   atv_joe_writeps, filename, [ _EXTRA ]

 INPUTS:
   filename   - Name of PostScript file

 OPTIONAL INPUTS:
   aspect     - retain aspect ratio in .ps file
   _EXTRA     - Optional keywords for DEVICE

 OUTPUT:

 OPTIONAL OUTPUTS:

 COMMENTS:
   This routine allows one to send the current contents of the ATV window
   to a PostScript file without using a widget.  This makes it convenient
   for using ATV in a batch mode to make plots (though the ATV window will
   still pop up on your terminal).

   Note that there are a number of defaults set in the call to DEVICE
   that can be over-written in the call to this routine.

 EXAMPLES:

 BUGS:

 PROCEDURES CALLED:

 REVISION HISTORY:
   08-May-2003  Written by J. Hennawi and D. Schlegel, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/atv_joe_writeps.pro">$IDLUTILS_DIR/pro/plot/atv_joe_writeps.pro</a>)</strong></p>
<hr />
<h3 id="BALKAN_PLOT">BALKAN_PLOT</h3>
<p><a href="#ATV_JOE_WRITEPS">[Previous Routine]</a></p>
<p><a href="#BEATDRIVE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   balkan_plot
 PURPOSE:
   plot balkans of a set of polygons
 CALLING SEQUENCE:
   balkan_plot, poly [, /over , /noplot, balkans=, weight=, $
      poly=, shading=, verts= ]
 INPUTS:
   poly - [np] mangle polygon structures
 OPTIONAL KEYWORDS:
   /over - overplot previously existing plot
   /noplot - don't actually plot
 OPTIONAL OUTPUTS:
   poly - [np] polygons guessed from the input
   balkans - [nb] balkanized polygons
   weight - [nb] weight to add in each balkanized polygon
   shading - [nb] shading values based on exposure time
   verts - [nb] structure containing vertices 
                     .NVERTS - number of vertices
                     .RA - pointer to array of RA values
                     .DEC - pointer to array of DEC values
 COMMENTS:
   If you want better control over how things get plotted, call with
   the /noplot option and have it return the &quot;verts&quot; and &quot;shading&quot;
   outputs (or you can set the shading yourself based on the
   &quot;weight&quot; output). Then you can do something like the following
   inside your plotting routine:

    loadct, 0
    for i=0L, n_elements(verts)-1L do $
      if(allverts[i].nverts gt 0) then $
      polyfill, *verts[i].ra, *verts[i].dec, color=shading[i], $
      noclip=0

 REVISION HISTORY:
   2005-Jul-07   as exposure_plot for FITS files MRB (NYU)
   2005-Dec-07   rewritten for more generality MRB (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mangle/balkan_plot.pro">$IDLUTILS_DIR/pro/mangle/balkan_plot.pro</a>)</strong></p>
<hr />
<h3 id="BEATDRIVE">BEATDRIVE</h3>
<p><a href="#BALKAN_PLOT">[Previous Routine]</a></p>
<p><a href="#BEATDRIVE_CHECK">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   beatdrive

 PURPOSE:
   test a new disk partition by writing it full of data and verifying

 CALLING SEQUENCE:
   beatdrive, path, fits=fits, size=size

 INPUTS:
   path   - path to beat on (will make with mkdir -p)

 KEYWORDS:
   fits   - set to write with writefits instead of writeu
   size   - multiply SDSS image size (5574656 bytes) by this factor
   
 OUTPUTS:
   lots of files!

 RESTRICTIONS:
   
 EXAMPLES:
   beatdrive, '/scr1/test'
   
 COMMENTS:
   data file size is 
   5574656 Bytes = 5444 kB = 5.3164 MB = 0.00519180 GB
   
 REVISION HISTORY:
   BOT         Written by Douglas Finkbeiner, Princeton
   10-Dec-2005 checked into idlutils/pro/misc

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/beatdrive.pro">$IDLUTILS_DIR/pro/misc/beatdrive.pro</a>)</strong></p>
<hr />
<h3 id="BEATDRIVE_CHECK">BEATDRIVE_CHECK</h3>
<p><a href="#BEATDRIVE">[Previous Routine]</a></p>
<p><a href="#BH_RDFORT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   beatdrive_check

 PURPOSE:
   test a new disk partition by reading output of beatdrive.pro

 CALLING SEQUENCE:
   beatdrive_check, path, fits=fits, nocompare=nocompare

 INPUTS:
   path      - path given to beatdrive.pro

 KEYWORDS:
   fits      - set to read with readfits [not implemented]
   nocompare - turn off comparisons for speed.

 EXAMPLES:
   beatdrive_check, '/scr1/test'
   
 COMMENTS:
   data file size is 
   5574656 Bytes = 5444 kB = 5.3164 MB = 0.00519180 GB
   
 REVISION HISTORY:
   BOT         Written by Douglas Finkbeiner, Princeton
   10-Dec-2005 checked into idlutils/pro/misc

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/beatdrive_check.pro">$IDLUTILS_DIR/pro/misc/beatdrive_check.pro</a>)</strong></p>
<hr />
<h3 id="BH_RDFORT">BH_RDFORT</h3>
<p><a href="#BEATDRIVE_CHECK">[Previous Routine]</a></p>
<p><a href="#BITMASK_WIDGET">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   bh_rdfort

 PURPOSE:
   Read 4*E(B-V) for Burstein &amp; Heiles reddening maps.
   Read values directly from Michael Strauss' Fortran data files.

   This program returns identical results as from Michael Strauss'
   program, but does not allow the interpolation option.

   Regions with no data return values of -14, -99 or -396.  Valid
   data is always &gt; -0.22.

 CALLING SEQUENCE:
   value = bh_rdfort( [ gall, galb, infile=infile, outfile=outfile, $
    bhpath=bhpath ] )

 INPUTS:

 OPTIONAL INPUTS:
   gall:       Galactic longitude(s) in degrees
   galb:       Galactic latitude(s) in degrees
   infile:     If set, then read LCOORD and BCOORD from this file
   outfile:    If set, then write results to this file
   bhpath:     Path name for BH data files

 OUTPUTS:
   value:      4*E(B-V) from Burstein &amp; Heiles reddening maps

 PROCEDURES CALLED:
   readcol

 REVISION HISTORY:
   Written by D. Schlegel, 2 Oct 1997, Durham
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/dust/bh_rdfort.pro">$IDLUTILS_DIR/pro/dust/bh_rdfort.pro</a>)</strong></p>
<hr />
<h3 id="BITMASK_WIDGET">BITMASK_WIDGET</h3>
<p><a href="#BH_RDFORT">[Previous Routine]</a></p>
<p><a href="#BLANTON_ONED_MEANPLOT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   bitmask_widget
 PURPOSE:
   Set a bitmask according to a set of radial buttons from user
 CALLING SEQUENCE:
   bits= bitmask_widget(names [, default=])
 INPUTS;
   names - [N] names for bits (1&lt;=N&lt;=32)
 OPTIONAL INPUTS:
   default - default bitmask to bring up for user
 OUTPUTS:
   bits - 32-bit integer with bit settings from user
 REVISION HISTORY:
   31-Mar-2009  MRB, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/bitmask_widget.pro">$IDLUTILS_DIR/pro/misc/bitmask_widget.pro</a>)</strong></p>
<hr />
<h3 id="BLANTON_ONED_MEANPLOT">BLANTON_ONED_MEANPLOT</h3>
<p><a href="#BITMASK_WIDGET">[Previous Routine]</a></p>
<p><a href="#BLANTON_WEIGHTED_MEAN_SURFACE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   blanton_oned_meanplot
 PURPOSE:
   plot sliding mean of one quantity vs one other
 COMMENTS:
 INPUTS:
   x           - data values
   z           - quantity to average
 OPTIONAL INPUTS:
   weight      - weighting for data points; default unity
   xrange      - x range; default to the number &gt; minnum area
   dxbin       - size of boxes in x-dir; default to a function of
                 first and second moments 
   levels      - contour levels; default to a function of image range
   minnum      - minimum number of points in a sliding box to plot;
                 default 100
 KEYWORDS:
 BUGS:
 REVISION HISTORY:
   2003-01-08  written - Hogg
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/blanton_oned_meanplot.pro">$IDLUTILS_DIR/pro/plot/blanton_oned_meanplot.pro</a>)</strong></p>
<hr />
<h3 id="BLANTON_WEIGHTED_MEAN_SURFACE">BLANTON_WEIGHTED_MEAN_SURFACE</h3>
<p><a href="#BLANTON_ONED_MEANPLOT">[Previous Routine]</a></p>
<p><a href="#BSPLINE_ACTION">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   blanton_weighted_mean_surface
 PURPOSE:
   make an image of the weighted mean for a 2-d set of measurements
 CALLING SEQUENCE:
   images = weighted_mean_surface(x,y,weight,quantity,xbin,ybin,dx,dy)
 INPUTS:
   x,y       - [N] values of measurements
   quantity  - [N] measurements themselves
   weight    - [N] weights for measurements
   xbin,ybin - [nx],[ny] vectors of coordinates of image pixel centers
   dx,dy     - size of sliding box in which means are taken
 OPTIONAL INPUTS:
   boot_seed - if set, use as seed for a bootstrap resampling trial
 OUTPUTS:
   images    - [nx,ny,4] output images of number of contributing
               points (image 0), total weight used (image 1), total
               square weight used (image 2), and weighted mean (image 3)
 COMMENTS:
 BUGS:
 REVISION HISTORY:
   2003-01-11  written - Hogg
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/blanton_weighted_mean_line.pro">$IDLUTILS_DIR/pro/plot/blanton_weighted_mean_line.pro</a>)</strong></p>
<hr />
<h3 id="BSPLINE_ACTION">BSPLINE_ACTION</h3>
<p><a href="#BLANTON_WEIGHTED_MEAN_SURFACE">[Previous Routine]</a></p>
<p><a href="#BSPLINE_BKPTS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   bspline_action

 PURPOSE:
      1) Construct banded bspline matrix, with dimensions [ndata, bandwidth]

 CALLING SEQUENCE:
   
   action = bspline_action( x, sset, x2=x2, lower=lower, upper=upper)

 INPUTS:
   x          - independent variable
   sset       - Structure to be returned with all fit parameters

 RETURNS:
   action     - b-spline action matrix

 OPTIONAL KEYWORDS:
   x2         - Orthogonal dependent variable for 2d fits

 OPTIONAL OUTPUTS:
   lower      - A list of pixel positions, each corresponding to the first
                occurence of position greater than breakpoint indx
   upper      - Same as lower, but denotes the upper pixel positions

 COMMENTS:
   Does not yet support the slatec function to directly return
   derivatives of the b-spline (ideriv). 

 EXAMPLES:

 PROCEDURES CALLED:

 REVISION HISTORY:
   11-Sep-2000 Written by Scott Burles, FNAL
    3-Jul-2001 Fundamental array organization bug fixed, S. Burles 
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/bspline/bspline_action.pro">$IDLUTILS_DIR/pro/bspline/bspline_action.pro</a>)</strong></p>
<hr />
<h3 id="BSPLINE_BKPTS">BSPLINE_BKPTS</h3>
<p><a href="#BSPLINE_ACTION">[Previous Routine]</a></p>
<p><a href="#BSPLINE_FIT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   bspline_bkpts

 PURPOSE:
   Choose bkpts for b-spline given different constraints

 CALLING SEQUENCE:
   
   fullbkpt = bspline_bkpts(x, nord=, bkpt=, $
    bkspace=, nbkpts=, everyn=, placed=, /silent)

 INPUTS:
   bkpt       - Breakpoint vector returned by efc
   nord       - Order for spline fit

 RETURNS:
   fullbkpt   - The fullbkpt vector required by evaluations with bvalu

 OPTIONAL KEYWORDS:
   bkspace    - Spacing of breakpoints in units of x
   everyn     - Spacing of breakpoints in good pixels
   nbkpts     - Number of breakpoints to span x range
                 minimum is 2 (the endpoints)
   placed     - Precalculated breakpoint positions.
   silent     - Do not produce non-critical messages

 OPTIONAL OUTPUTS:
   bkpt       - breakpoints without padding

 COMMENTS:
   If both bkspace and nbkpts are passed, bkspace is used.

 EXAMPLES:

 PROCEDURES CALLED:
   none

 REVISION HISTORY:
   10-Mar-2000  Written by Scott Burles, FNAL
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/bspline/bspline_bkpts.pro">$IDLUTILS_DIR/pro/bspline/bspline_bkpts.pro</a>)</strong></p>
<hr />
<h3 id="BSPLINE_FIT">BSPLINE_FIT</h3>
<p><a href="#BSPLINE_BKPTS">[Previous Routine]</a></p>
<p><a href="#BSPLINE_ITERFIT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   bspline_fit

 PURPOSE:
   Calculate a B-spline in the least-squares sense 
     based on two variables: x which is sorted and spans a large range
				  where bkpts are required
  		and 	      y which can be described with a low order
				  polynomial	

 CALLING SEQUENCE:
   error_code = bspline_fit(x, y, invvar, sset, $
    fullbkpt=, nord=, x2=, npoly=, yfit=)

 INPUTS:
   x          - Independent variable
   y          - Dependent variable
   invvar     - Inverse variance of Y
   sset       - Structure to be returned with all fit parameters
                (if not set, then it is created)

 OPTIONAL KEYWORDS:
   fullbkpt   - Pass fullbkpt to seed structure; if not set, then
                this is generated with CREATE_BSPLINESET()
   nord       - Order of b-splines; default to 4 (cubic)
   x2         - Orthogonal dependent variable
   npoly      - Order of x2 polynomial fit; default to the value in the
                SSET structure, or to 1.

 OUTPUTS:
   error_code - Non-negative numbers indicate ill-conditioned bkpts
                 0 is good
                -1 is dropped breakpoints, try again
                -2 is failure, should abort
   sset       - Structure with all fit parameters

 OPTIONAL OUTPUTS:
   yfit       - Evaluation of b-spline at X (and X2)

 COMMENTS:
   This code replaces efcmn and efc2d calls in the slatec library.

 BUGS:
   Do we need to sort X for this routine???

 EXAMPLES:

 PROCEDURES CALLED:
   bspline_action()
   bspline_maskpoints()
   bspline_valu()
   cholesky_band()
   cholesky_solve()
   create_bsplineset()

 REVISION HISTORY:
   20-Aug-2000 Written by Scott Burles, FNAL
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/bspline/bspline_fit.pro">$IDLUTILS_DIR/pro/bspline/bspline_fit.pro</a>)</strong></p>
<hr />
<h3 id="BSPLINE_ITERFIT">BSPLINE_ITERFIT</h3>
<p><a href="#BSPLINE_FIT">[Previous Routine]</a></p>
<p><a href="#BSPLINE_MASKPOINTS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   bspline_iterfit

 PURPOSE:
   Calculate a B-spline in the least squares sense with rejection

 CALLING SEQUENCE:
   sset = bspline_iterfit( )

 INPUTS:
   xdata      - Data x values
   ydata      - Data y values

 OPTIONAL KEYWORDS:
   invvar     - Inverse variance of y; if not set, then set to be
                consistent with the standard deviation.  This only matters
                if rejection is being done.
   nord       - Order for spline fit; default to 4.
   x2         - 2nd dependent variable for 2-D spline fitting.
   npoly      - Polynomial order to fit over 2nd variable (X2); default to 2.
   xmin       - Normalization minimum for X2; default to MIN(XDATA).
   xmax       - Normalization maximum for X2; default to MAX(XDATA).
   oldset     - If set, then use values of FULLBKPT, NORD, XMIN, XMAX, NPOLY
                from this structure.
   funcname   - If OLDSET is not specified and this is a 2-D B-spline,
                then the function for the second variable may be passed.
                The default is 'legendre' in the call to CREATE_BSPLINESET().
   maxiter    - Maximum number of rejection iterations; default to 10;
                set to 0 to disable rejection.
   upper      - Upper rejection threshhold; default to 5 sigma.
   lower      - Lower rejection threshhold; default to 5 sigma.
   requiren   - force at at least (requiren) data points between each set of bkpts.
   _EXTRA     - Keywords for BSPLINE_BKPTS(), BSPLINE_FIT and/or DJS_REJECT().

 OUTPUTS:
   sset       - Structure describing spline fit.
                Return 0 if too few good (INVVAR NE 0) points are passed.

 OPTIONAL OUTPUTS:
   outmask    - Output mask, set =1 for good points, =0 for bad points.
   fullbkpt   - If OLDSET is not specified, then the break points are
                chosen with a call to BSPLINE_BKPTS() which can be returned
                with this keyword.
   yfit       - B-spline fit evaluated at each data point.

 COMMENTS:
   Data points can be masked either by setting their weights to zero
   (INVVAR[]=0), or by using INMASK and setting bad elements to zero.
   INMASK is passed to DJS_REJECT().

   If OLDSET is used, then the output structure SSET will be a structure
   with the same name as OLDSET.  This will allow the two structures to
   be concatented, i.e.
     &gt; junk = [oldset, sset]

   Although I'm not sure how to treat data points which fall outside
   minmax(bkpt), now I will set them equal to minmax with invvar = 0

 EXAMPLES:
   Construct a random function, and fit a B-spline to it without
   any rejection:
     IDL&gt; x = findgen(1000)
     IDL&gt; y = smooth(randomu(1234,1000),10)
     IDL&gt; sset = bspline_iterfit(x,y,nord=3,maxiter=0,bkspace=10)
     IDL&gt; yfit = bspline_valu(x,sset)

 PROCEDURES CALLED:
   bspline_bkpts()
   bspline_fit()
   create_bsplineset()
   djs_reject()

 REVISION HISTORY:
   05-Sep-2000  Written by D. Schlegel &amp; S. Burles
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/bspline/bspline_iterfit.pro">$IDLUTILS_DIR/pro/bspline/bspline_iterfit.pro</a>)</strong></p>
<hr />
<h3 id="BSPLINE_MASKPOINTS">BSPLINE_MASKPOINTS</h3>
<p><a href="#BSPLINE_ITERFIT">[Previous Routine]</a></p>
<p><a href="#BSPLINE_PSF_ACTION">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   bspline_maskpoints

 PURPOSE:
   Perform simple logic of which breakpoints to mask

 CALLING SEQUENCE:
   error_code = bspline_maskpoints(sset, errb, npoly)
   
 INPUTS:
   sset      - Bspline structure
   errb      - Errors returned from cholesky routines
   npoly     - Polynomial norder of 2d fit (default 1)

 RETURNS:
   error_code =  -1:   Breakpoints have been dropped, try again
                 -2:   Solution not possible, abort

 OUTPUTS:

 OPTIONAL KEYWORDS:

 OPTIONAL OUTPUTS:

 COMMENTS:

 EXAMPLES:

 PROCEDURES CALLED:

 REVISION HISTORY:
   12-Oct-2000 Written by Scott Burles, FNAL
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/bspline/bspline_maskpoints.pro">$IDLUTILS_DIR/pro/bspline/bspline_maskpoints.pro</a>)</strong></p>
<hr />
<h3 id="BSPLINE_PSF_ACTION">BSPLINE_PSF_ACTION</h3>
<p><a href="#BSPLINE_MASKPOINTS">[Previous Routine]</a></p>
<p><a href="#BSPLINE_RADIAL">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   bspline_psf_action

 PURPOSE:
   Calculate the action matrix for a Radial B-spline with PSF convolution

 CALLING SEQUENCE:
   sset = bspline_psf_action( )

 INPUTS:
   r          - independent radial coordinate
   theta      - independent angular coordinate (in radians)
   data       - Data values

 OPTIONAL KEYWORDS:
   invvar     - Inverse variance of data; if not set, then all data points
                 have weight of 1.0
   ntheta     - Vector of multipole identifiers
                 Each entry will correspond to an independent angular mode
                 Negative elements represent sin(abs(ntheta)*theta)
                 Positive elements represent cos(ntheta*theta)
                 Default is [0,-2,2]
   rbkpt      - This is analogous to bkpt keyword in bspline_iterfit
                This sets the breakpoint positions in the radial dimension
                 and does not include the boundary breakpoints.
                One can choose to use bkspace or everyn to also set rbkpt.
   _EXTRA     - Keywords for BSPLINE_BKPTS() and/or DJS_REJECT().

 OUTPUTS:
   sset       - Structure describing spline fit.
                Return 0 if too few good (INVVAR NE 0) points are passed.

 OPTIONAL OUTPUTS:
   outmask    - Output mask, set =1 for good points, =0 for bad points.
   yfit       - B-spline fit evaluated at each data point.

 COMMENTS:

   The calling is analogous to bspline_iterfit, so hopefully you're
   familiar with the 1d bsplines.  This fits a function in polar coordinates,
   and r, theta, and data must be supplied.  The number of free parameters
   is given by (Nbkpt + Nord - 1) * N_multipole.
     Nbkpt       = n_elements(bkpt)
     Nord        = the order of the bspline (default is 4)
     N_multipole = n_elements(ntheta)  

   See Bolton et al. 2005 for an official description of radial bsplines

 EXAMPLES:

 PROCEDURES CALLED:
   bspline_bkpts()
   bspline_workit()
   bspline_action()
   create_bsplineset()
   djs_reject()

 REVISION HISTORY:
   16-Aug-2005  Written by S. Burles &amp; A. Bolton, MIT
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/bspline/bspline_psf_action.pro">$IDLUTILS_DIR/pro/bspline/bspline_psf_action.pro</a>)</strong></p>
<hr />
<h3 id="BSPLINE_RADIAL">BSPLINE_RADIAL</h3>
<p><a href="#BSPLINE_PSF_ACTION">[Previous Routine]</a></p>
<p><a href="#BSPLINE_RADIAL_VALU">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   bspline_radial

 PURPOSE:
   Calculate a Radial B-spline in the least squares sense with rejection

 CALLING SEQUENCE:
   sset = bspline_radial( )

 INPUTS:
   r          - independent radial coordinate
   theta      - independent angular coordinate (in radians)
   data       - Data values

 OPTIONAL KEYWORDS:
   invvar     - Inverse variance of data; if not set, then all data points
                 have weight of 1.0
   ntheta     - Vector of multipole identifiers
                 Each entry will correspond to an independent angular mode
                 Negative elements represent sin(abs(ntheta)*theta)
                 Positive elements represent cos(ntheta*theta)
                 Default is [0,-2,2]
   rbkpt      - This is analogous to bkpt keyword in bspline_iterfit
                This sets the breakpoint positions in the radial dimension
                 and does not include the boundary breakpoints.
                One can choose to use bkspace or everyn to also set rbkpt.
   _EXTRA     - Keywords for BSPLINE_BKPTS() and/or DJS_REJECT().

 OUTPUTS:
   sset       - Structure describing spline fit.
                Return 0 if too few good (INVVAR NE 0) points are passed.

 OPTIONAL OUTPUTS:
   outmask    - Output mask, set =1 for good points, =0 for bad points.
   yfit       - B-spline fit evaluated at each data point.

 COMMENTS:

   The calling is analogous to bspline_iterfit, so hopefully you're
   familiar with the 1d bsplines.  This fits a function in polar coordinates,
   and r, theta, and data must be supplied.  The number of free parameters
   is given by (Nbkpt + Nord - 1) * N_multipole.
     Nbkpt       = n_elements(bkpt)
     Nord        = the order of the bspline (default is 4)
     N_multipole = n_elements(ntheta)  

   See Bolton et al. 2005 for an official description of radial bsplines

 EXAMPLES:

 PROCEDURES CALLED:
   bspline_bkpts()
   bspline_workit()
   bspline_action()
   create_bsplineset()
   djs_reject()

 REVISION HISTORY:
   22-Feb-2005  Written by S. Burles &amp; A. Bolton, MIT
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/bspline/bspline_radial.pro">$IDLUTILS_DIR/pro/bspline/bspline_radial.pro</a>)</strong></p>
<hr />
<h3 id="BSPLINE_RADIAL_VALU">BSPLINE_RADIAL_VALU</h3>
<p><a href="#BSPLINE_RADIAL">[Previous Routine]</a></p>
<p><a href="#BSPLINE_VALU">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   bspline_radial_valu

 PURPOSE:
      1) Evaluate a radial bspline set (see bspline_radial) at the 2-d
        positions specified by the r and theta arrays

 CALLING SEQUENCE:
   
   radial_fit  = bspline_radial_valu( r, theta, sset, [mode = ] )

 INPUTS:
   x          - independent variable
   sset       - Structure to be returned with all fit parameters

 RETURNS:
   radial_fit - Evaluated b-spline fit

 OPTIONAL KEYWORDS:
   mode       - return just a single mode of the bspline fit, 
                must be GE 0 and LT n_elements(sset.ntheta)
                Default is to return the sum of all modes

 OPTIONAL OUTPUTS:
 
 COMMENTS:

 EXAMPLES:

 PROCEDURES CALLED:

 REVISION HISTORY:
   22-Feb-2005 Written by Scott Burles &amp; Adam Bolton, MIT 
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/bspline/bspline_radial_valu.pro">$IDLUTILS_DIR/pro/bspline/bspline_radial_valu.pro</a>)</strong></p>
<hr />
<h3 id="BSPLINE_VALU">BSPLINE_VALU</h3>
<p><a href="#BSPLINE_RADIAL_VALU">[Previous Routine]</a></p>
<p><a href="#BVALU2D">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   bspline_valu

 PURPOSE:
      1) Evaluate a bspline set (see create_bsplineset) at specified
            x and x2 arrays

 CALLING SEQUENCE:
   
   yfit  = bspline_valu( x, sset, x2=x2, action=action, upper=upper, 
               lower=lower, mask=mask)

 INPUTS:
   x          - independent variable
   sset       - Structure to be returned with all fit parameters

 RETURNS:
   yfit       - Evaluated b-spline fit

 OPTIONAL KEYWORDS:
   x2         - Orthogonal dependent variable for 2d fits
   action     - This keyword is overwritten with b-spline action matrix
   lower,upper- Internal keywords used by action, maybe should replace
                action with a structure including lower and upper

 OPTIONAL OUTPUTS:
   mask       - a mask array of good (1's) bspline evalutions
 
 COMMENTS:
   the mask attempts to show regions where the bspline was ill-defined
    and breakpoints had been dropped.

 EXAMPLES:

 PROCEDURES CALLED:

 REVISION HISTORY:
   11-Sep-2000 Written by Scott Burles, FNAL
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/bspline/bspline_valu.pro">$IDLUTILS_DIR/pro/bspline/bspline_valu.pro</a>)</strong></p>
<hr />
<h3 id="BVALU2D">BVALU2D</h3>
<p><a href="#BSPLINE_VALU">[Previous Routine]</a></p>
<p><a href="#CAPSTR__DEFINE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   bvalu2d

 PURPOSE:
   Evaluate a bspline fit over 2 dependent variables

 CALLING SEQUENCE:
   
    z = bvalu2d(x, y, bkpt, coeff, ideriv=ideriv)

 INPUTS:
   x          - vector of x positions to evaluate
   y          - vector of y positions to evaluate
   bkpt       - Breakpoint vector returned by efc
   coeff      - B-spline coefficients calculated by efc 
		   2d in this case [npoly, nbkpt-nord]

 OPTIONAL KEYWORDS:

   ideriv     - Derivative to evaluate at x (default 0)

 OUTPUTS:
   z          - Evaluations corresponding to x positions

 OPTIONAL OUTPUTS:

 COMMENTS:

 EXAMPLES:


 PROCEDURES CALLED:
   slatec_bvalu


 REVISION HISTORY:
   13-Mar-2000  Written by Scott Burles, FNAL
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/slatec/bvalu2d.pro">$IDLUTILS_DIR/pro/slatec/bvalu2d.pro</a>)</strong></p>
<hr />
<h3 id="CAPSTR__DEFINE">CAPSTR__DEFINE</h3>
<p><a href="#BVALU2D">[Previous Routine]</a></p>
<p><a href="#CAP_DISTANCE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   capstr__define
 PURPOSE:
   Create the structure for a cap
 CALLING SEQUENCE:
   poly={capstr}
 INPUTS:
 OPTIONAL INPUTS:
 OUTPUTS:
 OPTIONAL INPUT/OUTPUTS:
 COMMENTS:
 EXAMPLES:
 BUGS:
 PROCEDURES CALLED:
 VERSION:
   $Id: capstr__define.pro 122754 2011-03-28 15:24:24Z weaver $
 REVISION HISTORY:
   2011-03-27 Written by B. A. Weaver (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mangle/capstr__define.pro">$IDLUTILS_DIR/pro/mangle/capstr__define.pro</a>)</strong></p>
<hr />
<h3 id="CAP_DISTANCE">CAP_DISTANCE</h3>
<p><a href="#CAPSTR__DEFINE">[Previous Routine]</a></p>
<p><a href="#CATFITS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   cap_distance

 PURPOSE:
   Return distance from coordinates to a cap, in degrees.

 CALLING SEQUENCE:
   cap_distance

 INPUTS:

 OPTIONAL INPUTS:

 OUTPUT:

 OPTIONAL OUTPUTS:

 COMMENTS:
   The sign is positive if in the cap, and negative if outside

 EXAMPLES:

 BUGS:

 PROCEDURES CALLED:
   angles_to_x()

 REVISION HISTORY:
   19-Jun-2003  Written by David Schlegel, Princeton.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mangle/cap_distance.pro">$IDLUTILS_DIR/pro/mangle/cap_distance.pro</a>)</strong></p>
<hr />
<h3 id="CATFITS">CATFITS</h3>
<p><a href="#CAP_DISTANCE">[Previous Routine]</a></p>
<p><a href="#CCM_FITRV_F">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
	catfits
 PURPOSE:
       Read and concatenate a bunch of binary FITS tables

 CALLING SEQUENCE:
	struc = catfits(flist)

 INPUTS:
       filst  - string array of FITS filenames to read and concatenate
		for each column of data to be read.  Allowed letters are 
 OUTPUTS:
	struc  - IDL structure

 REVISION HISTORY:
	Written  2001-Nov-28 D. Finkbeiner
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/catfits.pro">$IDLUTILS_DIR/pro/misc/catfits.pro</a>)</strong></p>
<hr />
<h3 id="CCM_FITRV_F">CCM_FITRV()</h3>
<p><a href="#CATFITS">[Previous Routine]</a></p>
<p><a href="#CIRCLE_CAP">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   ccm_fitrv()

 PURPOSE:
   Does a simple fit to R_V and normalization

 CALLING SEQUENCE:
   R_V = ccm_fitrv(wave, redfac, [weight=, norm=norm, chi2=chi2])

 INPUTS:
   wave   : Wavelength [Ang] at which A is measured
   redfac : Measured A
   weight : Weight coefficients (by band)

 OUTPUTS:
   R_V    : Measured R_V

 OPTIONAL OUTPUTS:
   norm   : The measured normalization
   chi2   : Returned chi2 (unit weights assumed if none passed)
   
 COMMENTS:
    The chi2 is measured by func_ccm_fitrv.pro. See that function
    for weights etc.
    The reddening curve is computed by ccm_unred.pro
   
 REVISION HISTORY:
   2003-Sep-10  Written by D. Finkbeiner &amp; N.Padmanabhan, Princeton

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/dust/ccm_fitrv.pro">$IDLUTILS_DIR/pro/dust/ccm_fitrv.pro</a>)</strong></p>
<hr />
<h3 id="CIRCLE_CAP">CIRCLE_CAP</h3>
<p><a href="#CCM_FITRV_F">[Previous Routine]</a></p>
<p><a href="#CMPS_FORM">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   circle_cap
 PURPOSE:
   Return a circular cap centered on a certain set of coordinates.
 CALLING SEQUENCE:
   cap=circle_cap(radius, [ra=, dec=, xyz= ])
 INPUTS:
   radius - proper radius of cap, in degrees
   ra, dec - coordinates of center
    OR
   xyz - xyz value of center (should be unit vector)
 COMMENTS:
   Use for the cap of a mangle polygon defining a circle.
   ra,dec inputs will override xyz inputs
 REVISION HISTORY:
   01-Oct-2002  Written by MRB (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mangle/circle_cap.pro">$IDLUTILS_DIR/pro/mangle/circle_cap.pro</a>)</strong></p>
<hr />
<h3 id="CMPS_FORM">CMPS_FORM</h3>
<p><a href="#CIRCLE_CAP">[Previous Routine]</a></p>
<p><a href="#CMP_FITS_FILES">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   CMPS_FORM

 PURPOSE:
   This function puts up a form the user can configure a PostScript
   device driver. The function result (if the user selects either the
   ACCEPT or CREATE FILE buttons) can be sent directly to the DEVICE
   procedure by means of its _Extra keyword.  User's predefined
   configurations may be retrieved from a common block.

 AUTHOR:
   *********** CM 01 Feb 2000 VERSION *************
   Craig B. Markwardt, NASA/GSFC Code 662, Greenbelt, MD 20770
   craigm@lheamail.gsfc.nasa.gov

   Based almost entirely on, but a totally revamped version of, CMPS_FORM by 
   FANNING SOFTWARE CONSULTING (David Fanning Ph.D.) http://www.dfanning.com

 MAJOR TOPICS:
   Device Drivers, Hardcopy Output, PostScript Output

 PROCEDURE:
   This is a pop-up form widget. It is a modal or blocking widget.
   Keywords appropriate for the PostScript DEVICE command are returned.

   Use your LEFT mouse button to move the &quot;Plot Window&quot; around the page.
   Use your RIGHT mouse button to draw your own &quot;Plot Window&quot; on the page.

 HELP:
   formInfo = CMPS_FORM(/Help)

 CALLING SEQUENCE:
    formInfo = CMPS_FORM(xoffset, yoffset, Cancel=cancelButton)

 OPTIONAL INPUTS:

    XOFFSET -- Optional xoffset of the top-level base of cmps_form. Default is
    to try to center the form on the display.

    YOFFSET -- Optional yoffset of the top-level base of cmps_form. Default is
    to try to center the form on the display.

 INPUT KEYWORD PARAMETERS:

    BITS_PER_PIXEL -- The initial configuration of the bits per pixel button.

    BLOCKING -- Set this keyword to make this a blocking widget under IDL 5.0.
    (All widget programs block under IDL 4.0.)

    COLOR -- The initial configuration of the color switch.

    DEFAULTS -- A stucture variable of the same type and structure as the
    RETURN VALUE of cmps_form. It will set initial conditions. This makes
    it possible to start cmps_form up again with the same values it had the
    last time it was called. For example:

       mysetup = cmps_form()
       newsetup = cmps_form(Defaults=mysetup)

    ENCAPSULATED -- The initial configuration of the encapsulated switch.

    FILENAME -- The initial filename to be used on the form.

    HELP -- Prints a helpful message in the output log.

    INCHES -- The initial configuration of the inches/cm switch.

    INITIALIZE -- If this keyword is set, the program immediately returns the
    &quot;localdefaults&quot; structure. This gives you the means to configue the
    PostScript device without interrupting the user.

    SELECT -- used only when INITIALIZE is set.  Set SELECT to a
              string which identifies the predefined configuration to
              be returned by cmps_form when INITIALIZE is set.  This is
              a convenient way to select a predefined config
              non-interactively.

    LANDSCAPE -- The initial configuration of the landscape/portrait switch.

    LOCALDEFAULTS -- A structure like the DEFAULTS structure. If specified,
    then it is added as a predefined configuration entry called &quot;Local&quot;.
    See below for a further discussion of predefined configurations.

    PREDEFINED -- An alternate way to specify predefined
                  configurations.  Pass an array of structures to
                  populate the &quot;predefined&quot; dropbox in the
                  dialog. This array, if specified, overrides the the
                  common block technique.

    XOFFSET -- The initial XOffSet of the PostScript window.

    YOFFSET -- The initial YOffSet of the PostScript window.

    XSIZE -- The initial XSize of the PostScript window.

    YSIZE -- The initial YSize of the PostScript window.

    ASPECT -- The aspect ratio of the window (Y/X).  This keyword can
              substitute for one of XSIZE or YSIZE.
 
    PRESERVE_ASPECT -- Set this keyword if you want to hold the
                       aspect ratio constant.

    PAPERSIZE -- If set, allows user to specify the size of the paper
                 media to be printed on, as a scalar string.  NOTE:
                 this specification cannot be passed to DEVICE, but
                 can be selected for completeness's sake.  Default is
                 'Letter'.

    MARGINSIZE -- Size of the margins on all sides.  Default is 0.25 inches.
                  When MARGINSIZE is non-zero, a graphic cannot directly
                  abut the edge of the page.  This is normally a good thing,
                  since there is often a  non-printable region which borders
                  the page.

   DEFAULTPAPER -- Default paper size to use, when it is unspecified
                   in a predefined, &quot;local&quot;, or &quot;default&quot;
                   configuration.  This value also overrides any
                   configuration from common blocks.  European users
                   will probably set this to 'A4'.

   PARENT -- if this widget is invoked by another widget program,
             then this keyword parameter must be set to the top level
             widget which is to serve as the group leader.  Failure
             to do so will result in unexpected behavior.  IDL 4
             programs do not need to pass this parameter.  Default:
             NONE.

 OUTPUT KEYWORD PARAMETERS

    CANCEL -- This is an OUTPUT keyword. It is used to check if the user
    selected the &quot;Cancel&quot; button on the form. Check this variable rather
    than the return value of the function, since the return value is designed
    to be sent directly to the DEVICE procedure. The varible is set to 1 if
    the user selected the &quot;Cancel&quot; button. Otherwise, it is set to 0.

    CREATE -- This output keyword can be used to determine if the user
    selected the 'Create File' button rather than the 'Accept' button.
    The value is 1 if selected, and 0 otherwise.

    PAPERSIZE -- If set to a named variable, any newly selected paper
    size is returned in that variable.

    XPAGESIZE -- Size of paper in &quot;X&quot; dimension, in units given by
                 the returned config structure.

    YPAGESIZE -- Size of paper in &quot;Y&quot; dimension, in units given by
                 the returned config structure.

    PAGEBOX -- specifies the page rectangle relative to the plot
               window, in normalized units.  A 4-vector of the form
               [XLL, YLL, XUR, YUR] is returned, giving the positions
               of the lower left (LL) and upper right (UR) corners of
               the page with respect to the plot window.  Thus, the
               following command:

                    PLOT, x, y, position=PAGEBOX

               will construct a graphic whose plot region exactly
               fills the page (with no margin around the edges).

               Naturally, the page is usually larger than the
               graphics window, so the normalized coordinates will
               usually fall outside the range [0,1].

               However, the bounding box constructed by the
               Postscript driver includes only the graphics window.
               Anything drawn outside of it may be clipped or
               discarded.

 RETURN VALUE:

     formInfo = { cmps_form_INFO, $
                  xsize:0.0, $        ; The x size of the plot
                  xoff:0.0, $         ; The x offset of the plot
                  ysize:0.0, $        ; The y size of the plot
                  yoff:0.0 $          ; The y offset of the plot
                  filename:'', $      ; The name of the output file
                  inches:0 $          ; Inches or centimeters?
                  color:0, $          ; Color on or off?
                  bits_per_pixel:0, $ ; How many bits per image pixel?
                  encapsulated:0,$    ; Encapsulated or regular PostScript?
                  isolatin1:0,$       ; Encoded with ISOLATIN1?
                  landscape:0 }       ; Landscape or portrait mode?

 USAGE:

  The calling procedure for this function in a widget program will
  look something like this:

     info.ps_config = cmps_form(/Initialize)

     formInfo = cmps_form(Cancel=canceled, Create=create, $
                          Defaults=info.ps_config)

     IF NOT canceled THEN BEGIN
        IF create THEN BEGIN
           thisDevice = !D.Name
           Set_Plot, &quot;PS&quot;
           Device, _Extra=formInfo

           Enter Your Graphics Commands Here!

           Device, /Close
           Set_Plot, thisDevice
           info.ps_config = formInfo
        ENDIF ELSE
           info.ps_config = formInfo
     ENDIF

 MAJOR FUNCTIONS and PROCEDURES:

   None. Designed to work originally in conjunction with XWindow, a
   resizable graphics window.  [ NOTE: this modified version of
   cmps_form, by Craig Markwardt, is incompatible with the original
   version of XWINDOW. ]

 MODIFICATION HISTORY:

   Based on cmps_form of : David Fanning, RSI, March 1995.
   Major rewrite by: Craig Markwardt, October 1997.
     - Drawing and updating of form and sample box are now modular
     - Option of storing more than one predefined postscript configuration
     - Selection of paper size by name
     - Access to predfined configurations through (optional) common
       block
   Several additions, CM, April 1998  VERSION CM2.0
     - better integration of paper sizes throughout program.
       Predefined configurations now also know about paper.
     - allow passing predefined configurations instead of using
       common block
     - addition of ISOLATIN selection, and streamlining of dialog
       appearance
   Fixed bug in INITIALIZE w.r.t. paper sizes, CM, Nov 1998
   Added SELECT keyword, CM, 09 Dec 1998
   Added Parent keyword to allow modal widgets in IDL 5, 19 Jan 1999
   Added &quot;Choose&quot; button for filename selection, 19 Sep 1999
   Added ability to program different button names, 19 Sep 1999
   Added ASPECT and PRESERVE_ASPECT, based on work by Aaron Barth, 18
     Oct 1999
   Removed NOCOMMON documentation and logic, 19 Oct 1999, CM
   Added aspect to cmps_form_numevents (per Aaron Barth), 18 Oct 1999
   Corrected small bug under Initialize keyword (inches), 18 Oct 1999
   Made call to *_pscoord more consistent, 18 Oct 1999
   Added XPAGESIZE, YPAGESIZE and PAGEBOX keywords, 19 Oct 1999
   Small cosmetic cleanup, CM, 01 Feb 2000

 COMMON BLOCKS:
 
   The user may store frequently used or helpful configurations in a 
   common block, and cmps_form() will attempt to access them.  This
   provides a way for the user to have persistent, named,
   configurations.

   NOTE: this format has changed since the last version.  You may
   have to quit your IDL session for the changes to take effect
   properly.  If you have place a predefined configuration in your
   startup file, you should review the new format.
   
     COMMON CMPS_FORM_CONFIGS, cmps_form_DEFAULT_PAPERSIZE, $
                               cmps_form_STDCONFIGS

        cmps_form_DEFAULT_PAPERSIZE - a string designating the default
                                    paper size, when none is given.
                                    The predefined configurations
                                    offerred by this program will
                                    respect the default value.  (See
                                    also the DEFAULTPAPER keyword.)

        cmps_form_STDCONFIGS - An array of cmps_form_CONFIG structures,
                             each containing information about one
                             predefined configuration, such as its
                             name and size of paper.  Each &quot;config&quot;
                             element is a cmps_form_INFO structure,
                             which contains the actual postscript
                             configuration.

   See the IDL source code cmps_form_LOAD_CONFIGS for an example of how
   to make a list of configurations.  One possibility would be to
   declare and populate the common block from within the user's
   start-up script, allowing the same configurations to appear in
   every session.

   cmps_form() takes its initial list of configurations from this
   common block if it exists.  A default list is provided ala the
   procedure cmps_form_LOAD_CONFIGS.  Any modifications that take place
   during the cmps_form() widget session are not transferred back to
   the common block upon return.  It might be useful to be able to do
   this, through some form of 'save' procedure.

   Also, if the PREDEFINED keyword is used, then the common block is
   not consulted.

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/cmps_form.pro">$IDLUTILS_DIR/pro/plot/cmps_form.pro</a>)</strong></p>
<hr />
<h3 id="CMP_FITS_FILES">CMP_FITS_FILES</h3>
<p><a href="#CMPS_FORM">[Previous Routine]</a></p>
<p><a href="#COMDIS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   cmp_fits_files

 PURPOSE:
   Compare the contents of two FITS files.

 CALLING SEQUENCE:
   cmp_fits_files, filename1, filename2, [ /verbose ]

 INPUTS:
   filename1 - First FITS file
   filename2 - Second FITS file

 OPTIONAL INPUTS:
   verbose   - If set, then report extensions that are the same, as
               well as reporting any differences

 OUTPUTS:

 OPTIONAL OUTPUTS:

 COMMENTS:
   All HDUs are compared, both images and structures.
   Report a warning if the variable type is different, for example if
     one file contains a structure and the other an image, or if one
     contains an integer image and the other a floating-point image.
   For images, report a warning if the number of array elements disagree,
     or if any values disagree.
   For structures, report a warning if the number of structure tags disagree,
     or if any values disagree.

 EXAMPLES:

 BUGS:

 PROCEDURES CALLED:
   mrdfits()
   splog

 REVISION HISTORY:
   06-Nov-2003  Written by David Schlegel, Princeton.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/fits/cmp_fits_files.pro">$IDLUTILS_DIR/pro/fits/cmp_fits_files.pro</a>)</strong></p>
<hr />
<h3 id="COMDIS">COMDIS</h3>
<p><a href="#CMP_FITS_FILES">[Previous Routine]</a></p>
<p><a href="#COMDIS2">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   comdis
 PURPOSE:
   Compute comoving line-of-sight distances (for c/H_0=1).
 CALLING SEQUENCE:
   D= comdis(z,OmegaM,OmegaL, weq=weq)
 INPUTS:
   z       - redshift or vector of redshifts
   OmegaM  - Omega-matter at z=0
   OmegaL  - Omega-Lambda at z=0
 OPTIONAL INPUTS:
   weq     - Equation of state (default=-1)
 KEYWORDS
 OUTPUTS:
   comoving line-of-sight distance in units of the Hubble length c/H_0
 COMMENTS:
 BUGS:
   The integrator is crude, slow and repetetive.
   May not work for pathological parts of the OmegaM-OmegaL plane.
 EXAMPLES:
 PROCEDURES CALLED:
   dcomdisdz()
 REVISION HISTORY:
   25-Jun-2000  Written by Hogg (IAS)
   2004-Sep-06  Added support for different equations of state,
         Padmanabhan (Princeton) 
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/cosmography/comdis.pro">$IDLUTILS_DIR/pro/cosmography/comdis.pro</a>)</strong></p>
<hr />
<h3 id="COMDIS2">COMDIS2</h3>
<p><a href="#COMDIS">[Previous Routine]</a></p>
<p><a href="#COMPUTECHI2">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   comdis2
 PURPOSE:
   Compute comoving line-of-sight distances (for c/H_0=1).
 CALLING SEQUENCE:
   D= comdis2(z,OmegaM,OmegaL,cdtable=cdtable,zmaxtable=zmaxtable)
 INPUTS:
   z       - redshift or vector of redshifts
   OmegaM  - Omega-matter at z=0
   OmegaL  - Omega-Lambda at z=0
 OPTIONAL INPUTS:
   cdtable - returns the lookup table calculated, so you can reuse
   zmaxtable - set max z value of lookup table
 KEYWORDS
 OUTPUTS:
   comoving line-of-sight distance in units of the Hubble length c/H_0
 COMMENTS:
   Call as: 
      dC = comdis2(z,OmegaM,OmegaL,cdtable=cdtable)
   if you call it multiple times, so it does not remake the the
   lookup table.
 BUGS:
   The integrator is crude, slow and repetitive.
   May not work for pathological parts of the OmegaM-OmegaL plane.
   Relies on interpolate() working
 EXAMPLES:
 PROCEDURES CALLED:
   dcomdisdz()
 REVISION HISTORY:
   2000-Jun-25  Written by Hogg (IAS)
   2002-Feb-20  Look-up table to increase speed; Blanton (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/cosmography/comdis2.pro">$IDLUTILS_DIR/pro/cosmography/comdis2.pro</a>)</strong></p>
<hr />
<h3 id="COMPUTECHI2">COMPUTECHI2</h3>
<p><a href="#COMDIS2">[Previous Routine]</a></p>
<p><a href="#CONSTRUCT_CAP">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   computechi2

 PURPOSE:
   Solve the linear set of equations Ax=b using SVD

 CALLING SEQUENCE:
   chi2 = computechi2( bvec, sqivar, amatrix, $
    [ acoeff=, dof=, yfit=, covar=, var= ] )

 INPUTS:
    bvec      - b vector in Ax=b [N]
    sqivar    - Errors in b as 1/sigma [N]
    amatrix   - A matrix in Ax=b [N,M]

 OPTIONAL INPUTS:

 OUTPUTS:
   chi2       - Chi^2 of the fit

 OPTIONAL OUTPUTS:
   acoeff     - Fit parameters x in Ax=b [M]
   dof        - Degrees of freedom in the fit, equal to the number of
                equations where SQIVAR is not zero minus the number of
                fit parameters (M)
   yfit       - Evaluation of the best-fit at each data point [N]
   covar      - Covariance matrix [M,M]
   var        - Variances [M], which is equivalent to the diagonal
                entries of COVAR

 COMMENTS:

 EXAMPLES:
   The following example creates a data vector with 20 measurements
   and their errors.  A linear fit is performed using the LINFIT()
   function and this function, which are equivalent:
     n = 20
     x = dindgen(n)
     y = 10.d0 * smooth(randomu(-1234,n),10)
     sqivar = 0.5 + randomu(-4321,n)
     acoeff = linfit(x,y,measure_errors=1./sqivar,covar=covar)
     print, acoeff, covar
     templates = [[dblarr(n)+1],[dindgen(n)]]
     chi2 = computechi2(y,sqivar,templates,acoeff=acoeff,covar=covar)
     print, acoeff, covar

 BUGS:

 PROCEDURES CALLED:

 REVISION HISTORY:
   07-Aug-2000  Written by D. Schlegel, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/computechi2.pro">$IDLUTILS_DIR/pro/math/computechi2.pro</a>)</strong></p>
<hr />
<h3 id="CONSTRUCT_CAP">CONSTRUCT_CAP</h3>
<p><a href="#COMPUTECHI2">[Previous Routine]</a></p>
<p><a href="#CONSTRUCT_POLYGON">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   construct_cap
 PURPOSE:
   Create the structure for a cap
 CALLING SEQUENCE:
   poly=construct_cap()
 INPUTS:
 OPTIONAL INPUTS:
 OUTPUTS:
 OPTIONAL INPUT/OUTPUTS:
 COMMENTS:
 EXAMPLES:
 BUGS:
 PROCEDURES CALLED:
 REVISION HISTORY:
   01-Oct-2002  Written by MRB (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mangle/construct_cap.pro">$IDLUTILS_DIR/pro/mangle/construct_cap.pro</a>)</strong></p>
<hr />
<h3 id="CONSTRUCT_POLYGON">CONSTRUCT_POLYGON</h3>
<p><a href="#CONSTRUCT_CAP">[Previous Routine]</a></p>
<p><a href="#CONSTRUCT_VERTEX">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   construct_polygon
 PURPOSE:
   Create the structure for a polygon. 
   This has the number of caps stored, a bitmask indicating whether 
   to use each cap, the weight, and the area
 CALLING SEQUENCE:
   poly=construct_polygon()
 INPUTS:
 OPTIONAL INPUTS:
 OUTPUTS:
 OPTIONAL INPUT/OUTPUTS:
 COMMENTS:
 EXAMPLES:
 BUGS:
   Number of caps limited to 32
 PROCEDURES CALLED:
 REVISION HISTORY:
   01-Oct-2002  Written by MRB (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mangle/construct_polygon.pro">$IDLUTILS_DIR/pro/mangle/construct_polygon.pro</a>)</strong></p>
<hr />
<h3 id="CONSTRUCT_VERTEX">CONSTRUCT_VERTEX</h3>
<p><a href="#CONSTRUCT_POLYGON">[Previous Routine]</a></p>
<p><a href="#COPY_CAPS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   construct_vertex
 PURPOSE:
   Create the structure for a vertex. 
 CALLING SEQUENCE:
   vertex=construct_vertex([maxnvertices= ])
 INPUTS:
 OPTIONAL INPUTS:
   maxnvertices - the maximum number of vertices allowed for any vertex
 OUTPUTS:
 OPTIONAL INPUT/OUTPUTS:
 COMMENTS:
 EXAMPLES:
 BUGS:
   Number of caps limited to 32
 PROCEDURES CALLED:
 REVISION HISTORY:
   01-Oct-2002  Written by MRB (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mangle/construct_vertex.pro">$IDLUTILS_DIR/pro/mangle/construct_vertex.pro</a>)</strong></p>
<hr />
<h3 id="COPY_CAPS">COPY_CAPS</h3>
<p><a href="#CONSTRUCT_VERTEX">[Previous Routine]</a></p>
<p><a href="#COUNT_FREELUN">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   copy_caps
 PURPOSE:
   copy information about caps from one polygon to another
 CALLING SEQUENCE:
   copy_caps, poly1, poly2
 INPUTS:
 OPTIONAL INPUTS:
 OUTPUTS:
 OPTIONAL INPUT/OUTPUTS:
 COMMENTS:
   blows away old pointers
 EXAMPLES:
 BUGS:
   Number of caps limited to 32
 PROCEDURES CALLED:
 REVISION HISTORY:
   01-Oct-2002  Written by MRB (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mangle/copy_caps.pro">$IDLUTILS_DIR/pro/mangle/copy_caps.pro</a>)</strong></p>
<hr />
<h3 id="COUNT_FREELUN">COUNT_FREELUN</h3>
<p><a href="#COPY_CAPS">[Previous Routine]</a></p>
<p><a href="#CPBACKUP">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   count_freelun

 PURPOSE:
   Count the number of logical file pointers (LUNs) that are available

 CALLING SEQUENCE:
   num = count_freelun()

 INPUTS:

 OPTIONAL INPUTS:

 OUTPUTS:
   num        - Number of logical file pointers (LUNs) that can be allocated
                with GET_LUN before triggering an error

 OPTIONAL OUTPUTS:

 COMMENTS:

 EXAMPLES:

 BUGS:

 DATA FILES:

 PROCEDURES CALLED:

 REVISION HISTORY:
   02-Mar-2004  Written by D. Schlegel, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/count_freelun.pro">$IDLUTILS_DIR/pro/misc/count_freelun.pro</a>)</strong></p>
<hr />
<h3 id="CPBACKUP">CPBACKUP</h3>
<p><a href="#COUNT_FREELUN">[Previous Routine]</a></p>
<p><a href="#CR">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   cpbackup

 PURPOSE:
   Copy a file to a backup file name.

 CALLING SEQUENCE:
   cpbackup, filename

 INPUTS:
   filename   - File to copy if it exists.

 OUTPUTS:

 COMMENTS:
   Make a backup copy of the specified file by appending &quot;.1&quot;, &quot;.2&quot;, etc.
   The first unused number is used as an appendix.

 EXAMPLES:

 BUGS:
   This is only written to work with a Unix file system, since it spawns
   the Unix &quot;cp&quot; command.

 PROCEDURES CALLED:

 REVISION HISTORY:
   11-Mar-2000  Written by D. Schlegel, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/cpbackup.pro">$IDLUTILS_DIR/pro/misc/cpbackup.pro</a>)</strong></p>
<hr />
<h3 id="CR">CR</h3>
<p><a href="#CPBACKUP">[Previous Routine]</a></p>
<p><a href="#CROSSPROD">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
NAME:
  cr
PURPOSE:
  Wrapper procedure on dpf_reject_cr().
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/image/dpf_reject_cr.pro">$IDLUTILS_DIR/pro/image/dpf_reject_cr.pro</a>)</strong></p>
<hr />
<h3 id="CROSSPROD">CROSSPROD</h3>
<p><a href="#CR">[Previous Routine]</a></p>
<p><a href="#CSURVEY2EQ">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   crossprod

 PURPOSE:
   compute cross product of two vectors or arrays of vectors

 CALLING SEQUENCE:
   C=crossprod(A,B)

 INPUTS:
   A, B  - either [3] or [Nvec,3]

 OUTPUT:
   C     - either [3] or [Nvec,3]

 COMMENTS:
   If A and B are BOTH row vectors, return a row vector.  
    Otherwise, return [Nvec,3]

 REVISION HISTORY:
   2003-May-13  Written by Finkbeiner &amp; Schlegel, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/coord/crossprod.pro">$IDLUTILS_DIR/pro/coord/crossprod.pro</a>)</strong></p>
<hr />
<h3 id="CSURVEY2EQ">CSURVEY2EQ</h3>
<p><a href="#CROSSPROD">[Previous Routine]</a></p>
<p><a href="#CURRENT_MJD">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>

 NAME:
    CSURVEY2EQ
       
 PURPOSE:
    Convert from corrected lambda, eta (SDSS survey coordinates) to ra, dec
    The system is corrected so that the longitude eta ranges from 
    [-180.0, 180.0] and the latitude lambda ranges from [-90.0,90.0].  
    The standard lambda/eta both range from [-180.0,180.0] which doesn't 
    make sense. NOTE: lambda is often referred to as longitude but this
    is incorrect since it has poles at [-90,90]


 CALLING SEQUENCE:
    csurvey2eq, clambda, ceta, ra, dec

 INPUTS: 
    clambda: Survey longitude in degrees
    ceta: Survey latitude in degrees

 OUTPUTS: 
    ra: Equatorial latitude in degrees
    dec: Equatorial longitude in degrees

 REVISION HISTORY:
    Written: 26-Sep-2002  Erin Scott Sheldon
	 2009-06-05: Copied into idlutils from sdssidl.  
		See http://code.google.com/p/sdssidl/
                                        
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/coord/csurvey2eq.pro">$IDLUTILS_DIR/pro/coord/csurvey2eq.pro</a>)</strong></p>
<hr />
<h3 id="CURRENT_MJD">CURRENT_MJD</h3>
<p><a href="#CSURVEY2EQ">[Previous Routine]</a></p>
<p><a href="#DCOMDISDZ">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   current_mjd
 PURPOSE:
   Transform systime() to current MJD.
 CALLING SEQUENCE:
   mjd= current_mjd()
 INPUTS:
 OPTIONAL KEYWORDS:
 OUTPUTS:
 OPTIONAL OUTPUTS:
 COMMENTS:
   Your clock better be right when you ask for UT!
 EXAMPLES:
 BUGS:
   Relies on IDL 5.4 feature /utc for systime().
 PROCEDURES CALLED:
 REVISION HISTORY:
   2001-Feb-07  written by Hogg, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/coord/current_mjd.pro">$IDLUTILS_DIR/pro/coord/current_mjd.pro</a>)</strong></p>
<hr />
<h3 id="DCOMDISDZ">DCOMDISDZ</h3>
<p><a href="#CURRENT_MJD">[Previous Routine]</a></p>
<p><a href="#DCOMVOLDZ">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   dcomdisdz
 PURPOSE:
   Compute differential comoving line-of-sight distances (for c/H_0=1).
 CALLING SEQUENCE:
   dDdz= dcomdisdz(z,OmegaM,OmegaL, weq=weq)
 INPUTS:
   z       - redshift or vector of redshifts
   OmegaM  - Omega-matter at z=0
   OmegaL  - Omega-Lambda at z=0
 OPTIONAL INPUTS:
   weq     - Eq. of state (Default =-1)
 KEYWORDS
 OUTPUTS:
   differential comoving distance DD/dz in units of the Hubble length c/H_0
 COMMENTS:
 BUGS:
   May not work for pathological parts of the OmegaM-OmegaL plane.
 EXAMPLES:
 PROCEDURES CALLED:
 REVISION HISTORY:
   25-Jun-2000  Written by Hogg (IAS)
   2004-Sep-06  Added support for different equations of state,
         Padmanabhan (Princeton)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/cosmography/dcomdisdz.pro">$IDLUTILS_DIR/pro/cosmography/dcomdisdz.pro</a>)</strong></p>
<hr />
<h3 id="DCOMVOLDZ">DCOMVOLDZ</h3>
<p><a href="#DCOMDISDZ">[Previous Routine]</a></p>
<p><a href="#DEC2HMS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   dcomvoldz
 PURPOSE:
   Compute differential comoving volume element dV_c/dz per unit solid angle.
 CALLING SEQUENCE:
   dVdz= dcomvoldz(z,OmegaM,OmegaL)
 INPUTS:
   z       - redshift or vector of redshifts
   OmegaM  - Omega-matter at z=0
   OmegaL  - Omega-Lambda at z=0
 OPTIONAL INPUTS:
 KEYWORDS
 OUTPUTS:
   Comoving volume per steradian in units of the Hubble volume (c/H_0)^3
 COMMENTS:
   Formulae from Carrol, Press &amp; Turner, 1992, Kolb &amp; Turner, 1990, and my
   own calculation.
 BUGS:
   May not work for pathological parts of the OmegaM-OmegaL plane.
 EXAMPLES:
 PROCEDURES CALLED:
   dpropmotdisdz
   propmotdis
 REVISION HISTORY:
   2001-Mar-12  Written by Hogg (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/cosmography/dcomvoldz.pro">$IDLUTILS_DIR/pro/cosmography/dcomvoldz.pro</a>)</strong></p>
<hr />
<h3 id="DEC2HMS">DEC2HMS</h3>
<p><a href="#DCOMVOLDZ">[Previous Routine]</a></p>
<p><a href="#DESTRUCT_POLYGON">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   dec2hms

 PURPOSE:
   convert decimal number to HH:MM:SS (base sixty)

 CALLING SEQUENCE:
   result = dec2hms(angle_in, double=double)

 INPUTS:
   angle_in  - angle [hours for RA, degrees for declination]

 KEYWORDS:
   double    - double precision math

 OUTPUTS:
   result    - string containing HH:MM:SS or DD:MM:SS

 EXAMPLES:
   ra_string  = dec2hms(ra_degree/15)
   dec_string = dec2hms(dec_degree)

 COMMENTS:
   This function does not convert from hours to degrees!
   Pass type double, or suffer 0.003 arcsec error
   There is some tom-foolery to prevent roundoff problems
     (like 1 -&gt; '00 59 60.0') but if you aren't using /double
     you have no right to expect high precision anyway. 

 REVISION HISTORY:
   Written by Douglas Finkbeiner in ancient times
   2000-Nov-29 - double keyword added            - DPF
   2005-Sep-16 - call self recursively for array - DPF

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/coord/dec2hms.pro">$IDLUTILS_DIR/pro/coord/dec2hms.pro</a>)</strong></p>
<hr />
<h3 id="DESTRUCT_POLYGON">DESTRUCT_POLYGON</h3>
<p><a href="#DEC2HMS">[Previous Routine]</a></p>
<p><a href="#DFPSCLOSE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   destruct_polygon
 PURPOSE:
   Destroy the structure for a polygon. 
 CALLING SEQUENCE:
   destruct_polygon, poly
 INPUTS:
   poly - polygon to destroy
 OPTIONAL INPUTS:
 OUTPUTS:
 OPTIONAL INPUT/OUTPUTS:
 COMMENTS:
 EXAMPLES:
 BUGS:
 PROCEDURES CALLED:
 REVISION HISTORY:
   01-Oct-2002  Written by MRB (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mangle/destruct_polygon.pro">$IDLUTILS_DIR/pro/mangle/destruct_polygon.pro</a>)</strong></p>
<hr />
<h3 id="DFPSCLOSE">DFPSCLOSE</h3>
<p><a href="#DESTRUCT_POLYGON">[Previous Routine]</a></p>
<p><a href="#DFPSPLOT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   dfpsclose

 PURPOSE:
   Finkbeiner's routine to close a PostScript file previously opened
   with DFPSOPEN, and revert to sending plots to the X-display.

 CALLING SEQUENCE:
   dfpsclose

 INPUTS:

 OPTIONAL INPUTS:

 OUTPUTS:

 OPTIONAL OUTPUTS:

 COMMENTS:

 EXAMPLES:

 PROCEDURES CALLED:

 REVISION HISTORY:
   The-Beginning-of-Time  Written by Doug Finkbeiner, Berkeley.
   05-Sep-1999  Modified and commented by David Schlegel, Princeton.
   06-Aug-2001  Check if X device is set already - DPF, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/dfpsclose.pro">$IDLUTILS_DIR/pro/plot/dfpsclose.pro</a>)</strong></p>
<hr />
<h3 id="DFPSPLOT">DFPSPLOT</h3>
<p><a href="#DFPSCLOSE">[Previous Routine]</a></p>
<p><a href="#DIERFC">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   dfpsplot

 PURPOSE:
   Finkbeiner's routine to open a PostScript file for plotting commands.
   Close with DFPSCLOSE.

 CALLING SEQUENCE:
   dfpsplot, filename, [/square, /landscape, ysize=ysize, $
    /encap, /color, _EXTRA=KeywordsForDevice ]

 INPUTS:
   filename   - File name to open

 OPTIONAL INPUTS:
   square     - Make the plotting area square.
   landscape  - Use landscape paper; default is to use portrait.
   ysize      - For portrait mode, the YSIZE can be changed from its
                default of 8-inches.  For landscape mode, the value
                of YSIZE is ignored.
   encap      - Force non-encapsulated file unless this keyword is set.
   color      - Force non-color file unless this keyword is set.

 OUTPUT:

 OPTIONAL OUTPUTS:

 COMMENTS:

 EXAMPLES:

 PROCEDURES CALLED:

 REVISION HISTORY:
   The-Beginning-of-Time  Written by Doug Finkbeiner, Berkeley.
   05-Sep-1999  Modified and commented by David Schlegel, Princeton.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/dfpsplot.pro">$IDLUTILS_DIR/pro/plot/dfpsplot.pro</a>)</strong></p>
<hr />
<h3 id="DIERFC">DIERFC</h3>
<p><a href="#DFPSPLOT">[Previous Routine]</a></p>
<p><a href="#DISPLAY">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   dierfc

 PURPOSE:
       Inverse of the Complementary Error Function &quot;erfc^{-1}(x)&quot; 

 CALLING SEQUENCE:
   result = dierfc( input )

 INPUTS:
   input      - Arbitrary array of values from 0 to 2.
               (positive values returned for inputs between 0 and 1)
               exact 0 return NaN,    

 OUTPUTS:
   result     - The output array of type double, with range from
                  -infinity to +infinity.  

 OPTIONAL OUTPUTS:

 COMMENTS:
   The results outside of -20 &lt; results &lt; +20 may lack desired accuracy 

 EXAMPLES:
    inverse = dierfc([0.0,0.0027,0.0456,1.0d,1.6827,1.9])
    sigma = -sqrt(2.0) * inverse*sqrt(2.0)
    print, sigma, format='(6f10.4)'
      -Infinity   -3.0000   -1.9991    0.0000    1.0000    1.6449

 COPYRIGHT:
    Copyright(C) 1996 Takuya OOURA (email: ooura@mmm.t.u-tokyo.ac.jp).
    You may use, copy, modify this code for any purpose and
    without fee. You may distribute this ORIGINAL package.

 REVISION HISTORY:
   11-Jun-2002   Adapted by S. Burles, MIT
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/dierfc.pro">$IDLUTILS_DIR/pro/math/dierfc.pro</a>)</strong></p>
<hr />
<h3 id="DISPLAY">DISPLAY</h3>
<p><a href="#DIERFC">[Previous Routine]</a></p>
<p><a href="#DJS_ANGLE_GROUP">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
	DISPLAY

 PURPOSE:
	This procedure will display an image with the TV command that fills
	the plotting window.  It handles scale, annotations, X and PostScript
	devices, aspect ratios, logarithmic scaling, and interpolation.  
	Masked values and values below &lt;MIN&gt; are mapped to !P.BACKGROUND.
	Values above &lt;MAX&gt; are mapped to !P.COLOR.

 CATEGORY:
	Image display.

 CALLING SEQUENCE:
	DISPLAY, Image, XS, YS

 INPUTS:
	Image:	Two-dimensional array to be displayed.

 OPTIONAL INPUTS:
	XS:	Vector of x-axis values.  The length must equal the number of
		rows in &lt;Image&gt;

	YS:	Vector of y-axis values.  The length must equal the number of
		columns in &lt;Image&gt;

 KEYWORD PARAMETERS:
	TITLE=	Set this keyword to a string containing the title annotation
		to be used by PLOT.

	XTITLE=	Set this keyword to a string containing the x-axis annotation
		to be used by PLOT.

	YTITLE=	Set this keyword to a string containing the y-axis annotation
		to be used by PLOT.

	SUBTITLE=
		Set this keyword to a string containing the subtitle annotation
		to be used by PLOT.

	ASPECT=	Set this keyword to the aspect ratio (width/height) of the
		pixels.  /ASPECT is the same as ASPECT=1 and produces square
		pixels.

	/INTERPOLATE:
		Set this switch to enable bilinear interpolation for pixels
		in the expanded image.  See /PS_FINE for information
		on using this switch on a PostScript device.

	MASKVALUE=
		Set this keyword to the value that pixels with bad data or
		no data have been flagged with.  These will be mapped to 0B.

	MIN=	The minimum value of &lt;Image&gt; to be considered.  If MIN is not
		provided, &lt;Image&gt; is searched for its minimum value.  All
		values less than MIN are set to !P.BACKGROUND in the Result.

	MAX=	The maximum value of &lt;Image&gt; to be considered.  If MAX is not
		provided, &lt;Image&gt; is searched for its maximum value.  All
		values greater than MAX are set to !P.COLOR in the Result.

	BOT=	The minimum value of the scaled result.  If TOP is not
		specified, 0B is used.

	TOP=	The maximum value of the scaled result.  If TOP is not
		specified, 255B is used.

	LEVELS=	Set this keyword to a vector of data value boundaries between
		which all elements of &lt;Image&gt; have the same scaled byte
		value.  e.g. LEVELS=[0,1,2,5] maps all values below 0 and
		above 5 to 0B, map values between 0 and 1 to 1B, map values
		between 1 and 2 to 128B, and map values between 2 and 5 to
		255B.  This does not plot contours.

	/LOG:	Set this switch to cause a logarithmic mapping.  This is
		overridden by the LEVELS keyword.

	PS_FINE=
		Set to the approximate number of elements along an axis to 
		use in interpolating on a PostScript device.  Interpolation
		to the full indexable range of a PostScript device would be
		unwise.  This is only useful with /INTERPOLATE and
		will increase the size of the PostScript file.  The default
		size is 256 if PS_FINE= is not set or &lt;=0, 512 if 1 &lt; PS_FINE=
		&lt; 512, and take from the keyword if PS_FINE &gt; 512.

	/NOERASE:
		Set the switch to prevent output device from being erased
		before the image, scales, and annotations are displayed.

	/NO_EXPAND:
		Set this switch to prevent the image from being expanded
		to fill the plotting window.  Scaling to byte type is still
		performed.

 SIDE EFFECTS:
	TV display is altered.

 SUBORDINATE ROUTINES:
	IMGSCL()
	IMGEXP()

 RESTRICTIONS:
	This routine may work for other devices, but it has only been tested
	on 'X' and 'PS'.

 PROCEDURE:
	Straight forward.  :-)

 EXAMPLE:
	LoadCT, 3
	image = SHIFT(DIST(20, 20), 10, 10)
	scale = FINDGEN(20) - 10.0
	DISPLAY, image, scale, scale, /INTERPOLATE, TITLE='!6Smooth Slope', $
		/ASPECT
	;Use CONTOUR with /OVERPLOT to overlay contours.
	CONTOUR, image, scale, scale, LEVELS=1.0+FINDGEN(4)*2.0, /OVERPLOT

	DISPLAY		;prints out a &quot;Usage:&quot; line

 MODIFICATION HISTORY:
 	Written by:	Fen Tamanaha, July 10, 1993.  Release 3.1
	July 13, 1993	Fen: (3.2) Fixed /No_Expand
	July 16, 1993	Fen: (3.3) Really fixed /No_Expand
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/display.pro">$IDLUTILS_DIR/pro/plot/display.pro</a>)</strong></p>
<hr />
<h3 id="DJS_ANGLE_GROUP">DJS_ANGLE_GROUP</h3>
<p><a href="#DISPLAY">[Previous Routine]</a></p>
<p><a href="#DJS_ANGLE_MATCH">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_angle_group
 PURPOSE:
   Group objects using their coordinates on the sphere.

   Any coordinates within dtheta of one another are put in the same group.
   Note that if there is a string of successive objects on the sky, each
   separated by less than dtheta, then all of these objects are assigned
   to the same group.  This is incorrect in the sense that the first and
   last objects in the string may have a large separation; however, this
   is the only unambigious answer to the problem.

 CALLING SEQUENCE:
   ngroup = djs_angle_group( ra, dec, dtheta, $
    [gstart=gstart, gcount=gcount, gindx=gindx, units=units] )

 INPUTS:
   ra:         RA of point(s) in radians/degrees/hours
   dec:        DEC of point(s) in radians/degrees
   dtheta:     Maximum angular distance for points to be considered matches

 OPTIONAL INPUTS:
   units:      Set to
                  degrees - All angles in degrees
                  hrdeg - RA angles in hours, DEC angles and output in degrees
                  radians - All angles in radians
               Default to &quot;degrees&quot;.

 OUTPUTS:
   ngroup:     Total number of groups.  If no matches are found, then this
               equals the number of objects.

 OPTIONAL OUTPUTS:
   gstart:     Vector of length &quot;ngroup&quot; with the starting index of each group.
   gcount:     Vector of length &quot;ngroup&quot; with the number of objects in each
               group.
   gindx:      Indices of objects in each group.  The i-th group will have
               its object indices stored in gindx(gstart:gstart+gcount-1).

 PROCEDURES CALLED:

 INTERNAL SUPPORT PROCEDURES:
   djs_search_around

 REVISION HISTORY:
   29-May-1997  Written by D. Schlegel, Durham
   24-Feb-1999  Converted to IDL 5 (DJS).
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/coord/djs_angle_group.pro">$IDLUTILS_DIR/pro/coord/djs_angle_group.pro</a>)</strong></p>
<hr />
<h3 id="DJS_ANGLE_MATCH">DJS_ANGLE_MATCH</h3>
<p><a href="#DJS_ANGLE_GROUP">[Previous Routine]</a></p>
<p><a href="#DJS_ANGLE_NMATCH">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_angle_match

 PURPOSE:
   Given two lists of coordinates on a sphere, find matches within an
   angular distance.  For each entry in list A, find all the entries
   in list B that lie within an angular distance dtheta.
   Optionally output up to mmax of these matches per entry, giving
   the index number of the matches in mindx, and the angular distance
   in mdist.

   If the lists A and B are different, then the total number of pairs
   is given by total(mcount).
   If the lists A and B are the same, then the total number of unique
   pairs is given by (total(mcount) - N_elements(raA)) / 2.

   This function loops over the objects in each list (sort of), so it's
   not very fast.

 CALLING SEQUENCE:
   ntot = djs_angle_match( raA, decA, [raB, decB,] dtheta=dtheta, $
    [ mcount=mcount, mindx=mindx, mdist=mdist, mmax=mmax, units=units ]

 INPUTS:
   raA:        RA of first point(s) in radians/degrees/hours
   decA:       DEC of first point(s) in radians/degrees
   dtheta:     Maximum angular distance for points to be considered matches

 OPTIONAL INPUTS:
   raB:        RA of second point(s) in radians/degrees/hours
   decB:       DEC of second point(s) in radians/degrees
   mmax:       Maximum number of matches per point.  Default to 1.
   units:      Set to
                  degrees - All angles in degrees
                  hrdeg - RA angles in hours, DEC angles and output in degrees
                  radians - All angles in radians
               Default to &quot;degrees&quot;.

 OUTPUTS:
   ntot:       Total number of points A with one or more matches in B

 OPTIONAL OUTPUTS:
   mcount:     For each A, number of matches in B.  Vector of length A.
   mindx:      For each A, indices of matches in B, sorted by their distance.
               If mmax &gt; 1, this array is of dimensions (mmax, A).
               For each A, only the values (0:mcount-1,A) are relevant.
               If mmax = 1, then the return value is a vector.
               Any unused array elements are set to -1.
   mdist:      For each A, distance to matches in B, sorted by their distance.
               If mmax &gt; 1, this array is of dimensions (mmax, A).
               For each A, only the values (0:mcount-1,A) are relevant.
               If mmax = 1, then the return value is a vector.
               Any unused array elements are set to -1.

 COMMENTS:
   By specifying only one set of coordinates (raA, decA), matches are found
   within that list, but avoiding duplicate matches (i.e., matching 1 to 2
   and then 2 to 1) and avoiding matching an object with itself (i.e.,
   matching 1 to 1).  If you wish to include self-matches and duplicates,
   then call with raB=raA and decB=decA.

 PROCEDURES CALLED:
   djs_diff_angle()

 INTERNAL PROCEDURES:
   djs_angle_1match()
   djs_angle_2match()

 REVISION HISTORY:
   27-May-1997  Written by David Schlegel, Durham
   24-Feb-1999  Converted to IDL 5 (DJS)
   05-Mar-1999  Made the internal routines for more efficient matching
                within the same coordinate list without duplicates, e.g.
                by only specifying raA, decA and not raB, decB.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/coord/djs_angle_match.pro">$IDLUTILS_DIR/pro/coord/djs_angle_match.pro</a>)</strong></p>
<hr />
<h3 id="DJS_ANGLE_NMATCH">DJS_ANGLE_NMATCH</h3>
<p><a href="#DJS_ANGLE_MATCH">[Previous Routine]</a></p>
<p><a href="#DJS_ANGPOS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_angle_nmatch

 PURPOSE:
   Given two lists of coordinates on a sphere, find matches within an
   angular distance.  For each entry in list B, return the number of
   matches in list A that lie within an angular distance dtheta.

   This function loops through list A, so it is very slow if that list is long.

   The angle dtheta can be the same for each object in A, or may be set
   to a vector of length A.

   A list of indices where B has a match in A is where(nmatch GT 0).

 CALLING SEQUENCE:
   nmatch = djs_angle_nmatch( raA, decA, raB, decB, dtheta, $
    [ units=units ]

 INPUTS:
   raA:        RA of first point(s) in radians/degrees/hours
   decA:       DEC of first point(s) in radians/degrees
   raB:        RA of second point(s) in radians/degrees/hours
   decB:       DEC of second point(s) in radians/degrees
   dtheta:     Maximum angular distance for points to be considered matches

 OPTIONAL INPUTS:
   units:      Set to
                  degrees - All angles in degrees
                  hrdeg - RA angles in hours, DEC angles and output in degrees
                  radians - All angles in radians
               Default to &quot;degrees&quot;.

 OUTPUTS:
   nmatch:     For each B, number of matches with A

 PROCEDURES CALLED:
   djs_diff_angle()

 REVISION HISTORY:
   18-Jul-1997  Written by David Schlegel, Durham
                Modified from djs_angle_match().
   24-Feb-1999  Converted to IDL 5 (DJS)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/coord/djs_angle_nmatch.pro">$IDLUTILS_DIR/pro/coord/djs_angle_nmatch.pro</a>)</strong></p>
<hr />
<h3 id="DJS_ANGPOS">DJS_ANGPOS</h3>
<p><a href="#DJS_ANGLE_NMATCH">[Previous Routine]</a></p>
<p><a href="#DJS_ANGSGN">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_angpos
 PURPOSE:
   Put an angle into the range [0, 360).

 CALLING SEQUENCE:
   result = djs_angpos(xval)

 INPUTS:
   xval

 OUTPUTS:
   result

 PROCEDURES CALLED:

 REVISION HISTORY:
   Written D. Schlegel, 17 June 1996, Durham
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/coord/djs_angpos.pro">$IDLUTILS_DIR/pro/coord/djs_angpos.pro</a>)</strong></p>
<hr />
<h3 id="DJS_ANGSGN">DJS_ANGSGN</h3>
<p><a href="#DJS_ANGPOS">[Previous Routine]</a></p>
<p><a href="#DJS_ARROW">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_angsgn
 PURPOSE:
  Put an angle into the range [-180, 180).

 CALLING SEQUENCE:
   result = djs_angsgn(xval)

 INPUTS:
   xval

 OUTPUTS:
   result

 PROCEDURES CALLED:

 REVISION HISTORY:
   Written D. Schlegel, 17 June 1996, Durham
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/coord/djs_angsgn.pro">$IDLUTILS_DIR/pro/coord/djs_angsgn.pro</a>)</strong></p>
<hr />
<h3 id="DJS_ARROW">DJS_ARROW</h3>
<p><a href="#DJS_ANGSGN">[Previous Routine]</a></p>
<p><a href="#DJS_AVSIGCLIP">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_arrow

 PURPOSE:
   Modified version of ARROW to allow a string for the color(s)

 CALLING SEQUENCE:
   djs_arrow

 INPUT:

 OUTPUTS:

 PROCEDURES CALLED:

 REVISION HISTORY:
   Written by D. Schlegel, 11 Dec 1998, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/djs_arrow.pro">$IDLUTILS_DIR/pro/plot/djs_arrow.pro</a>)</strong></p>
<hr />
<h3 id="DJS_AVSIGCLIP">DJS_AVSIGCLIP</h3>
<p><a href="#DJS_ARROW">[Previous Routine]</a></p>
<p><a href="#DJS_AXIS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_avsigclip

 PURPOSE:
   Average multiple images with sigma-rejection.

 CALLING SEQUENCE:
   result = djs_avsigclip( array, [ dimension, sigrej=, maxiter=, $
    inmask=, outmask= ] )

 INPUTS:
   array      - N-dimensional array

 OPTIONAL INPUTS:
   dimension  - The dimension over which to collapse the data.  If ommitted,
                assume that the last dimension is the one to collapse.
   sigrej     - Sigma for rejection; default to 3.0.
   maxiter    - Maximum number of sigma rejection iterations.  One iteration
                does no sigma rejection; default to 10 iterations.
   inmask     - Input mask, setting =0 for good elements

 OUTPUTS:
   result     - The output array.
   outmask    - Output mask, setting =0 for good elements, =1 for bad.
                Any pixels masked in INMASK are also masked in OUTMASK.

 OPTIONAL OUTPUTS:

 COMMENTS:
   The DIMENSION input is analogous to that used by the IDL built-in
   function TOTAL.

 EXAMPLES:
   Create a data cube of 10 random-valued 100x200 images.  At each pixel in
   the image, compute the average of the 10 values, but rejecting 3-sigma
   outliers:
   &gt; array = randomu(123,100,200,10)
   &gt; ave = djs_avsigclip(array, sigrej=3)


   If all points are masked in any given vector or array, a mean and
   dispersion are computed for all the points.  Is this the behaviour we want?
   If you want to replace those values with zeros instead, look at OUTMASK:
   &gt; array = randomu(123,100,200)
   &gt; inmask = bytarr(100,200)
   &gt; inmask[*,8] = 1 ; mask all of row #8
   &gt; ave = djs_avsigclip(array, 1, inmask=inmask, outmask=outmask)
   &gt; ibad = where( total(1-outmask, 1) EQ 0)
   &gt; if (ibad[0] NE -1) then ave[ibad] = 0 ; zero-out bad rows

 BUGS:

 PROCEDURES CALLED:
   Dynamic link to arravsigclip.c

 REVISION HISTORY:
   07-Jul-1999  Written by David Schlegel, Princeton.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/djs_avsigclip.pro">$IDLUTILS_DIR/pro/math/djs_avsigclip.pro</a>)</strong></p>
<hr />
<h3 id="DJS_AXIS">DJS_AXIS</h3>
<p><a href="#DJS_AVSIGCLIP">[Previous Routine]</a></p>
<p><a href="#DJS_BATCH">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_axis

 PURPOSE:
   Modified version of AXIS

 CALLING SEQUENCE:
   djs_axis

 INPUT:

 OUTPUTS:

 PROCEDURES CALLED:
   TeXtoIDL()

 REVISION HISTORY:
   Written by D. Schlegel, 21 Jan 1998, Durham
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/djs_axis.pro">$IDLUTILS_DIR/pro/plot/djs_axis.pro</a>)</strong></p>
<hr />
<h3 id="DJS_BATCH">DJS_BATCH</h3>
<p><a href="#DJS_AXIS">[Previous Routine]</a></p>
<p><a href="#DJS_CEIL">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_batch

 PURPOSE:
   Batch processing script for running jobs locally or across a network.

 CALLING SEQUENCE:
   djs_batch, topdir, [localfile], [outfile], protocol, remotehost, $
    remotedir, command, [ priority=, selecthost=, wtime= ]

 INPUTS:
   topdir     - Local top-level directory for input and output files.
                Also use this directory for remote hosts where REMOTEDIR
                is not specified.
   localfile  - Array of pointers to input files on local machine [NPROGRAM].
                This input is optional.
   outfile    - Array of pointers to output files created on remote machine
                and copied to local machine upon completion [NPROGRAM]
                This input is optional.
   protocol   - List of protocols for remote hosts.  Valid values are:
                'ssh', 'ssh1', 'ssh2', 'rsh', or ''.  One must set to
                no protocol ('') if the remote host name is 'localhost'.
                Otherwise, one must always set a protocol.
   remotehost - List of remote hosts [NHOST]
   remotedir  - List of remote directories; scalar or [NHOST]
   command    - Command to execute to begin a job; scalar or [NPROGAM]

 OPTIONAL KEYWORDS:
   priority   - Priority for each job, where the jobs with the largest
                value are done first [NPROGRAM]
   selecthost - If set, then assign each job to only a host that matches
                the selected host per job [NPROGRAM]
   wtime      - Sleep time between checking status of all jobs; default to
                600 seconds.

 OUTPUTS:

 COMMENTS:
   The file names will support wildcards.  For example, if you want to
   return all files from the directory REMOTEDIR/abc on the remote machine,
   then set OUTFILE = 'abc/*'.

 EXAMPLES:

 BUGS:

 PROCEDURES CALLED:

 INTERNAL SUPPORT ROUTINES:
   batch_spawn
   count_freelun()
   create_program_list()
   create_host_list()
   batch_if_done()
   batch_assign_job
   batch_finish_job

 REVISION HISTORY:
   17-Oct-2000  Written by D. Schlegel, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/djs_batch.pro">$IDLUTILS_DIR/pro/misc/djs_batch.pro</a>)</strong></p>
<hr />
<h3 id="DJS_CEIL">DJS_CEIL</h3>
<p><a href="#DJS_BATCH">[Previous Routine]</a></p>
<p><a href="#DJS_CONTOURPTS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_ceil

 PURPOSE:
   Return smallest integer not less than xvalue.
   This is identical to the C library function &quot;ceil()&quot;.

 CALLING SEQUENCE:
   result = djs_ceil(xvalue)

 INPUTS:
   xvalue

 OUTPUTS:
   result

 PROCEDURES CALLED:

 REVISION HISTORY:
   Written D. Schlegel, 27 November 1996, Durham
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/djs_ceil.pro">$IDLUTILS_DIR/pro/math/djs_ceil.pro</a>)</strong></p>
<hr />
<h3 id="DJS_CONTOURPTS">DJS_CONTOURPTS</h3>
<p><a href="#DJS_CEIL">[Previous Routine]</a></p>
<p><a href="#DJS_CORRELATE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_contourpts

 PURPOSE:
   Make a contour plot from point data, drawing contours only where the
   point density is high.

 CALLING SEQUENCE:
   djs_contourpts

 INPUT:
   xpt:
   ypt:

 OPTIONAL KEYWORDS:
   bin1:
   bin2:
   overplot:  If set, then use current plot limits and overplot.
   nlevels:
   levels:
   loglevels: If set, then select NLEVEL (or 6) log-spaced levels
   nopoints:  If set, then do not plot any point data (only contours).
   psym:      Keyword for plotting point data; default to 3
   color:     Keyword for plotting point data

 OUTPUTS:

 OPTIONAL OUTPUTS:
   level0:    Lowest contour level
   ilow:      Indices for points outside the lowest contour level.

 PROCEDURES CALLED:
   djs_icolor()
   djs_oplot

 REVISION HISTORY:
   Written by D. Schlegel, 9 Dec 1998, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/djs_contourpts.pro">$IDLUTILS_DIR/pro/plot/djs_contourpts.pro</a>)</strong></p>
<hr />
<h3 id="DJS_CORRELATE">DJS_CORRELATE</h3>
<p><a href="#DJS_CONTOURPTS">[Previous Routine]</a></p>
<p><a href="#DJS_DIFF_ANGLE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_correlate

 PURPOSE:
   Compute a cross-correlation function using weights (or masks).

 CALLING SEQUENCE:
   result = djs_correlate( x, y, [ lags, xweight=, yweight= ] )

 INPUTS:
   x          - Vector
   y          - Vector, which may have a different number of elements from X

 OPTIONAL INPUTS:
   lags       - A scalar or integer vector specifying the lags at which
                to compute the cross-correlation; default to one lag at 0.
   xweight    - Vector of weights for X; default to 1 for all points
   yweight    - Vector of weights for Y; default to 1 for all points

 OUTPUTS:
   result     - The output vector, with one result per LAG value.

 OPTIONAL OUTPUTS:

 COMMENTS:
   This routine is similar to the IDL routine C_CORRELATE(), but with a
   few notable differences.  The X and Y vectors do not wrap when they are
   shifted, but rather only overlapping elements are compared at each lag.
   Because of this, X and Y do not have to have the same number of dimensions.
   A weight (or mask) can be assigned to each element of X,Y using the
   XWEIGHT,YWEIGHT keywords.  These weights can effectively be used to
   mask out regions of each vector by setting the weight to 1 for good
   pixels and 0 for bad ones.

   Each pixel of both X and Y are effectively weighted by XWEIGHT*YWEIGHT
   appropriately shifted before the multiplication.

 EXAMPLES:

 BUGS:
   The C routine only supports type FLOAT.

 PROCEDURES CALLED:
   Dynamic link to ccorrelate.c

 REVISION HISTORY:
   07-Jul-2000  Written by David Schlegel, Princeton.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/djs_correlate.pro">$IDLUTILS_DIR/pro/math/djs_correlate.pro</a>)</strong></p>
<hr />
<h3 id="DJS_DIFF_ANGLE">DJS_DIFF_ANGLE</h3>
<p><a href="#DJS_CORRELATE">[Previous Routine]</a></p>
<p><a href="#DJS_FLOOR">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_diff_angle

 PURPOSE:
   Compute the angular distance between two points on a sphere.

 CALLING SEQUENCE:
   adist = djs_diff_angle( ra, dec, ra0, dec0, [ units=units ] )

 INPUTS:
   ra1:        RA of first point(s) in radians/degrees/hours
   dec1:       DEC of first point(s) in radians/degrees
   ra2:        RA of second point(s) in radians/degrees/hours
   dec2:       DEC of second point(s) in radians/degrees

 OPTIONAL INPUTS:
   units:      Set to
                  degrees - All angles in degrees
                  hrdeg - RA angles in hours, DEC angles and output in degrees
                  radians - All angles in radians
               Default to &quot;degrees&quot;.

 OUTPUTS:
   adist:      Angular distance(s) in radians if UNITS is set to 'radians',
               or in degrees otherwise

 COMMENTS:
   Note that either (ra1,dec1) or (rap,decp) must be scalars or 1-element
   arrays, or all must be arrays of the same length.

 PROCEDURES CALLED:

 REVISION HISTORY:
   14-May-1997  Written by D. Schlegel, Durham
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/coord/djs_diff_angle.pro">$IDLUTILS_DIR/pro/coord/djs_diff_angle.pro</a>)</strong></p>
<hr />
<h3 id="DJS_FLOOR">DJS_FLOOR</h3>
<p><a href="#DJS_DIFF_ANGLE">[Previous Routine]</a></p>
<p><a href="#DJS_HEX2BIN">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_floor

 PURPOSE:
   Return largest integer not greater than xvalue.
   This is identical to the C library function &quot;floor()&quot;.

 CALLING SEQUENCE:
   result = djs_floor(xvalue)

 INPUTS:
   xvalue

 OUTPUTS:
   result

 PROCEDURES CALLED:

 REVISION HISTORY:
   Written D. Schlegel, 27 November 1996, Durham
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/djs_floor.pro">$IDLUTILS_DIR/pro/math/djs_floor.pro</a>)</strong></p>
<hr />
<h3 id="DJS_HEX2BIN">DJS_HEX2BIN</h3>
<p><a href="#DJS_FLOOR">[Previous Routine]</a></p>
<p><a href="#DJS_HEX2INT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_hex2bin

 PURPOSE:
   Convert hexadecimal number(s) to binary numbers.

 CALLING SEQUENCE:
   binval = djs_hex2bin(hexval, [ndigit=ndigit])

 INPUTS:
   hexval:   String or array of strings containing hexadecimal number(s)

 OPTIONAL INPUTS:
   ndigit:   Number of binary digits in output; if not supplied, then the
             minimum number of digits are used

 OUTPUTS:
   intval:   Byte array(s) of binary values, dimensioned intval(ndigit,nnum)

 EXAMPLE:
   PRINT, DJS_HEX_TO_BINARY( '1a' )
   IDL prints the result
     0   1   0   1   1

   One can truncate to only the 4 least significan digits by setting NDIGIT:
   PRINT, DJS_HEX_TO_BINARY( '1a', NDIGIT=4 )
   IDL prints the result
     0   1   0   1

   PRINT, DJS_HEX_TO_BINARY( ['1a', '2b', '3'] )
   IDL prints the result
     0   1   0   1   1   0
     1   1   0   1   0   1
     1   1   0   0   0   0

 PROCEDURES CALLED:
   djs_hex2int()
   djs_int2bin()

 REVISION HISTORY:
   Written D. Schlegel, 30 June 1997, Durham
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/djs_hex2bin.pro">$IDLUTILS_DIR/pro/math/djs_hex2bin.pro</a>)</strong></p>
<hr />
<h3 id="DJS_HEX2INT">DJS_HEX2INT</h3>
<p><a href="#DJS_HEX2BIN">[Previous Routine]</a></p>
<p><a href="#DJS_ICOLOR">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_hex2int

 PURPOSE:
   Convert hexadecimal number(s) to long integer(s).

 CALLING SEQUENCE:
   intval = djs_hex2int(hexval)

 INPUTS:
   hexval:   String or array of strings containing hexadecimal number(s)

 OUTPUTS:
   intval:   Long integer or array or long integers

 EXAMPLE:
   PRINT, DJS_HEX_TO_INT( '1a' )
   IDL prints the result
     26

   PRINT, DJS_HEX_TO_INT( ['1a', '2b', '3'] )
   IDL prints the result
     26  43   3

 PROCEDURES CALLED:

 REVISION HISTORY:
   Written D. Schlegel, 30 June 1997, Durham
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/djs_hex2int.pro">$IDLUTILS_DIR/pro/math/djs_hex2int.pro</a>)</strong></p>
<hr />
<h3 id="DJS_ICOLOR">DJS_ICOLOR</h3>
<p><a href="#DJS_HEX2INT">[Previous Routine]</a></p>
<p><a href="#DJS_INT2BIN">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_icolor

 PURPOSE:
   Internal routine for converting a color name to an index.

 CALLING SEQUENCE:
   icolor = djs_icolor(color)

 INPUT:
   color:

 OUTPUTS:
   icolor

 PROCEDURES CALLED:

 REVISION HISTORY:
   Written by D. Schlegel, 27 September 1997, Durham
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/djs_icolor.pro">$IDLUTILS_DIR/pro/plot/djs_icolor.pro</a>)</strong></p>
<hr />
<h3 id="DJS_INT2BIN">DJS_INT2BIN</h3>
<p><a href="#DJS_ICOLOR">[Previous Routine]</a></p>
<p><a href="#DJS_ITERSTAT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_int2bin

 PURPOSE:
   Convert integer number(s) to binary numbers.

 CALLING SEQUENCE:
   binval = djs_int2bin(val, [ndigit=ndigit])

 INPUTS:
   val:      Integer number(s)

 OPTIONAL INPUTS:
   ndigit:   Number of binary digits in output; if not supplied, then the
             minimum number of digits are used

 OUTPUTS:
   binval:   Byte array(s) of binary values

 PROCEDURES CALLED:
   djs_floor()

 REVISION HISTORY:
   Written D. Schlegel, 30 June 1997, Durham
   31-Jul-1998  DJS - Subscripts modified to IDL 5 convention.
   03-Aug-1999  DJS - Modified to work with signed integers by
                first converting to unsigned integers.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/djs_int2bin.pro">$IDLUTILS_DIR/pro/math/djs_int2bin.pro</a>)</strong></p>
<hr />
<h3 id="DJS_ITERSTAT">DJS_ITERSTAT</h3>
<p><a href="#DJS_INT2BIN">[Previous Routine]</a></p>
<p><a href="#DJS_LAXISGEN">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_iterstat

 PURPOSE:
   Compute the mean, median and/or sigma of data with iterative sigma clipping.

 CALLING SEQUENCE:
   djs_iterstat, image, [invvar=, sigrej=, maxiter=, $
    mean=, median=, sigma=, mask=, newivar= ]

 INPUTS:
   image:      Input data [N]

 OPTIONAL INPUTS:
   invvar:     Inverse variance for each data point [N]; if set, then
               the mean and rejection is computed using these errors
   sigrej:     Sigma for rejection; default to 3.0
   maxiter:    Maximum number of sigma rejection iterations; default to 10

 OUTPUTS:

 OPTIONAL OUTPUTS:
   mean:       Computed mean
   median:     Computed median
   sigma:      Computed sigma
   mask:       Mask set to 1 for good points, and 0 for rejected points
   newivar:    If INVVAR are set, then this is the formal invverse variance
               of the returned MEAN

 PROCEDURES CALLED:

 COMMENTS:
   Iteratively rejects outliers as determined by SIGREJ.  Stop
   when one of the following conditions is met:
   (1) The maximum number of iterations, as set by MAXITER, is reached.
   (2) No new pixels are rejected, as compared to the previous iteration.
   (3) At least 2 pixels remain from which to compute statistics.  If not,
       then the returned values are based upon the previous iteration.

 BUGS:

 REVISION HISTORY:
   16-Jun-1999  Written by David Schlegel, Princeton
   11-Sep-2000  Speeded up by Hogg and Eisenstein
   18-Sep-2000  Note change in MASK values to =1 for good (unrejected) points.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/djs_iterstat.pro">$IDLUTILS_DIR/pro/math/djs_iterstat.pro</a>)</strong></p>
<hr />
<h3 id="DJS_LAXISGEN">DJS_LAXISGEN</h3>
<p><a href="#DJS_ITERSTAT">[Previous Routine]</a></p>
<p><a href="#DJS_LAXISNUM">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_laxisgen

 PURPOSE:
   Return a longword integer array with the specified dimensions.
   Each element of the array is set equal to its index number along
   the dimension IAXIS.

 CALLING SEQUENCE:
   result = djs_laxisgen( dimens, [ iaxis=iaxis ] )

 INPUT:
   dimens:     Vector of the dimensions for the result.
               Only up to 3 dimensions can be specified.
   iaxis:      Axis number to use for indexing RESULT.  The first dimension
               is axis number 0, the second 1, etc.  Default to 0.

 OUTPUTS:
   result:     Output array

 PROCEDURES CALLED:

 REVISION HISTORY:
   Written by D. Schlegel, 7 Oct 1997, Durham
   Modified 12 May 1998 to pass one vector with all dimensions.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/djs_laxisgen.pro">$IDLUTILS_DIR/pro/misc/djs_laxisgen.pro</a>)</strong></p>
<hr />
<h3 id="DJS_LAXISNUM">DJS_LAXISNUM</h3>
<p><a href="#DJS_LAXISGEN">[Previous Routine]</a></p>
<p><a href="#DJS_LOCATE_FILE_F">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_laxisnum

 PURPOSE:
   Return a longword integer array with the specified dimensions.
   Each element of the array is set equal to its index number in
   the specified axis.

 CALLING SEQUENCE:
   result = djs_laxisnum( dimens, [ iaxis= ] )

 INPUT:
   dimens:     Vector of the dimensions for the result.
               Only up to 3 dimensions can be specified.
   iaxis:      Axis number to use for indexing RESULT.  The first dimension
               is axis number 0, the second 1, etc.  Default to 0.

 OUTPUTS:
   result:     Output array

 PROCEDURES CALLED:

 REVISION HISTORY:
   15-Jun-2001  Written by D. Schlegel, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/djs_laxisnum.pro">$IDLUTILS_DIR/pro/misc/djs_laxisnum.pro</a>)</strong></p>
<hr />
<h3 id="DJS_LOCATE_FILE_F">DJS_LOCATE_FILE()</h3>
<p><a href="#DJS_LAXISNUM">[Previous Routine]</a></p>
<p><a href="#DJS_LOCKFILE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_locate_file()

 PURPOSE:
   Locate full file name (including path) of a file, searching IDL paths

 CALLING SEQUENCE:
   fullname = djs_locate_file( filename )

 INPUT:
   filename:   File name to find somewhere in path, including any extensions

 OUTPUTS:
   fullname:   File name of first located file (including full path),
               or '' if no matches found

 PROCEDURES CALLED:
   os_family()

 REVISION HISTORY:
   Written by D. Schlegel, 27 May 1997, Durham
   Modified version of GETPRO in Goddard library.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/djs_locate_file.pro">$IDLUTILS_DIR/pro/misc/djs_locate_file.pro</a>)</strong></p>
<hr />
<h3 id="DJS_LOCKFILE">DJS_LOCKFILE</h3>
<p><a href="#DJS_LOCATE_FILE_F">[Previous Routine]</a></p>
<p><a href="#DJS_MASKINTERP">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_lockfile

 PURPOSE:
   Test if a file is already &quot;locked&quot;, and lock it if not.

 CALLING SEQUENCE:
   res = djs_lockfile( filename, [ lun=, append= ] )

 INPUT:
   filename:   File name

 OPTIONAL INPUTS:
   lun:        If this argument exists, then open FILENAME for read/write
               access and return the pointer (LUN number) for that file.
               Do this only if we are able to lock the file.
   append:     If set, then append to any file that already exists if
               opening the file using LUN.  Ignored if the LUN argument
               is not present.

 OUTPUTS:
   res:        Return 0 if file already locked, or 1 if not in which case
               we would have just locked it.

 COMMENTS:
   For Unix systems running IDL 5.4 or later, we use the SPAWN command
   to create a symbolic link from FILENAME.lock -&gt; FILENAME.  This can
   be done atomically, such that it is impossible for two processes
   to build that same link at once.

   For other operating systems or ealier versions of IDL (which do
   not allow SPAWN to return an error), we use a lock file which
   has a single byte written to it to indicate that FILENAME should
   be locked (as determined by any subsequent calls to this routine).

   For all OS-es, unlock files with DJS_UNLOCKFILE.

 BUGS:

 PROCEDURES CALLED:

 REVISION HISTORY:
   30-Apr-2000  Written by D. Schlegel, APO
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/djs_lockfile.pro">$IDLUTILS_DIR/pro/misc/djs_lockfile.pro</a>)</strong></p>
<hr />
<h3 id="DJS_MASKINTERP">DJS_MASKINTERP</h3>
<p><a href="#DJS_LOCKFILE">[Previous Routine]</a></p>
<p><a href="#DJS_MEAN">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_maskinterp

 PURPOSE:
   Interpolate over masked pixels in a vector, image or 3-D array.

 CALLING SEQUENCE:
   ynew = djs_maskinterp( yval, mask, [ xval, iaxis=, /const ] )

 INPUTS:
   yval       - Y values; 1-, 2-, or 3-dimensional
   mask       - Mask values correspoding to YVAL; interpolate over all pixels
                where MASK is not 0

 OPTIONAL INPUTS:
   xval       - X (abscissa) values corresponding to YVAL; otherwise a
                regular grid is assumed
   iaxis      - Axis along which to interpolate if YVAL has more than one
                dimension; required keyword in that case; dimensions are
                0-indexed, so the X axis is IAXIS=0
   const      - The default is to linearly interpolate beyond the endpoints
                of good data.  Setting this keyword instead copied the
                first (last) good points for the data beyond the first (last)
                good points.

 OUTPUTS:
   ynew       - Y values after linearly interpolating over masked pixels

 COMMENTS:
   The IDL function INTERPOL is used for linear interpolation.

   If no good points exist in a vector, then that vector is returned
   unchanged.

 EXAMPLES:
   Create a sin-wave function, and interpolate across points at the beginning
   and in the middle of this function:
     xval=findgen(100)/10
     yval=sin(xval)
     splot,xval,yval
     mask=bytarr(100)
     mask[0:10]=1
     mask[40:60]=1
     ynew = djs_maskinterp(yval, mask, xval)
     plot,xval,yval
     oplot,xval,ynew,ps=2

 BUGS:
   This routine only supports 1-D, 2-D, and 3-D arrays.

 PROCEDURES CALLED:

 INTERNAL SUPPORT ROUTINS:
   djs_maskinterp1()

 REVISION HISTORY:
   27-Jan-2000  Written by David Schlegel, Princeton.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/image/djs_maskinterp.pro">$IDLUTILS_DIR/pro/image/djs_maskinterp.pro</a>)</strong></p>
<hr />
<h3 id="DJS_MEAN">DJS_MEAN</h3>
<p><a href="#DJS_MASKINTERP">[Previous Routine]</a></p>
<p><a href="#DJS_MEDIAN">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_mean

 PURPOSE:
   Return the mean value of an array.

 CALLING SEQUENCE:
   result = djs_mean(array)

 INPUTS:
   array      - Array of numbers

 OUTPUTS:
   result     - Computed mean

 PROCEDURES CALLED:

 COMMENTS:
   This function is faster than the IDL function MEAN(), and will not crash
   when passed a 1-element array.

 REVISION HISTORY:
   06-Oct-1997  Written by David Schlegel, Durham.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/djs_mean.pro">$IDLUTILS_DIR/pro/math/djs_mean.pro</a>)</strong></p>
<hr />
<h3 id="DJS_MEDIAN">DJS_MEDIAN</h3>
<p><a href="#DJS_MEAN">[Previous Routine]</a></p>
<p><a href="#DJS_MODFITS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_median

 PURPOSE:
   Return the median of an image either with a filtering box or by collapsing
   the image along one of its dimensions.

 CALLING SEQUENCE:
   result = djs_median( array, [ dimension, width=, boundary=, /idl ] )

 INPUTS:
   array      - N-dimensional array

 OPTIONAL INPUTS:
   dimension  - The dimension over which to compute the median, starting
                at one.  If this argument is not set, the median of all array
                elements (or all elements within the median window described
                by WIDTH) are medianed.
   width      - Width of median window; scalar value.
                It is invalid to specify both DIMENSION and WIDTH.
   boundary   - Boundary condition:
                'none': Do not median filter within WIDTH/2 pixels of
                        the edge; this is the default for both this
                        routine and MEDIAN().
                'nearest': Use the value of the nearest boundary pixel.
                        NOT IMPLEMENTED
                'reflect': Reflect pixel values around the boundary.
                'wrap': Wrap pixel values around the boundary.
                        NOT IMPLEMENTED
                These boundary conditions only take effect if WIDTH is set,
                and if ARRAY is either 1-dimensional or 2-dimensional.

 OUTPUTS:
   result     - The output array.  If neither DIMENSION nor WIDTH are set,
                then RESULT is a scalar.  If DIMENSION is not set and WIDTH
                is set, then RESULT has the same dimensions as ARRAY.
                If DIMENSION is set and WIDTH is not

 OPTIONAL OUTPUTS:

 COMMENTS:
   The DIMENSION input is analogous to that used by the IDL built-in
   function TOTAL.

   I should like to add the functionality of having WIDTH be an N-dimensional
   smoothing box.  For example, one should be able to median a 2-D image
   with a 3x5 filtering box.

 EXAMPLES:
   Create a 2-D image and compute the median of the entire image:
   &gt; array = findgen(100,200)
   &gt; print, djs_median(array)

   Create a data cube of 3 random-valued 100x200 images.  At each pixel in
   the image, compute the median of the 3:
   &gt; array = randomu(123,100,200,3)
   &gt; medarr = djs_median(array,3)

   Create a random-valued 2-D image and median-filter with a 9x9 filtering box:
   &gt; array = randomu(123,100,200)
   &gt; medarr = djs_median(array,9)

 BUGS:
   The C routine only supports type FLOAT.

 PROCEDURES CALLED:
   Dynamic link to arrmedian.c

 REVISION HISTORY:
   06-Jul-1999  Written by David Schlegel, Princeton.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/djs_median.pro">$IDLUTILS_DIR/pro/math/djs_median.pro</a>)</strong></p>
<hr />
<h3 id="DJS_MODFITS">DJS_MODFITS</h3>
<p><a href="#DJS_MEDIAN">[Previous Routine]</a></p>
<p><a href="#DJS_MOSAIC_RGB">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_modfits

 PURPOSE:
   Wrapper for MODFITS that allows the header to increase in size,
   and that works with g-zipped files.

 CALLING SEQUENCE:
   djs_modfits, filename, data, [hdr, exten_no=, /delete_data]

 INPUTS:
   filename  - FITS file name; if the name ends in the suffix &quot;.gz&quot;,
               then the file is g-unzipped first, modified, then re-g-zipped.
   data      - New data array or structure for extension EXTEN_NO;
               if this is undefined or zero, then don't modify the data.

 OPTIONAL INPUTS:
   hdr       - New FITS header for extension EXTEN_NO
   exten_no  - FITS extension number to modify; default to 0.
   delete_data - If set, then delete this data.  Note that this cannot
               be accomplished by setting DATA=0, since that simply says
               to not change the data array/structure (to be consistent
               with the functionality of MODFITS).

 OUTPUTS:

 OPTIONAL OUTPUTS:

 COMMENTS:

 EXAMPLES:

 BUGS:

 PROCEDURES CALLED:
   modfits
   mrdfits()
   mwrfits
   readfits()
   writefits

 INTERNAL PROCEDURES:
   bitsperpixel()

 REVISION HISTORY:
   17-May-2000  Written by David Schlegel, Princeton.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/fits/djs_modfits.pro">$IDLUTILS_DIR/pro/fits/djs_modfits.pro</a>)</strong></p>
<hr />
<h3 id="DJS_MOSAIC_RGB">DJS_MOSAIC_RGB</h3>
<p><a href="#DJS_MODFITS">[Previous Routine]</a></p>
<p><a href="#DJS_NEFF">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_mosaic_rgb
 PURPOSE:
   Make color (RGB) images from 3 FITS files, and overplot text and points
 CALLING SEQUENCE:
   djs_mosaic_rgb, prefix
 INPUTS:
   prefix        - start of filenames
 OPTIONAL KEYWORDS:
   resizefactor  - factor by which to scale the JPG relative to the
                   fits files; default 0.5
   stretch       - factor by which to multiply the default RGB
                   scales; default 1.0
   rotation      - integer to pass to IDL rotate command; default 0
   xtext         - X position for text [NTEXT]
   ytext         - Y position for text [NTEXT]
   text          - Text [NTEXT]
   colortext     - Colors for text; dimensioned either [3] or [3,NTEXT],
                   where [255,0,0] is red, [0,255,0] is green, etc.
   xplot         - X position for points [NPOINTS]
   yplot         - Y position for points [NPOINTS]
   colorplot     - Colors for points; dimensioned either [3] or [3,NPOINTS],
                   where [255,0,0] is red, [0,255,0] is green, etc.
   _EXTRA        - Keywords to pass to XYOUTS and PLOT, such as
                   CHARSIZE, PSYM, etc
 COMMENTS:
   Stretch is constant in f_lambda
 EXAMPLES:
   djs_mosaic_rgb, 'marla-001'
 BUGS:
   Memory issues with asinh etc.
   The current implementation is very slow if COLORTEXT or COLORPLOT
     are 2-dimensional arrays.
 REVISION HISTORY:
   2003-11-24  written - Hogg
   2004-01-03  Modified (generalized) by D. Schlegel, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/rgbcolor/djs_mosaic_rgb.pro">$IDLUTILS_DIR/pro/rgbcolor/djs_mosaic_rgb.pro</a>)</strong></p>
<hr />
<h3 id="DJS_NEFF">DJS_NEFF</h3>
<p><a href="#DJS_MOSAIC_RGB">[Previous Routine]</a></p>
<p><a href="#DJS_OPLOT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_neff

 PURPOSE:
   Return the neff statistic (effective number of pixels)
     neff = [ SUM(image) ]^2 / SUM(image^2)

 CALLING SEQUENCE:
   neff = djs_neff(image, [sigimg, nerr=nerr] )

 INPUTS:
   image:      An image of any number of dimensions

 OPTIONAL INPUTS:
   sigimg:     Image of errors for computing nerr

 OUTPUTS:
   neff:       Return value of neff

 OPTIONAL OUTPUTS:
   nerr:       Error in neff, if sigimg is specified

 PROCEDURES CALLED:

 COMMENTS:
   If computing this statistic for an object on an image, the background
   (sky) level should first be removed.  However, the image need not be
   renormalized.  For an object of constant surface brightness, Neff equals
   the number of pixels subtended by the object.  For a Gaussian profile
   that is well-sampled, Neff = 4 * pi * sigma^2.

 REVISION HISTORY:
   10-Sep-1998  Written by D Schlegel, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/djsphot/djs_neff.pro">$IDLUTILS_DIR/pro/djsphot/djs_neff.pro</a>)</strong></p>
<hr />
<h3 id="DJS_OPLOT">DJS_OPLOT</h3>
<p><a href="#DJS_NEFF">[Previous Routine]</a></p>
<p><a href="#DJS_OPLOTERR">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_oplot

 PURPOSE:
   Modified version of OPLOT.

 CALLING SEQUENCE:
   djs_oplot, [x,] y, [bin= ]

 INPUT:
   x:
   y:

 OPTIONAL KEYWORDS:
   bin        - If set, then plot an evenly-spaced subsample of BIN points,
                or 100 points if BIN=1

 OUTPUTS:

 COMMENTS:
   Allows COLOR, PSYM, and SYMSIZE to be vectors.
   Also allows COLOR to be string descriptions of eight possible colors.
   If string descriptors are used, then load a basic 8-color color table.

 PROCEDURES CALLED:
   djs_icolor()

 REVISION HISTORY:
   Written by D. Schlegel, 27 September 1997, Durham
   bin keyword added, 26 March 2008 - D. Finkbeiner
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/djs_oplot.pro">$IDLUTILS_DIR/pro/plot/djs_oplot.pro</a>)</strong></p>
<hr />
<h3 id="DJS_OPLOTERR">DJS_OPLOTERR</h3>
<p><a href="#DJS_OPLOT">[Previous Routine]</a></p>
<p><a href="#DJS_PHOT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_oploterr

 PURPOSE:
   Modified version of OPLOTERR and DJS_OPLOT.

   Allows COLOR, PSYM, and SYMSIZE to be vectors.
   Also allows COLOR to be string descriptions of eight possible colors.
   If string descriptors are used, then load a basic 8-color color table.

 CALLING SEQUENCE:
   djs_oploterr, [x,] y, xerr=xerr, yerr=yerr, xlog=xlog, ylog=ylog, $
    cap=cap, xlen=xlen, ylen=ylen, $
    color=color, psym=psym, symsize=symsize

 INPUT:
   x:
   y:

 OPTIONAL INPUTS:
   xerr:   Error in X; or -1 for upper limit arrow, -2 for lower limit arrow
   yerr:   Error in Y; or -1 for upper limit arrow, -2 for lower limit arrow
   xlog:   If set, take the logarithm of X and its error
   ylog:   If set, take the logarithm of Y and its error
   cap:    If set, place caps on error bars
   xlen:   Length of upper/lower limit bars in X; default to 6% of plot range
   ylen:   Length of upper/lower limit bars in Y; default to 6% of plot range

 OUTPUTS:

 PROCEDURES CALLED:

 REVISION HISTORY:
   Written by D. Schlegel, 5 February 1998, Durham
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/djs_oploterr.pro">$IDLUTILS_DIR/pro/plot/djs_oploterr.pro</a>)</strong></p>
<hr />
<h3 id="DJS_PHOT">DJS_PHOT</h3>
<p><a href="#DJS_OPLOTERR">[Previous Routine]</a></p>
<p><a href="#DJS_PHOTCEN">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_phot

 PURPOSE:
   Driver for aperture photometry with the option of re-centering and
   sky-subtraction.

 CALLING SEQUENCE:
   flux = djs_phot( xcen, ycen, objrad, skyrad, image, [invvar, $
    calg=, cbox=, cmaxiter=, cmaxshift=, $
    fwhm=, fixfw=, ceps=, $
    salg=, srejalg=, smaxiter=, $
    lorej=, hirej=, $
    flerr=, skyval=, skyrms=, skyerr=, peakval=, /quick, /exact ] )

 INPUTS:
   xcen:       X center(s)
   ycen:       Y center(s)
   objrad:     Radius for aperture on object, or a vector of such radii.
   skyrad:     A 2-element array with two radii to define an annulus,
               or a scalar to define a circular aperture, or undefined
               for no sky calculation
   image:      FITS data array, as read from readfits().

 OPTIONAL INPUTS:
   invvar:     Inverse variance image, for computing the errors FLERR
   ----------- FOR CENTERING ALGORITHM
   calg:       Centering algorithm.  Choose from iweight, gauss1, gauss2, none.
                 iweight = intensity-weighted center, computed independently
                           in both X and Y
                 gauss1  = gaussian fit, including a constant term, computed
                           independently in both X and Y
                 gauss2  = not implemented
                 none    = no centering
               Default to iweight.
   cbox:       Centering box width.  Default to 7.
   cmaxiter:   Maximum number of iterations for centering algorithm.
               Default to 10.
   cmaxshift:  Maximum center shift.  If this shift is exceeded in either
               X or Y, then return the center position passed in XCEN,YCEN.
               A value of 0 imposes no maximum shift.  Default to 3.
   fwhm:       FWHM for gauss1 or gauss2 centering algorithms.  If this is
               a scalar, then the same value is used for both X and Y.
               If this is a vector, then the first two elements are used
               for X and Y respectively.
   fixfw:      If set and nonzero, then fix the FWHM for gauss1 or gauss2 fits.
   ceps:       Stop iterating when relative shifts in both X and Y are less
               than this value.  Default to 0.

   ----------- FOR SKY FITTING ALGORITHM
   salg:       Sky fitting algorithm.  Choose from mean, median, mode, none.
               Default to &quot;mean&quot; if SKYRAD is set, or &quot;none&quot; otherwise.
   srejalg:    Rejection algorithm.  Choose from none, sigclip, pclip.
                 sigclip = sigma clipping; reject outliers that are
                           more than lorej*sigma below skyval or hirej*sigma
                           above skyval
                 pclip   = percentile clipping; reject the lowest lorej
                           fraction and the highest hirej fraction of points
                 none    = no rejection
               Default to sigclip
   smaxiter:   Maximum number of srejalg iterations.  Default to 10.
   lorej:      If srejalg=&quot;sigclip&quot;, then the number of standard deviations
               below skyval to clip (default to 3.0).
               If srejalg=&quot;pclip&quot;, then fraction of low pixels to clip
               (default to 0.05).
   hirej:      If srejalg=&quot;sigclip&quot;, then the number of standard deviations
               above skyval to clip (default to 3.0).
               If srejalg=&quot;pclip&quot;, then fraction of high pixels to clip
               (default to 0.05).
 
 KEYWORDS:
   exact       Use slow photo-based photfrac algorithm (Not thoroughly tested)
               Requires image to be centered such that xcen and ycen
               are integer values. If set, does not recalculate
               center.
   quick       Use faster photfrac algorithm (Not thoroughly tested)

 OUTPUTS:
   flux:       Total flux within each circular aperture defined by objrad,
               minus the sky contribution within each aperture [NOBJ,NRAD].
   xcen:       Re-centered X position (modified).
   ycen:       Re-centered X position (modified).

 OPTIONAL OUTPUTS:
   flerr:      Flux error from the sky background uncertainty within
               the object aperture(s) [NOBJ,NRAD]
   skyval:     Sky value in counts per unit area [NOBJ].
   skyrms:     RMS of sky pixels about skyval, again in counts per unit area.
               This assumes that each unit area is independent.  The RMS
               is computed for only the values that remain after all the
               rejection iterations [NOBJ].
   skyerr:     The error in skyval assuming that each pixel is independent.
               This is skyrms divided by the square root of the number of
               pixels [NOBJ].
   peakval:    Peak pixel value (before sky-subtraction)

 COMMENTS:
   Sub-pixel sampling of the circular apertures is handled exactly.
   If /exact keyword is set, input xcen, ycen must be integers or 
     the code bombs. See exact_photfrac.pro for more details, but 
     basically exact_photfrac is much simpler to implement if the 
     object is already centered, which doesn't cost you precision.
   For similar reasons, if /exact is set, djs_phot will not try to
     recentroid your object.
 PROCEDURES CALLED:
   djs_photcen
   djs_photfrac
   djs_photsky()

 REVISION HISTORY:
   28-Nov-1996  Written by D. Schlegel, Durham.
   01-Jun-2000  Major revisions: change XYCEN to XCEN,YCEN; remove use
                of FITS headers; make IDL 5 compliant (DJS).
   02-Nov-2000  objrad, skyrad recast as floats (D. Finkbeiner)
                  If they are ints, 1% errors may arise. 
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/djsphot/djs_phot.pro">$IDLUTILS_DIR/pro/djsphot/djs_phot.pro</a>)</strong></p>
<hr />
<h3 id="DJS_PHOTCEN">DJS_PHOTCEN</h3>
<p><a href="#DJS_PHOT">[Previous Routine]</a></p>
<p><a href="#DJS_PHOTFRAC">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_photcen

 PURPOSE:
   Recenter an object position.

 CALLING SEQUENCE:
   djs_photcen, xcen, ycen, image, $
    [ calg=, cbox=, cmaxiter=, cmaxshift=, fwhm=, /fixfw, ceps=, qmaxshift= ]

 INPUTS:
   xcen:       X center(s)
   ycen:       Y center(s)
   image:      2-dimensional image

 OPTIONAL INPUTS:
   calg:       Centering algorithm.  Choose from iweight, gauss1, gauss2, none.
                 iweight = intensity-weighted center, computed independently
                           in both X and Y
                 gauss1  = gaussian fit, including a constant term, computed
                           independently in both X and Y
                 gauss2  = 2D gaussian fit, including a constant term
                 none    = no centering
               Default to iweight.
   cbox:       Centering box width.  Default to 7.
   cmaxiter:   Maximum number of iterations for centering algorithm.
               Default to 10.
   cmaxshift:  Maximum center shift.  If this shift is exceeded in either
               X or Y, then return the center position passed in XCEN, YCEN.
               A value of 0 imposes no maximum shift.  Default to 3.
   fwhm:       FWHM for gauss1 or gauss2 centering algorithms.  If this is
               a scalar, then the same value is used for both X and Y.
               If this is a vector, then the first two elements are used
               for X and Y respectively.
   fixfw:      If set and nonzero, then fix the FWHM for gauss1 or gauss2 fits.
   ceps:       Stop iterating when relative shifts in both X and Y are less
               than this value.  Default to 0.

 OUTPUTS:
   xcen:       Re-centered X position (modified).
   ycen:       Re-centered X position (modified).

 OPTIONAL OUTPUS:
   qmaxshift:  Return 1 if maximum shift was reached in either X or Y.
               Return 0 otherwise.

 PROCEDURES CALLED:
   curvefit()
   djs_ceil()
   djs_floor()
   gauss2dfit()

 REVISION HISTORY:
   01-Dec-1996  Written by D. Schlegel, Durham.
   10-Aug-1998  Added option for calg='gauss2' (DJS).
   01-Jun-2000  Major revisions: change XYCEN to XCEN,YCEN; remove use
                of FITS headers; make IDL 5 complient (DJS).
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/djsphot/djs_photcen.pro">$IDLUTILS_DIR/pro/djsphot/djs_photcen.pro</a>)</strong></p>
<hr />
<h3 id="DJS_PHOTFRAC">DJS_PHOTFRAC</h3>
<p><a href="#DJS_PHOTCEN">[Previous Routine]</a></p>
<p><a href="#DJS_PHOTSKY">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_photfrac

 PURPOSE:
   Create a list of pixel numbers and their fractional contribution to
   an annular region.

 CALLING SEQUENCE:
   djs_photfrac, xcen, ycen, Rvec, xdimen=, ydimen=, $
    [ xPixNum=, yPixNum=, pixnum=, fracs=, fillfrac= ]

 INPUTS:
   xcen:       X center(s)
   ycen:       Y center(s)
   Rvec:       Either a 2-element array with two radii to define an annulus,
               or a scalar to define a circular aperature.

 OPTIONAL INPUTS:
   xdimen:     Number of X pixels.
   ydimen:     Number of Y pixels.

 OUTPUTS:
   pixnum:     Pixel number, 0-indexed, for referencing array using one index.
   xPixNum:    Pixel number in X, 0-indexed.
   yPixNum:    Pixel number in Y, 0-indexed.
   fracs:      Return value of covering fraction of the annulus
               over the pixel number.
   fillfrac:   Ratio of returned pixel areas to the annulus area;
               this ratio should equal 1.0 if the aperature falls completely
               within the image boundaries

 COMMENTS:
   The total counts within this region is given by
     totcounts = total( pData(pixnum) * fracs )
   The area within this region is given by
     area = total(fracs)
   The average counts is given by
     totcounts = total( pData(pixnum) * fracs ) / total(fracs)
   To test for bad pixels, e.g. values greater than vmax, within
   the aperature,
     if (where(pData(pixnum) GT vmax) EQ -1) then &lt;no bad values&gt; $
     else &lt;bad values exist&gt;

   If no pixels within the given annulus are found, then return pixnum=-1.

 BUGS:
   - can wrap around on edge of you use PixNum.  XPixNum,YPixNum do
     not exhibit this problem

 PROCEDURES CALLED:
   djs_ceil()
   djs_floor()

 REVISION HISTORY:
   Written D. Schlegel, 27 November 1996, Durham
   Bug identified - 2 Nov 2000, D. Finkbeiner 
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/djsphot/djs_photfrac.pro">$IDLUTILS_DIR/pro/djsphot/djs_photfrac.pro</a>)</strong></p>
<hr />
<h3 id="DJS_PHOTSKY">DJS_PHOTSKY</h3>
<p><a href="#DJS_PHOTFRAC">[Previous Routine]</a></p>
<p><a href="#DJS_PLANCK_F">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_photsky

 PURPOSE:
   Compute the sky value within an annulus.

   At present, fractional pixels are not treated properly; this is because
   we need a sort routine that carries index numbers, such as NR indexx().

 CALLING SEQUENCE:
   skyval = djs_photsky( xcen, ycen, skyrad, image, $
    [ salg=, srejalg=, smaxiter=, $
    lorej=, hirej=, skyrms=, skyerr= ] )

 INPUTS:
   xcen:       X center(s)
   ycen:       Y center(s)
   skyrad:     A 2-element array with two radii to define an annulus,
               or a scalar to define a circular aperature, or undefined or 0
               for no sky calculation
   image:      FITS data array, as read from readfits().

 OPTIONAL INPUTS:
   salg:       Sky fitting algorithm.  Choose from mean, median, mode, none.
               Default to &quot;mean&quot; if SKYRAD is set, or &quot;none&quot; otherwise.
   srejalg:    Rejection algorithm.  Choose from none, sigclip, pclip.
                 sigclip = sigma clipping; reject outliers that are
                           more than lorej*sigma below skyval or hirej*sigma
                           above skyval
                 pclip   = percentile clipping; reject the lowest lorej
                           fraction and the highest hirej fraction of points
                 none    = no rejection
               Default to sigclip
   smaxiter:   Maximum number of srejalg iterations.  Default to 10.
   lorej:      If srejalg=&quot;sigclip&quot;, then the number of standard deviations
               below skyval to clip (default to 3.0).
               If srejalg=&quot;pclip&quot;, then fraction of low pixels to clip
               (default to 0.05).
   hirej:      If srejalg=&quot;sigclip&quot;, then the number of standard deviations
               above skyval to clip (default to 3.0).
               If srejalg=&quot;pclip&quot;, then fraction of high pixels to clip
               (default to 0.05).
   quick:      Set to use quick_photfrac (much faster)
   exact:      Set to use exact_photfrac (slower)

 OUTPUTS:
   skyval:     Sky value in counts per pixel.
   skyrms:     RMS of sky pixels about skyval, again in counts per pixel.
               This assumes that each pixel is independent.  The RMS
               is computed for only the values that remain after all the
               rejection iterations.
   skyerr:     The error in skyval assuming that each pixel is independent.
               This is skyrms divided by the square root of the number of
               pixels.

 PROCEDURES CALLED:
   djs_photfrac

 REVISION HISTORY:
   28-Nov-1996  Written by D. Schlegel, Durham.
   01-Jun-2000  Major revisions: change XYCEN to XCEN,YCEN; remove use
                of FITS headers; make IDL 5 complient (DJS).
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/djsphot/djs_photsky.pro">$IDLUTILS_DIR/pro/djsphot/djs_photsky.pro</a>)</strong></p>
<hr />
<h3 id="DJS_PLANCK_F">DJS_PLANCK()</h3>
<p><a href="#DJS_PHOTSKY">[Previous Routine]</a></p>
<p><a href="#DJS_PLOT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
NAME:
    DJS_PLANCK()

PURPOSE:
     Returns the spectral radiance of a blackbody.

DESCRIPTION:  
    IDL function to return the spectral radiance of a blackbody,
    i.e. the Planck curve, in units of either MJy/steradian (I_nu)
    or watts/cm^2/steradian (nu_I_nu).
    The blackbody temperature and either frequency (in icm or GHz)
    or wavelength (in microns) are inputs to the function.  The
    routine also optionally returns the derivative with respect to 
    temperature, in units of MJy/sr/K or W/cm^2/sr/K.

CALLING SEQUENCE:  
     RESULT = DJS_PLANCK (temperature, nu_or_lambda [,dBdT] $
              [,UNITS=units], [/MJY], [/WCM2])

ARGUMENTS (I = input, O = output, [] = optional):
     RESULT        O   flt [arr]  Spectral radiance at each wavelength. 
                                  Units: W/cm^2/sr/K if /WCM2 specified
                                         MJy/sr      if /MJY specfied
     TEMPERATURE   I   flt        Temperature of blackbody, in K.
     NU_OR_LAMBDA  I   flt        Frequency or wavelength at which to 
                                  calculate spectrum. Units are as 
                                  specified with UNITS keyword.
     dBdT         [O]  flt [arr]  Derivative of Planck with respect to 
                                  temperature. 
     UNITS        [I]  str        'Microns', 'icm', or 'GHz' to 
                                  identify units of NU_OR_LAMBDA. Only 
                                  first character is required.  If 
                                  left out, default is 'microns'.
     /MJY          I   key        Sets output units to MJy/sr
     /WCM2         I   key        Sets output units to W/cm^2/sr

WARNINGS:
     1.  One of /MJY or /WCM2 MUST be specified.  
     2.  Routine gives incorrect results for T &lt; 1 microKelvin and
            wavelengths shortward of 1.e-10 microns.  (So sue me).

EXAMPLE:
     To produce a 35 K spectrum in MJy/sr at 2, 4, 6, 8, 10 microns:

       wavelength = 2. + 2.*findgen(5)
       temp = 35.
       blackbody = djs_planck(temp, wavelength, units='micron', /mjy)

     One could also get back the derivative by including it in the
     call:
       blackbody = djs_planck(temp, wavelength, deriv, units='m', /mjy)
#
COMMON BLOCKS:
     None

PROCEDURE (AND OTHER PROGRAMMING NOTES): 
     Identifies units using the UNITS keyword, then converts the 
     supplied independent variable into microns to evaluate the 
     Planck function.  Uses Rayleigh-Jeans and Wien approximations 
     for the low- and high-frequency end, respectively.  Reference: 
     Allen, Astrophysical Quantities, for the Planck formula.

PERTINENT ALGORITHMS, LIBRARY CALLS, ETC.:
     None
  
MODIFICATION HISTORY:
    Written by Rich Isaacman, General Sciences Corp.  17 April 1991
    Revised by RBI 27 Jan 1992 to use updated fundamental constants 
         (SPR 9449)
    Revised by RBI 29 Jan 1992 to calculate derivatives only when 
         necessary
    Revised by RBI 3 Feb 1992 to redimension output to a scalar if only 
       a single wavelength is supplied  (SPR 9459)
    Revised by RBI 6 Mar 92 to return either MJy/sr or (!) W/cm^2/sr
    Revised by RBI 1 Jun 92 to fix single-wavelength failure when no
       derivative is requested (SPR 9738), and to use MESSAGE.
    RBI corrected error in derivative calculation SPR 9817 (17 Jul 92)
    RBI corrected error in Wien and RJ tails SPR 10392 (24 Dec 92)
	 but didn't get it quite right (Piper/Kryszak, 28-Dec-92)
    Revised by David Schlegel 10-Mar-1999 to allow calling with temperature
        and/or wavelength as a vector; converted to IDL-5; renamed from
        PLANCK() to DJS_PLANCK().  Note that this code was copied from
        the COBE analysis software.

 SPR 9616
.TITLE
 Routine DJS_PLANCK
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/dust/djs_planck.pro">$IDLUTILS_DIR/pro/dust/djs_planck.pro</a>)</strong></p>
<hr />
<h3 id="DJS_PLOT">DJS_PLOT</h3>
<p><a href="#DJS_PLANCK_F">[Previous Routine]</a></p>
<p><a href="#DJS_PLOTLIMITBOX">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_plot

 PURPOSE:
   Modified version of PLOT

 CALLING SEQUENCE:
   djs_plot, [x,] y, [bin= ]

 INPUT:
   x:
   y:

 OPTIONAL KEYWORDS:
   bin        - If set, then plot an evenly-spaced subsample of BIN points,
                or 100 points if BIN=1
   rightaxis, leftaxis, topaxis, bottomaxis 
              - if set, draws labels on the specified axis/axes BUT 
                DRAWS NO OTHERS
 OUTPUTS:

 COMMENTS:
   Pass COLOR, PSYM, and SYMSIZE to djs_oplot.

 PROCEDURES CALLED:
   djs_oplot
   TeXtoIDL()

 REVISION HISTORY:
   Written by D. Schlegel, 27 September 1997, Durham
   bin keyword added, 26 March 2008 - D. Finkbeiner
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/djs_plot.pro">$IDLUTILS_DIR/pro/plot/djs_plot.pro</a>)</strong></p>
<hr />
<h3 id="DJS_PLOTLIMITBOX">DJS_PLOTLIMITBOX</h3>
<p><a href="#DJS_PLOT">[Previous Routine]</a></p>
<p><a href="#DJS_POSMOD">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_plotlimitbox

 PURPOSE:
   Plot a box that bounds the given limits in X and Y.

 CALLING SEQUENCE:
   djs_plotlimitbox, xrange, yrange

 INPUT:
   xrange:    Range in X
   yrange:    Range in Y

 OUTPUTS:

 PROCEDURES CALLED:
   djs_oplot

 REVISION HISTORY:
   Written by D. Schlegel, 11 Dec 1998, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/djs_plotlimitbox.pro">$IDLUTILS_DIR/pro/plot/djs_plotlimitbox.pro</a>)</strong></p>
<hr />
<h3 id="DJS_POSMOD">DJS_POSMOD</h3>
<p><a href="#DJS_PLOTLIMITBOX">[Previous Routine]</a></p>
<p><a href="#DJS_READCOL">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_posmod

 PURPOSE:
   Return the non-negative modulus x % y, in the range [0,y).

 CALLING SEQUENCE:
   result = djs_posmod(x, y)

 INPUTS:
   xvalue

 OUTPUTS:
   result

 PROCEDURES CALLED:

 REVISION HISTORY:
   Written D. Schlegel, 15 May 1997, Durham
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/djs_posmod.pro">$IDLUTILS_DIR/pro/math/djs_posmod.pro</a>)</strong></p>
<hr />
<h3 id="DJS_READCOL">DJS_READCOL</h3>
<p><a href="#DJS_POSMOD">[Previous Routine]</a></p>
<p><a href="#DJS_READILINES_F">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
	DJS_READCOL
 PURPOSE:
	Read a free-format ASCII data file with columns of data into IDL 
	variables.  Lines of data not meeting the specified format (e.g. 
	comments) are ignored.  Columns may be separated by commas or spaces.
	Use READFMT to read a fixed-format ASCII file.   Use RDFLOAT for
	much faster I/O (but less flexibility).

 CALLING SEQUENCE:
	DJS_READCOL, name, v1, [ v2, v3, v4, v5, ...  v25 , 
             FORMAT = , /DEBUG ,  /SILENT , SKIPLINE = , NUMLINE = ]

 INPUTS:
	NAME - Name of ASCII data file, scalar string.  In VMS, an extension of 
		.DAT is assumed, if not supplied.

 OPTIONAL INPUT KEYWORDS:
	FORMAT - scalar string containing a letter specifying an IDL type
		for each column of data to be read.  Allowed letters are 
		A - string data, B - byte, D - double precision, F- floating 
		point, I - integer, L - longword, and X - skip a column.

		Columns without a specified format are assumed to be floating 
		point.  Examples of valid values of FMT are

	'A,B,I'        ;First column to read as 6 character string, then 
			1 column of byte data, 1 column integer data
	'L,L,L,L'       ;Four columns will be read as longword arrays.
	' '             ;All columns are floating point

	If a FORMAT keyword string is not supplied, then all columns are 
	assumed to be floating point.

	SILENT - Normally, READCOL will display each line that it skips over.
		If SILENT is set and non-zero then these messages will be 
		suppressed.
	DEBUG - If this keyword is non-zero, then additional information is
		 printed as READCOL attempts to read and interpret the file.
	SKIPLINE - Scalar specifying number of lines to skip at the top of file
		before reading.   Default is to start at the first line.
	NUMLINE - Scalar specifying number of lines in the file to read.  
		Default is to read the entire file

 OUTPUTS:
	V1,V2,V3,...V15 - IDL vectors to contain columns of data.
		Up to 25 columns may be read.  The type of the output vectors
		are as specified by FORMAT.

 EXAMPLES:
	Each row in a file POSITION.DAT contains a star name and 6 columns
	of data giving an RA and Dec in sexigesimal format.   Read into IDL 
	variables.     (NOTE: The star names must not contain internal spaces.)

	IDL&gt; FMT = 'A,I,I,F,I,I,F'
	IDL&gt; READCOL,'POSITION',F=FMT,name,hr,min,sec,deg,dmin,dsec  

	The HR,MIN,DEG, and DMIN variables will be integer vectors.

	Alternatively, all except the first column could be specified as
	floating point.

	IDL&gt; READCOL,'POSITION',F='A',name,hr,min,sec,deg,dmin,dsec 

	To read just the variables HR,MIN,SEC
	IDL&gt; READCOL,'POSITION',F='X,I,I,F',HR,MIN,SEC

 RESTRICTIONS:
	This procedure is designed for generality and not for speed.
	If a large ASCII file is to be read repeatedly, it may be worth
	writing a specialized reader.

	Columns to be read as strings must not contain spaces or commas, 
	since these are interpreted as column delimiters.    Use READFMT
	to read such files.

	Numeric values are converted to specified format.  For example,
	the value 0.13 read with an 'I' format will be converted to 0.

 PROCEDURES CALLED
	GETTOK(), REPCHR(), STRNUMBER(), ZPARCHECK

 REVISION HISTORY:
	Written         W. Landsman                 November, 1988
	Modified	     J. Bloch 			June, 1991
	(Fixed problem with over allocation of logical units.)
	Added SKIPLINE and NUMLINE keywords  W. Landsman    March 92
	Read a maximum of 25 cols.  Joan Isensee, Hughes STX Corp., 15-SEP-93.
	Call NUMLINES() function W. Lansdman          Feb. 1996
       Use FILE_LINES() instead of numlines()  2012-03-08.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/djs_readcol.pro">$IDLUTILS_DIR/pro/misc/djs_readcol.pro</a>)</strong></p>
<hr />
<h3 id="DJS_READILINES_F">DJS_READILINES()</h3>
<p><a href="#DJS_READCOL">[Previous Routine]</a></p>
<p><a href="#DJS_READLINES_F">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_readilines()

 PURPOSE:
   Read selected lines of an ASCII file as one character string for each line.
   If NHEAD is specified and greater than zero, then that number
   of lines is read in first as header strings in HEAD.

 CALLING SEQUENCE:
   Data = djs_readilines( infile, indx=indx, [ nhead=nhead, Head=Head ] )

 INPUT:
   infile:      Input file name

 OPTIONAL INPUT:
   nhead:       Number of lines in header
   indx:        Line numbers to read (0-indexed); if not set, then
                default to reading all data lines in their current order.
                The indices start with 0 for the first data line.

 OUTPUTS:
   Data:        Array of strings, one for each data line

 OPTIONAL OUTPUTS:
   Head:        Array of strings, one for each header line

 PROCEDURES CALLED:

 REVISION HISTORY:
   Written by D. Schlegel, 29 May 1997, Durham
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/djs_readilines.pro">$IDLUTILS_DIR/pro/misc/djs_readilines.pro</a>)</strong></p>
<hr />
<h3 id="DJS_READLINES_F">DJS_READLINES()</h3>
<p><a href="#DJS_READILINES_F">[Previous Routine]</a></p>
<p><a href="#DJS_READMANY">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_readlines()

 PURPOSE:
   Read an ASCII file as one character string for each line.
   If NHEAD is specified and greater than zero, then that number
   of lines is read in first as header strings in HEAD.

 CALLING SEQUENCE:
   Data = djs_readlines( infile, [ nhead=nhead, Head=Head ] )

 INPUT:
   infile:      Input file name

 OPTIONAL INPUT:
   nhead:       Number of lines in header

 OUTPUTS:
   Data:        Array of strings, one for each data line

 OPTIONAL OUTPUTS:
   Head:        Array of strings, one for each header line

 PROCEDURES CALLED:

 REVISION HISTORY:
   Written by D. Schlegel, 29 May 1997, Durham
   Use FILE_LINES() instead of numlines(), B. A. Weaver, 2012-03-08, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/djs_readlines.pro">$IDLUTILS_DIR/pro/misc/djs_readlines.pro</a>)</strong></p>
<hr />
<h3 id="DJS_READMANY">DJS_READMANY</h3>
<p><a href="#DJS_READLINES_F">[Previous Routine]</a></p>
<p><a href="#DJS_REJECT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_readmany

 PURPOSE:
   Read many FITS 2-D images into a data cube.

 CALLING SEQUENCE:
   cube = djs_readmany( files, [hdr=] )

 INPUTS:
   files:      FITS file names (array of strings)

 OUTPUTS:
   cube:       Data cube with dimensions [NAXIS1, NAXIS2, nfile]

 OPTIONAL OUTPUTS:
   hdr:        Header for first image

 COMMENTS:
   Additional keywords are passed to the function READFITS().
   At present, the output image is always typed FLOAT.

 PROCEDURES CALLED:
   readfits()

 REVISION HISTORY:
   07-Jul-1999  Written by David Schlegel, Princeton.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/fits/djs_readmany.pro">$IDLUTILS_DIR/pro/fits/djs_readmany.pro</a>)</strong></p>
<hr />
<h3 id="DJS_REJECT">DJS_REJECT</h3>
<p><a href="#DJS_READMANY">[Previous Routine]</a></p>
<p><a href="#DJS_RGB_MAKE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_reject

 PURPOSE:
   Routine to reject points when doing an iterative fit to data.

 CALLING SEQUENCE:
   qdone = djs_reject(ydata, ymodel, outmask=, [ inmask=, $
    sigma=, invvar=, upper=, lower=, maxdev=, $
    maxrej=, groupsize=, groupdim=, grow=, /sticky ] )

 INPUTS:
   ydata      - Data values
   ymodel     - Fit values

 REQUIRED KEYWORDS:
   outmask    - Output mask, usually from previous calls to DJS_REJECT(),
                set =1 for good points, =0 for bad points.
                If /STICKY is set, then bad pixels accumulate in this mask
                between calls.  Otherwise, this mask is only used to determine
                if the rejection iterations are complete (e.g., to set QDONE).
                This keyword is required to be present, though need not be set.

 OPTIONAL KEYWORDS:
   inmask     - Input mask, set =1 for good points, =0 for bad points;
                bad points always have OUTMASK=0 also.
   sigma      - Errors in YDATA, used to reject based upon UPPER and LOWER.
   invvar     - Inverse variance in YDATA, used to reject based upon UPPER
                and LOWER; cannot specify both SIGMA and INVVAR.
   upper      - Reject points with YDATA &gt; YMODEL + UPPER * SIGMA.
   lower      - Reject points with YDATA &lt; YMODEL - LOWER * SIGMA.
   maxdev     - Reject points with abs(YDATA - YMODEL) &gt; MAXDEV.
   maxrej     - Maximum number of points to reject this iteration.  If /STICKY
                is set, then this number of points can be rejected per
                iteration.  If either GROUPDIM or GROUPSIZE is a vector,
                then this quantity should be as well.
   groupdim   - Dimension along which to group the data; set to 1 to group
                along the 1st dimension, 2 for the 2nd dimension, etc.
                If YDATA has dimensions [100,200], then setting GROUPDIM=2
                is equivalent to grouping the data with GROUPSIZE=100.
                In either case, there are 200 groups, specified by [*,i].
   groupsize  - If this and MAXREJ are set, then reject a maximum of MAXREJ
                points per group of GROUPSIZE points.  If GROUPDIM is also
                set, then this specifies sub-groups within that.
   groupbadpix- Overrides the other groupsizes:  This associates each
                consectuive string of bad pixels as a group.  And maxrej
                is applied to each group of bad pixels.
                ***Unlikely to Work with Multi-Dimension Data***
   sticky     - If set, then points rejected in OUTMASK are kept rejected.
                Otherwise, if a fit (YMODEL) changes between iterations,
                points can alternate from being rejected to not rejected.
   grow       - Also nearest neighbors of rejected points (default 0)

 OUTPUTS:
   qdone      - Set to 0 if YMODEL is not set (usually the first call to
                this routine), or if the points marked as rejected in OUTMASK
                changes; set to 1 when the same points are rejected as from
                a previous call.

 OPTIONAL OUTPUTS:

 COMMENTS:
   If neither SIGMA nor INVVAR are set, then a scalar value of SIGMA is
   determined from the data points, excluding those points masked either
   with INMASK or OUTMASK.

   If the number of points rejected is limited with MAXREJ, then only the
   worst points are rejected.  The worst points are those with the largest
   deviation in terms of sigma (if UPPER or LOWER are set), or the largest
   number of multiples of MAXDEV from YMODEL (if MAXDEV is set).

   For example, if this is a 2-D array with GROUPDIM=1, then loop over each
   column of the data.  If GROUPDIM=2, then loop over each row.

   Note that UPPER, LOWER and MAXDEV can all be set.

 EXAMPLES:
   Construct an array of random numbers.  Reject high outliers, rejecting
   at most 1 point per iteration, for a maximum of 3 iterations:
     ydata = randomn(123,1000)
     ymodel = 0 * ydata
     sigma = 0 * ydata + 1
     outmask = 0
     maxiter = 3
     for iiter=0, maxiter do $
      if djs_reject(ydata, ymodel, outmask=outmask, upper=3, $
       maxrej=1, /sticky) then iiter = maxiter

   Usually, one would want to re-fit YMODEL between rejection iterations.
   The following does a weighted cubic fit to the data, but rejecting all
   points that deviate by more than 2-sigma from the fit.
     xdata = findgen(1000)
     ydata = randomn(123,1000)
     sigma = 0 * ydata + 1
     iiter = 0
     maxiter = 10
     outmask = 0 * ydata + 1 ; Begin with all points good
     while (NOT keyword_set(qdone) AND iiter LE maxiter) do begin
        qdone = djs_reject(ydata, ymodel, outmask=outmask, upper=2, lower=2)
        res = polyfitw(xdata, ydata, outmask/sigma^2, 2, ymodel)
        iiter = iiter + 1
     endwhile

 BUGS:
   Check case of no good points, or only 1 point with a value of 0
   (which might confuse keyword_set()). ???

 PROCEDURES CALLED:
   djs_laxisnum()

 REVISION HISTORY:
   30-Aug-2000  Written by D. Schlegel, Princeton
   11-Dec-2001  Slight changes to groupsize algorithm and add grow
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/djs_reject.pro">$IDLUTILS_DIR/pro/math/djs_reject.pro</a>)</strong></p>
<hr />
<h3 id="DJS_RGB_MAKE">DJS_RGB_MAKE</h3>
<p><a href="#DJS_REJECT">[Previous Routine]</a></p>
<p><a href="#DJS_SELECTLINES">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
NAME:
  djs_rgb_make

 PURPOSE:
   Creates JPEG (or TIFF) from three images or FITS files

 CALLING SEQUENCE:
   djs_rgb_make, rimage, gimage, bimage, [ name=, origin=, scales=, $
    nonlinearity=, satvalue=, rebinfactor=, overlay=, quality=, $
    /tiff, dpitiff=, bits_per_channel ]

 INPUTS:
   rimage,gimage,bimage - Input 2-dimensional images or names of FITS files;
                 the dimensions of all images must agree

 OPTIONAL KEYWORDS:
   name        - Name of the output JPEG file; default to 'test.jpg',
                 or to 'test.tiff' if /TIFF is set
   origin      - Subtract these zero-point values from the input images
                 before any other scalings; default to [0,0,0]
   scales      - Multiplicative scaling for each image; default to [1,1,1]
   nonlinearity- Nonlinearity constant, =0 for linear, =Inf for logarithmic;
                 default to 3
   satvalue    - Saturation value (before applying rescaling with SCALES, but
                 after applying ORIGIN) for which we should group pixels
                 into saturated &quot;objects&quot;; default to 100;
                 set to zero to disable
   rebinfactor - Integer by which to rebin pixels in the x and y
                 directions; eg, a rebinfactor of 2 halves the number
                 of pixels in each direction and quarters the total
                 number of pixels in the image
   overlay     - Optional overlay image, which must be dimensionsed as
                 [NX/REBINFACTOR,NY/REBINFACTOR,3]
   quality     - Quality for WRITE_JPEG; default to 75 per cent
   png         - make png instead of jpeg (and ignore &quot;quality&quot;)
   tiff        - Set to make TIFF instead of JPEG if either this keyword
                 or DPITIFF is set
   dpitiff     - Set TIFF &quot;dots per inch&quot; resolution, and force /TIFF option

 OUTPUTS:

 COMMENTS:
   This routine is based upon Nick Wherry's code NW_RGB_MAKE.
   The main difference is that saturated pixels are grouped into
   contiguous &quot;objects&quot;, which are then assigned a color based upon
   the sum of all the pixels in that object.

   The nonlinearity function applied is
     RIMAGE = RIMAGE * asinh(b*r)/(b*r)
     GIMAGE = GIMAGE * asinh(b*r)/(b*r)
     BIMAGE = BIMAGE * asinh(b*r)/(b*r)
   where &quot;b&quot; is the input NONLINEARITY parameter and we define at each pixel
     r = (RIMAGE + GIMAGE + BIMAGE)

   Note that there are two types of saturation.  The first is that objects
   can be considered saturated if they exceed SATVALUE in any of the input
   images.  For such objects, contiguous saturated pixels are combined into
   one &quot;object&quot; with the mean color of all included pixels.
   The second type of saturation is of the RGB image.  This saturation is
   dealt with at the pixel level, and each pixel rescaled in all three images
   such that the brightest color hits the JPEG limit (of 255), but the
   colors (ratios between the RGB images) are preserved.

   The rebinning will trim excess pixels if the given inputs are not 
   divisible by the rebin factor.

 EXAMPLES:

 BUGS:

 REVISION HISTORY:
   10-May-2004 - Written by D. Schlegel, Princeton;
                 based upon Nick Wherry's code NW_RGB_MAKE
   12-Dec-2005 - Change saturated pixel code; add TIFF option - DPF
   28-Apr-2006 - bits_per_channel keyword added for Warner Bros - DPF
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/rgbcolor/djs_rgb_make.pro">$IDLUTILS_DIR/pro/rgbcolor/djs_rgb_make.pro</a>)</strong></p>
<hr />
<h3 id="DJS_SELECTLINES">DJS_SELECTLINES</h3>
<p><a href="#DJS_RGB_MAKE">[Previous Routine]</a></p>
<p><a href="#DJS_SFIT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_selectlines

 PURPOSE:
   Select the line numbers specified by INDX of a file, and print either
   to the standard output or to another file.

   This is not yet optimized for very large files, as it will read in
   all of the requested lines (though not all the lines) into memory first.

 CALLING SEQUENCE:
   djs_selectlines, infile, [ indx=indx, nhead=nhead, outfile=outfile ]

 INPUTS:
   infile:      Input file name

 OPTIONAL INPUTS:
   indx:        Array of line numbers to select (0-indexed); default to all.
                The indices start with 0 for the first data line.
   nhead:       Number of lines in header
   outfile:     Output file name; if not set then print to terminal

 OUTPUTS:

 PROCEDURES CALLED:
   djs_readilines()

 REVISION HISTORY:
   Written by D. Schlegel, 25 September 1997, Durham
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/djs_selectlines.pro">$IDLUTILS_DIR/pro/misc/djs_selectlines.pro</a>)</strong></p>
<hr />
<h3 id="DJS_SFIT">DJS_SFIT</h3>
<p><a href="#DJS_SELECTLINES">[Previous Routine]</a></p>
<p><a href="#DJS_UNLOCKFILE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_sfit

 PURPOSE:
   Surface-fitting code to tabulated data (optionally with errors).

 CALLING SEQUENCE:
   acoeff = djs_sfit( fval, xval, yval, degreex, degreey, $
    [ sqivar=, yfit= ] )

 INPUTS:
   fval       - Function values at XVAL,YVAL.
   xval       - X coordinate values
   yval       - Y coordinate values
   degreex    - Degree of polynomial fit in X; 1 for linear, 2 for quadratic
   degreey    - Degree of polynomial fit in Y; 1 for linear, 2 for quadratic

 OPTIONAL INPUTS:
   sqivar     - Inverse sigma, which are the weights

 OUTPUTS:
   acoeff     - Fit coefficients as [DEGREEX+1,DEGREEY+1] array

 OPTIONAL OUTPUTS:
   yfit       - Fit values

 COMMENTS:

 EXAMPLES:
   Create a random 2-dimensional field with a gradient in the X direction,
   and fit to a quadratic function in both X and Y:
     IDL&gt; xval = dindgen(100) # replicate(1,100) / 100.
     IDL&gt; yval = replicate(1,100) # dindgen(100) / 100.
     IDL&gt; image = smooth(randomu(1234,100,100),11,/edge) + 0.2*xval^2
     IDL&gt; acoeff = djs_sfit(image,xval,yval,2,2,yfit=yfit)
   Display the original image, and then the residual between that
   image and the fit:
     IDL&gt; atv, image
     IDL&gt; atv, image - yfit

 BUGS:

 PROCEDURES CALLED:

 INTERNAL SUPPORT ROUTINS:

 REVISION HISTORY:
   25-Oct-2002  Written by David Schlegel, Princeton.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/image/djs_sfit.pro">$IDLUTILS_DIR/pro/image/djs_sfit.pro</a>)</strong></p>
<hr />
<h3 id="DJS_UNLOCKFILE">DJS_UNLOCKFILE</h3>
<p><a href="#DJS_SFIT">[Previous Routine]</a></p>
<p><a href="#DJS_XYOUTS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_unlockfile

 PURPOSE:
   Unlock a file if locked with DJS_LOCKFILE().

 CALLING SEQUENCE:
   djs_unlockfile, filename, [lun= ]

 INPUT:
   filename:   File name

 OPTIONAL INPUTS:
   lun:        If this argument exists, then close the file associated
               with this LUN number.  This is useful if FILENAME has
               been opened with DJS_LOCKFILE().

 OUTPUTS:

 COMMENTS:
   We use a lock file, which is either a symbolic link or a file with
   a single byte written to it, to indicate that FILENAME has been
   locked by DJS_LOCKFILE().  This routine deletes that file.

 BUGS:

 PROCEDURES CALLED:

 REVISION HISTORY:
   30-Apr-2000  Written by D. Schlegel, APO
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/djs_unlockfile.pro">$IDLUTILS_DIR/pro/misc/djs_unlockfile.pro</a>)</strong></p>
<hr />
<h3 id="DJS_XYOUTS">DJS_XYOUTS</h3>
<p><a href="#DJS_UNLOCKFILE">[Previous Routine]</a></p>
<p><a href="#DLOOKBACKDZ">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   djs_xyouts

 PURPOSE:
   Modified version of XYOUTS

 CALLING SEQUENCE:
   djs_xyouts

 INPUT:

 OUTPUTS:

 COMMENTS:
   Allows COLOR, and CHARSIZE to be vectors.
   Also allows COLOR to be string descriptions of eight possible colors.
   If string descriptors are used, then load a basic 8-color color table.

 PROCEDURES CALLED:
   djs_icolor()
   TeXtoIDL()

 REVISION HISTORY:
   16-Apr-2000 Written by D. Schlegel, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/djs_xyouts.pro">$IDLUTILS_DIR/pro/plot/djs_xyouts.pro</a>)</strong></p>
<hr />
<h3 id="DLOOKBACKDZ">DLOOKBACKDZ</h3>
<p><a href="#DJS_XYOUTS">[Previous Routine]</a></p>
<p><a href="#DMEDSMOOTH">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   dlookbackdz
 PURPOSE:
   Compute differential lookback time dt/dz (for c/H_0=1).
 CALLING SEQUENCE:
   dtdz= dlookbackdz(z,OmegaM,OmegaL)
 INPUTS:
   z       - redshift or vector of redshifts
   OmegaM  - Omega-matter at z=0
   OmegaL  - Omega-Lambda at z=0
 OPTIONAL INPUTS:
 KEYWORDS
 OUTPUTS:
   differential lookback time per unit redshift, units of the Hubble time 1/H_0
 COMMENTS:
 BUGS:
   May not work for pathological parts of the OmegaM-OmegaL plane.
 EXAMPLES:
 PROCEDURES CALLED:
 REVISION HISTORY:
   2001-May-12  Written by Hogg (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/cosmography/dlookbackdz.pro">$IDLUTILS_DIR/pro/cosmography/dlookbackdz.pro</a>)</strong></p>
<hr />
<h3 id="DMEDSMOOTH">DMEDSMOOTH</h3>
<p><a href="#DLOOKBACKDZ">[Previous Routine]</a></p>
<p><a href="#DOBJECTS_MULTI">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   dmedsmooth
 PURPOSE:
   median smooth 
 CALLING SEQUENCE:
   smooth= dmedsmooth(image, invvar, box=)
 INPUTS:
   image - [nx, ny] input image
   invvar - [nx, ny] invverse variance (default all 1.)
   box - box size for smooth
 OUTPUTS:
   smooth - [nx, ny] smooth image
 COMMENTS:
   Doesn't weight by inverse variance: just ignores invvar=0 data.
   If inverse variance isn't supplied, assumes all data good.
 REVISION HISTORY:
   11-Jan-2006  Written by Blanton, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/dimage/dmedsmooth.pro">$IDLUTILS_DIR/pro/dimage/dmedsmooth.pro</a>)</strong></p>
<hr />
<h3 id="DOBJECTS_MULTI">DOBJECTS_MULTI</h3>
<p><a href="#DMEDSMOOTH">[Previous Routine]</a></p>
<p><a href="#DOTPRODUCT_SPHERE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   dobjects_multi
 PURPOSE:
   detect objects in a set of images of different bands
 CALLING SEQUENCE:
   dobjects_multi, images, objects= [, dpsf=, plim=]
 INPUTS:
   images - [nx, ny, nim] original image
 OPTIONAL INPUTS:
   dpsf - smoothing of PSF for detection (defaults to sigma=1 pixel)
   plim - limiting significance in sky sigma (defaults to 10 sig )
 OUTPUTS:
   objects - [nx, ny] which object each pixel belongs to (-1 if none)
 COMMENTS:
   Calculates noise in image from image itself.
   Any detected pixel in any band counts as a detection.
 REVISION HISTORY:
   11-Jan-2006  Written by Blanton, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/dimage/dobjects_multi.pro">$IDLUTILS_DIR/pro/dimage/dobjects_multi.pro</a>)</strong></p>
<hr />
<h3 id="DOTPRODUCT_SPHERE">DOTPRODUCT_SPHERE</h3>
<p><a href="#DOBJECTS_MULTI">[Previous Routine]</a></p>
<p><a href="#DPF_NEST2RING">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   dotproduct_sphere
 PURPOSE:
   Compute the cosign of the angle between two unit vectors on the
   sphere.  This formula is from Jackson, pg 101.  (Or see my notes
   of 6 Dec 92).  The angles must be in the following ranges:
     0 &lt;= phi &lt; 360
     0 &lt;= theta &lt;= 180
   where theta=0 corresponds to the N pole, and theta=180 is the S pole.
   If you want the dot product between RA and DEC coordinates,
   pass the following arguments (in radians):
     RA1, DEC1+90, RA2, DEC2+90

 CALLING SEQUENCE:
   dotproduct_sphere( phi1, theta1, phi2, theta2, [/degrees, /hrdeg] )

 INPUTS:
   phi1:       RA of first point(s) in radians
   theta1:     DEC of first point(s) in radians
   phi2:       RA of second point(s) in radians
   theta2:     DEC of second point(s) in radians

 OPTIONAL INPUTS:
   degrees:    If set, then all angles are in degrees
   hrdeg:      If se, then RA angles in hours and DEC angles in degrees

 OUTPUTS:
   cosgamma:   Cosine of the angle between the two positions
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/coord/dotproduct_sphere.pro">$IDLUTILS_DIR/pro/coord/dotproduct_sphere.pro</a>)</strong></p>
<hr />
<h3 id="DPF_NEST2RING">DPF_NEST2RING</h3>
<p><a href="#DOTPRODUCT_SPHERE">[Previous Routine]</a></p>
<p><a href="#DPF_PIX2ANG_NEST">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   dpf_nest2ring

 PURPOSE:
   Convert healpix nested pixel number to ring pixel number

 CALLING SEQUENCE:
   dpf_nest2ring, nside, ipnest, ipring

 INPUTS:
   nside  - healpix nside
   ipnest - nested pixel number

 OUTPUTS:
   ipring - ring pixel number

 EXAMPLES:
   
 COMMENTS:
   Usage is same as Hivon's nest2ring, only this is 4 times as fast.

 REVISION HISTORY:
   2003-Dec-04  Written by Douglas Finkbeiner, Princeton

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/healpix/dpf_nest2ring.pro">$IDLUTILS_DIR/pro/healpix/dpf_nest2ring.pro</a>)</strong></p>
<hr />
<h3 id="DPF_PIX2ANG_NEST">DPF_PIX2ANG_NEST</h3>
<p><a href="#DPF_NEST2RING">[Previous Routine]</a></p>
<p><a href="#DPF_PIX2ANG_RING">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   dpf_pix2ang_nest

 PURPOSE:
   Compute coordinates for HEALPix pixel numbers, nested order

 CALLING SEQUENCE:
   dpf_pix2ang_nest, nside, ipix, theta, phi, double=double

 INPUTS:
   nside   - healpix nside
   ipix    - pixel numbers
 
 OUTPUTS:
   theta   - angle from north pole [radians]
   phi     - longitude angle [radians]

 EXAMPLES:
   
 COMMENTS:
   Calling syntax is same as pix2ang_nest and agrees to machine 
     precision. 
   This routine has somewhat better performance when called for the
     full sky than pix2ang_nest. 
   
 REVISION HISTORY:
   2004-Jun-08  Written by Douglas Finkbeiner, Princeton

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/healpix/dpf_pix2ang_nest.pro">$IDLUTILS_DIR/pro/healpix/dpf_pix2ang_nest.pro</a>)</strong></p>
<hr />
<h3 id="DPF_PIX2ANG_RING">DPF_PIX2ANG_RING</h3>
<p><a href="#DPF_PIX2ANG_NEST">[Previous Routine]</a></p>
<p><a href="#DPF_PSF_REJECT_CR_SINGLE_F">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   dpf_pix2ang_ring

 PURPOSE:
   Compute coordinates for HEALPix pixel numbers

 CALLING SEQUENCE:
   dpf_pix2ang_ring, nside, ipix, theta, phi, double=double

 INPUTS:
   nside   - healpix nside
   ipix    - pixel numbers
 
 OUTPUTS:
   theta   - angle from north pole [radians]
   phi     - longitude angle [radians]

 EXAMPLES:
   
 COMMENTS:
   Calling syntax is same as pix2ang_ring and agrees to machine 
     precision. 
   This routine has somewhat better performance when called for the
     full sky than pix2ang_ring. 
   
 REVISION HISTORY:
   2003-Dec-06  Written by Douglas Finkbeiner, Princeton

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/healpix/dpf_pix2ang_ring.pro">$IDLUTILS_DIR/pro/healpix/dpf_pix2ang_ring.pro</a>)</strong></p>
<hr />
<h3 id="DPF_PSF_REJECT_CR_SINGLE_F">DPF_PSF_REJECT_CR_SINGLE()</h3>
<p><a href="#DPF_PIX2ANG_RING">[Previous Routine]</a></p>
<p><a href="#DPF_REJECT_CR_F">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   dpf_psf_reject_cr_single()

 PURPOSE:
   test a list of &quot;suspect&quot; pixels for cosmic rays (CRs)

 CALLING SEQUENCE:
   result=dpf_psf_reject_cr_single(im, gd, ivar, satmask, min_sigma, $
         c3fac, psfvals, ind0, neighbor=neighbor)

 INPUTS:
   im        - image to test
   gd        - array of &quot;good pixels&quot; to use (1=good)
   ivar      - inverse variance of image
   satmask   - saturated pixel mask (1=saturated)
   min_sigma - minimum value (in sigma) for condition 2
   c3fac     - consistency factor [in sigma] for condition 3
   psfvals   - values of psf at 1 pix and sqrt(2) pixels from center
   ind0      - index list of pixels to investigate

 OUTPUTS:
   result    - byte array of results, same length as ind0 (1=CR)

 OPTIONAL OUTPUTS:
   neighbor  - index list of neighbors of just-found CRs

 EXAMPLES:
   always (only) called by dpf_reject_cr

 COMMENTS:
   Algorithms designed by R Lupton and J. Gunn, implemented in C by Lupton,
    re-implemented by M. Blanton as reject_cr.
    Now completely rewritten by D. Finkbeiner as psf_reject_cr.
    see psf_reject_cr for more details.
   gd indicates which pixels may be safely used for interpolate and
    background determination.  gd gets updated as CRs are zapped.

 REVISION HISTORY:
   2005-Mar-09  Written by Douglas Finkbeiner, Princeton

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/image/dpf_reject_cr.pro">$IDLUTILS_DIR/pro/image/dpf_reject_cr.pro</a>)</strong></p>
<hr />
<h3 id="DPF_REJECT_CR_F">DPF_REJECT_CR()</h3>
<p><a href="#DPF_PSF_REJECT_CR_SINGLE_F">[Previous Routine]</a></p>
<p><a href="#DPROPDISDZ">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
NAME:
  dpf_reject_cr()
PURPOSE:
  An old Cosmic Ray rejection routine.

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/image/dpf_reject_cr.pro">$IDLUTILS_DIR/pro/image/dpf_reject_cr.pro</a>)</strong></p>
<hr />
<h3 id="DPROPDISDZ">DPROPDISDZ</h3>
<p><a href="#DPF_REJECT_CR_F">[Previous Routine]</a></p>
<p><a href="#DPROPMOTDISDZ">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   dpropdisdz
 PURPOSE:
   Compute differential proper line-of-sight distances (for c/H_0=1).
 CALLING SEQUENCE:
   dDdz= dpropdisdz(z,OmegaM,OmegaL)
 INPUTS:
   z       - redshift or vector of redshifts
   OmegaM  - Omega-matter at z=0
   OmegaL  - Omega-Lambda at z=0
 OPTIONAL INPUTS:
 KEYWORDS
 OUTPUTS:
   differential proper distance DD/dz in units of the Hubble length c/H_0
 COMMENTS:
 BUGS:
   May not work for pathological parts of the OmegaM-OmegaL plane.
 EXAMPLES:
 PROCEDURES CALLED:
   dcomdisdz()
 REVISION HISTORY:
   25-Jun-2000  Written by Hogg (IAS)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/cosmography/dpropdisdz.pro">$IDLUTILS_DIR/pro/cosmography/dpropdisdz.pro</a>)</strong></p>
<hr />
<h3 id="DPROPMOTDISDZ">DPROPMOTDISDZ</h3>
<p><a href="#DPROPDISDZ">[Previous Routine]</a></p>
<p><a href="#DSMOOTH">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   dpropmotdisdz
 PURPOSE:
   Compute differential proper motion distance dD/dz for c=H_0=1.
 CALLING SEQUENCE:
   dDdz= dpropmotdisdz(z,OmegaM,OmegaL)
 INPUTS:
   z       - redshift or vector of redshifts
   OmegaM  - Omega-matter at z=0
   OmegaL  - Omega-Lambda at z=0
 OPTIONAL INPUTS:
 KEYWORDS
 OUTPUTS:
   differential proper motion distance in units of the Hubble length c/H_0
 COMMENTS:
 BUGS:
   May not work for pathological parts of the OmegaM-OmegaL plane.
 EXAMPLES:
 PROCEDURES CALLED:
   propmotdis
 REVISION HISTORY:
   2001-Mar-12  Written by Hogg (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/cosmography/dpropmotdisdz.pro">$IDLUTILS_DIR/pro/cosmography/dpropmotdisdz.pro</a>)</strong></p>
<hr />
<h3 id="DSMOOTH">DSMOOTH</h3>
<p><a href="#DPROPMOTDISDZ">[Previous Routine]</a></p>
<p><a href="#DUSTPLOT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   dsmooth
 PURPOSE:
   smooth with a simple gaussian
 CALLING SEQUENCE:
   smooth= dsmooth(image, sigma)
 INPUTS:
   image - [nx, ny] input image
   sigma - gaussian sigma
 OUTPUTS:
   smooth - [nx, ny] smooth image
 REVISION HISTORY:
   11-Jan-2006  Written by Blanton, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/dimage/dsmooth.pro">$IDLUTILS_DIR/pro/dimage/dsmooth.pro</a>)</strong></p>
<hr />
<h3 id="DUSTPLOT">DUSTPLOT</h3>
<p><a href="#DSMOOTH">[Previous Routine]</a></p>
<p><a href="#DUST_GETMAP">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   dustplot

 PURPOSE:
   Make a PostScript plot of the dust maps in a rectalinear projection.

 CALLING SEQUENCE:
   dustplot

 INPUTS:

 OPTIONAL INPUTS:
   latrange:   Latitude range; default to [-30,30]
   lonrange:   Longitude range; default to [-30,30]
   rangestr:   3-element string with plot limits and units;
               default to ['0.0', '1.0', 'A(B)']
               Valid entries for RANGESTR[2] are:
                  A(B)
                  A(I)
                  E(B-V)
                  I100
                  T
   csys:       Coordinate system:
               'gal': Galactic coordinates (default)
               'equ1950': Equatorial coordinates, epoch 1995
               'equ2000': Equatorial coordinates, epoch 2000
               'ecl': Ecliptic coordinates
   tspace:     Tick spacing for grid overlay; default to 5 deg
   pixpdeg:    Pixels per degree; default to 500 pixels across the image
   filename:   Output file name; default to &quot;test.ps&quot;
   encap:      If set, then produce encapsulated PostScript
   ctnum:      Color table number; default to 23 (Purple-Red + Stripes)
   invert:     Invert color map
   colorbar:   Plot color bar on bottom of page
   nonames:    If set, then disable the title string on the top,
               and our names on the bottom

 OUTPUTS:

 PROCEDURES CALLED:
   adstring()
   djs_laxisgen()
   dust_getval()
   euler
   jprecess

 REVISION HISTORY:
   Written D. Schlegel, 18 June 1999, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/dust/dustplot.pro">$IDLUTILS_DIR/pro/dust/dustplot.pro</a>)</strong></p>
<hr />
<h3 id="DUST_GETMAP">DUST_GETMAP</h3>
<p><a href="#DUSTPLOT">[Previous Routine]</a></p>
<p><a href="#DUST_GETVAL">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   dust_getmap

 PURPOSE:
   Reproject dust map to projection described by a FITS header

 CALLING SEQUENCE:
   image=dust_getmap(hdr, mapname, ipath=, bhpath=)

 INPUTS:
   hdr      - FITS astrometric header.  Must be parsed properly by extast
   mapname  - one of the following (case insensitive)
               BH  : Burstein-Heiles 4*E(B-V)
               I100: 100-micron map in MJy/Sr
               X   : X-map, temperature-correction factor
               T   : Temperature map in degrees Kelvin for n=2 emissivity
               IX  : Temperature-corrected 100-micron map in MJy/Sr
               Ebv : E(B-V) in magnitudes
               mask: 8-bit mask
   
 OPTIONAL INPUTS:
   ipath    - path for dust maps; default is $DUST_DIR/maps
   bhpath   - path name for BH maps
 
 OUTPUTS:
   image    - reprojected dust/IRAS/whatever image
   
 EXAMPLES:
   To read in an halpha map, then generate a dust map in the same
    projection: 

   halpha = readfits('Halpha.fits', hdr)
   dust   = dust_getmap(hdr, 'Ebv')

 COMMENTS:
   Params ipath and bhpath are passed to dust_getval. 
   Keywords /noloop and /interp are always set. 
   The other keywords of dust_getval have no meaning in this
     context. 
   
 REVISION HISTORY:
   2003-Jan-30   Written by Douglas Finkbeiner, Princeton
   2003-Feb-07   Precess headers if necessary
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/dust/dust_getmap.pro">$IDLUTILS_DIR/pro/dust/dust_getmap.pro</a>)</strong></p>
<hr />
<h3 id="DUST_GETVAL">DUST_GETVAL</h3>
<p><a href="#DUST_GETMAP">[Previous Routine]</a></p>
<p><a href="#DUST_INTFILTER">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   dust_getval

 PURPOSE:
   Read values from BH files or our dust maps.

 CALLING SEQUENCE:
   value = dust_getval( [ gall, galb, infile=infile, skipline=skipline, $
    outfile=outfile, map=map, interp=interp, noloop=noloop, verbose=verbose, $
    ipath=ipath, bhpath=bhpath ] )

 INPUTS:

 OPTIONAL INPUTS:
   gall:       Galactic longitude(s) in degrees
   galb:       Galactic latitude(s) in degrees
   map:        Set to one of the following (default is 'Ebv'):
               BH  : Burstein-Heiles 4*E(B-V)
               I100: 100-micron map in MJy/Sr
               X   : X-map, temperature-correction factor
               T   : Temperature map in degrees Kelvin for n=2 emissivity
               IX  : Temperature-corrected 100-micron map in MJy/Sr
               Ebv : E(B-V) in magnitudes
               mask: 8-bit mask
   infile:     If set, then read GALL and GALB from this file
   skipline:   Number of lines to skip at the top of the input file
   outfile:    If set, then write results to this file
   interp:     Set this flag to return a linearly interpolated value
               from the 4 nearest pixels.
               This is disabled if map='mask'.
   noloop:     Set this flag to read all values at once without a FOR loop.
               This is a faster option for reading a large number of values,
               but requires reading an entire FITS image into memory.
               (Actually, the smallest possible sub-image is read.)
   verbose:    Set this flag for verbose output, printing pixel coordinates
               and map values.  Setting NOLOOP disables this option.
   ipath:      Path name for dust maps; default to path set by the
               environment variable $DUST_DIR/maps, or to the current
               directory.
   bhpath:     Path name for BH maps

 OUTPUTS:
   value:      Value(s) from Lambert-projection maps.

 COMMENTS:
   These data are based upon the following paper:
   &quot;Maps of Dust IR Emission for Use in Estimation of Reddening
   and CMBR Foregrounds&quot;, Schlegel, D., Finkbeiner, D., &amp; Davis, M.,
   ApJ, 1998, 500, 525.

   Either the coordinates GALL and GALB must be set, or these coordinates
   must exist in the file INFILE.  Output is written to the variable VALUE
   and/or the file OUTFILE.

 EXAMPLES:
   Read the reddening value E(B-V) at Galactic (l,b)=(12,+34.5), 
   interpolating from the nearest 4 pixels, and return result in VALUE.
   &gt; value = dust_getval(12, 34.5, /interp)

   Read the temperature map at positions listed in the file 'dave.in',
   interpolating from the nearest 4 pixels, and output to file 'dave.out'.
   The path name for the temperature maps is '/u/schlegel/'.
   &gt; value = dust_getval(map='T', ipath='/u/schlegel/', /interp, $
     infile='dave.in', outfile='dave.out')

 DATA FILES FOR SFD MAPS:
   SFD_dust_4096_ngp.fits
   SFD_dust_4096_sgp.fits
   SFD_i100_4096_ngp.fits
   SFD_i100_4096_sgp.fits
   SFD_mask_4096_ngp.fits
   SFD_mask_4096_sgp.fits
   SFD_temp_ngp.fits
   SFD_temp_sgp.fits
   SFD_xmap_ngp.fits
   SFD_xmap_sgp.fits

 DATA FILES FOR BH MAPS:
   hinorth.dat
   hisouth.dat
   rednorth.dat
   redsouth.dat

 PROCEDURES CALLED:
   bh_rdfort()
   djs_int2bin()
   readcol
   wcs_getval()

 REVISION HISTORY:
   25-Sep-1997  Written by David Schlegel, Durham
   19-Jan-1998  DJS - Modified for general release.
   30-Mar-1998  DJS - Modified to read SGP mask file for b&lt;0, since it was
                incorrectly reading the NGP mask.
   19-May-1998  DJS - Subscripts modified to IDL 5 convention.
   30-Jul-1998  DJS - Added default file path names for any users at Princeton
                or at Berkeley.
   18-Mar-1999  DJS - Allow call with GALL=0 or GALB=0.
   31-Mar-1999  DJS - Modified to use wcs_getval() instead of lambert_getval()
   30-Jan-2007  DPF - New endian criterion for default bhpath
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/dust/dust_getval.pro">$IDLUTILS_DIR/pro/dust/dust_getval.pro</a>)</strong></p>
<hr />
<h3 id="DUST_INTFILTER">DUST_INTFILTER</h3>
<p><a href="#DUST_GETVAL">[Previous Routine]</a></p>
<p><a href="#DUST_SDSSFILTER">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   dust_intfilter

 PURPOSE:
   Integrate the extinction curve over a given source function + filter curve.

 CALLING SEQUENCE:
   avec = dust_intfilter( ixval, ffilename=, sfilename=, [ atmfilename=, $
    rv=, anorm=, dlam=, zsource=, /debug  ] )

 INPUTS:
   ixval      - Temperature-corrected 100-micron flux (IX) from SFD maps,
                in MJy/sr (scalar or vector).

 REQUIRED KEYWORDS:
   ffilename  - ASCII file with wavelengths in Ang (1st column) and throughput
                (2nd column) for the filter response curve.
   sfilename  - ASCII file with wavelengths in Ang (1st column) and flux in
                f_lambda (2nd column) for the source function.  Note that
                since we assume f_lambda (flux/Ang), we multiply this
                by one power of the wavelength to convert to a flux in
                photon number per Angstrom.

 OPTIONAL KEYWORDS:
   atmfilename- ASCII file with wavelengths in Ang (1st column) and magnitudes
                of atmospheric extinction (2nd column).  If specified,
                then the filter response is multiplied by 10^(-ATM/2.5).
   rv         - Extinction curve parameter R_V; default to 3.1.
   anorm      - Normalization factor for multiplying IX to obtain
                extinction at 1 micron; default to SFD normalization
                of (1.319)*(0.0184) mag/(MJy/sr).
   dlam       - Spacing of numeric integration in Angstroms; default
                to 1 Ang.
   zsource    - Redshift of source; default to 0.
   debug      - If set, then make debugging plots with SPLOT.

 OUTPUTS:
   avec       - Extinction in magnitudes (same dimensions as IXVAL).

 COMMENTS:
   The Galactic extinction curve is that from O'Donnell (1994)
   and Cardelli, Clayton &amp; Mathis (1989).

   The integrations (and optional debugging plots) are limited to
   the wavelength range within which the filter curve is positive-valued.

   The filter curve, source function, and atmospheric extinction curve
   are cached between calls.  If the same file is specified on a
   subsequent call, then those cached values are used.

 PROCEDURES CALLED:
   ext_odonnell()
   readcol

 DATA FILES:

 REVISION HISTORY:
   2002-12-01  Written by D. Schlegel, Princeton
   2012-03-08  Changed numlines() to FILE_LINES()
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/dust/dust_intfilter.pro">$IDLUTILS_DIR/pro/dust/dust_intfilter.pro</a>)</strong></p>
<hr />
<h3 id="DUST_SDSSFILTER">DUST_SDSSFILTER</h3>
<p><a href="#DUST_INTFILTER">[Previous Routine]</a></p>
<p><a href="#EFC2D">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   dust_sdssfilter

 PURPOSE:
   Integrate the extinction curve over a selection of source fuctions and
   the SDSS filters.

 CALLING SEQUENCE:
   aval = dust_sdssfilter( ixval, [ source=, zsource=, rv=, anorm=, dlam=, /debug ] )

 INPUTS:
   ixval      - Temperature-corrected 100-micron flux (IX) from SFD maps,
                in MJy/sr [NDATA].

 OPTIONAL INPUTS:
   source     - Source function.  Options are:
                  'Fstar': Hot F-star model from Kurucz at T_eff=7000K
                  'Galaxy': SDSS mean galaxy spectrum
                  'QSO': SDSS mean QSO spectrum
                Default to 'Galaxy'.
   zsource    - Redshift of source; default to 0.
   rv         - Extinction curve parameter R_V; default to 3.1.
   anorm      - Normalization factor for multiplying IX to obtain
                extinction at 1 micron; default to SFD normalization
                of (1.319)*(0.0184) mag/(MJy/sr).
   dlam       - Spacing of numeric integration in Angstroms; default
                to 1 Ang.
   debug      - If set, then make debugging plots with SPLOT.
   old        - If set, then use the original SDSS filters curves
                used for the SFD paper.

 OUTPUTS:
   avec       - Extinction in magnitudes [5,NDATA].

 COMMENTS:

 EXAMPLES:
   Given a set of Galactic coordinates L,B, evaluate the SFD-predicted
   extinction in the 5 SDSS filters for a source with the spectrum of an F star:
     IDL&gt; aval = dust_sdssfilter(dust_getval(l, b, map='IX', /interp), source='Fstar')

   Compare the predicted extinction at a given dust value of IX=10. for two
   different values of R_V (5.5 vs. 3.1):
     IDL&gt; print, dust_sdssfilter(10., rv=5.5) / dust_sdssfilter(10.)

 PROCEDURES CALLED:
   dust_intfilter()
   mrdfits()
   sxpar()

 DATA FILES:
   $IDLUTILS_DIR/data/filters/kurucz_fstar.dat
   $IDLUTILS_DIR/data/filters/kpno_atmos.dat
   $IDLUTILS_DIR/data/filters/sdss_1994_u_noatm.dat
   $IDLUTILS_DIR/data/filters/sdss_1994_g_noatm.dat
   $IDLUTILS_DIR/data/filters/sdss_1994_r_noatm.dat
   $IDLUTILS_DIR/data/filters/sdss_1994_i_noatm.dat
   $IDLUTILS_DIR/data/filters/sdss_1994_z_noatm.dat
   $IDLUTILS_DIR/data/filters/sdss_jun2001_u_atm.dat
   $IDLUTILS_DIR/data/filters/sdss_jun2001_g_atm.dat
   $IDLUTILS_DIR/data/filters/sdss_jun2001_r_atm.dat
   $IDLUTILS_DIR/data/filters/sdss_jun2001_i_atm.dat
   $IDLUTILS_DIR/data/filters/sdss_jun2001_z_atm.dat
   $IDLUTILS_DIR/data/filters/sdss_meangalaxy_52223.dat

 DATA FILES:

 REVISION HISTORY:
   01-Dec-2002  Written by D. Schlegel, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/dust/dust_sdssfilter.pro">$IDLUTILS_DIR/pro/dust/dust_sdssfilter.pro</a>)</strong></p>
<hr />
<h3 id="EFC2D">EFC2D</h3>
<p><a href="#DUST_SDSSFILTER">[Previous Routine]</a></p>
<p><a href="#EFCMN">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   efc2d

 PURPOSE:
   Calculate a B-spline in the least-squares sense 
     based on two variables: x which is sorted and spans a large range
				  where bkpts are required
  		and 	      y which can be described with a low order
				  polynomial	

 CALLING SEQUENCE:
   
   coeff = efc2d(x, y, z, invsig, npoly, nbkptord, fullbkpt)

 INPUTS:
   x          - data x values
   y          - data y values
   z          - data z values
   invsig     - inverse error array of y
   npoly      - Order of polynomial (as a function of y)
   nbkptord   - Order of b-splines (4 is cubic)
   fullbkpt   - Breakpoint vector returned by efc

 RETURNS:
   coeff      - B-spline coefficients calculated by efc

 OUTPUTS:

 OPTIONAL KEYWORDS:

 OPTIONAL OUTPUTS:

 COMMENTS:
	This IDL proc is an extension of efcmn

 EXAMPLES:

   x = findgen(100)
   y = randomu(200, 100, /normal)
   zmodel = 10.0*sin(x/10.0) + y
   z = zmodel + randomu(100,100,/normal)
   invsig = fltarr(100) + 1.0
   fullbkpt = [-3.0,-2.0,-1.0,findgen(11)*10.0,101.0,102.0,103.0]
   npoly = 2L
   nbkptord = 4L
   coeff = efc2d(x, y, z, invsig, npoly, nbkptord, fullbkpt)

   zfit = bvalu2d(x, y, fullbkpt, coeff)


 PROCEDURES CALLED:

   efc_idl in src/slatec/idlwrapper.c
         which wraps to efc.o in libslatecidl.so

 REVISION HISTORY:
   10-Mar-2000 Written by Scott Burles, FNAL
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/slatec/efc2d.pro">$IDLUTILS_DIR/pro/slatec/efc2d.pro</a>)</strong></p>
<hr />
<h3 id="EFCMN">EFCMN</h3>
<p><a href="#EFC2D">[Previous Routine]</a></p>
<p><a href="#EMBED_STAMP">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   efcmn

 PURPOSE:
   Calculate a B-spline in the least-squares sense

 CALLING SEQUENCE:
   
   coeff = efcmn(x, y, invsig, nord, fullbkpt)

 INPUTS:
   x          - data x values
   y          - data y values
   invsig     - inverse error array of y
   nord       - Order of b-splines (default 4: cubic)
   fullbkpt       - Breakpoint vector returned by efc

 RETURNS:
   coeff      - B-spline coefficients calculated by efc

 OUTPUTS:

 OPTIONAL KEYWORDS:

 OPTIONAL OUTPUTS:

 COMMENTS:
	This IDL proc mimics efc.f

 EXAMPLES:

   x = findgen(100)
   y = randomu(100,100)
   invsig = fltarr(100) + 1.0
   fullbkpt = [-3.0,-2.0,-1.0,findgen(12)*10.0,101.0,102.0,103.0]
   nord = 4L

   coeff = efcmn(x, y, invsig, nord, fullbkpt)

   xfit = findgen(10)*10.0
   yfit = slatec_bvalu(xfit, fullbkpt, coeff)


 PROCEDURES CALLED:

   efc_idl in src/slatec/idlwrapper.c
         which wraps to efc.o in libslatecidl.so

 REVISION HISTORY:
   10-Mar-2000 Written by Scott Burles, FNAL
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/slatec/efcmn.pro">$IDLUTILS_DIR/pro/slatec/efcmn.pro</a>)</strong></p>
<hr />
<h3 id="EMBED_STAMP">EMBED_STAMP</h3>
<p><a href="#EFCMN">[Previous Routine]</a></p>
<p><a href="#EM_PCA">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   embed_stamp
 PURPOSE:
   Add to one image the parts which are overlapped by a second image 
 CALLING SEQUENCE:
   embed_stamp,full_image,stamp_image,xlo,ylo
 INPUTS:
   full_image - [full_nx, full_ny] image to add to
   stamp_image - [stamp_nx, stamp_ny] image to add by
   xlo, ylo - position in full_image of lower left corner of lower left
              pixel of stamp
 OUTPUTS:
   full_image - resulting image
 REVISION HISTORY:
   2003-01-20  Written - Blanton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/image/embed_stamp.pro">$IDLUTILS_DIR/pro/image/embed_stamp.pro</a>)</strong></p>
<hr />
<h3 id="EM_PCA">EM_PCA</h3>
<p><a href="#EMBED_STAMP">[Previous Routine]</a></p>
<p><a href="#EM_PCA_SPARSE_MATRIX">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
    em_pca
 PURPOSE:
    Perform E-M PCA to get first k principal components
 DESCRIPTION:
    Uses Sam Roweis' Expectation Maximization version of PCA to
    efficiently find the first k principal components for a
    distribution in p (&gt;k) dimensions. The procedure guesses an
    initial set of eigenvectors (stored the in [p,k] dimensional
    matrix &quot;eigenvec&quot;) and applies the following iteration to the
    [p,N] dimensional &quot;data&quot;:

         hidden= ( eigenvec^T . eigenvec )^{-1} . eigenvec^T . data
         eigenvec= data . hidden^T . (hidden . hidden^T)^{-1}

    From:
    Neural Information Processing Systems 10 (NIPS'97) pp.626-632
    available at:
    http://www.cs.toronto.edu/~roweis/papers/empca.ps.gz
 CATEGORY:
    Mathematical
 CALLING SEQUENCE:
    em_pca, data, k, eigenvec, hidden [, tol=, maxiter=, niter=, /verbose]
 INPUTS:
    data - [p,N] data to be PCAed
    k - number of eigenvectors desired (&lt;p)
 OPTIONAL INPUT PARAMETERS:
    tol - tolerance of convergence (default 0.)
    maxiter - maximum number of iterations (default 20)
 KEYWORD PARAMETERS:
    /verbose - verbose output
    /nofix - don't do the final real PCA
 OUTPUTS:
    eigenvec - [p,k] matrix of k leading eigenvectors
    hidden - [k, N] matrix of &quot;hidden&quot; variables (the lower dimensional
             representation of the data)
 OPTIONAL OUTPUTS:
    niter - number of iterations used
 COMMON BLOCKS:
 SIDE EFFECTS:
 BUGS:
    Somewhat untested.
 RESTRICTIONS:
    Does not implement Sam's Sensible-PCA procedure
 PROCEDURE:
 MODIFICATION HISTORY:
    2003-01-26 - Written by Michael Blanton (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/em_pca.pro">$IDLUTILS_DIR/pro/math/em_pca.pro</a>)</strong></p>
<hr />
<h3 id="EM_PCA_SPARSE_MATRIX">EM_PCA_SPARSE_MATRIX</h3>
<p><a href="#EM_PCA">[Previous Routine]</a></p>
<p><a href="#EQ2CSURVEY">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
    em_pca_sparse_matrix
 PURPOSE:
    Perform E-M PCA to get first k principal components of large sparse matrix
 DESCRIPTION:
    Uses Sam Roweis's algorithm (described in em_pca.pro in detail)
    but takes an initial sparse matrix rather than a data set as
    input. (in the lle_sm format)
 CATEGORY:
    Mathematical
 CALLING SEQUENCE:
    em_pca_sparse_matrix, matrix, k, eigenvec, hidden [, tol=, $
       maxiter=, niter=, /verbose]
 INPUTS:
    matrix - sparse matrix to be PCAd
    k - number of eigenvectors desired (&lt;p)
 OPTIONAL INPUT PARAMETERS:
    tol - tolerance of convergence (default 0.)
    maxiter - maximum number of iterations (default 20)
 KEYWORD PARAMETERS:
    /verbose - verbose output
    /nofix - don't do the final real PCA
 OUTPUTS:
    eigenvec - [p,k] matrix of k leading eigenvectors
 OPTIONAL OUTPUTS:
    niter - number of iterations used
 COMMON BLOCKS:
 SIDE EFFECTS:
 BUGS:
    not completed yet
 RESTRICTIONS:
    Does not implement Sam's Sensible-PCA procedure
 PROCEDURE:
 MODIFICATION HISTORY:
    2003-01-26 - Written by Michael Blanton (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/em_pca_sparse_matrix.pro">$IDLUTILS_DIR/pro/math/em_pca_sparse_matrix.pro</a>)</strong></p>
<hr />
<h3 id="EQ2CSURVEY">EQ2CSURVEY</h3>
<p><a href="#EM_PCA_SPARSE_MATRIX">[Previous Routine]</a></p>
<p><a href="#ETALAMBDA_TO_RADEC">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>

 NAME:
    EQ2CSURVEY
       
 PURPOSE:
    Convert from ra, dec to the corrected clambda, ceta 
    SDSS survey coordinate system.  It is corrected so that the
    longitude eta ranges from [-180.0, 180.0] and the latitude
    lambda ranges from [-90.0,90.0].  The standard lambda/eta 
    both range from [-180.0,180.0] which doesn't make sense.
    NOTE: lambda is often referred to as longitude but this
    is incorrect since it has poles at [-90,90]

 CALLING SEQUENCE:
    eq2csurvey, ra, dec, clambda, ceta

 INPUTS: 
    ra: Equatorial latitude in degrees 
    dec: Equatorial longitude in degrees

 OUTPUTS: 
    clambda: Corrected Survey longitude (actually lattitude) in degrees
    ceta: Corrected Survey latitude (actually logitude) in degrees

 REVISION HISTORY:
    Written: 26-Sep-2002  Erin Scott Sheldon
	 2009-06-05: Copied into idlutils from sdssidl.  
		See http://code.google.com/p/sdssidl/
                                      
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/coord/eq2csurvey.pro">$IDLUTILS_DIR/pro/coord/eq2csurvey.pro</a>)</strong></p>
<hr />
<h3 id="ETALAMBDA_TO_RADEC">ETALAMBDA_TO_RADEC</h3>
<p><a href="#EQ2CSURVEY">[Previous Routine]</a></p>
<p><a href="#ETA_TO_STRIPE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   etalambda_to_radec
 PURPOSE:
   convert from eta, lambda (SDSS survey coordinates) to RA, Dec
 CALLING SEQUENCE:
   etalambda_to_radec, eta,lambda,ra,dec
 INPUTS:
   eta     SDSS survey coordinate eta (deg)
   lambda  SDSS survey coordinate lambda (deg)
 OPTIONAL OUTPUTS:
   ra      RA (deg), J2000
   dec     Dec (deg), J2000
 BUGS:
   Location of the survey center is hard-wired, not read from astrotools.
 REVISION HISTORY:
   2001-Jul-21  written by Hogg (NYU)
   2002-Oct-04  modified by Blanton (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/coord/etalambda_to_radec.pro">$IDLUTILS_DIR/pro/coord/etalambda_to_radec.pro</a>)</strong></p>
<hr />
<h3 id="ETA_TO_STRIPE">ETA_TO_STRIPE</h3>
<p><a href="#ETALAMBDA_TO_RADEC">[Previous Routine]</a></p>
<p><a href="#EULER_2000">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   eta_to_stripe
 PURPOSE:
   find the stripe which an eta value is in; hardwired to what astrotools 
   v5_6 does; except it uses lambda to deal with southern stripes
 CALLING SEQUENCE:
   etalambda_to_stripe, eta, stripe
 INPUTS:
   eta      value of eta (survey lat) in deg
   lambda   value of lambda (survey long) in deg
 OUTPUTS:
   stripe   Survey Stripe #
 BUGS:
   Location of the survey center is hard-wired, not read from astrotools.
 REVISION HISTORY:
   2002-Feb-20  written by Blanton (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/coord/eta_to_stripe.pro">$IDLUTILS_DIR/pro/coord/eta_to_stripe.pro</a>)</strong></p>
<hr />
<h3 id="EULER_2000">EULER_2000</h3>
<p><a href="#ETA_TO_STRIPE">[Previous Routine]</a></p>
<p><a href="#EVOLVE_ELECTRON_SPECTRUM">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
     EULER_2000
 PURPOSE:
     Transform between Galactic, celestial, and ecliptic coordinates.
 EXPLANATION:
     Use the procedure ASTRO to use this routine interactively

 CALLING SEQUENCE:
      EULER_2000, AI, BI, AO, BO, [ SELECT, /FK4 ] 

 INPUTS:
       AI - Input Longitude in DEGREES, scalar or vector.  If only two 
               parameters are supplied, then  AI and BI will be modified to 
               contain the output longitude and latitude.
       BI - Input Latitude in DEGREES

 OPTIONAL INPUT:
       SELECT - Integer (1-6) specifying type of coordinate transformation.  

      SELECT   From          To        |   SELECT      From            To
       1     RA-Dec (2000)  Galactic   |     4       Ecliptic      RA-Dec    
       2     Galactic       RA-DEC     |     5       Ecliptic      Galactic  
       3     RA-Dec         Ecliptic   |     6       Galactic      Ecliptic  

      If omitted, program will prompt for the value of SELECT
      Celestial coordinates (RA, Dec) should be given in equinox J2000 
      unless the /FK4 keyword is set.
 OUTPUTS:
       AO - Output Longitude in DEGREES
       BO - Output Latitude in DEGREES

 INPUT KEYWORD:
       /FK4 - If this keyword is set and non-zero, then input and output 
             celestial and ecliptic coordinates should be given in equinox 
             B1950.

 NOTES:
       EULER was changed in December 1998 to use J2000 coordinates as the 
       default, ** and may be incompatible with earlier versions***.
 REVISION HISTORY:
       Written W. Landsman,  February 1987
       Adapted from Fortran by Daryl Yentis NRL
       Converted to IDL V5.0   W. Landsman   September 1997
       Made J2000 the default, added /FK4 keyword  W. Landsman December 1998
       Renamed to euler_2000.pro by D. Finkbeiner 15 Apr 1999
       -------------------
       Memory managment improved 16 April 1999 - D. Finkbeiner. 
        - now makes heavy use of &quot;temporary&quot; function to deallocate
          arrays
        - arguments of atan() are now floats, since atan is the
          limiting factor on memory usage, and numerical precision is
          not such a big deal for atan. 
        - These changes reduce memory usage by 58%, but cause
          differences of up to .03 arcsec relative to the standard
          version of euler.  If you are interested in higher
          precision than this, DO NOT USE THIS ROUTINE!
       -------------------
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/coord/euler_2000_fast.pro">$IDLUTILS_DIR/pro/coord/euler_2000_fast.pro</a>)</strong></p>
<hr />
<h3 id="EVOLVE_ELECTRON_SPECTRUM">EVOLVE_ELECTRON_SPECTRUM</h3>
<p><a href="#EULER_2000">[Previous Routine]</a></p>
<p><a href="#EVOLVE_POWERLAW_ELECTRONS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   evolve_electron_spectrum

 PURPOSE:
   Evolve an initial electron spectrum to a later time

 CALLING SEQUENCE:
   spec = evolve_electron_spectrum(logE, initspec, logEout, time)

 INPUTS:
   logE     - log10 input energy bins [GeV]
   initspec - initial spectrum, E^2 dN/dE [erg]
   logEout  - log10 output energy bins [GeV]
   time     - time since t0 [years]

 OUTPUTS:
   spec     - evolved spectrum, E^2 dN/dE [erg]

 EXAMPLES:
   see evolve_powerlaw_electrons.pro

 COMMENTS:
   Energy is log10 but spectrum is linear!!!

 REVISION HISTORY:
   2007-Feb-06 - Taken from grb_electron_spec.pro 
                           by Douglas Finkbeiner, CfA

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/physics/evolve_electron_spectrum.pro">$IDLUTILS_DIR/pro/physics/evolve_electron_spectrum.pro</a>)</strong></p>
<hr />
<h3 id="EVOLVE_POWERLAW_ELECTRONS">EVOLVE_POWERLAW_ELECTRONS</h3>
<p><a href="#EVOLVE_ELECTRON_SPECTRUM">[Previous Routine]</a></p>
<p><a href="#EXACT_PHOTFRAC">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   evolve_powerlaw_electrons

 PURPOSE:
   Evolve a power-law CR electron spectrum to a later time

 CALLING SEQUENCE:
   spec = evolve_powerlaw_electrons(ind, time=time, Ebin=Ebin)

 INPUTS:
   ind   - power law index
   time  - time [yr] after injection at which to evaluate spectrum

 OUTPUTS:
   Ebin  - Energy bins [GeV]
   spec  - the evolved electron spectrum, in E^2 dN/dE [erg]
   
 EXAMPLES:
   
 COMMENTS:
   
 REVISION HISTORY:
   2007-Feb-06  Written by Douglas Finkbeiner, CfA

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/physics/evolve_powerlaw_electrons.pro">$IDLUTILS_DIR/pro/physics/evolve_powerlaw_electrons.pro</a>)</strong></p>
<hr />
<h3 id="EXACT_PHOTFRAC">EXACT_PHOTFRAC</h3>
<p><a href="#EVOLVE_POWERLAW_ELECTRONS">[Previous Routine]</a></p>
<p><a href="#EXTRACT_PROFMEAN">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   exact_photfrac

 PURPOSE:
   Create list of contribution of pixels to circular or annular aperture

 CALLING SEQUENCE:
   exact_photfrac, xcen, ycen, radius [, fracs=, xdimen=, ydimen=, ]
           pixnum=, xpixnum=, ypixnum= ]

 INPUTS:
   xcen - X center(s) (LONG) 
   ycen - Y center(s) (LONG) 
   radius - radius of aperture (if 2-element array, inner and outer
            radii of annulus) 

 OPTIONAL INPUTS:
   xdimen - number of pixels upon a side to output [default - radius+1]
   ydimen - number of pixels upon a side to output [default - radius+1]
   safefactor - we set strictly to zero all pixels outside
                max(radius)*safefactor [default 1.2]

 OUTPUTS:
   fracs- contribution of each pixel to image
   pixnum - Pixel number, 0-indexed, for referencing array using one index.
   xPixNum - Pixel number in X, 0-indexed.
   yPixNum - Pixel number in Y, 0-indexed.

 COMMENTS:
   Uses Robert Lupton's Aperture Photometry scheme to measure seeing-
   and pixel-convolved aperture photometry in band-limited images.

   xcen and ycen MUST be integers. This simplifies the caching 
   of the weights considerably. Note that for band-limited images 
   (the only kind that this code works for) you can always sshift 
   the image to get the center of the object at the center of a 
   pixel (ie. an integer pixel number). 

 BUGS:

 PROCEDURES CALLED:

 REVISION HISTORY:
   Started - 22-Aug-2003 M. Blanton (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/image/exact_photfrac.pro">$IDLUTILS_DIR/pro/image/exact_photfrac.pro</a>)</strong></p>
<hr />
<h3 id="EXTRACT_PROFMEAN">EXTRACT_PROFMEAN</h3>
<p><a href="#EXACT_PHOTFRAC">[Previous Routine]</a></p>
<p><a href="#EXT_CCM">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   extract_profmean
 PURPOSE:
   Extract a photoesque radial profile
 CALLING SEQUENCE
   extract_profmean, image, center, profmean, proferr $
     [,profradius=profradius] [,invvar=invvar] 
 INPUTS:
   image       - [nx,ny] image
   center      - [2] center of extraction (LONG)
 OPTIONAL INPUTS:
   invvar      - [nx,ny] inverse variance image; default to unity
   profradius  - [nrad] defining profile, in pixels; default to PHOTO aps
 KEYWORDS:
 OUTPUTS:
   nprof         - number of &quot;good&quot; profmean values (based on image
                   size alone)
   profmean      - [nrad] annular fluxes
   profmean_ivar - [nrad] uncertainties
   qstokes       - if present, calculates Stokes Q parameter in each circle
                   (not within annuli)
   ustokes       - if present, calculates Stokes U parameter in each circle
                   (not within annuli)
 OPTIONAL INPUT/OUTPUTS:
   cache         - cache storing photfracs for re-use
 COMMENTS:
   Image must be centered on the center pixel. 
 DEPENDENCIES:
   idlutils
 BUGS:
 REVISION HISTORY:
   2002-09-04  Written - Blanton
   2002-09-12  Modified to use djsphot - Hogg
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/image/extract_profmean.pro">$IDLUTILS_DIR/pro/image/extract_profmean.pro</a>)</strong></p>
<hr />
<h3 id="EXT_CCM">EXT_CCM</h3>
<p><a href="#EXTRACT_PROFMEAN">[Previous Routine]</a></p>
<p><a href="#EXT_ODONNELL">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   ext_ccm

 PURPOSE:
   Return extinction curve from CCM (1989), defined in the wavelength
   range [1250,33333] Angstroms.

 CALLING SEQUENCE:
   Alam = ext_ccm( lambda, [ Rv ] )

 INPUTS:
   lambda:      Wavelength(s) in Angstroms

 OPTIONAL INPUTS:
   Rv:          Value of R_V; default to 3.1

 OUTPUTS:
   Alam:        Return value A(lambda)/A(V)

 COMMENTS:
   Reference is Cardelli, J.A., Clayton, G.C., &amp; Mathis, J.S. 1989,
   ApJ, 345, 245-256.

 PROCEDURES CALLED:

 REVISION HISTORY:
   Written D. Schlegel, 8 September 1997, Durham
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/dust/ext_ccm.pro">$IDLUTILS_DIR/pro/dust/ext_ccm.pro</a>)</strong></p>
<hr />
<h3 id="EXT_ODONNELL">EXT_ODONNELL</h3>
<p><a href="#EXT_CCM">[Previous Routine]</a></p>
<p><a href="#EX_MAX">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   ext_odonnell

 PURPOSE:
   Return extinction curve from Odonnell (1994), defined in the wavelength
   range [3030,9091] Angstroms.  Outside this range, use CCM (1989).

 CALLING SEQUENCE:
   Alam = ext_odonnell( lambda, [ Rv ] )

 INPUTS:
   lambda:      Wavelength(s) in Angstroms

 OPTIONAL INPUTS:
   Rv:          Value of R_V (scalar); default to 3.1

 OUTPUTS:
   Alam:        Return value A(lambda)/A(V)

 COMMENTS:
   Reference is O'Donnell, J. E. 1994, ApJ, 422, 158-163.

 PROCEDURES CALLED:
   ext_ccm()

 REVISION HISTORY:
   Written D. Schlegel, 8 September 1997, Durham
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/dust/ext_odonnell.pro">$IDLUTILS_DIR/pro/dust/ext_odonnell.pro</a>)</strong></p>
<hr />
<h3 id="EX_MAX">EX_MAX</h3>
<p><a href="#EXT_ODONNELL">[Previous Routine]</a></p>
<p><a href="#EX_MAX_PLOT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   ex_max
 PURPOSE:
   expectation-maximization iterative multi-gaussian fit to data
 INPUTS:
   weight      [N] array of data-point weights
   point       [d,N] array of data points - N vectors of dimension d
   amp         [M] array of gaussian amplitudes
   mean        [d,M] array of gaussian mean vectors
   var         [d,d,M] array of gaussian variance matrices
 OPTIONAL INPUTS:
   maxiterate  maximum number of iterations; default to 1000
   qa          name for QA plot PostScript file
   label       [d] array of QA plot axis labels; default 'x_i'
 OUTPUTS:
   amp         updated amplitudes
   mean        updated means
   var         updated variances
 OPTIONAL OUTPUTS:
   entropy     final entropy, relative to one-gaussian case
   probability [N,M] array of probabilities of point i in gaussian j
   exponent    [N,M] array of exponents for point i in gaussian j
 BUGS:
   Hogg is pretty sure that the &quot;probability&quot; calculation in the
   middle of the iteration is WRONG -- see in-code comments.
   Entropy calculation could be wrong; see in-code comments.
   Stopping condition is hard-wired.
 DEPENDENCIES:
   idlutils
 REVISION HISTORY:
   2001-Aug-06  written by Blanton and Hogg (NYU)
   2001-Oct-02  added data-point weights - Hogg
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/ex_max.pro">$IDLUTILS_DIR/pro/math/ex_max.pro</a>)</strong></p>
<hr />
<h3 id="EX_MAX_PLOT">EX_MAX_PLOT</h3>
<p><a href="#EX_MAX">[Previous Routine]</a></p>
<p><a href="#EX_MAX_PROBABILITY">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   ex_max_plot
 PURPOSE:
   plot ex_max outputs or other N-dimensional data sets
 INPUTS:
   weight       [N] array of data-point weights
   point        [d,N] array of data points - N vectors of dimension d
   amp          [M] array of gaussian amplitudes
   mean         [d,M] array of gaussian mean vectors
   var          [d,d,M] array of gaussian variance matrices
   psfilename   name for PostScript file; if no filename is given, then the
                  plots will simply be sent to the currently active device
 OPTIONAL INPUTS:
   nsig         number of sigma for half-width of each plot; default 5
   label        [d] array of axis labels; default 'x_i'
   contlevel    confidence levels for contouring; defaults in source code
   range        [2,d] array of plotting ranges
   textlabel    [q] vector of text labels
   textpos      [d,q] array of text label positions
   box          [2,d] array of coordinates for d-dimensional box
   xdims,ydims  indices of data dimensions to use on each x and y axis
   npix_x,npix_y  number of pixels in x and y dimensions of each panel
   sqrt         sqrt stretch on image
   log          logarithmic stretch on image
   axis_char_scale  size of characters on labels
   overpoints   [d,P] set of points to overplot a red box on each panel
   model_npix_factor  for gaussians, use this factor to scale down pixel size
   panellabels  label string for each panel (size of xdims, ydims arrays)
   quantfrac    vector of fractions at which to plot quantiles on conditional
                   panels
   default_font  font command to send to set font for plotting
   pthick       thickness of plot lines
   yrangefudge  fudge range on histograms (default 1.)
 KEYWORDS:
   nomodel      don't show model fits as greyscales or histograms
   nodata       don't show data as greyscales or histograms
   noellipse    don't show ellipses on 2-d plots
   bw           show ellipses in b/w
   conditional  plot the conditional distribution of y on x 
   nogreyscale  don't plot the greyscale
 OUTPUTS:
 OPTIONAL OUTPUTS:
   quantile     output array of quantile positions; read the source code
   quantneff    the effective number of data points contributing to the medians
   twodimages   set of all of the 2-dimensional projections 
                (doesn't save the gaussian model unless
                model_npix_factor==1)
 BUGS:
   Greyscales need work?
 DEPENDENCIES:
 REVISION HISTORY:
   2001-10-22  written - Hogg
   2002-03-22  many added features - Blanton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/ex_max_plot.pro">$IDLUTILS_DIR/pro/plot/ex_max_plot.pro</a>)</strong></p>
<hr />
<h3 id="EX_MAX_PROBABILITY">EX_MAX_PROBABILITY</h3>
<p><a href="#EX_MAX_PLOT">[Previous Routine]</a></p>
<p><a href="#FAC_FLUX2TEMP">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   ex_max_probability
 PURPOSE:
   Return probabilities given ex_max results
 INPUTS:
   point       [d,N] array of data points - N vectors of dimension d
   amp         [M] array of gaussian amplitudes
   mean        [d,M] array of gaussian mean vectors
   var         [d,d,M] array of gaussian variance matrices
 OPTIONAL INPUTS:
 OUTPUTS:
 OPTIONAL OUTPUTS:
   probability [N,M] array of probabilities of point i in gaussian j
 BUGS:
   should be called by ex_max for consistency (would involve
   including entropy calc here)
 DEPENDENCIES:
   idlutils
 REVISION HISTORY:
   2002-Nov-20  Blaton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/ex_max_probability.pro">$IDLUTILS_DIR/pro/math/ex_max_probability.pro</a>)</strong></p>
<hr />
<h3 id="FAC_FLUX2TEMP">FAC_FLUX2TEMP</h3>
<p><a href="#EX_MAX_PROBABILITY">[Previous Routine]</a></p>
<p><a href="#FAC_TEMP2FLUX">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   fac_flux2temp

 PURPOSE:
   Compute factor to convert from flux/sr to brightness temp

 CALLING SEQUENCE:
   fac_flux2temp, nu_ghz

 INPUTS:
   nu_ghz -    frequency in GHz

 OUTPUTS:
   &lt;value&gt; -   conversion factor (micro-K) / (MJy/sr)

 PROCEDURES CALLED:
   fac_temp2flux()

 COMMENTS:
   see fac_temp2flux.pro 
   We call fac_temp2flux so that these routines are the inverse of
   each other by construction. 

 REVISION HISTORY:
   Written by D. Finkbeiner, 10 March, 1999 - Berkeley
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/dust/fac_flux2temp.pro">$IDLUTILS_DIR/pro/dust/fac_flux2temp.pro</a>)</strong></p>
<hr />
<h3 id="FAC_TEMP2FLUX">FAC_TEMP2FLUX</h3>
<p><a href="#FAC_FLUX2TEMP">[Previous Routine]</a></p>
<p><a href="#FASTCONV">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   fac_temp2flux

 PURPOSE:
   Compute factor to convert from brightness temp to flux/sr

 CALLING SEQUENCE:
   fac_temp2flux, nu

 INPUTS:
   nu_ghz -    frequency in GHz

 OUTPUTS:
   &lt;value&gt; -   conversion factor (MJy/sr) / (micro-K)

 PROCEDURES CALLED:
   &lt;none&gt;

 COMMENTS:

 REVISION HISTORY:
   Written by D. Finkbeiner, 10 March, 1999 - Berkeley
   Modified 16 March, 1999 to handle integer nu_ghz argument - DPF
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/dust/fac_temp2flux.pro">$IDLUTILS_DIR/pro/dust/fac_temp2flux.pro</a>)</strong></p>
<hr />
<h3 id="FASTCONV">FASTCONV</h3>
<p><a href="#FAC_TEMP2FLUX">[Previous Routine]</a></p>
<p><a href="#FCHEBYSHEV">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
    FASTCONV
 PURPOSE:
    Perform a convolution faster by binning both the image and
    kernel down by a factor of BINFACTOR. 

 CALLING SEQUENCE:
     Fastcon, image, kernel, binfactor
 INPUTS:
     image - input array to be convolved
     kernel - array to convolve image with - e.g. a Gaussian
     binfactor - factor to bin down by (must divide both image and 
                 kernel dimensions)
 OUTPUTS:


 REVISION HISTORY:
   Written D. Finkbeiner, 3 Sept 96
 2  May 1997     Add nodisplay keyword
 3  May 1997     Add edge_wrap keyword
 30 March 1998   Allow non-square arrays (introduced bug)
 24 April 1998   Bug found - failed to divide by binfactor before
                  rebinning.  Bug fixed. 
 29 June 1998    Add disc keyword to allow disc smoothing (DPF)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/image/fastconv.pro">$IDLUTILS_DIR/pro/image/fastconv.pro</a>)</strong></p>
<hr />
<h3 id="FCHEBYSHEV">FCHEBYSHEV</h3>
<p><a href="#FASTCONV">[Previous Routine]</a></p>
<p><a href="#FCHEBYSHEV_SPLIT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
        FCHEBYSHEV
 PURPOSE:
       Compute the first M terms in a CHEBYSHEV polynomial expansion.
 EXPLANATION:
       Meant to be used as a supplied function to SVDFIT.

 CALLING SEQUENCE:
       result = FCHEBYSHEV( X, M )

 INPUTS:
       X - the value of the independent variable, scalar or vector
       M - number of term of the CHEBYSHEV expansion to compute, integer scalar 

 OUTPUTS:
       result - (N,M) array, where N is the number of elements in X and M
               is the order.   Contains the value of each CHEBYSHEV term for
               each value of X
 EXAMPLE:
       (1) If x = 2.88 and M = 3 then 
       IDL&gt; print, fchebyshev(x,3)   ==&gt;   [1.00, 2.88, 15.5888]

       (2) Find the coefficients to an M term Chebyshev polynomial that gives
               the best least-squares fit to a dataset (x,y)
               IDL&gt; coeff = SVDFIT( x,y,M,func='fchebyshev')
       
 METHOD:

 REVISION HISTORY:
       04-Aug-1999  Written by Scott Burles by hacking FLEGENDRE code
                    by Landsman in the Goddard libraries.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/trace/fchebyshev.pro">$IDLUTILS_DIR/pro/trace/fchebyshev.pro</a>)</strong></p>
<hr />
<h3 id="FCHEBYSHEV_SPLIT">FCHEBYSHEV_SPLIT</h3>
<p><a href="#FCHEBYSHEV">[Previous Routine]</a></p>
<p><a href="#FILEANDPATH">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
        FCHEBYSHEV_SPLIT
 PURPOSE:
       Compute the first M terms in a CHEBYSHEV polynomial expansion,
       but modified to allow a split in the baseline at X=0.
 EXPLANATION:
       Meant to be used as a supplied function to SVDFIT.

 CALLING SEQUENCE:
       result = FCHEBYSHEV_SPLIT( X, M )

 INPUTS:
       X - the value of the independent variable, scalar or vector
       M - number of term of the CHEBYSHEV expansion to compute, integer scalar 
           The first two elements describe the constant value which is
           different on each side of X=0.

 OUTPUTS:
       result - (N,M) array, where N is the number of elements in X and M
               is the order.   Contains the value of each CHEBYSHEV term for
               each value of X
 EXAMPLE:
       (1) If x = 2.88 and M = 3 then 
       IDL&gt; print, fchebyshev_split(x,3)   ==&gt;   [1.00, 1.00, 2.88]

       (2) Find the coefficients to an M term Chebyshev polynomial that gives
               the best least-squares fit to a dataset (x,y)
               IDL&gt; coeff = SVDFIT( x,y,M,func='fchebyshev_split')
       
 METHOD:

 REVISION HISTORY:
       04-Aug-1999  Written by Scott Burles by hacking FLEGENDRE code
                    by Landsman in the Goddard libraries.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/trace/fchebyshev_split.pro">$IDLUTILS_DIR/pro/trace/fchebyshev_split.pro</a>)</strong></p>
<hr />
<h3 id="FILEANDPATH">FILEANDPATH</h3>
<p><a href="#FCHEBYSHEV_SPLIT">[Previous Routine]</a></p>
<p><a href="#FILLSPAN">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   fileandpath

 PURPOSE:
   Split a file name into the path and the file name.

 CALLING SEQUENCE:
   filename = fileandpath(fullname, [path= ])

 INPUTS:
   fullname   - File name(s) which may include disk and/or directory
                specifications.

 OUTPUT:
   filename   - File name(s) without any disk or directory specifications.

 OPTIONAL OUTPUT:
   path       - Disk and directory specification(s).

 COMMENTS:
   This routine is meant to absorb any operating system dependencies.

 EXAMPLES:
   For Unix:
   IDL&gt; print, fileandpath('data/all/one.dat', path=path)
        one.dat
   IDL&gt; print, path
        data/all

 BUGS:

 PROCEDURES CALLED:
   fdecomp

 REVISION HISTORY:
   30-May-2000  Written by David Schlegel, Princeton.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/fileandpath.pro">$IDLUTILS_DIR/pro/misc/fileandpath.pro</a>)</strong></p>
<hr />
<h3 id="FILLSPAN">FILLSPAN</h3>
<p><a href="#FILEANDPATH">[Previous Routine]</a></p>
<p><a href="#FILL_BSPLINE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:  
       fillspan

 PURPOSE: 
       return an array evenly sampling a given range. The endpoints
       are always included.

 CALLING SEQUENCE:
       span = fillspan(lo, hi, [spacing=spacing], [cnt=cnt])

 INPUTS:
       lo, hi: the endpoints of the span. 

   one of the following must be specified:

       spacing=spacing: the desired spacing between points. Will be
       rounded to allow the closest even spacing, but must be &lt;=
       hi-lo

       cnt=cnt: how many elements to get. Must be &gt;= 2, to allow the
       endpoints to fit.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/fillspan.pro">$IDLUTILS_DIR/pro/misc/fillspan.pro</a>)</strong></p>
<hr />
<h3 id="FILL_BSPLINE">FILL_BSPLINE</h3>
<p><a href="#FILLSPAN">[Previous Routine]</a></p>
<p><a href="#FINDBKPT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   fill_bspline

 PURPOSE:
   Calculate a B-spline in the least-squares sense 
     based on two variables: x which is sorted and spans a large range
				  where bkpts are required
  		and 	      y which can be described with a low order
				  polynomial	

 CALLING SEQUENCE:
   
   coeff = fill_bspline(x, y, z, invsig, npoly, nbkptord, fullbkpt)

 INPUTS:
   x          - data x values
   y          - data y values
   z          - data z values
   invsig     - inverse error array of y
   npoly      - Order of polynomial (as a function of y)
   nbkptord   - Order of b-splines (4 is cubic)
   fullbkpt   - Breakpoint vector returned by efc

 RETURNS:
   coeff      - B-spline coefficients calculated by efc

 OUTPUTS:

 OPTIONAL KEYWORDS:

 OPTIONAL OUTPUTS:

 COMMENTS:
   please sort x for this routine?  This might not be necessary
   replacement for efcmn and efc2d which calls slatec library

 EXAMPLES:


 PROCEDURES CALLED:

   efc_idl in src/slatec/idlwrapper.c
         which wraps to efc.o in libslatecidl.so

 REVISION HISTORY:
   20-Aug-2000 Written by Scott Burles, FNAL
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/bspline/fill_bspline.pro">$IDLUTILS_DIR/pro/bspline/fill_bspline.pro</a>)</strong></p>
<hr />
<h3 id="FINDBKPT">FINDBKPT</h3>
<p><a href="#FILL_BSPLINE">[Previous Routine]</a></p>
<p><a href="#FINDOPFILE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   findbkpt

 PURPOSE:
   Choose bkpts for b-spline given different constraints

 CALLING SEQUENCE:
   
   fullbkpt = findbkpt(x, good, bkpt, nord, bkspace=bkspace, nbkpts=nbkpts, $
                   everyn=everyn, silent=silent)

 INPUTS:
   bkpt       - Breakpoint vector returned by efc

 RETURNS:
   fullbkpt   - The fullbkpt vector required by evaluations with bvalu

 OPTIONAL KEYWORDS:
   bkspace    - Spacing of breakpoints in units of x
   everyn     - Spacing of breakpoints in good pixels
   nbkpts     - Number of breakpoints to span x range
                 minimum is 2 (the endpoints)
   silent     - Do not produce non-critical messages

 OPTIONAL OUTPUTS:
   bkpt       - breakpoints without padding

 COMMENTS:
   If both bkspace and nbkpts are passed, bkspace is used.

 EXAMPLES:

 PROCEDURES CALLED:
   none

 REVISION HISTORY:
   10-Mar-2000  Written by Scott Burles, FNAL
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/slatec/findbkpt.pro">$IDLUTILS_DIR/pro/slatec/findbkpt.pro</a>)</strong></p>
<hr />
<h3 id="FINDOPFILE">FINDOPFILE</h3>
<p><a href="#FINDBKPT">[Previous Routine]</a></p>
<p><a href="#FIND_SB">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   findopfile

 PURPOSE:
   Find the op file corresponding to a specified MJD.

 CALLING SEQUENCE:
   filename = findopfile( expres, mjd, [ indir, /abort_notfound, /silent ] )

 INPUTS:
   expres     - Op file names to match which may include any wildcards
                other other expressions valid for the function FINDFILE().
   mjd        - Number (MJD) for matching corresponding op file.

 OPTIONAL INPUT:
   indir      - Input directory
   abort_notfound - If set and no files are found to match the expression,
                    then abort with the MESSAGE command; otherwise return ''.
   silent     - If set, then don't output any text.

 OUTPUTS:
   filename   - Matched file name without path information

 OPTIONAL OUTPUTS:

 COMMENTS:
   The MJD for the op file is determined from the file name itself
   by looking at whatever number is immediately after the first '-'.
   For example, the file 'opBC-52000.par' is interpreted as having
   MJD=52000.

   The matching op file is the one with the same MJD as that requested,
   or the last one preceding the requested MJD.  If the requested MJD
   precedes any for the existing op files, then return the op file
   with the lowest MJD.  For example, if we have two opBC files
   'opBC-50000.par' and 'opBC-52000.par', then the first is returned
   for all MJDs up to 51999, and the latter used for MJD=52000 and later.

 EXAMPLES:
   Find the opBC file in the directory $IDLSPEC2D_DIR/examples
   that is appropriate for data taken on MJD=52000:
     IDL&gt; indir = getenv('IDLSPEC2D_DIR')+'/examples'
     IDL&gt; filename = findopfile('opBC*.par', 52000, indir)

 BUGS:

 PROCEDURES CALLED:
   djs_filepath()
   fileandpath()
   splog

 INTERNAL SUPPORT ROUTINES:

 DATA FILES:

 REVISION HISTORY:
   27-Feb-2002  Written by Scott Burles &amp; David Schlegel.
                Broken out from an internal function of SDSSPROC.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/sdss/findopfile.pro">$IDLUTILS_DIR/pro/sdss/findopfile.pro</a>)</strong></p>
<hr />
<h3 id="FIND_SB">FIND_SB</h3>
<p><a href="#FINDOPFILE">[Previous Routine]</a></p>
<p><a href="#FIRST_CONVERT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   find_sb
 PURPOSE:
   Find objects in a 2-d image with a gaussian filter
 CALLING SEQUENCE
   find_sb, sub, wt, x=x, y=y, flux=flux, $
       [sigma=, hpix=, hmin=]
 INPUTS:
   sub         - skysubtracted image 
   wt          - inverse variance weight (0 or 1 for CR mask is OK)
 OPTIONAL INPUTS:
   sigma       - sigma of gaussian filter in pixels  (1.0 is default)
   hpix        - half-pixel width of convolution filter  (2 is default)
   hmin        - minimum flux threshold  
   curvr       - the maximum allowed log ratio of curvature along the 
                     major/minor axes  (basically checking for roundness).
                   default is 2.
 KEYWORDS:
 OUTPUTS:
   x          - column pixel positions of flux peak (sorted be decreasing flux)
   y          - row pixel position                  &quot;
   flux       - gaussian filtered flux estimate
   pa_degrees - a guess at the PA of the object from the x-axis
   ab         - a guess at the minor/major axis ratio
 COMMENTS:
 DEPENDENCIES:
   idlutils
 BUGS:
   No checks on neighboring peaks
   Not tested yet with real inverse variance weighting
   Not sure that I have PA calculated correctly
 REVISION HISTORY:
   2005-11-30  Written - Burles
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/image/find_sb.pro">$IDLUTILS_DIR/pro/image/find_sb.pro</a>)</strong></p>
<hr />
<h3 id="FIRST_CONVERT">FIRST_CONVERT</h3>
<p><a href="#FIND_SB">[Previous Routine]</a></p>
<p><a href="#FIRST_COVERAGE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   first_convert
 PURPOSE:
   Convert 2008 FIRST data into format closer to 2003 version
 CALLING SEQUENCE:
   first_convert
 DATA FILES:
   The coverage data files should be copied from:
     http://sundog.stsci.edu/first/catalogs/
   and should be put in a directory pointed to by the environment
   variable $FIRST_DIR.
   This code take the first_08jul16.fits.gz catalog and 
    writes out first_08jul16_sorted.fits 
   The new file is sorted by RA (so that &quot;first_read&quot; works
    seamlessly on it). 
   Also, it renames columns as follows:
      RA -&gt; FIRST_RA  
      DEC -&gt; FIRST_DEC  
      SIDEPROB -&gt; FIRST_SIDEPROB  
      FPEAK -&gt; FIRST_FPEAK  
      FINT -&gt; FIRST_FINT  
      RMS -&gt; FIRST_RMS  
      MAJOR -&gt; FIRST_MAJ  
      MINOR -&gt; FIRST_MIN  
      POSANG -&gt; FIRST_PA  
      FITTED_MAJOR -&gt; FIRST_FMAJ  
      FITTED_MINOR -&gt; FIRST_FMIN  
      FITTED_POSANG -&gt; FIRST_FPA  
      FLDNAME -&gt; FIRST_FIELDNAME  
 REVISION HISTORY:
   Written D. Schlegel, 18 July 2003, Princeton
    31 July 2003 - /silent keyword added to read - DPF
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/first/first_convert.pro">$IDLUTILS_DIR/pro/first/first_convert.pro</a>)</strong></p>
<hr />
<h3 id="FIRST_COVERAGE">FIRST_COVERAGE</h3>
<p><a href="#FIRST_CONVERT">[Previous Routine]</a></p>
<p><a href="#FIRST_READ">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   first_coverage

 PURPOSE:
   Read the FIRST survey coverage maps.

 CALLING SEQUENCE:
   skyrms = first_coverage(ra, dec)

 OPTIONAL INPUTS:
   ra:          Right ascensions [J2000 deg]
   dec:         Declinations [J2000 deg]

 OUTPUTS:
   skyrms:      Returned RMS noise in mJy/beam

 COMMENTS:
   These images give the RMS in mJy/beam tabulated on a ~3 arcmin grid
   in RA and DEC.  However, the WCS headers in these FITS files are invalid.

 BUGS:
   The coordinates in these FITS headers have been interpreted to be
   for the *center* of each pixel, though there is no documentation as
   to whether this is the correct interpretation.

 DATA FILES:
   The coverage data files can be copied from:
     http://sundog.stsci.edu/first/catalogs/
   and should be put in a directory pointed to by the environment
   variable $FIRST_DIR.
   If the version of FIRST used is v03Apr11, then we assume:
     $FIRST_DIR/coverage-north-3arcmin-03apr11.fits
     $FIRST_DIR/coverage-south-3arcmin-01oct15.fits
   If the version of FIRST used is v08jul16, then we assume:
     $FIRST_DIR/coverage-north-3arcmin-08jul16.fits
     $FIRST_DIR/coverage-south-3arcmin-08jul16.fits
  

 PROCEDURES CALLED:
   headfits()
   mrdfits()

 REVISION HISTORY:
   Written D. Schlegel, 18 July 2003, Princeton
    31 July 2003 - /silent keyword added to read - DPF
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/first/first_coverage.pro">$IDLUTILS_DIR/pro/first/first_coverage.pro</a>)</strong></p>
<hr />
<h3 id="FIRST_READ">FIRST_READ</h3>
<p><a href="#FIRST_COVERAGE">[Previous Routine]</a></p>
<p><a href="#FITS_PURGE_NANS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   first_read

 PURPOSE:
   Read the FIRST catalog (and generate IDL save sets)

 CALLING SEQUENCE:
   bigdat = first_read( [ racen, deccen, radius, node=, incl=, hwidth=, $
    columns= ] )

 OPTIONAL INPUTS:
   racen:       Central RA for selecting a region of stars [J2000 deg]
   deccen:      Central DEC for selecting a region of stars [J2000 deg]
   radius:      Radius for selecting a region of stars [deg]
   node:        Node of great circle for selecting a stripe of stars [deg]
   incl:        Inclination of great circle for selecting a stripe [deg]
   hwidth:      Half-width of great circle for selecting a stripe [deg]
   columns:     Select only these columns from the data files.
                Must include 'FIRST_RA' and 'FIRST_DEC' if a circular or
                great circle region is selected.

 OUTPUTS:
   bigdat:      Returned structure containing data

 COMMENTS:
   To trim to objects within a circle, RACEN, DECCEN and RADIUS must
   all be set.

   To trim to objects along a great circle, NODE, INCL and HWIDTH must
   all be set.

   The equinox of the returned data is always J2000.

 BUGS:

 DATA FILES:
   The following data files can be copied from:
     http://sundog.stsci.edu/first/catalogs/
   and should be put in a directory pointed to by the environment
   variable $FIRST_DIR:
     $FIRST_DIR/catalog_03apr11.bin
   This file must be uncompressed.

 INTERNAL SUPPORT ROUTINES:
   first_convert()
   first_testwrite()
   first_readascii()
   first_rdindex
   first_readfits()
   first_readfile()

 PROCEDURES CALLED:
   djs_diff_angle()
   mrdfits()
   mwrfits
   radec_to_munu
   splog

 REVISION HISTORY:
   Written D. Schlegel, 18 July 2003, Princeton
   2012-03-08 Change numlines() to FILE_LINES()
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/first/first_read.pro">$IDLUTILS_DIR/pro/first/first_read.pro</a>)</strong></p>
<hr />
<h3 id="FITS_PURGE_NANS">FITS_PURGE_NANS</h3>
<p><a href="#FIRST_READ">[Previous Routine]</a></p>
<p><a href="#FITS_WAIT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   fits_purge_nans

 PURPOSE:
   Purge invalid (NaN) values from FITS headers

 CALLING SEQUENCE:
   fits_purge_nans, hdr, [ /verbose ]

 INPUTS:
   hdr       - FITS header

 OPTIONAL INPUTS:
   verbose   - If set, then report which keywords are being disposed

 OUTPUTS:
   hdr       - (Modified)

 OPTIONAL OUTPUTS:

 COMMENTS:
   This procedure removes header keywords that are not strings,
   but are returned by SXPAR() as NaN-valued (as determined by
   the FINITE() function).

   This procedure was written to deal with raw SDSS headers that
   sometimes contain header lines like 'ALT     = NaN', where the
   NaN is not contained in quotes.

 EXAMPLES:

 BUGS:

 PROCEDURES CALLED:
   splog
   sxpar

 REVISION HISTORY:
   14-Jul-2004  Written by David Schlegel, Princeton.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/fits/fits_purge_nans.pro">$IDLUTILS_DIR/pro/fits/fits_purge_nans.pro</a>)</strong></p>
<hr />
<h3 id="FITS_WAIT">FITS_WAIT</h3>
<p><a href="#FITS_PURGE_NANS">[Previous Routine]</a></p>
<p><a href="#FLAGFILE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   fits_wait

 PURPOSE:
   Wait for a FITS file to be fully written to disk.

 CALLING SEQUENCE:
   qdone = fits_wait(filename, [deltat=, tmax=, _EXTRA=KeywordsForFitsRead ])

 INPUTS:
   filename  - FITS file name.

 OPTIONAL INPUTS:
   deltat    - Time to wait between attempts to check file; default to 10 sec.
   tmax      - Maximum time to check file; default to 300 sec.
   _EXTRA    - Keywords to pass to FITS_READ, such as /HEADER_ONLY or EXTEN=.

 OUTPUTS:
   qdone     - Return 0 if the file was never read as a valid FITS file;
               return 1 if it was.

 OPTIONAL OUTPUTS:

 COMMENTS:
   The purpose of this routine is to be able to test when a FITS file
   has been fully written to disk.  This is useful for real-time processes
   that must check this.  The Goddard routine FITS_READ is used to
   determine when a file is fully written.

 EXAMPLES:

 BUGS:

 PROCEDURES CALLED:
   fits_read

 REVISION HISTORY:
   02-Oct-2000  Written by David Schlegel, Princeton.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/fits/fits_wait.pro">$IDLUTILS_DIR/pro/fits/fits_wait.pro</a>)</strong></p>
<hr />
<h3 id="FLAGFILE">FLAGFILE</h3>
<p><a href="#FITS_WAIT">[Previous Routine]</a></p>
<p><a href="#FLAGNAME">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   flagfile
   
 PURPOSE:
   Find the index of the maskbits file corresponding to filename, or read
   that file into the maskbits structures and return the corresponding index
   
 CALLING SEQUENCE:
   index = flagfile(filename, clear=clear)
   
 INPUTS:
   filename - filename of yanny file describing maskbits

 OPTIONAL KEYWORDS:
   clear - clear the maskbits common block; reread information on future
           calls (useful if you changed the maskbits file)
   
 OUTPUTS:
   index of maskbits structure corresponding to filename in maskbits_ptrs

 PROCEDURES CALLED:
   splog
   
 REVISION HISTORY:
   2009-Aug-10 - Initial version, EFS

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/flagfile.pro">$IDLUTILS_DIR/pro/misc/flagfile.pro</a>)</strong></p>
<hr />
<h3 id="FLAGNAME">FLAGNAME</h3>
<p><a href="#FLAGFILE">[Previous Routine]</a></p>
<p><a href="#FLAGVAL">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   flagname

 PURPOSE:
   Return bitmask labels corresponding to bit numbers.

 CALLING SEQUENCE:
   label = flagname(flagprefix, flagvalue, filename, [ /concat, /silent ] )

 INPUTS:
   flagprefix - Flag name (scalar string).  The following are supported:
                SPPIXMASK, TARGET, TTARGET.
   flagvalue  - Signed long with any number of its bits set.
   filename   - filename of yanny file describing flags.

 OPTIONAL KEYWORDS:
   concat     - If set, then concatenate all of the output labels in
                LABEL into a single whitespace-separated string.
   silent     - If set, then don't print a warning when there is no bit label
                corresponding to one of the bit values.

 OUTPUTS:
   label      - String name(s) corresponding to each non-zero bit in FLAGVALUE.

 OPTIONAL OUTPUTS:

 COMMENTS:
   This function is the inverse of FLAGVAL().

 EXAMPLES:

 BUGS:

 PROCEDURES CALLED:
   splog
   flagfile

 REVISION HISTORY:
   01-Apr-2002 Written by D. Schlegel, Princeton.
   10-Aug-2009 Renamed &amp; generalized by EFS
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/flagname.pro">$IDLUTILS_DIR/pro/misc/flagname.pro</a>)</strong></p>
<hr />
<h3 id="FLAGVAL">FLAGVAL</h3>
<p><a href="#FLAGNAME">[Previous Routine]</a></p>
<p><a href="#FLOATCOMPRESS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   flagval

 PURPOSE:
   Return bitmask values corresponding to labels.

 CALLING SEQUENCE:
   value = flagval(flagprefix, label, filename)

 INPUTS:
   flagprefix - Flag name (scalar string).  
   label      - String name(s) corresponding to each non-zero bit in
                FLAGVALUE.
   filename   - filename of yanny file describing flags.

 OUTPUTS:
   value      - Signed long with any number of its bits set.

 COMMENTS:
   This function is the inverse of FLAGNAME().

 EXAMPLES:

 BUGS:

 PROCEDURES CALLED:
   splog
   flagfile

 REVISION HISTORY:
   02-Apr-2002 Written by D. Schlegel, Princeton.
   10-Aug-2009 Renamed &amp; generalized by EFS
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/flagval.pro">$IDLUTILS_DIR/pro/misc/flagval.pro</a>)</strong></p>
<hr />
<h3 id="FLOATCOMPRESS">FLOATCOMPRESS</h3>
<p><a href="#FLAGVAL">[Previous Routine]</a></p>
<p><a href="#FRAC_PROFMEAN">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   floatcompress

 PURPOSE:
   Make floating-point data more compressible by trimming binary digits. 
   The routine keeps the ndig most signifcant binary digits. 
   If keyword nsig is passed, the algorithm rounds to the nearest
   power of two less than nsig*sigma, where sigma is evaluated from
   the passed array (with 5 sigma outlier rejection). 

 CALLING SEQUENCE:
   out = floatcompress(data, ndig=ndig, nsig=nsig)

 INPUTS:
   data       - input data (type float or double)
                  WARNING: input data array is nuked to save memory
                  on large arrays. 

 OPTIONAL KEYWORDS:
   ndig       - number of binary significant digits to keep
   nsig       - number of sigma at which to round data

 OUTPUTS:
   out        - output data array with ndig significant binary digits
                kept and the rest zeroed. 

 COMMENTS:
   This function does not compress the data in an array, but fills
   unnecessary digits of the IEEE floating point representation with
   zeros.  This makes the data more compressible by standard
   compression routines such as compress or gzip. 
 
   The default is to retain 10 binary digits instead of the usual 23
   bits (or 52 bits for double precision), introducing a fractional
   error strictly less than 1/1024).  This is adequate for most
   astronomical images, and results in images that compress a factor
   of 2-4 with gzip. 

 EXAMPLES:
   image = readfits('map.fits')              ; read in FITS image
   outimage = floatcompress(image,ndig=8)    ; keep 8 binary digits
   writefits,'mapsmall.fits',outimage        ; write image
   
   Then from the UNIX shell
   &gt; gzip -8 mapsmall.fits

   (level 8 gzip is slower but more effective than average this is
       good for files that will be zipped once and unzipped many times)
 
 PERFORMANCE:
   On the typical maps of the ISM, gzip -8 compression factor is
   ~2.1.  Mileage may vary.  For some images, a factor of 4-5 is possible.

 BUGS:
   None known, but it is possible that there are floating point
   values that are corrupted due to round off errors.  Results should
   be double-checked.   

 PROCEDURES CALLED:

 REVISION HISTORY:
   05-Jul-2000 Written by Doug Finkbeiner (UC Berkeley)
   16-Sep-2000 Put in current format and commented -DPF
   22-Sep-2000 Added nsig keyword
   22-Jun-2002 Deals with Infs and NaNs - DPF
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/floatcompress.pro">$IDLUTILS_DIR/pro/misc/floatcompress.pro</a>)</strong></p>
<hr />
<h3 id="FRAC_PROFMEAN">FRAC_PROFMEAN</h3>
<p><a href="#FLOATCOMPRESS">[Previous Routine]</a></p>
<p><a href="#FREEFREE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   frac_profmean
 PURPOSE:
   Get the radius of a certain light fraction, given the total light radius 
 CALLING SEQUENCE
   radfrac= frac_profmean(frac, nprof, profmean, radtot $
                          [,profradius=profradius] )
 INPUTS:
   frac        - fraction desired
   nprof       - number of annuli to trust
   profmean    - [nrad,ncent] annular fluxes
   radtot      - total light radius 
 OPTIONAL INPUTS:
   profradius  - [nrad] defining profile, in pixels; default to PHOTO aps
 KEYWORDS:
 OUTPUTS:
   radfrac     - radius containing frac fraction of the light in radtot
 COMMENTS:
 DEPENDENCIES:
   idlutils
 BUGS:
   no indication of whether fit is sensible
 REVISION HISTORY:
   2003-09-15  Written - Blanton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/image/frac_profmean.pro">$IDLUTILS_DIR/pro/image/frac_profmean.pro</a>)</strong></p>
<hr />
<h3 id="FREEFREE">FREEFREE</h3>
<p><a href="#FRAC_PROFMEAN">[Previous Routine]</a></p>
<p><a href="#FUNC_CCM_FITRV_F">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   freefree

 PURPOSE:
   Calculate freefree spectrum

 CALLING SEQUENCE:
   jfree = freefree(nu, T=T)

 INPUTS:
   nu  - [Hz]
  
 KEYWORDS:
   T   - [K] default 10,000K
   
 OUTPUTS:
   jfree  - j_nu

 OPTIONAL OUTPUTS:
   
 EXAMPLES:
   
 COMMENTS:
   returns answer in erg /cm^3/s/sr/Hz (emissivity, denoted j_\nu)
   multiply by 1E17 to get MJy/sr/cm 
      (then times 3E18 to get specific intensity, denoted I_\nu, MJy/sr)
   multiply by 1E23 to get Jy/sr/cm
   note for Y=.24 the He correction is about factor 1.42 (for const n_H)
   
 REVISION HISTORY:
   2002-Nov-03 - Written by Douglas Finkbeiner, Princeton
   2006-Dec-01 - moved from Halpha repository - DPF

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/physics/freefree.pro">$IDLUTILS_DIR/pro/physics/freefree.pro</a>)</strong></p>
<hr />
<h3 id="FUNC_CCM_FITRV_F">FUNC_CCM_FITRV()</h3>
<p><a href="#FREEFREE">[Previous Routine]</a></p>
<p><a href="#FUNC_FIT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   func_ccm_fitrv()

 PURPOSE:
   compute chi2 for the ccm_fitrv function

 CALLING SEQUENCE:
   called via a fitting program -- see ccm_fitrv.pro

 INPUTS:
   params   -   R_V  = params[0];   norm = params[1]

 OUTPUTS:
   chi2     -  chi squared for fit. 

 COMMENTS:
   wavelength, redfac, and weights are passed via common block. 
   unit weights are assumed if none are passed. 

 REVISION HISTORY:
   2003-Sep-10  Written by D. Finkbeiner &amp; N.Padmanabhan, Princeton

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/dust/func_ccm_fitrv.pro">$IDLUTILS_DIR/pro/dust/func_ccm_fitrv.pro</a>)</strong></p>
<hr />
<h3 id="FUNC_FIT">FUNC_FIT</h3>
<p><a href="#FUNC_CCM_FITRV_F">[Previous Routine]</a></p>
<p><a href="#GAREA">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   func_fit

 PURPOSE:
   Fit X, Y positions to a functional form.

 CALLING SEQUENCE:
   res = func_fit( x, y, ncoeff, [invvar=, function_name=, $
    ia=, inputans=, yfit=, double=double, _EXTRA= ]

 INPUTS:
   x          - X values (independent variable)
   y          - Y values (dependent variable)
   ncoeff     - Number of coefficients to fit
   invvar     - Weight values (inverse variance)

 OPTIONAL KEYWORDS:
   function_name - Function to fit; options are:
                'legendre'
                'chebyshev'
                Default to 'legendre'
   ia         - Array specifying free (1) and fixed (0) variables [NCOEFF]
   inputans   - If holding parameters fixed, set this array to those values
                [NCOEFF]
   double     - If set, or if X, Y, or INVVAR are double-precision, then
                return double-precision values
   _EXTRA     - Optional keywords for fitting function

 OUTPUTS:
   res        - Fit coefficients [NCOEFF]

 OPTIONAL OUTPUTS:
   yfit       - Fit evaluated at the points X

 COMMENTS:

 EXAMPLES:

 BUGS:

 PROCEDURES CALLED:
   fchebyshev()
   flegendre()
   fpoly()

 REVISION HISTORY:
   10-Sep-1999  Written by S. Burles
   16-Nov-1999  Modified by D. Schlegel to never fit more coefficients
                than there are data points.
   10-Jul-2001  Added fpoly, S. Burles
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/trace/func_fit.pro">$IDLUTILS_DIR/pro/trace/func_fit.pro</a>)</strong></p>
<hr />
<h3 id="GAREA">GAREA</h3>
<p><a href="#FUNC_FIT">[Previous Routine]</a></p>
<p><a href="#GAUNTFF">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   garea
 PURPOSE:
   Calculate area of spherical polygon by calling mangle utility garea
 CALLING SEQUENCE:
   area=garea(polygon [, tol=, /verbose])
 INPUTS:
   polygon - spherical polygon specification
 OPTIONAL INPUTS:
   tol - tolerance (arcsec)
   verbose - don't suppress garea output
 OUTPUTS:
 OPTIONAL INPUT/OUTPUTS:
 COMMENTS:
 EXAMPLES:
 BUGS:
 PROCEDURES CALLED:
 REVISION HISTORY:
   07-Nov-2002  Written by Mike Blanton, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mangle/garea.pro">$IDLUTILS_DIR/pro/mangle/garea.pro</a>)</strong></p>
<hr />
<h3 id="GAUNTFF">GAUNTFF</h3>
<p><a href="#GAREA">[Previous Routine]</a></p>
<p><a href="#GAUSS1">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   gauntff

 PURPOSE:
   Compute the Gaunt factor for free-free

 CALLING SEQUENCE:
   gff = gauntff(nu, T)

 INPUTS:
   nu       - frequency   [Hz]
   T        - temperature [Kelvin]

 EXAMPLES:
   gff = gauntff(1.0D10, 1D4)
   
 COMMENTS:
   This approximation is valid for frequencies far above the plasma
    frequency, but far below kT/h. 

 REVISION HISTORY:
   2002-Jun-14   Written by Douglas Finkbeiner, Princeton

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/physics/gauntff.pro">$IDLUTILS_DIR/pro/physics/gauntff.pro</a>)</strong></p>
<hr />
<h3 id="GAUSS1">GAUSS1</h3>
<p><a href="#GAUNTFF">[Previous Routine]</a></p>
<p><a href="#GAUSS1P">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   GAUSS1

 AUTHOR:
   Craig B. Markwardt, NASA/GSFC Code 662, Greenbelt, MD 20770
   craigm@lheamail.gsfc.nasa.gov

 PURPOSE:
   Compute Gaussian curve given the mean, sigma and area.

 MAJOR TOPICS:
   Curve and Surface Fitting

 CALLING SEQUENCE:
   YVALS = GAUSS1(XVALS, [MEAN, SIGMA, AREA], SKEW=skew)

 DESCRIPTION:

  This routine computes the values of a Gaussian function whose
  X-values, mean, sigma, and total area are given.  It is meant to be
  a demonstration for curve-fitting.

  XVALS can be an array of X-values, in which case the returned
  Y-values are an array as well.  The second parameter to GAUSS1
  should be an array containing the MEAN, SIGMA, and total AREA, in
  that order.

 INPUTS:
   X - Array of X-values.

   [MEAN, SIGMA, AREA] - the mean, sigma and total area of the 
                         desired Gaussian curve.

 INPUT KEYWORD PARAMETERS:

   SKEW - You may specify a skew value.  Default is no skew.

   PEAK - if set then AREA is interpreted as the peak value rather
          than the area under the peak.

 RETURNS:

   Returns the array of Y-values.

 EXAMPLE:

   p = [2.2D, 1.4D, 3000.D]
   x = dindgen(200)*0.1 - 10.
   y = gauss1(x, p)

   Computes the values of the Gaussian at equispaced intervals
   (spacing is 0.1).  The gaussian has a mean of 2.2, standard
   deviation of 1.4, and total area of 3000.

 REFERENCES:

 MODIFICATION HISTORY:
   Written, Jul 1998, CM
   Correct bug in normalization, CM, 01 Nov 1999
   Optimized for speed, CM, 02 Nov 1999
   Added copyright notice, 25 Mar 2001, CM
   Added PEAK keyword, 30 Sep 2001, CM

  $Id: gauss1.pro,v 1.2 2006-02-07 22:38:32 schlegel Exp $

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mpfit/gauss1.pro">$IDLUTILS_DIR/pro/mpfit/gauss1.pro</a>)</strong></p>
<hr />
<h3 id="GAUSS1P">GAUSS1P</h3>
<p><a href="#GAUSS1">[Previous Routine]</a></p>
<p><a href="#GAUSS2">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   GAUSS1P

 AUTHOR:
   Craig B. Markwardt, NASA/GSFC Code 662, Greenbelt, MD 20770
   craigm@lheamail.gsfc.nasa.gov

 PURPOSE:
   Compute Gaussian curve given the mean, sigma and area (procedure).

 MAJOR TOPICS:
   Curve and Surface Fitting

 CALLING SEQUENCE:
   GAUSS1, XVALS, [MEAN, SIGMA, AREA], YVALS, SKEW=skew

 DESCRIPTION:

  This routine computes the values of a Gaussian function whose
  X-values, mean, sigma, and total area are given.  It is meant to be
  a demonstration for curve-fitting.

  XVALS can be an array of X-values, in which case the returned
  Y-values are an array as well.  The second parameter to GAUSS1
  should be an array containing the MEAN, SIGMA, and total AREA, in
  that order.

 INPUTS:
   X - Array of X-values.

   [MEAN, SIGMA, AREA] - the mean, sigma and total area of the 
                         desired Gaussian curve.

   YVALS - returns the array of Y-values.


 KEYWORD PARAMETERS:

   SKEW - You may specify a skew value.  Default is no skew.

 EXAMPLE:

   p = [2.2D, 1.4D, 3000.D]
   x = dindgen(200)*0.1 - 10.
   gauss1p, x, p, y

   Computes the values of the Gaussian at equispaced intervals
   (spacing is 0.1).  The gaussian has a mean of 2.2, standard
   deviation of 1.4, and total area of 3000.

 REFERENCES:

 MODIFICATION HISTORY:
   Transcribed from GAUSS1, 13 Dec 1999, CM
   Added copyright notice, 25 Mar 2001, CM

  $Id: gauss1p.pro,v 1.2 2006-02-07 22:38:32 schlegel Exp $

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mpfit/gauss1p.pro">$IDLUTILS_DIR/pro/mpfit/gauss1p.pro</a>)</strong></p>
<hr />
<h3 id="GAUSS2">GAUSS2</h3>
<p><a href="#GAUSS1P">[Previous Routine]</a></p>
<p><a href="#GAUSSPIX1D">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   GAUSS2

 AUTHOR:
   Craig B. Markwardt, NASA/GSFC Code 662, Greenbelt, MD 20770
   craigm@lheamail.gsfc.nasa.gov

 PURPOSE:
   Compute Gaussian curve given the mean, sigma and area.

 MAJOR TOPICS:
   Curve and Surface Fitting

 CALLING SEQUENCE:
   YVALS = GAUSS2(X, Y, [XCENT, YCENT, SIGMA, PEAK])

 DESCRIPTION:

  This routine computes the values of a Gaussian function whose
  X-values, mean, sigma, and total area are given.  It is meant to be
  a demonstration for curve-fitting.

  XVALS can be an array of X-values, in which case the returned
  Y-values are an array as well.  The second parameter to GAUSS1
  should be an array containing the MEAN, SIGMA, and total AREA, in
  that order.

 INPUTS:
   X - 2-dimensional array of &quot;X&quot;-values.
   Y - 2-dimensional array of &quot;Y&quot;-values.

   XCENT - X-position of gaussian centroid.
   YCENT - Y-position of gaussian centroid.

   SIGMA - sigma of the curve (X and Y widths are the same).

   PEAK - the peak value of the gaussian function.

 RETURNS:

   Returns the array of Y-values.

 EXAMPLE:

   p = [2.2D, -0.7D, 1.4D, 3000.D]
   x = (dindgen(200)*0.1 - 10.) # (dblarr(200) + 1)
   y = (dblarr(200) + 1) # (dindgen(200)*0.1 - 10.)
   z = gauss2(x, y, p)

   Computes the values of the Gaussian at equispaced intervals in X
   and Y (spacing is 0.1).  The gaussian has a centroid position of
   (2.2, -0.7), standard deviation of 1.4, and peak value of 3000.

 REFERENCES:

 MODIFICATION HISTORY:
   Written, 02 Oct 1999, CM
   Added copyright notice, 25 Mar 2001, CM

  $Id: gauss2.pro,v 1.2 2006-02-07 22:38:32 schlegel Exp $

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mpfit/gauss2.pro">$IDLUTILS_DIR/pro/mpfit/gauss2.pro</a>)</strong></p>
<hr />
<h3 id="GAUSSPIX1D">GAUSSPIX1D</h3>
<p><a href="#GAUSS2">[Previous Routine]</a></p>
<p><a href="#GAUSS_OVERLAP">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   gausspix1d

 PURPOSE:
   Routine to evaluate a 1D gaussian function (plus polynomial terms)
   integrated over a pixel of width 1.

 CALLING SEQUENCE:
   gausspix, x, a, f, pder

 INPUTS:
   x          - Dependent variable [NX].
   a          - Coefficients:
                A[0] = center of the Gaussian in X
                A[1] = sigma width of the Gaussian
                A[2] = normalization of the Gaussian; total area = A[1] * A[2]
                A[3...] = polynomial coefficients for background terms

 OPTIONAL INPUTS:

 OUTPUTS:
   f          - Evaluated function [NX].
   pder       - Array of partial derivatives [NX,NCOEFF].

 OPTIONAL OUTPUTS:

 COMMENTS:
   This routine can be passed as a function to the IDL CURVEFIT function.

   If X is type DOUBLE, then the return values are also type DOUBLE;
   otherwise they are type FLOAT.

 EXAMPLES:

 BUGS:

 PROCEDURES CALLED:

 REVISION HISTORY:
   04-Aug-2000  Written by D. Schlegel, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/gausspix1d.pro">$IDLUTILS_DIR/pro/math/gausspix1d.pro</a>)</strong></p>
<hr />
<h3 id="GAUSS_OVERLAP">GAUSS_OVERLAP</h3>
<p><a href="#GAUSSPIX1D">[Previous Routine]</a></p>
<p><a href="#GRIDND">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
	  gauss_overlap
 PURPOSE:
   calculate log integral, covariance, and mean of product of two gaussians
 DESCRIPTION:
   calculate log integral, covariance, and mean of product of two gaussians
 CATEGORY:
       Numerical
 CALLING SEQUENCE:
	  gauss_overlap,mean1,covar1,mean2,covar2,mean=mean,covar=covar, $
	    logint=logint, invcovar=invcovar, /input_invcovar
 INPUTS:
	  mean1 - [N] mean of first gaussian
	  covar1 - [N, N] covariance of first gaussian
	  mean2 - [N] mean of second gaussian
	  covar2 - [N, N] covariance of second gaussian
 OPTIONAL INPUT PARAMETERS:
 KEYWORD PARAMETERS:
   /input_invcovar - covar1, covar2 are actually inverse covars
 OUTPUTS:
   mean - mean of global gaussian
   covar - covariance of global gaussian
   invcovar - inverse covariance of global gaussian
   logint - natural log of integral of global gaussian
 COMMON BLOCKS:
 SIDE EFFECTS:
 RESTRICTIONS:
 PROCEDURE:
 MODIFICATION HISTORY:
	  Blanton and Roweis 2003-02-18j 
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/gauss_overlap.pro">$IDLUTILS_DIR/pro/math/gauss_overlap.pro</a>)</strong></p>
<hr />
<h3 id="GRIDND">GRIDND</h3>
<p><a href="#GAUSS_OVERLAP">[Previous Routine]</a></p>
<p><a href="#GROUPND">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   gridnd
 PURPOSE:
   determine positions on a grid, for easy access
 CALLING SEQUENCE:
   gridnd, x [, ix=, grid=, ngrid=, binsize=, igrid= ]
 INPUTS:
   x - [M,N] positions in M-dimensions
 OPTIONAL INPUTS:
   binsize - grid size (default 1.)
 OUTPUTS:
   grid - [nx[0]*nx[1]*...*nx[M-1]] set of pointers to particles in
          each cell
   ngrid - [nx[0]*nx[1]*nx[2]*...*nx[M-1]] number of particles in
           each cell
   igrid - [N] position in grid
   xminmax - [2,M] limits of grid
   nx - [M] dimensions of grid
 COMMENTS:
   This code is BETA! Use at your own risk.
 REVISION HISTORY:
   12-Oct-2005  Written by Mike Blanton, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/gridnd.pro">$IDLUTILS_DIR/pro/math/gridnd.pro</a>)</strong></p>
<hr />
<h3 id="GROUPND">GROUPND</h3>
<p><a href="#GRIDND">[Previous Routine]</a></p>
<p><a href="#GROUP_INDX">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   groupnd
 PURPOSE:
   group a set of points in N dimensions
 CALLING SEQUENCE:
   ingroup= groupnd(x, distance [, nextgroup=, multgroup=, $
                    firstgroup= ])
 INPUTS:
   x - [M,N] positions in M-dimensions
   distance - link distance
 OUTPUTS:
   ingroup    - group number of each object (N-dimensional array);
                -1 if no groups
   multgroup  - multiplicity of each group 
   firstgroup - first member of each group 
   nextgroup  - index of next member of group for each object
 REVISION HISTORY:
   28-Nov-2006  Written by Mike Blanton, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/groupnd.pro">$IDLUTILS_DIR/pro/math/groupnd.pro</a>)</strong></p>
<hr />
<h3 id="GROUP_INDX">GROUP_INDX</h3>
<p><a href="#GROUPND">[Previous Routine]</a></p>
<p><a href="#GROUP_ON_MATCHES">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   group_indx
 PURPOSE:
   given group indices, yield multiplicity, plus an index linked list
 CALLING SEQUENCE:
   group_indx, ingroup, multgroup=multgroup, firstgroup=firstgroup, $
      nextgroup=nextgroup
 INPUTS:
   ingroup - [N] group # of each element
 OUTPUTS:
   multgroup - [Ngroup] multiplicity of each group
   firstgroup - [Ngroup] first member of each group
   nextgroup - [N] for each member, the next member of its group
               (-1) if no more
 COMMENTS:
 BUGS:
 REVISION HISTORY:
   2003-03-05 written by Michael Blanton (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/group_indx.pro">$IDLUTILS_DIR/pro/misc/group_indx.pro</a>)</strong></p>
<hr />
<h3 id="GROUP_ON_MATCHES">GROUP_ON_MATCHES</h3>
<p><a href="#GROUP_INDX">[Previous Routine]</a></p>
<p><a href="#GROW_OBJECT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   group_on_matches
 PURPOSE:
   given a list of objects and matches between them, find the groups
 CALLING SEQUENCE:
   group_on_matches, matches [, first=, next=, mult=, in=]
 INPUTS:
   matches - [N] array of pointers to list of which objects are matched
 OUTPUTS:
   first - [Ngroup] first member of each group
   mult - [Ngroup] multiplicity of each group
   in - [N] what group an object is in 
   next - [N] next member of group an object is in (-1 if last)
 REVISION HISTORY:
   2005-Oct-3  Written by Mike Blanton, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/group_on_matches.pro">$IDLUTILS_DIR/pro/math/group_on_matches.pro</a>)</strong></p>
<hr />
<h3 id="GROW_OBJECT">GROW_OBJECT</h3>
<p><a href="#GROUP_ON_MATCHES">[Previous Routine]</a></p>
<p><a href="#GSC_NSKY">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   grow_object

 PURPOSE:
   Identify objects as the contiguous non-zero pixels in an image.

 CALLING SEQUENCE:
   mask = grow_object( image, [ xstart=, ystart=, putval=, /diagonal, nadd= ]

 INPUTS:
   image      - Integer-valued image vector or array, where non-zero pixel
                values indicate that an object touches that pixel.

 OPTIONAL INPUTS:
   xstart     - Starting X position(s) for assembling the object; default to
                settting all pixels where IMAGE != 0.
   ystart     - Starting Y position(s) for assembling the object; default to
                settting all pixels where IMAGE != 0.
   putval     - Object ID(s) to put in MASK as positive-valued long integer;
                default to a unique integer (starting at 1) for each object.
                This can either be a scalar, or a vector with one element
                per XSTART,YSTART position.
   diagonal   - If set, then consider diagonally-offset pixels as contigous
                as well as pixels simply to the left, right, down, or up.

 OUTPUTS:
   mask       - Mask with object IDs; zeros indicate that there is no object
                in that pixel, and positive values are used as object IDs.
                Negative values are not allowed.

 OPTIONAL OUTPUTS:
   nadd       - Number of pixels added to all objects

 COMMENTS:
   Find the pixels that make up an &quot;object&quot; as the contiguous non-zero
   pixels in IMAGE that touch the pixel XSTART,YSTART.  All such pixels
   have MASK set to PUTVAL.

   If XSTART,YSTART,PUTVAL are not specified, then all objects are found
   in the image and assigned unique object IDs in MASK starting at 1.
   Note that in this case, max(MASK) is the number of objects.

   The memory usage is 9*(nx+2)*(ny+2) bytes in addition to the input
   image, where [nx,ny] are the dimensions of the input image.

 EXAMPLES:
   Create a random image of 0s and 1s, and identify all contiguous pixels
   as objects:
   IDL&gt; image=smooth(randomu(123,100,100),5) GT 0.55 &amp; mask = 0
   IDL&gt; mask = grow_object(image)

 BUGS:

 PROCEDURES CALLED:
   Dynamic link to grow_obj.c

 REVISION HISTORY:
   20-May-2003  Written by D. Schlegel, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/image/grow_object.pro">$IDLUTILS_DIR/pro/image/grow_object.pro</a>)</strong></p>
<hr />
<h3 id="GSC_NSKY">GSC_NSKY</h3>
<p><a href="#GROW_OBJECT">[Previous Routine]</a></p>
<p><a href="#GSC_READ_TABLE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   gsc_nsky

 PURPOSE:
   Generate IDL structure for GSC catalogue at dec &gt; -30 and m &lt; 18.0

 CALLING SEQUENCE:
   gsc_nsky, [ catall ]
 
 INPUTS:
   &lt;data files in $PHOTO_DATA/gsc&gt;

 OUTPUTS:
   &lt;data file (binary FITS table) in $PHOTO_DATA/kocat&gt;

 OPTIONAL OUTPUTS:
   catall  - Structure containing all objects dec &gt; -30 deg

 INPUT FILES:
   $GSC_DIR/n????/*.gsc
   $GSC_DIR/s????/*.gsc

 OUTPUT FILES:
   $GSC_DIR/gsc-Nsky.fits

 EXAMPLES:

 COMMENTS:
   Note: these catalogues are written as F9.5 ASCII FITS tables.  So 
    there is no reason to read them as double precision(?)
   For more information see gsc/readme.txt
   This can take a long time to run. 

 PROCEDURES CALLED:
   djs_angle_match()
   gsc_read_table()
   mwrfits

 REVISION HISTORY:
   Written 2002-Mar-27 by D. Finkbeiner
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/astrom/gsc_nsky.pro">$IDLUTILS_DIR/pro/astrom/gsc_nsky.pro</a>)</strong></p>
<hr />
<h3 id="GSC_READ_TABLE">GSC_READ_TABLE</h3>
<p><a href="#GSC_NSKY">[Previous Routine]</a></p>
<p><a href="#GSSSPUTAST">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   gsc_read_table

 PURPOSE:
   Read one table from the GSC (Guide star catalogue)

 CALLING SEQUENCE:
   cat=gsc_read_table(fname, maglim=maglim, poserrlim=poserrlim)

 INPUTS:
   fname      - file name(s) of catalogue FITS table (e.g. 0060.gsc )
                      (can be array)
 KEYWORDS:
   maglim     - array of [lomag, himag] magnitudes to keep
   poserrlim  - discard stars with poserr higher than this limit
	
 OUTPUTS:
   cat        - structure returned by function call

 EXAMPLES:

 COMMENTS:
   Note: these catalogues are written as F9.5 ASCII FITS tables.  So 
   there is no reason to read them as double precision(?)

 REVISION HISTORY:
   2002-Mar-27  Written by D. Finkbeiner, Princeton

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/astrom/gsc_read_table.pro">$IDLUTILS_DIR/pro/astrom/gsc_read_table.pro</a>)</strong></p>
<hr />
<h3 id="GSSSPUTAST">GSSSPUTAST</h3>
<p><a href="#GSC_READ_TABLE">[Previous Routine]</a></p>
<p><a href="#GVERTS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
    GSSSPUTAST
 PURPOSE:
    Put GSSS astrometry parameters into a given FITS header.

 CALLING SEQUENCE:
     gsssputast, hdr, astr

 INPUTS:
     hdr   - FITS header, string array.   HDR will be updated to contain
               the supplied astrometry.
     astr  - IDL structure containing the GSSS Astrometry information
               .CTYPE[2]   =  ['RA---GSS','DEC--GSS'] 
               .CRVAL[2]   = plate center Ra, Dec (from PLTRAH, PLTRAM etc.)
               .XLL,.YLL   = offsets lower lefthand corner (integers)
               .AMDX[13],.AMDY[13] = 12 transformation coefficients
               .XSZ,.YSZ   = X and Y pixel size in microns
               .PLTSCL     = plate scale in arc sec/mm
               .PPO3,.PPO6 = orientation coefficients

 OUTPUTS:
      hdr - (Modified) FITS header with updated astrometry cards.
            A brief HISTORY record is also added.

 REVISION HISTORY:
   Written 4 Nov 2000 - D. Finkbeiner
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/astrom/gsssputast.pro">$IDLUTILS_DIR/pro/astrom/gsssputast.pro</a>)</strong></p>
<hr />
<h3 id="GVERTS">GVERTS</h3>
<p><a href="#GSSSPUTAST">[Previous Routine]</a></p>
<p><a href="#GZ_FILE_TEST">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   gverts
 PURPOSE:
   Get vertices along edge of a polygon
 CALLING SEQUENCE:
   verts=gverts(polygon)
 INPUTS:
   polygon - spherical polygon specification
 OUTPUTS:
   verts - [3,N] locations of vertices
 OPTIONAL INPUT/OUTPUTS:
 COMMENTS:
 EXAMPLES:
 BUGS:
 PROCEDURES CALLED:
 REVISION HISTORY:
   31-Jan-2002  Written by Mike Blanton, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mangle/gverts.pro">$IDLUTILS_DIR/pro/mangle/gverts.pro</a>)</strong></p>
<hr />
<h3 id="GZ_FILE_TEST">GZ_FILE_TEST</h3>
<p><a href="#GVERTS">[Previous Routine]</a></p>
<p><a href="#GZ_HEADFITS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   gz_file_test
 PURPOSE:
   file_test, but if it fails, try .gz, .Z, .z, .bz2 versions
 CALLING SEQUENCE:
   res= gz_file_test(file)
 REVISION HISTORY:
   27-Sep-2006  Written by Mike Blanton, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/fits/gz_file_test.pro">$IDLUTILS_DIR/pro/fits/gz_file_test.pro</a>)</strong></p>
<hr />
<h3 id="GZ_HEADFITS">GZ_HEADFITS</h3>
<p><a href="#GZ_FILE_TEST">[Previous Routine]</a></p>
<p><a href="#GZ_MRDFITS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   gz_headfits
 PURPOSE:
   headfits, but if it fails, try reading in compressed version
 CALLING SEQUENCE:
   str= gz_headfits([params for headfits])
 COMMENTS:
   Tries .gz, .Z, .z, then .bz2
 REVISION HISTORY:
   27-Sep-2006  Written by Mike Blanton, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/fits/gz_headfits.pro">$IDLUTILS_DIR/pro/fits/gz_headfits.pro</a>)</strong></p>
<hr />
<h3 id="GZ_MRDFITS">GZ_MRDFITS</h3>
<p><a href="#GZ_HEADFITS">[Previous Routine]</a></p>
<p><a href="#HDR2STRUCT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   gz_mrdfits
 PURPOSE:
   mrdfits, but if it fails, try reading in compressed version
 CALLING SEQUENCE:
   str= gz_mrdfits([params for mrdfits])
 COMMENTS:
   Tries .gz, .Z, .z, then .bz2
 REVISION HISTORY:
   27-Sep-2006  Written by Mike Blanton, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/fits/gz_mrdfits.pro">$IDLUTILS_DIR/pro/fits/gz_mrdfits.pro</a>)</strong></p>
<hr />
<h3 id="HDR2STRUCT">HDR2STRUCT</h3>
<p><a href="#GZ_MRDFITS">[Previous Routine]</a></p>
<p><a href="#HEALCART_BINDOWN">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   hdr2struct

 PURPOSE:
   Convert a string array with the format of a FITS header 
       into a single structure

 CALLING SEQUENCE:
   struct = hdr2struct(hdr)

 INPUTS:
   hdr:        FITS-(like) header (array of strings)

 OUTPUTS:
   struct:     Single structure with keyword(s) and comment(s)

 OPTIONAL INPUTS:

 COMMENTS:
   Only passes back anonymous structures as it appends as it works
    through all the header keywords.  Use struct_append to make an
    array from an array of headers.

 PROCEDURES CALLED:
   headfits()

 REVISION HISTORY:
   17-Jul-2001 Written by Burles
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/fits/hdr2struct.pro">$IDLUTILS_DIR/pro/fits/hdr2struct.pro</a>)</strong></p>
<hr />
<h3 id="HEALCART_BINDOWN">HEALCART_BINDOWN</h3>
<p><a href="#HDR2STRUCT">[Previous Routine]</a></p>
<p><a href="#HEALCART_HEADER">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   healcart_bindown

 PURPOSE:
   Bin down a healcart image preserving proper pixel centers

 CALLING SEQUENCE:
   newimage = healcart_bindown(bigimage, xsize=, nside=, fac=)

 INPUTS:
   bigimage  - image to be binned

 KEYWORDS:
   xsize     - xsize of desired image (8*nside)
   nside     - Nside of desired image
   fac       - factor by which to bin image down
 
 OUTPUTS:
   newimage  - the binned image

 RESTRICTIONS:
   Warning messages produced if desired image is GE size of input

 EXAMPLES:
   Starting with a (4096,2047) image, i.e. Nside=512, to bin 
    down a factor of 4, you could use any of

   small = healcart_bindown(image, xsize=1024)
   small = healcart_bindown(image, nside=128)
   small = healcart_bindown(image, fac=4)

 COMMENTS:
   All healcart images are 8*Nside by 4*Nside-1 pixels
   The binning preserves data types (except byte gets recast)

   This routine is still an imperfect approximation to a properly
   interpolated resampling on the sphere, but is much better than a
   naive rebin. 

   It is useful for e.g. rebinning figures for postscript files, and
   gives a less jagged image than a healcart of a heal_rebin image. 

 REVISION HISTORY:
   22-Apr-2008  Written by Douglas Finkbeiner, CfA  (Earth Day!)

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/healpix/healcart_bindown.pro">$IDLUTILS_DIR/pro/healpix/healcart_bindown.pro</a>)</strong></p>
<hr />
<h3 id="HEALCART_HEADER">HEALCART_HEADER</h3>
<p><a href="#HEALCART_BINDOWN">[Previous Routine]</a></p>
<p><a href="#HEALCART_IND">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   healcart_header

 PURPOSE:
   Generate mock header for healcart image

 CALLING SEQUENCE:
   header=healcart_header([ind, nside=nside])

 OPTIONAL INPUTS:
   ind      - healcart index array, used only for size information

 KEYWORDS:
   nside    - used for size information

 OUTPUTS:
   header   - FITS header appropriate for atv

 RESTRICTIONS:
   Must be used with idlutils version of atv and xy2ad.

 EXAMPLES:
   
 COMMENTS:
   Defines header for the approximately Cartesian reprojection of the 
    healpix map defined by healcart_ind.pro.
    atv knows how to use this header, even though it is not standard
    FITS. 

   Either nside or ind MUST be set. 

 REVISION HISTORY:
   2003-May-10  Written by Douglas Finkbeiner, Princeton

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/healpix/healcart_header.pro">$IDLUTILS_DIR/pro/healpix/healcart_header.pro</a>)</strong></p>
<hr />
<h3 id="HEALCART_IND">HEALCART_IND</h3>
<p><a href="#HEALCART_HEADER">[Previous Routine]</a></p>
<p><a href="#HEALNPIX_F">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   healcart_ind

 PURPOSE:
   Generate index list for healcart projection

 CALLING SEQUENCE:
   ind = healcart_ind(data, /nest)

 INPUTS:
   data  - array to determine size (not used for anything else)
            if single element, interpret as Nside. 

 KEYWORDS:
   nest  - return index list for nested ordering

 OUTPUTS:
   ind   - index array to transform healpix to quasi-cartesian

 EXAMPLES:
   ind = healcart_ind(kband, /nest)
   atv, kband[ind]

 COMMENTS:
   This routine returns indices for the &quot;healcart&quot; projection, 
    which preserves the ring -&gt; row mapping but stretches in
    longitude to make a (nearly) Cartesian projection. 
   This routine should only be used for examining healpix maps -- any
    quantitative computations should only be done on the healpix sphere. 

   Note: there are 4N-1 rows, not 4N

 REVISION HISTORY:
   2003-Feb-12  Written by Douglas Finkbeiner, Princeton

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/healpix/healcart_ind.pro">$IDLUTILS_DIR/pro/healpix/healcart_ind.pro</a>)</strong></p>
<hr />
<h3 id="HEALNPIX_F">HEALNPIX()</h3>
<p><a href="#HEALCART_IND">[Previous Routine]</a></p>
<p><a href="#HEALPIX2ALM">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
NAME:
 HEALNPIX()
PURPOSE:
 Returns the number of healpix pixels for a given resolution.
CALLING SEQUENCE:
 npix = healnpix(res,[/nside])
KEYWORDS:
 If nside is set, then it returns nside
REVISION HISTORY:
 Nikhil Padmanabhan, Princeton, July 29,2003
 Revised documentation, B. A. Weaver, NYU, 2011-11-30
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/healpix/healnpix.pro">$IDLUTILS_DIR/pro/healpix/healnpix.pro</a>)</strong></p>
<hr />
<h3 id="HEALPIX2ALM">HEALPIX2ALM</h3>
<p><a href="#HEALNPIX_F">[Previous Routine]</a></p>
<p><a href="#HEALPIX_CL_F">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   healpix2alm

 PURPOSE:
   Compute spherical harmonic transform (Alm) of a healpix map

 CALLING SEQUENCE:
   Alm = healpix2alm(data, lmax=lmax)

 INPUTS:
   data   - healpix array [npix, nmap] (must be real)
   
 KEYWORDS:
   lmax   - maximum l to compute (Default???)

 OUTPUTS:
   Alm    - dcomplex array of Alm[l, m, nmap] (lmax by lmax)

 OPTIONAL OUTPUTS:
   
 RESTRICTIONS:
   
 EXAMPLES:
   
 COMMENTS:
  Note - the Ylm are not even perfectly orthonormal on the healpix sphere
   print,total(spher_harm(theta,phi,5,3,/doub)*conj(spher_harm(theta,phi,9,3,/doub)))*!dpi*4,format='(F20.10)'
   
 REVISION HISTORY:
   2003-Feb-19  Written by Douglas Finkbeiner, Princeton
   2003-Nov-12  Can call with multiple maps at a time - DPF &amp; NP
   2009-May-13  Fix underflows for nside &gt; 512 - EFS

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/healpix/healpix2alm.pro">$IDLUTILS_DIR/pro/healpix/healpix2alm.pro</a>)</strong></p>
<hr />
<h3 id="HEALPIX_CL_F">HEALPIX_CL()</h3>
<p><a href="#HEALPIX2ALM">[Previous Routine]</a></p>
<p><a href="#HEALPIX_RING_WEIGHT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
NAME:
 HEALPIX_CL()
PURPOSE: 
 A rapid power spectrum computation code.
 Doesn't try to do *anything*
 fancy or clever --- just straight
 spherical transforms and averaging.
CALLING SEQUENCE:
 cl =  healpix_cl(data, [lmax=lmax], cross=cross_data)

 data === healpix array in ring format (can be multiple maps)
 lmax=lmax === lmax sent to healpix2alm
 cross === If you want to compute a cross power spectrum, 
           then send the second healpix map here. Must be the
           same resolution
REVISION HISTORY:
 Nikhil Padmanabhan, Princeton, August 25, 2003
 Updated documentation, B. A. Weaver, NYU, 2011-11-30
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/healpix/healpix_cl.pro">$IDLUTILS_DIR/pro/healpix/healpix_cl.pro</a>)</strong></p>
<hr />
<h3 id="HEALPIX_RING_WEIGHT">HEALPIX_RING_WEIGHT</h3>
<p><a href="#HEALPIX_CL_F">[Previous Routine]</a></p>
<p><a href="#HEAL_REBIN">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   healpix_ring_weight

 PURPOSE:
   read healpix ring weight files

 CALLING SEQUENCE:
   wt = healpix_ring_weight(nside, iring=iring)

 INPUTS:
   nside   - healpix nside
   
 OUTPUTS:
   wt = the ring weights (4*nside-1 element array)

 OPTIONAL OUTPUTS:
   iring = ring number index array for each pixel (12*nside^2 array)
   
 RESTRICTIONS:
   breaks at nside &gt; 8192

 BUGS:
   The method of computing iring is really dumb and slow, but works. 
   
 COMMENTS:
   Gorski stores weight-1 as a float; we return weight as a double.
   Because the weight array is symmetric, Gorski only stores half; we 
     return the whole array for simplicity. 
   The new mrdfits() (in v5_0_2b) replaces a &quot; &quot; in binary fits table
   field names with &quot;_&quot; instead of removing it.  Current version of
   this routine works with both new and old mrdfits().
   
 REVISION HISTORY:
   2003-Mar-11  Written by Douglas Finkbeiner, Princeton
   2003-Nov-12  Cache outputs - DPF &amp; NP
   2004-Aug-09  Fix fatal bug with new mrdfits().

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/healpix/healpix_ring_weight.pro">$IDLUTILS_DIR/pro/healpix/healpix_ring_weight.pro</a>)</strong></p>
<hr />
<h3 id="HEAL_REBIN">HEAL_REBIN</h3>
<p><a href="#HEALPIX_RING_WEIGHT">[Previous Routine]</a></p>
<p><a href="#HEAL_SMOOTH">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   heal_rebin

 PURPOSE:
   rebin ring ordered healpix maps to different Nside

 CALLING SEQUENCE:
   newmap = heal_rebin(oldmap, newnside)

 INPUTS:
   oldmap   - original map, ring order

 OUTPUTS:
   newmap   - new rebinned map, ring order

 EXAMPLES:
   
 COMMENTS:
   Only call with ring-ordered maps.
   Use IDL rebin() if your map is already nested order. 

 REVISION HISTORY:
   2003-Dec-04  Written by Douglas Finkbeiner, Princeton

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/healpix/heal_rebin.pro">$IDLUTILS_DIR/pro/healpix/heal_rebin.pro</a>)</strong></p>
<hr />
<h3 id="HEAL_SMOOTH">HEAL_SMOOTH</h3>
<p><a href="#HEAL_REBIN">[Previous Routine]</a></p>
<p><a href="#HELIOCENTRIC">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   heal_smooth

 PURPOSE:
   Smooth ring-ordered healpix maps with spherical harmonic convolution

 CALLING SEQUENCE:
   smooth_map = heal_smooth(map, fwhm_arcmin, nside=, alm=, lmax= )

 INPUTS:
   map         - healpix map
   fwhm_arcmin - fwhm of gaussian smoothing kernel (arcmin)
   nside       - set if map not set and alms passed
   alm         - set if alms already known (saves time)
   lmax        - maximum l value to use

 OPTIONAL INPUTS:
   
 KEYWORDS:
   
 OUTPUTS:
   
 OPTIONAL OUTPUTS:
   
 EXAMPLES:
   
 COMMENTS:
   Input maps must be ring ordered - use nest2ring otherwise
   
 REVISION HISTORY:
   2003-Mar-14  Written by Douglas Finkbeiner, Princeton
   2004-Aug-16  Avoid floating underflow in beam transform - DPF
   2009-Jun-09  Handle multiple maps - EFS

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/healpix/heal_smooth.pro">$IDLUTILS_DIR/pro/healpix/heal_smooth.pro</a>)</strong></p>
<hr />
<h3 id="HELIOCENTRIC">HELIOCENTRIC</h3>
<p><a href="#HEAL_SMOOTH">[Previous Routine]</a></p>
<p><a href="#HELIO_TO_LG">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   heliocentric

 PURPOSE:
   Compute correction term to add to velocities to convert to heliocentric.

 CALLING SEQUENCE:
   vcorr = heliocentric( ra, dec, [ epoch, jd=, tai=, $
    longitude=, latitude=, altitude= ] )

 INPUTS:
   ra             - Right ascension [degrees]
   dec            - Declination [degrees]
   epoch          - Epoch of observation for RA, DEC; default to 2000.

 OPTIONAL KEYWORDS:
   jd             - Decimal Julian date.  Note this should probably be
                    type DOUBLE.
   tai            - Number of seconds since Nov 17 1858; either JD or TAI
                    must be specified.  Note this should probably either
                    be type DOUBLE or LONG64.
   longitude      - Longitude of observatory;
                    default to (360-105.820417) deg for APO
   latitute       - Latitude of observatory; default to 32.780361 deg for APO
   altitude       - Altitude of observatory in meters;
                    default to 2788 m for APO

 OUTPUTS:
   vcorr          - Velocity correction term, in km/s, to add to measured
                    radial velocity to convert it to the heliocentric frame.

 OPTIONAL OUTPUTS:

 COMMENTS:

 EXAMPLES:

 BUGS:

 PROCEDURES CALLED:
   baryvel
   ct2lst

 REVISION HISTORY:
   09-May-2000  Written by S. Burles &amp; D. Schlegel
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/coord/heliocentric.pro">$IDLUTILS_DIR/pro/coord/heliocentric.pro</a>)</strong></p>
<hr />
<h3 id="HELIO_TO_LG">HELIO_TO_LG</h3>
<p><a href="#HELIOCENTRIC">[Previous Routine]</a></p>
<p><a href="#HMS2DEC">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   helio_to_lg
 PURPOSE:
   Convert heliocentric redshifts to Local-Group-centric redshifts.
 CALLING SEQUENCE:
   z_lg = helio_to_lg(z_helio,ra,dec)
 INPUTS:
   z_helio   - heliocentric redshift
   RA        - right ascension (deg, J2000)
   Dec       - declination (deg, J2000)
 OUTPUTS:
   z_lg      - local-group-centric redshift
 REVISION HISTORY:
   Originally imported by Hogg, 2002-08 or so.
   MRB corrected sign error in correction 2004-04-08 (affected tags
   v5_0_0 and previous)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/coord/helio_to_lg.pro">$IDLUTILS_DIR/pro/coord/helio_to_lg.pro</a>)</strong></p>
<hr />
<h3 id="HMS2DEC">HMS2DEC</h3>
<p><a href="#HELIO_TO_LG">[Previous Routine]</a></p>
<p><a href="#HOGG_ARROW">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   hms2dec

 PURPOSE:
   convert base-sixty string to decimal

 CALLING SEQUENCE:
   decimal = hms2dec(hmsstring)

 INPUTS:
   hmsstring - e.g. 'HH:MM:SS.S' or 'HHhMMmSS.S' or 'HH MM SS.S' etc. 

 OUTPUTS:
   decimal  - double-precision decimal number

 RESTRICTIONS:
   
 EXAMPLES:
   ra = hms2dec(ra_string)*15

 COMMENTS:
   The strpos() loop below looks awkward but is probably a lot 
    faster than repstr()
   I left most of the 20th century code intact, so I wouldn't
    introduce any change in behavior. 

 REVISION HISTORY:
   Written by Douglas Finkbeiner in ancient times
   2000-Nov-29 fixed to handle &quot;d&quot; properly! - DPF
   2005-Sep-16 call self recursively for array - DPF

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/coord/hms2dec.pro">$IDLUTILS_DIR/pro/coord/hms2dec.pro</a>)</strong></p>
<hr />
<h3 id="HOGG_ARROW">HOGG_ARROW</h3>
<p><a href="#HMS2DEC">[Previous Routine]</a></p>
<p><a href="#HOGG_AUTOCROP_IMAGE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
	Hogg_ARROW
 PURPOSE:
	Draw a vector(s) with an arrow head
 CATEGORY:
	Graphics
 CALLING SEQUENCE:
	Hogg_ARROW, x0, y0, x1, y1
 INPUTS:
	(x0, y0) = coordinates of beginning of vector(s).  May be arrays
		or scalars. Coordinates are in DEVICE coordinates
		unless otherwise specified.
	(x1, y1) = coordinates of endpoint (head) of vector.
		x0, y0, x1, y1 must all have the same number of elements.
 KEYWORD PARAMETERS:
	DATA - if set, implies that coordinates are in data coords.
	NORMALIZED - if set, coordinates are specified in normalized coords.
	HSIZE = size of arrowhead.  Default = 1/64th the width of the device,
		(!D.X_SIZE / 64.).
		If the size is positive, it is assumed to be in device
		coordinate units.  If it is NEGATIVE, then the head length
		is set to the vector length * abs(hsize), giving heads
		proportional in size to the bodies.  The size is defined as
		the length of each of the lines (separated by 60 degrees)
		that make the head.
	COLOR = drawing color.  Default = highest color index.
	HTHICK = thickness of heads.  Default = 1.0.
	SOLID = if set, make a solid arrow, using polygon fills, looks better
		for thick arrows.
	THICK = thickness of body.    Default = 1.0.
       HEAD_ANGLE = half-angle of arrow head in degrees.  Default = 30.0
 OUTPUTS:
	No explicit outputs.
 SIDE EFFECTS:
 RESTRICTIONS:
 PROCEDURE:
	Straightforward.
	Examples:
  		Draw an arrow from (100,150) to (300,350) in DEVICE units.
	Hogg_ARROW, 100, 150,  300, 350

		Draw a sine wave with arrows from the line Y=0 to
		sin(x/4).
	X = FINDGEN(50)
	Y = SIN(x/4)		;Make sin wave
	PLOT, X, Y
	Hogg_ARROW, X, REPLICATE(0,50), X, Y, /DATA
 MODIFICATION HISTORY:
	DMS, Feb, 1992.
	DMS, Sept, 1992.  Added /SOLID.
       2005-03-08 - added head_angle -- Hogg (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/hogg_arrow.pro">$IDLUTILS_DIR/pro/plot/hogg_arrow.pro</a>)</strong></p>
<hr />
<h3 id="HOGG_AUTOCROP_IMAGE">HOGG_AUTOCROP_IMAGE</h3>
<p><a href="#HOGG_ARROW">[Previous Routine]</a></p>
<p><a href="#HOGG_BWIFY">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   hogg_autocrop_image
 PURPOSE:
   remove whitespace border on image read by read_image
 INPUTS:
   image - [N,M] or [3,N,M] byte array representing an image
           surrounded by whitespace
 OPTIONAL OUTPUTS:
   xr,yr - output is image[xr[0]:xr[1],yr[0]:yr[1]] or image[3,xr[...]]
 OUTPUTS:
   image - cropped image
 REVISION HISTORY:
   2003-01-31  written - Hogg
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/hogg_autocrop_image.pro">$IDLUTILS_DIR/pro/plot/hogg_autocrop_image.pro</a>)</strong></p>
<hr />
<h3 id="HOGG_BWIFY">HOGG_BWIFY</h3>
<p><a href="#HOGG_AUTOCROP_IMAGE">[Previous Routine]</a></p>
<p><a href="#HOGG_CLOSE_OVERLAY">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   hogg_bwify
 PURPOSE:
   make b/w JPG image from color JPG image
 INPUTS:
   infile       - file name of color image
   outfile      - file name for b/w image
 OPTIONAL INPUTS:
   rebinfactor  - make outfile smaller by factor rebinfactor
 BUGS:
   - Just uses the r image; it should have various options for how to
     make the b/w image from the color one.
   - Always inverts; this should be an option.
 REVISION HISTORY:
   2004-01-07  commented - Hogg
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/rgbcolor/hogg_bwify.pro">$IDLUTILS_DIR/pro/rgbcolor/hogg_bwify.pro</a>)</strong></p>
<hr />
<h3 id="HOGG_CLOSE_OVERLAY">HOGG_CLOSE_OVERLAY</h3>
<p><a href="#HOGG_BWIFY">[Previous Routine]</a></p>
<p><a href="#HOGG_DIRECTIONS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
  hogg_close_overlay
 PURPOSE:
  close Z buffer and output contents to an image for overlaying
 INPUTS:
  naxis        - [naxis1,naxis2] size of image
 OUTPUTS:
  overlay      - image containing the overlay!
 BUGS:
  - Code not written.
  - Header not written.
  - Ought to restore saved !P,!X,!Y variables.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/rgbcolor/hogg_close_overlay.pro">$IDLUTILS_DIR/pro/rgbcolor/hogg_close_overlay.pro</a>)</strong></p>
<hr />
<h3 id="HOGG_DIRECTIONS">HOGG_DIRECTIONS</h3>
<p><a href="#HOGG_CLOSE_OVERLAY">[Previous Routine]</a></p>
<p><a href="#HOGG_GREYSCALE_PLOT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   hogg_directions
 PURPOSE:
   Overplot directions to other sky locations on a picture of the
   sky.
 INPUTS:
   aref,dref  - reference RA,Dec
   aa,dd      - RA,Dec lists for things to point to
   name       - list of names of those things
   hdr        - FITS header with relevant astrometry structure
 OPTIONAL INPUTS:
   length     - length of arrows in degrees; default 1/60
 OUTPUTS:
   [overlay on currently open plot]
 BUGS:
   - Not tested.
   - Doesn't work with GSSS headers.
   - Hacks from nw_ad_grid duplicated here, stupidly.
 REVISION HISTORY:
   2005-09-11  started - Hogg (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/rgbcolor/hogg_directions.pro">$IDLUTILS_DIR/pro/rgbcolor/hogg_directions.pro</a>)</strong></p>
<hr />
<h3 id="HOGG_GREYSCALE_PLOT">HOGG_GREYSCALE_PLOT</h3>
<p><a href="#HOGG_DIRECTIONS">[Previous Routine]</a></p>
<p><a href="#HOGG_HEALPIX_GREYSCALE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   hogg_greyscale_plot
 PURPOSE:
   Make a pretty greyscale plot from an astronomical image.
 CALLING SEQUENCE:
   hogg_greyscale_plot, data,filename
 INPUTS:
   data       the image
   filename   name for the output PostScript file
 OPTIONAL INPUTS:
   pixscale   units per pixel, eg arcmin/pixel; default 1.0
   scalename  units, eg &quot;arcmin&quot;; default &quot;pixels&quot;
   lo,hi      levels to appear totally black (lo) and totally white (hi)
              (these are in terms of sigma if sigma keyword is set); if
              hi&lt;lo, the image is made negative
   title      title for the plot
   xpt,ypt    x and y vectors of points to overplot -- set symbols with
                psym and !P.SYMSIZE
   psym       plotting symbol (may be vector)
 OUTPUTS:
 KEYWORDS:
   sigma      when set, take lo and hi to be in terms of the sigma in the
              center part of the image from djs_iterstat, and relative to the
              mean from iterstat
   noaxes     don't plot axes and labels
 COMMENTS:
   The source code can be easily modified to include contouring.  In fact
   the next revision ought to add optional contouring keywords and inputs.
 BUGS/FEATURES:
   There may be something wrong with the axes; check few-pixel images.
   No contouring available (but see &quot;COMMENTS&quot; and the source code).
   Probably doesn't work on multi-plot pages; not really checked.
 REVISION HISTORY:
   1999-08-01  Written - Hogg
   2001-05-01  Fonts improved - Hogg
   2002-09-16  Added overplotting - Hogg
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/hogg_greyscale_plot.pro">$IDLUTILS_DIR/pro/plot/hogg_greyscale_plot.pro</a>)</strong></p>
<hr />
<h3 id="HOGG_HEALPIX_GREYSCALE">HOGG_HEALPIX_GREYSCALE</h3>
<p><a href="#HOGG_GREYSCALE_PLOT">[Previous Routine]</a></p>
<p><a href="#HOGG_HISTOGRAM">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
  hogg_healpix_greyscale
 PURPOSE:
  make a greyscale plot from a healpix array
 BUGS:
  - Assumes &quot;ring&quot; ordering.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/healpix/hogg_healpix_greyscale.pro">$IDLUTILS_DIR/pro/healpix/hogg_healpix_greyscale.pro</a>)</strong></p>
<hr />
<h3 id="HOGG_HISTOGRAM">HOGG_HISTOGRAM</h3>
<p><a href="#HOGG_HEALPIX_GREYSCALE">[Previous Routine]</a></p>
<p><a href="#HOGG_IAU_NAME">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   hogg_histogram
 PURPOSE:
   Multi-dimensional histogramming function.
 CALLING SEQUENCE:
   hist = hogg_histogram(data,range,nbin,weight=weight,err=err)
 INPUTS:
   data     - [d,M] array of d-dimensional data values
   range    - [2,d] min and max value for every dimension
   nbin     - [d] array of numbers of bins in each direction
 OPTIONAL INPUTS:
   weight   - [M] array of weights for the data points
 OUTPUTS:
   hist     - [d,P] array of numbers of points (or total weight) in each bin
 OPTIONAL OUTPUTS:
   err      - [d,P] array of Poisson errors
 BUGS:
   Slow -- very slow.
   Not memory-efficient.
   Doesn't deal well with small bin sizes.
   Doesn't output grid bin positions.
 COMMENTS:
   Doesn't divide by bin &quot;volumes&quot;.
 REVISION HISTORY:
   2003-07-17  written - Hogg (NYU and NYC Criminal Court)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/image/hogg_histogram.pro">$IDLUTILS_DIR/pro/image/hogg_histogram.pro</a>)</strong></p>
<hr />
<h3 id="HOGG_IAU_NAME">HOGG_IAU_NAME</h3>
<p><a href="#HOGG_HISTOGRAM">[Previous Routine]</a></p>
<p><a href="#HOGG_IMAGE_OVERLAY">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   hogg_iau_name
 PURPOSE:
   properly format astronomical source names to the IAU convention
 INPUTS:
   ra         - J2000 deg
   dec        - J2000 deg
   prefix     - survey prefix
 OPTIONAL INPUTS:
   precision  - how many decimal places to put on dec; ra gets one more
 COMMENTS:
   Defaults to SDSS name conventions.
   Don't EVER use goddard/pro/astro/adstring.pro.
 BUGS:
   Enforces J2000 &quot;J&quot;.
   Doesn't deal properly with precision&lt;0 names, which *can* exist.
 REVISION HISTORY:
   2004-10-24  started by Hogg (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/hogg_iau_name.pro">$IDLUTILS_DIR/pro/misc/hogg_iau_name.pro</a>)</strong></p>
<hr />
<h3 id="HOGG_IMAGE_OVERLAY">HOGG_IMAGE_OVERLAY</h3>
<p><a href="#HOGG_IAU_NAME">[Previous Routine]</a></p>
<p><a href="#HOGG_IMAGE_OVERLAY_PLOT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   hogg_image_overlay
 PURPOSE:
   Bitmap PostScript file to make an image overlay.
 CALLING SEQUENCE:
   overlay= hogg_image_overlay(psfile,naxis1,naxis2)
 EXAMPLES:
 INPUTS:
   psfile     - input filename
   naxis1     - width in pixels to make overlay
   naxis2     - height in pixels
 OPTIONAL INPUTS:
   factor     - integer factor to use for antialiasing; default 2;
                set to 1 for no antialiasing
 OUTPUT:
   overlay    - overlay with plot material added
 COMMENTS:
 BUGS:
   - Relies on horrifying UNIX bitmapping code.
   - Makes insecure intermediate PPM file.
 DEPENDENCIES:
   pstopnm etc
 REVISION HISTORY:
   2004-02-28  written - Hogg
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/rgbcolor/hogg_image_overlay.pro">$IDLUTILS_DIR/pro/rgbcolor/hogg_image_overlay.pro</a>)</strong></p>
<hr />
<h3 id="HOGG_IMAGE_OVERLAY_PLOT">HOGG_IMAGE_OVERLAY_PLOT</h3>
<p><a href="#HOGG_IMAGE_OVERLAY">[Previous Routine]</a></p>
<p><a href="#HOGG_INTERVAL">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   hogg_image_overlay_plot
 PURPOSE:
   Make bitmapped overlay for rgb images.
 CALLING SEQUENCE:
   hogg_image_overlay_plot, xx,yy,naxis1,naxis2,overlay, $
                            [extras for plot procedure]
 EXAMPLES:
 INPUTS:
   xx,yy      - points to plot
   naxis1     - width in pixels to make overlay
   naxis2     - height in pixels
   overlay    - overlay to be added to (fine if not set)
   [extras]   - plotting inputs, just like for &quot;plot&quot; procedure
 OPTIONAL INPUTS:
   factor     - integer factor to use for antialiasing; default 2;
                set to 1 for no antialiasing
 OUTPUT:
   overlay    - overlay with plot material added
 COMMENTS:
   - Never makes axes!
 BUGS:
   - Relies on horrifying UNIX bitmapping code.
   - Makes insecure intermediate PS file.
 DEPENDENCIES:
   pstopnm etc
 REVISION HISTORY:
   2004-02-28  written - Hogg
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/rgbcolor/hogg_image_overlay_plot.pro">$IDLUTILS_DIR/pro/rgbcolor/hogg_image_overlay_plot.pro</a>)</strong></p>
<hr />
<h3 id="HOGG_INTERVAL">HOGG_INTERVAL</h3>
<p><a href="#HOGG_IMAGE_OVERLAY_PLOT">[Previous Routine]</a></p>
<p><a href="#HOGG_ITERATED_AD2XY">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   hogg_interval
 PURPOSE:
   find best interval for tickmarks on a plot
 INPUTS:
   range     - the range for the axis
 OPTIONAL INPUTS:
   nticks    - the approximate, desired number of ticks; default 5
 BUGS:
   Goes insane if range contains NaN.
 REVISION HISTORY:
   2002-03-25  written - Hogg
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/hogg_interval.pro">$IDLUTILS_DIR/pro/plot/hogg_interval.pro</a>)</strong></p>
<hr />
<h3 id="HOGG_ITERATED_AD2XY">HOGG_ITERATED_AD2XY</h3>
<p><a href="#HOGG_INTERVAL">[Previous Routine]</a></p>
<p><a href="#HOGG_ITER_LINFIT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   hogg_iterated_ad2xy
 PURPOSE:
   Same as ad2xy, but assuming that xy2ad is perfect.
 COMMENTS:
   Starts with a first guess that everything is at (x,y)=(0,0) and
     then uses Newton's method to iterate to the correct (x,y)
     values.
 INPUTS:
   a,d    - vectors of RA,Dec
   astr   - astrometric structure
 OPTIONAL INPUTS:
   tol    - maximum allowed angular difference (deg) between input
            a,d values and the values obtained by running xy2ad on
            the output; default to 0.01/3600.0 (0.01 arcsec)
 OUTPUTS:
   x,y    - vectors of x,y
 REVISION HISTORY:
   2005-09-04  started - Hogg (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/astrom/hogg_iterated_ad2xy.pro">$IDLUTILS_DIR/pro/astrom/hogg_iterated_ad2xy.pro</a>)</strong></p>
<hr />
<h3 id="HOGG_ITER_LINFIT">HOGG_ITER_LINFIT</h3>
<p><a href="#HOGG_ITERATED_AD2XY">[Previous Routine]</a></p>
<p><a href="#HOGG_MAKE_ASTR">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   hogg_iter_linfit
 PURPOSE:
   Perform iterated linear least-squares fit with sigma-clipping.
 COMMENTS:
   Solves the over-constrained equation yy=aa##xx, where the yy are
     the &quot;data&quot; and the xx are the &quot;parameters&quot;.
 CALLING SEQUENCE:
   hogg_iter_linfit, aa,yy,ww,xx [,covar=covar]
 INPUTS:
   aa      - input matrix, either transposition is fine
   yy      - input vector of data in equation yy=aa##xx
   ww      - weights for the components of yy; should be proportional to
             (1/err^2); these are assumed to be exactly (1/err)^2 if keyword
             &quot;truesigma&quot; is set
 OPTIONAL INPUTS:
   nsigma  - number of sigma for clipping; defaults to 3.0
   maxiter - maximum number of clipping iterations; defaults to 100
 KEYWORDS
   median  - clip by deviation from median rather than from mean
   verbose - output blow-by-blow
   sacred  - don't update ww values to indicate clipped-out data points
   truesigma - don't rescale weights and covariance matrix -- assume that the
               supplied weights are exactly 1/sigma^2
 OUTPUTS:
   xx      - output parameters in equation yy=aa##xx
   covar   - covariance matrix for the fit parameters
   ww      - ww values set to zero where data points clipped, and re-
             scaled so that chisq^2 is unity per degree of freedom, unless
             keyword &quot;sacred&quot; is set
 EXAMPLE:
   Linear regression of ydata (with inverse variance ydata_ivar) on
   xdata, with 5-sigma clipping:
     aa= dblarr(2,n_elements(xdata))
     aa[0,*]=1.D0
     aa[1,*]=xdata
     hogg_iter_linfit, aa, ydata, ydata_ivar, coeffs, covar=covar, nsigma=5
   Resulting coefficients are in coeffs[0] and coeffs[1] 
 BUGS:
   Covariance matrix is an approximation which assumes that the rms of the
     fit is consistent with the errors in the yy, or something like that.
     This could be changed if the input weights were always the true
     1/sigma^2 values.
 REVISION HISTORY:
   2000-Jun-03  written by Hogg, IAS
   2000-Jun-12  output covariance matrix - Hogg
   2000-Sep-06  added sacred keyword and updated ww matrix - Hogg
   2001-Apr-10  allow rejected points to return to fit - Hogg
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/hogg_iter_linfit.pro">$IDLUTILS_DIR/pro/math/hogg_iter_linfit.pro</a>)</strong></p>
<hr />
<h3 id="HOGG_MAKE_ASTR">HOGG_MAKE_ASTR</h3>
<p><a href="#HOGG_ITER_LINFIT">[Previous Routine]</a></p>
<p><a href="#HOGG_MAKE_IMAGE_LABEL">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   hogg_make_astr
 PURPOSE:
   Generate the astrometric WCS for a particular pointing and
   orientation.
 COMMENTS:
   Adds NAXIS to the astrom structure.
 CALLING SEQUENCE:
   astr= hogg_make_astr(racen,deccen,dra,ddec $
                        [,pixscale=pixscale] [etc])
 INPUTS:
   racen    - Central RA [deg]
   deccen   - Central DEC [deg]
   dra      - Size in the X dimension; default to 0.5 deg
   ddec     - Size in the Y dimension; default to 0.5 deg

 OPTIONAL INPUTS:
   pixscale    - Pixel scale (deg); default 1.0/3600
   orientation - angle (deg) for the north vector to make relative to
                 straight up (y direction), CCW being positive
   npixround   - round array dimensions (naxis1 and naxis2) to nearest
                 factor of npixround; default to 8.
 KEYWORDS:
   orthographic  - Make orthographic &quot;-SIN&quot; not gnomonic &quot;-TAN&quot; WCS
   mercator      - Make mercator &quot;-MER&quot; not gnomonic &quot;-TAN&quot; WCS
 OUTPUTS:
   astr     - Astrometry structure with NAXIS keyword added
 OPTIONAL OUTPUTS:
   pixscale  - Set, if not input
 EXAMPLES:
 BUGS:
 REVISION HISTORY:
   2003-Nov-21   Written by D. Schlegel (Princeton) &amp; D. Hogg (NYU)
   2003-Dec-02   Modified to produce simpler headers - Hogg
   2004-Apr-18   Use make_astr to define astrom structure - DPF
   2004-Jun-17   Make &quot;orthographic&quot; headers - Hogg
   2005-Aug-31   Changed name and put into idlutils - Hogg
   2007-Feb-22   Make mercator headers - Hogg
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/astrom/hogg_make_astr.pro">$IDLUTILS_DIR/pro/astrom/hogg_make_astr.pro</a>)</strong></p>
<hr />
<h3 id="HOGG_MAKE_IMAGE_LABEL">HOGG_MAKE_IMAGE_LABEL</h3>
<p><a href="#HOGG_MAKE_ASTR">[Previous Routine]</a></p>
<p><a href="#HOGG_MANYD_MEANPLOT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   hogg_make_image_label
 PURPOSE:
   make text label for RGB images
 CALLING SEQUENCE:
   label= hogg_make_image_label(title,naxis1, [subtitle1=,subtitle2=])
 EXAMPLES:
   label= hogg_make_image_label('M51',2048, $
     subtitle1='data from the Sloan Digital Sky Survey', $
     subtitle2='image by Hogg, Wherry, Blanton, Finkbeiner, Schlegel')
 INPUTS:
   title      - main title text
   naxis1     - width in pixels to make the label
 OPTIONAL INPUTS:
   subtitle1  - first subtitle
   subtitle2  - second subtitle; defaults to idlutils plug
 OUTPUT:
   label      - [naxis1,n2] image containing text
 COMMENTS:
 BUGS:
   - Format and label padding all hard-wired.
   - Makes insecure temporary LaTeX file etc.
   - Relies on horrifying UNIX bitmapping code.
   - Slightly odd behavior if subtitles 1 and 2 are both empty.
 DEPENDENCIES:
   LaTeX etc
   pstopnm etc
 REVISION HISTORY:
   2003-12-05  written - Hogg
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/rgbcolor/hogg_make_image_label.pro">$IDLUTILS_DIR/pro/rgbcolor/hogg_make_image_label.pro</a>)</strong></p>
<hr />
<h3 id="HOGG_MANYD_MEANPLOT">HOGG_MANYD_MEANPLOT</h3>
<p><a href="#HOGG_MAKE_IMAGE_LABEL">[Previous Routine]</a></p>
<p><a href="#HOGG_MANYD_SCATTERPLOT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   hogg_manyd_meanplot
 PURPOSE:
   plot N+1-dimensional data sets, in the mean!
 INPUTS:
   weight       [N] array of data-point weights
   point        [d,N] array of data points - N vectors of dimension d
   zdim         index of quantity to be averaged in the plots
   psfilename   name for PostScript file; if no filename is given, then the
                  plots will simply be sent to the currently active device
 OPTIONAL INPUTS:
   nsig         number of sigma for half-width of each plot; default 5
   dbin         [d] array of bin widths for averaging
   label        [d] array of axis labels; default 'x_i'
   range        [2,d] array of plotting ranges
   xdims,ydims  indices of data dimensions to use on each x and y axis
   axis_char_scale size of characters on labels
   default_font font command to send to set font for plotting
 KEYWORDS:
   [etc]        [options for hogg_meanplot, see documentation]
 OUTPUTS:
 OPTIONAL OUTPUTS:
 BUGS:
   WAY too much duplicated code with hogg_manyd_scatterplot.
 DEPENDENCIES:
 REVISION HISTORY:
   2003-01-12  translated from hogg_manyd_scatterplot
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/hogg_manyd_meanplot.pro">$IDLUTILS_DIR/pro/plot/hogg_manyd_meanplot.pro</a>)</strong></p>
<hr />
<h3 id="HOGG_MANYD_SCATTERPLOT">HOGG_MANYD_SCATTERPLOT</h3>
<p><a href="#HOGG_MANYD_MEANPLOT">[Previous Routine]</a></p>
<p><a href="#HOGG_MCMC">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   hogg_manyd_scatterplot
 PURPOSE:
   plot N-dimensional data sets
 INPUTS:
   weight       [N] array of data-point weights
   point        [d,N] array of data points - N vectors of dimension d
   psfilename   name for PostScript file; if no filename is given, then the
                  plots will simply be sent to the currently active device
 OPTIONAL INPUTS:
   nsig         number of sigma for half-width of each plot; default 5
   label        [d] array of axis labels; default 'x_i'
   range        [2,d] array of plotting ranges
   xdims,ydims  indices of data dimensions to use on each x and y axis
   axis_char_scale size of characters on labels
   default_font font command to send to set font for plotting
   extrafun     name of procedure to call after each plot for overplotting
                (procedure takes two inputs: d1 and d2 indicating
                x and y dimensions of the current plot)
   title        puts string title on top of page
 KEYWORDS:
   nodata       don't plot anything at all, just axes!
   meanweight      - plot the mean of the weight values that land in
                     that pixel, rather than the total; don't use
                     with /conditional!
   [etc]        [options for hogg_scatterplot, see documentation]
 OUTPUTS:
 OPTIONAL OUTPUTS:
   manyd        [nx,ny,NX,NY] data
 BUGS:
   Can get infinite plot ranges.
 COMMENTS:
   XDIMS and YDIMS can either be:
     (a) [N] arrays, yielding an NxN set of plots of xdims[0] vs
         ydims[0], xdims[0] vs ydims[1], etc up to xdims[n-1] vs
         ydims[n-1]; OR
     (b) [N,M] arrays, yielding an NxM set of plots of xdims[0,0] vs
         ydims[0,0], xdims[0,1] vs ydims[0,1] etc.
 DEPENDENCIES:
   hogg_plot_defaults
   hogg_scatterplot
   plus much, much more
 REVISION HISTORY:
   2002-12-14  re-constructed from ex_max_plot -- Hogg
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/hogg_manyd_scatterplot.pro">$IDLUTILS_DIR/pro/plot/hogg_manyd_scatterplot.pro</a>)</strong></p>
<hr />
<h3 id="HOGG_MCMC">HOGG_MCMC</h3>
<p><a href="#HOGG_MANYD_SCATTERPLOT">[Previous Routine]</a></p>
<p><a href="#HOGG_MCMC_STEP">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   hogg_mcmc
 PURPOSE:
   Make a Markov Chain Monte Carlo chain.
 INPUTS:
   seed       - random number seed for randomu()
   step_func  - function that takes a step in parameter space
   like_func  - function that computes the likelihood
   nstep      - number of links
   pars       - initial parameters (can be an array or structure)
 KEYWORDS:
   log        - like_func returns log_e(likelihood), not straight
                likelihood
 OUTPUTS:
   pars       - array of parameters, sorted from most to least likely
   like       - array of likelihoods for the pars
 BUGS:
 REVISION HISTORY:
   2005-03-31  started - Hogg
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mcmc/hogg_mcmc.pro">$IDLUTILS_DIR/pro/mcmc/hogg_mcmc.pro</a>)</strong></p>
<hr />
<h3 id="HOGG_MCMC_STEP">HOGG_MCMC_STEP</h3>
<p><a href="#HOGG_MCMC">[Previous Routine]</a></p>
<p><a href="#HOGG_MCMC_TEST">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   hogg_mcmc_step
 PURPOSE:
   Make one step in a Markov Chain Monte Carlo.
 INPUTS:
   seed       - random number seed for randomu()
   pars       - initial parameters (can be an array or structure)
   like       - initial likelihood
   step_func  - function that takes a step in parameter space
   like_func  - function that computes the likelihood
 KEYWORDS:
   log        - like_func returns log_e(likelihood), not straight
                likelihood
 OUTPUTS:
   newpars    - new parameters
   newlike    - new likelihood
 BUGS:
 REVISION HISTORY:
   2005-03-31  started - Hogg
   2006-02-28  HUGE bug fixed - Masjedi
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mcmc/hogg_mcmc_step.pro">$IDLUTILS_DIR/pro/mcmc/hogg_mcmc_step.pro</a>)</strong></p>
<hr />
<h3 id="HOGG_MCMC_TEST">HOGG_MCMC_TEST</h3>
<p><a href="#HOGG_MCMC_STEP">[Previous Routine]</a></p>
<p><a href="#HOGG_MEANPLOT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   hogg_mcmc_test
 PURPOSE:
   Test the hogg_mcmc code.
 REVISION HISTORY:
   2005-03-31  started - Hogg
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mcmc/hogg_mcmc_test.pro">$IDLUTILS_DIR/pro/mcmc/hogg_mcmc_test.pro</a>)</strong></p>
<hr />
<h3 id="HOGG_MEANPLOT">HOGG_MEANPLOT</h3>
<p><a href="#HOGG_MCMC_TEST">[Previous Routine]</a></p>
<p><a href="#HOGG_MRDFITS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   hogg_meanplot
 PURPOSE:
   plot sliding mean of one quantity vs two others
 COMMENTS:
   Doesn't overplot -- only plots.  This is because IDL blots
     out any other information on the plot anyway.
 INPUTS:
   x,y         - data values
   z           - quantity to average
 OPTIONAL INPUTS:
   weight      - weighting for data points; default unity
   xrange      - x range; default to the number &gt; minnum area
   yrange      - y range; same default
   dxbin       - size of boxes in x-dir; default to a function of
                 first and second moments 
   dybin       - size of boxes in y-dir; same default
   levels      - contour levels; default to a function of image range
   minnum      - minimum number of points in a sliding box to plot;
                 default 100
   c_colors    - fill colors
   c_thick     - contour line thicknesses
   axis_char_scale - scale to apply to axis labels
   nearest     - take mean over nearest few points based on this number
                 (instead of a fixed smoothing scale)
 KEYWORDS:
   nofill      - don't fill the contours with color
   noperimeter - don't plot contour at minnum
   nobox       - don't plot box
   nolines     - don't plot lines between contours
   nodata      - don't plot anything other than axes
   maskonly    - plot only the minnum mask
   nocontourlabels  - don't label the contours
   input_mean  - don't recalculate means, use input in bin_mean
   overplot    - don't remake axes, just plot over
 OPTIONAL INPUT/OUTPUTS:
   bin_mean    - calculated mean value (or input mean value if 
                 /input_mean set) in each bin
   bin_scatter - calculated scatter around the mean in each bin
   bin_weight  - total weight in each bin
   bin_number  - total number of data points in each bin
 COMMENTS:
   &quot;nearest&quot; input should be used with caution --- this is generally
     a BAD way to smooth!
 REVISION HISTORY:
   2003-01-08  written - Hogg
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/hogg_meanplot.pro">$IDLUTILS_DIR/pro/plot/hogg_meanplot.pro</a>)</strong></p>
<hr />
<h3 id="HOGG_MRDFITS">HOGG_MRDFITS</h3>
<p><a href="#HOGG_MEANPLOT">[Previous Routine]</a></p>
<p><a href="#HOGG_NAME2RADEC">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   HOGG_MRDFITS
 PURPOSE:
   Wrapper on MRDFITS() to read in a FITS file one chunk at a time
 CALLING SEQUENCE:
 INPUTS:
   see MRDFITS
 KEYWORDS:
   see MRDFITS
   nrowchunk  - Number of rows to read at a time; default to 2880
   nchunk     - Number of chunks to read; this keyword takes precedence
                over NROWCHUNk
 COMMENTS:
   Useful when &quot;columns&quot; is set, so you can get a couple
   of columns without holding the whole file in memory
 OUTPUTS:
   see MRDFITS
 REVISION HISTORY:
   2002-02-08  written by Hogg
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/fits/hogg_mrdfits.pro">$IDLUTILS_DIR/pro/fits/hogg_mrdfits.pro</a>)</strong></p>
<hr />
<h3 id="HOGG_NAME2RADEC">HOGG_NAME2RADEC</h3>
<p><a href="#HOGG_MRDFITS">[Previous Routine]</a></p>
<p><a href="#HOGG_NED_NAME2RADEC">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   hogg_name2radec
 PURPOSE:
   Takes properly-formatted iau name in &quot;J&quot; format and converts it into ra,dec
   USE AT YOUR OWN RISK; NO IMPLIED WARRANTY
 EXAMPLES:
   IDL&gt; hogg_name2radec, 'SDSS_J013713.84-092820.4',ra,dec
   IDL&gt; print, ra,dec
        24.307671      -9.4723336
   IDL&gt; print, hogg_iau_name(ra,dec)
   SDSS J013713.84-092820.4
 INPUTS:
   name       - name
 OUTPUTS:
   ra         - J2000 deg
   dec        - J2000 deg
 OPTIONAL INPUTS:
 COMMENTS:
   Doesn't require anything particular *before* the J, but it assumes
     (dumbly) that the RA begins at the last J.
 BUGS:
   USE AT YOUR OWN RISK; NO IMPLIED WARRANTY
   Requires J2000 &quot;J&quot;.
   Ultra-brittle.
 REVISION HISTORY:
   2004-10-22  started by you know who
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/hogg_name2radec.pro">$IDLUTILS_DIR/pro/misc/hogg_name2radec.pro</a>)</strong></p>
<hr />
<h3 id="HOGG_NED_NAME2RADEC">HOGG_NED_NAME2RADEC</h3>
<p><a href="#HOGG_NAME2RADEC">[Previous Routine]</a></p>
<p><a href="#HOGG_OPEN_OVERLAY">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   hogg_ned_name2radec
 PURPOSE:
   Takes a name, throws it at NED, retreives RA, Dec (J2000)
   USE AT YOUR OWN RISK; NO IMPLIED WARRANTY
 INPUTS:
   name       - name
 OUTPUTS:
   ra         - J2000 deg
   dec        - J2000 deg
 OPTIONAL INPUTS:
 COMMENTS:
 BUGS:
   Does nasty things to the name to format it for URL-ifying.
   USE AT YOUR OWN RISK; NO IMPLIED WARRANTY.
   Relies on NED not changing in any substantial way!
 DEPENDENCIES:
   wget
 REVISION HISTORY:
   2005-02-01  started by you know who
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/hogg_ned_name2radec.pro">$IDLUTILS_DIR/pro/misc/hogg_ned_name2radec.pro</a>)</strong></p>
<hr />
<h3 id="HOGG_OPEN_OVERLAY">HOGG_OPEN_OVERLAY</h3>
<p><a href="#HOGG_NED_NAME2RADEC">[Previous Routine]</a></p>
<p><a href="#HOGG_OPLOT_COVAR">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
  hogg_open_overlay
 PURPOSE:
  open Z buffer for writing an image overlay plot
 INPUTS:
  naxis        - [naxis1,naxis2] size of image
 KEYWORDS:
  noantialias  - by default this uses very slow and memory-hogging
                 resampling for anti-aliasing
 BUGS:
  - Header not complete.
  - Line thicknesses and other crap hard-coded.
  - !P,!X,!Y variable over-written and not saved; keep in common block.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/rgbcolor/hogg_open_overlay.pro">$IDLUTILS_DIR/pro/rgbcolor/hogg_open_overlay.pro</a>)</strong></p>
<hr />
<h3 id="HOGG_OPLOT_COVAR">HOGG_OPLOT_COVAR</h3>
<p><a href="#HOGG_OPEN_OVERLAY">[Previous Routine]</a></p>
<p><a href="#HOGG_PLOTHIST">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   hogg_oplot_covar
 PURPOSE:
   Wrapper for oplot that plots covariance ellipses.
 CALLING SEQUENCE:
   hogg_oplot_covar, x,y,covar,...
 INPUT:
   x,y     - [N] arrays of points
   covar   - [2,2,N] array of symmetric covariance matrices
 KEYWORDS:
   fill    - make filled rather than outlined ellipses
 OPTIONAL INPUTS:
   nsigma  - plot n-sigma ellipse (default to 1)
   color   - color or vector of [N] colors
   thick   - line thickness or vector of [N] line thicknesses
   [keywords for IDL plot]
 COMMENTS:
   Allows color to be a [N] array.
 REVISION HISTORY:
   2002-04-11  written by Hogg
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/hogg_oplot_covar.pro">$IDLUTILS_DIR/pro/plot/hogg_oplot_covar.pro</a>)</strong></p>
<hr />
<h3 id="HOGG_PLOTHIST">HOGG_PLOTHIST</h3>
<p><a href="#HOGG_OPLOT_COVAR">[Previous Routine]</a></p>
<p><a href="#HOGG_PLOT_DEFAULTS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   hogg_plothist
 PURPOSE:
   plot histogram of weighted points
 INPUTS:
   x           - data values
 OPTIONAL INPUTS:
   weight      - weighting for data points; default unity
   npix        - number of bins in range
   xrange      - x range; default minmax(x)
   yrange      - y range; default chosen dumbly!
   [etc]       - extras passed to &quot;plot&quot; command
 KEYWORDS:
   overplot    - overplot, don't plot anew
   ploterr     - plot Poisson error bars too
   log         - take log_10 before plotting
   meanweight  - plot the mean of the weights in each bin rather than
                 the total of the weights; don't divide by binwidth
   totalweight - plot the total weight; don't divide by binwidth
   dontplot    - just calculate, do not plot anything
 OPTIONAL OUTPUTS:
   xvec        - [npix] vector of x values of grid pixel centers
   hist        - the histogram itself (ie, the total weight in each
                 bin divided by the binwidth).
   err         - the Poisson uncertainties on each point (ie, the
                 sqrt of the sum of the squares of the weights,
                 divided by the binwidth).
 COMMENTS:
   Divides total weight in each bin by binwidth, unless /totalweight
   or /meanweight is set.
 BUGS:
   Doesn't check inputs.
   Super-slow!
 REVISION HISTORY:
   2002-12-14  written -- Hogg
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/hogg_plothist.pro">$IDLUTILS_DIR/pro/plot/hogg_plothist.pro</a>)</strong></p>
<hr />
<h3 id="HOGG_PLOT_DEFAULTS">HOGG_PLOT_DEFAULTS</h3>
<p><a href="#HOGG_PLOTHIST">[Previous Routine]</a></p>
<p><a href="#HOGG_READ_POSTSCRIPT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   hogg_plot_defaults
 PURPOSE:
   Set plotting defaults for all &quot;hogg_&quot; plots
 CALLING SEQUENCE:
   hogg_plot_defaults
 REVISION HISTORY:
   2003-01-08  written - Hogg
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/hogg_plot_defaults.pro">$IDLUTILS_DIR/pro/plot/hogg_plot_defaults.pro</a>)</strong></p>
<hr />
<h3 id="HOGG_READ_POSTSCRIPT">HOGG_READ_POSTSCRIPT</h3>
<p><a href="#HOGG_PLOT_DEFAULTS">[Previous Routine]</a></p>
<p><a href="#HOGG_RGB_ENTROPY">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   hogg_read_postscript
 PURPOSE:
   read in a postscript file as an IDL data image
 INPUTS:
   filename
 OPTIONAL INPUTS:
   resolution   - in dots per inch; default 75
 KEYWORDS:
   noantialias  - don't do Hogg's antialiasing trick
 OUTPUTS:
   image        - [3,N,N] array of byte images for R,G,B planes
 BUGS:
   Makes DUMB temporary files; I am sure there is a way to make smart ones.
 REVISION HISTORY:
   2003-01-31  written - Hogg
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/hogg_read_postscript.pro">$IDLUTILS_DIR/pro/plot/hogg_read_postscript.pro</a>)</strong></p>
<hr />
<h3 id="HOGG_RGB_ENTROPY">HOGG_RGB_ENTROPY</h3>
<p><a href="#HOGG_READ_POSTSCRIPT">[Previous Routine]</a></p>
<p><a href="#HOGG_SCATTERPLOT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   hogg_rgb_entropy
 PURPOSE:
   Compute &quot;entropy&quot; of an RGB representation of an image
 INPUTS:
   colors    - [nx,ny,3] image of values in range [0.0,1.0]
   bits      - number of bits to assign per pixel per color (default 4)
 OUTPUT:
   entropy   - entropy of the representation
 BUGS:
 REVISION HISTORY:
   2004-03-20  started - Hogg
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/rgbcolor/hogg_rgb_entropy.pro">$IDLUTILS_DIR/pro/rgbcolor/hogg_rgb_entropy.pro</a>)</strong></p>
<hr />
<h3 id="HOGG_SCATTERPLOT">HOGG_SCATTERPLOT</h3>
<p><a href="#HOGG_RGB_ENTROPY">[Previous Routine]</a></p>
<p><a href="#HOGG_SKY_DIRECTION">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   hogg_scatterplot
 PURPOSE:
   plot greyscale scatterplot with contours
 COMMENTS:
   Doesn't overplot -- only plots.  This is because the IDL tvscl blots
     out any other information on the plot.
   Compares cumulated grid to the *total* weight -- ie, including points
     outside the range (which is what you want; trust me).
 INPUTS:
   x,y         - data values
 OPTIONAL INPUTS:
   weight      - weighting for data points; default unity
   xnpix       - width of greyscale grid in pixels; default 0.3*sqrt(N)
   ynpix       - height of greyscale grid in pixels; same default
   xrange      - x range; default minmax(x)
   yrange      - y range; default minmax(y)
   levels      - contour levels; default in source code
   quantiles   - quantiles to plot on conditional plot; default
                 [0.25,0.5,0.75]
   cthick      - thickness for contours
   exponent    - stretch greyscale at exponent power; default 1.0
   satfrac     - fraction of pixels to saturate in greyscale; default 0
   darkest     - darkest shade at saturation; default 127; lower darker
   outpsym    - NEEDS DOCUMENTATION
   outcolor   - NEEDS DOCUMENTATION
   outsymsize - NEEDS DOCUMENTATION
   grid        - input grid for running with &quot;/usegrid&quot;
   [etc]       - extras passed to &quot;plot&quot; command
 KEYWORDS:
   conditional     - normalize each column separately
   labelcont       - label contours with numbers
   internal_weight - use only the points in the image to determine
                     contours
   nocontours      - don't plot the contours
   nogreyscale     - don't plot the greyscale
   adqgreyscale    - do greyscale in the &quot;ADQ&quot; style (only works when
                     conditional is set)
   outliers        - NEEDS DOCUMENTATION
   meanweight      - plot the mean of the weight values that land in
                     that pixel, rather than the total; don't use
                     with /conditional!
   usegrid         - use input grid rather than compute from x,y;
                     over-rules x,y inputs; needs matched
                     xnpix,ynpix; brittle
 OPTIONAL OUTPUTS:
   xvec        - [xnpix] vector of x values of grid pixel centers
   yvec        - [ynpix] vector of y values of grid pixel centers
   grid        - the greyscale grid [xnpix,ynpix] that was plotted
   cumimage    - the cumulated grid [xnpix,ynpix] that was contoured
   outquantiles - the plotted quantiles (when /conditional is set)
   ioutliers   - indices of outlier points
 COMMENTS:
   When output, the grid is in units of unit_weight, not in 
   unit_weight per unit_x per unit_y (as you would want to do if 
   you wanted to directly compare two results using different
   resolution grids); the user will have to convert to that themselves.
 BUGS:
   Doesn't check inputs.
   Ought to specify saturation not as a fraction of pixels, but as a fraction
     of the total weight (ie, saturate inside a particular, specifiable
     confidence region).  This mod is trivial.
   Ought to specify min and max grey levels, and contour colors.
   Contour thicknesses hard-coded to unity.
 DEPENDENCIES:
   hogg_histogram
   plus much, much more
 REVISION HISTORY:
   2002-12-04  written --- Hogg
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/hogg_scatterplot.pro">$IDLUTILS_DIR/pro/plot/hogg_scatterplot.pro</a>)</strong></p>
<hr />
<h3 id="HOGG_SKY_DIRECTION">HOGG_SKY_DIRECTION</h3>
<p><a href="#HOGG_SCATTERPLOT">[Previous Routine]</a></p>
<p><a href="#HOGG_SNAP_INTEGER">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   hogg_sky_direction
 PURPOSE:
   Return the direction (Delta-alpha,Delta-delta) of one RA, Dec
   relative to a reference RA, Dec.
 CALLING SEQUENCE:
   hogg_sky_direction, aref,dref,ap,dp,Da,Dd
 INPUT:
   aref,dref  - reference RA,Dec
   ap,dp      - RA,Dec of the point to which the arrow points
 OUTPUT:
   Da         - Delta-alpha (small change in RA*cos(Dec)) for arrow
   Dd         - Delta-delta (small change in Dec) for arrow
 COMMENTS:
   - Da,Dd comprise a vector of arbitrary length; it is the user's
     responsibility to re-scale it.
   - Da is not a change in RA, but a change in RA*cos(Dec).
 BUGS:
   - Inputs must all be scalars or else hell breaks loose.
 REVISION HISTORY:
   2005-09-10  started - Hogg (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/coord/hogg_sky_direction.pro">$IDLUTILS_DIR/pro/coord/hogg_sky_direction.pro</a>)</strong></p>
<hr />
<h3 id="HOGG_SNAP_INTEGER">HOGG_SNAP_INTEGER</h3>
<p><a href="#HOGG_SKY_DIRECTION">[Previous Routine]</a></p>
<p><a href="#HOGG_STRSPLIT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   hogg_snap_integer
 PURPOSE:
   Randomly snap floats or doubles to nearest integers up and down so
     that the mean is correct on average.
 CALLING SEQUENCE:
   ii= hogg_snap_integer(seed,xx)
 INPUTS:
   seed - long seed for randomu
   xx   - array of floating point numbers
 OUTPUTS:
   ii   - array of integers
 BUGS:
   Relies on &quot;true&quot; being 1.
 REVISION HISTORY:
   2003-08-13  written - Hogg
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/hogg_snap_integer.pro">$IDLUTILS_DIR/pro/math/hogg_snap_integer.pro</a>)</strong></p>
<hr />
<h3 id="HOGG_STRSPLIT">HOGG_STRSPLIT</h3>
<p><a href="#HOGG_SNAP_INTEGER">[Previous Routine]</a></p>
<p><a href="#HOGG_TP_SHIFT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   hogg_strsplit
 PURPOSE:
   split strings on whitespace, except inside double quotes, plus other
     stuff specialized for yanny_read
 BUGS:
   demolishes the string
 REVISION HISTORY:
   2002-10-10  written - Hogg
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/yanny/hogg_strsplit.pro">$IDLUTILS_DIR/pro/yanny/hogg_strsplit.pro</a>)</strong></p>
<hr />
<h3 id="HOGG_TP_SHIFT">HOGG_TP_SHIFT</h3>
<p><a href="#HOGG_STRSPLIT">[Previous Routine]</a></p>
<p><a href="#HOGG_UNQUOTED_REGEX">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   hogg_tp_shift
 PURPOSE:
   Shift tangent point on the sphere (CRVAL, in RA, Dec units),
   adjusting simultaneously the CD matrix (to deal with coordinate
   issues near the celestial poles).  The idea is to shift the WCS
   without substantially rotating the tangent-plane coordinates, even
   when near the poles.
 INPUTS:
   astr   - astrometry structure
   crval  - new crval (tangent point on the sphere) to insert
 OUTPUTS:
          - new astrometry structure
 REVISION HISTORY:
   2005-08-21  started - Hogg (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/astrom/hogg_tp_shift.pro">$IDLUTILS_DIR/pro/astrom/hogg_tp_shift.pro</a>)</strong></p>
<hr />
<h3 id="HOGG_UNQUOTED_REGEX">HOGG_UNQUOTED_REGEX</h3>
<p><a href="#HOGG_TP_SHIFT">[Previous Routine]</a></p>
<p><a href="#HOGG_USERSYM">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   hogg_unquoted_regex
 PURPOSE:
   return the regex which matches the first occurence of the given
     regex not inside quotemarks
 INPUT:
   regex      - naked regular expression
 OPTIONAL INPUT:
   quotemark  - thing to use as the quotation mark, default to '&quot;'
 REVISION HISTORY:
   2002-10-11  written - Hogg
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/yanny/hogg_unquoted_regex.pro">$IDLUTILS_DIR/pro/yanny/hogg_unquoted_regex.pro</a>)</strong></p>
<hr />
<h3 id="HOGG_USERSYM">HOGG_USERSYM</h3>
<p><a href="#HOGG_UNQUOTED_REGEX">[Previous Routine]</a></p>
<p><a href="#HOGG_WEIGHTED_MEAN_SURFACE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   hogg_usersym
 PURPOSE:
   make an n-sided plotting point
 USAGE:
   hogg_usersym, N [,scale=scale,/diagonal]
   plot, x,y,psym=8
 INPUTS:
   N           - number of sides on the polygon
 OPTIONAL INPUTS:
   scale       - linear size
   _extra      - keywords for usersym (see usersym help page)
                 eg, /fill or thick=thick
 KEYWORDS
   diagonal    - rotate symbol through 1/2 of 1/N turns
   stellar     - make a stellar symbol rather than convex polygon
                 (only works for odd values of N!)
 REVISION HISTORY:
   2002-04-09  written - Hogg
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/hogg_usersym.pro">$IDLUTILS_DIR/pro/plot/hogg_usersym.pro</a>)</strong></p>
<hr />
<h3 id="HOGG_WEIGHTED_MEAN_SURFACE">HOGG_WEIGHTED_MEAN_SURFACE</h3>
<p><a href="#HOGG_USERSYM">[Previous Routine]</a></p>
<p><a href="#HST_GUIDETEST">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   hogg_weighted_mean_surface
 PURPOSE:
   make an image of the weighted mean for a 2-d set of measurements
 CALLING SEQUENCE:
   images = weighted_mean_surface(x,y,weight,quantity,xbin,ybin,dx,dy)
 INPUTS:
   x,y       - [N] values of measurements
   quantity  - [N] measurements themselves
   weight    - [N] weights for measurements
   xbin,ybin - [nx],[ny] vectors of coordinates of image pixel centers
   dx,dy     - size of sliding box in which means are taken
 OPTIONAL INPUTS:
   boot_seed - if set, use as seed for a bootstrap resampling trial
   nearest   - use nearest few points based on this number, rather 
               than a fixed smoothing (use with caution!)
 OUTPUTS:
   images    - [nx,ny,4] output images of number of contributing
               points (image 0), total weight used (image 1), total
               square weight used (image 2), and weighted mean (image 3)
 COMMENTS:
 BUGS:
 REVISION HISTORY:
   2003-01-11  written - Hogg
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/hogg_weighted_mean_surface.pro">$IDLUTILS_DIR/pro/plot/hogg_weighted_mean_surface.pro</a>)</strong></p>
<hr />
<h3 id="HST_GUIDETEST">HST_GUIDETEST</h3>
<p><a href="#HOGG_WEIGHTED_MEAN_SURFACE">[Previous Routine]</a></p>
<p><a href="#IAU_TO_RADEC">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   hst_guidetest

 PURPOSE:
   Decide if a list of potential HST guide stars are good by looking
   at the 2MASS and UCAC catalogs

 CALLING SEQUENCE:
   hst_guidetest, [ ra, dec, name=, filename=, searchrad=, select_tags=, $
    goodrad= ]

 INPUTS:

 OPTIONAL INPUTS:
   ra         - RA for each star [degrees]
   dec        - Declination for each star [degrees]
   name       - Name for each star; default to STAR-1, STAR-2, etc.
   filename   - Input ASCII file name with at least 3 columns:
                name, RA, Dec (where the coordinates are in degrees);
                if set, then this overrides the inputs RA, DEC, NAME
   searchrad  - Search radius between input coorinates and 2MASS and UCAC;
                default to 5./3600 degrees
   goodrad    - Maximum distance for a &quot;good&quot; HST guide star; default
                to 1.5/3600 arcsec
   select_tags- Names of tags to print

 OUTPUTS:

 OPTIONAL OUTPUTS:

 COMMENTS:
   The default is to return the following:
     NAME - The object names either from the first column of FILENAME,
            or from the input NAME
     DIST - Distance in arcsec to the nearest 2MASS star
     BL_FLG - Blend flags in J,H,K-bands, should be &quot;111&quot;
     CC_FLG - Contamination flags in J,H,K-bands, should be &quot;000&quot;
     GAL_CONTAM - Extended source contamination flag, should be &quot;0&quot;
     MP_FLG - Minor planet flag, should be &quot;0&quot;
     UCAC_DIST - Distance in arcsec to the nearest UCAC star
     GOOD - Set to &quot;BAD&quot; if there is not a 2MASS and UCAC isolated star
            within GOODRAD arcsec, or if any of the other, above flags have
            suspicious values; note that it will always say &quot;BAD&quot; for
            stars at high declination where UCAC does not have coverage

   Note that the UCAC astrometric catalog includes stars in the
   magnitude range R = [8,16] (approximately) from declination -90
   to between Dec +40 and +52.  It discards stars within 3 arcsec
   of any other star.

   Refer to the following 2MASS documentation for a description
   of the 2MASS data structure:
     http://tdc-www.harvard.edu/software/catalogs/tmc.format.html

   Refer to the following web site for the UCAC astrometric catalog:
     http://ad.usno.navy.mil/ucac/

 EXAMPLES:

 BUGS:

 PROCEDURES CALLED:
   djs_diff_angle()
   struct_addtags()
   struct_print
   struct_selecttags()
   tmass_read()
   ucac_read()

 REVISION HISTORY:
   09-Jul-2005  Written by D. Schlegel, LBL
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/2mass/hst_guidetest.pro">$IDLUTILS_DIR/pro/2mass/hst_guidetest.pro</a>)</strong></p>
<hr />
<h3 id="IAU_TO_RADEC">IAU_TO_RADEC</h3>
<p><a href="#HST_GUIDETEST">[Previous Routine]</a></p>
<p><a href="#IDLUTILS_SO_EXT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   iau_to_radec
 PURPOSE:
   convert an IAU name to RA and DEC
 CALLING SEQUENCE:
   iau_to_radec, name, ra, dec
 INPUTS:
   name - IAU name
 OUTPUTS:
   ra, dec - coords
 REVISION HISTORY:
   2005-10-24  Blanton (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/iau_to_radec.pro">$IDLUTILS_DIR/pro/misc/iau_to_radec.pro</a>)</strong></p>
<hr />
<h3 id="IDLUTILS_SO_EXT">IDLUTILS_SO_EXT</h3>
<p><a href="#IAU_TO_RADEC">[Previous Routine]</a></p>
<p><a href="#IDLUTILS_VERSION">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   idlutils_so_ext
 PURPOSE:
   returns appropriate dynamic library extension given arch
 CALLING SEQUENCE:
   so_ext= idlutils_so_ext()
 COMMENTS:
   necessary to deal with non-standard .dylib extension on darwin
 REVISION HISTORY:
   20-Feb-2004  Written by M. Blanton, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/idlutils_so_ext.pro">$IDLUTILS_DIR/pro/misc/idlutils_so_ext.pro</a>)</strong></p>
<hr />
<h3 id="IDLUTILS_VERSION">IDLUTILS_VERSION</h3>
<p><a href="#IDLUTILS_SO_EXT">[Previous Routine]</a></p>
<p><a href="#IMGEXP">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   idlutils_version
 PURPOSE:
   Return the version name for the idlutils product 
 CALLING SEQUENCE:
   vers = idlutils_version()
 OUTPUTS:
   vers       - Version name for the product idlutils 
 COMMENTS:
   Depends on shell script in $IDLUTILS_DIR/bin
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/idlutils_version.pro">$IDLUTILS_DIR/pro/misc/idlutils_version.pro</a>)</strong></p>
<hr />
<h3 id="IMGEXP">IMGEXP</h3>
<p><a href="#IDLUTILS_VERSION">[Previous Routine]</a></p>
<p><a href="#IMGSCL">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
	IMGEXP

 PURPOSE:
	This function expands the array &lt;Image&gt; to fill the current plotting
	window.  This routine works for both X and PostScript devices.  The
	optional scales &lt;XS&gt; and &lt;YS&gt; are likewise transformed and returned
	in option parameters &lt;Out_XS&gt; and &lt;Out_YS&gt;.

 CATEGORY:
	Image expansion.

 CALLING SEQUENCE:
	Result = IMGEXP(Image, XS, YS, Out_XS, Out_YS, X_Ran, Y_Ran)

 INPUTS:
	Image:	Two-dimensional array to be expanded.

 OPTIONAL INPUTS:
	XS:	Vector of x-axis values.  The length must equal the number of
		rows in &lt;Image&gt;

	YS:	Vector of y-axis values.  The length must equal the number of
		columns in &lt;Image&gt;

 KEYWORD PARAMETERS:
	ASPECT=	Set this keyword to the aspect ratio (width/height) of the
		pixels.  /ASPECT is the same as ASPECT=1 and produces square
		pixels.

	/INTERPOLATE:
		Set this switch to enable bilinear interpolation for pixels
		in the expanded image.  See /PS_INTERP_SIZE for information
		on using this switch on a PostScript device.

	MASKVALUE=
		Set this keyword to the value that uninterpolated pixels around
		the border of the image should be given.  The default is 
		-9999.0.  Interpolation is not performed beyond the centers of
		the original pixels.

	PS_INTERP_SIZE=
		Since PostScript devices have scalable pixels it is necessary
		to force expansion to at most this many pixels in either
		dimension.  The default is 256.  (It's really more complicated
		than this.  Read the code if you need to know.)

	POSITION=
		Set this keyword to the variable that is to hold the four-
		element vector containing the device coordinates of the
		plotting region that will contain the expanded image.  This
		is designed to be used by subsequent TV and PLOT commands.

	/NO_EXPAND:
		Set this switch to prevent the image from being expanded
		to fill the plotting window.  An aspect ration of 1:1 is
		forced for PostScript output so that it conforms to the X
		window view.

 OUTPUTS:
	Result:	This function returns an expanded version of the input &lt;Image&gt;
		possibly interpolated.

 OPTIONAL OUTPUTS:
	Out_XS:	Vector of x-axis values corresponding the the expanded image.

	Out_YS:	Vector of y-axis values corresponding the the expanded image.

	X_Ran:	Two-element vector that contains the full x-axis range
		including the width of the pixels.  It is designed to be used
		as input to the PLOT command.
	
	Y_Ran:	Two-element vector that contains the full y-axis range
		including the height of the pixels.  It is designed to be used
		as input to the PLOT command.
	
 RESTRICTIONS:
	This routine may work for other devices, but it has only been tested
	on 'X' and 'PS'.

 PROCEDURE:
	Straight forward.  :-)

 EXAMPLE:
	p = 0
	big = IMGEXP(small, lon, lat, biglon, biglat, xr, yr, Position=p)
	TVSCL, big, p(0), p(1), /Device
	Plot, [0,1], /NoData, /NoErase, Position=p, /Device, $
		XRange=xr, YRange=yr

	junk = IMGSCL( )	;prints out a &quot;Usage:&quot; line

 MODIFICATION HISTORY:
 	Written by:	Fen Tamanaha, July 9, 1993.  Release 2.1
	July 16, 1993	Fen: (2.2) Added /No_Expand keyword
       Jan 10, 2000    D. Finkbeiner - added _extra pass-through to Plot
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/imgexp.pro">$IDLUTILS_DIR/pro/plot/imgexp.pro</a>)</strong></p>
<hr />
<h3 id="IMGSCL">IMGSCL</h3>
<p><a href="#IMGEXP">[Previous Routine]</a></p>
<p><a href="#INTEGRATE_K53">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
	IMGSCL

 PURPOSE:
	This function mimics BYTSCL() except that it maps the input range
	into a byte range from 1 through TOP.  A byte value of 0 is reserved
	for elements containing MASKVALUE usually assigned for bad pixels or
	those without data.  The function can also perform logarithmic scaling
	of the data into byte values.  Use of the LEVELS keyword will scale
	all value within a given level to a single byte value.

 CATEGORY:
	Image scaling.

 CALLING SEQUENCE:
	Result = IMGSCL(Array)

 INPUTS:
	Array:	Two-dimensional array to be expanded.

 KEYWORD PARAMETERS:
	MIN=	The minimum value of Array to be considered.  If MIN is not
		provided, Array is searched for its minimum value.  All
		values less than or equal to MIN are set to 1 in the Result.

	MAX=	The maximum value of Array to be considered.  If MAX is not
		provided, Array is searched for its maximum value.  All
		values greater than or equal to MAX are set to TOP in the
		Result.

	TOP=	The maximum value of the scaled result.  If TOP is not
		specified, 255 is used. Note that the minimum value of the
		scaled result is always 1 (NOT 0 as in BYTSCL).

	LEVELS=	Set this keyword to a vector of data value boundaries between
		which all elements of the Array have the same scaled byte
		value.  e.g. LEVELS=[0,1,2,5] maps all values below 0 and
		above 5 to 0B, map values between 0 and 1 to 1B, map values
		between 1 and 2 to 128B, and map values between 2 and 5 to
		255B.

	/LOG:	Set this switch to cause a logarithmic mapping.  This is
		overridden by the LEVELS keyword.

	MASKVALUE=
		Set this keyword to the value that pixels with bad data or
		no data have been flagged with.  These will be mapped to 0B.

 OUTPUTS:
	Result:	This function returns a byte array between 1 and TOP for data
		in Array between MIN and MAX.

 RESTRICTIONS:

 PROCEDURE:
	Straight forward.  :-)

 EXAMPLE:
	image = IMGSCL(array, Min=-1, Top=!D.Table_Size-1, /Log, Mask=-9999.0)
	TV, image

	image = IMGSCL(array, Levels=[0,1,2,4,8,16,32])
	TV, image		;plot with 6 colors plus the background

 MODIFICATION HISTORY:
 	Written by:	Fen Tamanaha, July 10, 1993.  Release 2.1
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/imgscl.pro">$IDLUTILS_DIR/pro/plot/imgscl.pro</a>)</strong></p>
<hr />
<h3 id="INTEGRATE_K53">INTEGRATE_K53</h3>
<p><a href="#IMGSCL">[Previous Routine]</a></p>
<p><a href="#INTERP_PROFMEAN">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   integrate_k53

 PURPOSE:
   integrate the K 5/3 Bessel function

 CALLING SEQUENCE:
   kint = integrate_k53(x)

 INPUTS:
   x   - independent variable, usually interpreted as nu/nu_crit

 OUTPUTS:
   kint - integral \int_x^\infty K_{5/3}(s) ds

 COMMENTS:
   This integral arises in the synchrotron problem. 
   We compute a log/log lookup table of values on the first call. 
   For x &gt;~ 1 the result is exponentially suppressed, so increased
   (fractional) numerical error is probably not a problem. 
 
   for 1d-6 &lt; x &lt; 1 the fractional errors are &lt; ppm.

   This code has been checked against the asymptotic forms in 
    Rybicki &amp; Lightman, p. 179.  Agreement is good for small x. 
    for large x, fractional error can be several percent, but values
    are exponentially small, so it probably doesn't matter in practice.

   Note that the integral of X*integrate_k53(x) =
   gamma(7./3.d)*gamma(2./3.d) = 
   8./9.d*!dpi/sqrt(3.d)
   = 1.6122661015
   
 REVISION HISTORY:
   2004-Jul-15  Written by Douglas Finkbeiner, Princeton

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/physics/integrate_k53.pro">$IDLUTILS_DIR/pro/physics/integrate_k53.pro</a>)</strong></p>
<hr />
<h3 id="INTERP_PROFMEAN">INTERP_PROFMEAN</h3>
<p><a href="#INTEGRATE_K53">[Previous Routine]</a></p>
<p><a href="#INTERSECT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   interp_profmean

 PURPOSE:
   Interpolates a radial profile of the sort output by photo

 CALLING SEQUENCE:
   interp_profmean,nprof,profmean,radius,maggies, [maggieserr=, profradius= $
      proferr=, radiusscale=, maggiesscale=]

 INPUTS:
   nprof - number of measured elements in the profile 
   profmean - values (in maggies) in the profile [15]
   radius - a set of values to interpolate to [N]
   maggies - calculated maggies

 OPTIONAL INPUTS:
   proferr - errors in profile
   profradius - boundaries of annuli in profile (set to photo default
                in arcsec)
   radiusscale - asinh scale for radii
   maggiesscale - asinh scale for maggieses

 OUTPUTS:
   maggieserr - calculated error

 OPTIONAL INPUT/OUTPUTS:

 COMMENTS:
   Set up for using the profMean in the fpObjc files of the SDSS,
   input and output in maggies (or any linear measure of surface 
   brightness)

 EXAMPLES:

 BUGS:
   Slow.

 PROCEDURES CALLED:

 REVISION HISTORY:
   16-Jan-2002  Written by Mike Blanton, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/image/interp_profmean.pro">$IDLUTILS_DIR/pro/image/interp_profmean.pro</a>)</strong></p>
<hr />
<h3 id="INTERSECT">INTERSECT</h3>
<p><a href="#INTERP_PROFMEAN">[Previous Routine]</a></p>
<p><a href="#INTRV">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   intersect
 PURPOSE:
   Find where two sets of polygons intersect
 CALLING SEQUENCE:
   window12= intersect(window1, window2)
 INPUTS:
   window1  - [N1] array of polygons 
   window2  - [N1] array of polygons 
 OUTPUTS:
   window12 - [N12] array of polygons in both 1 and 2
 REVISION HISTORY:
   25-May-2010  Written by Mike Blanton, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mangle/intersect.pro">$IDLUTILS_DIR/pro/mangle/intersect.pro</a>)</strong></p>
<hr />
<h3 id="INTRV">INTRV</h3>
<p><a href="#INTERSECT">[Previous Routine]</a></p>
<p><a href="#ISHEALPIX">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   intrv

 PURPOSE:
   Find the segment between breakpoints which contain each value in
   the array x.  The minimum breakpoint is nbkptord -1, and the maximum
   is nbkpt - nbkptord - 1.  This routine is required by the bspline
   IDL routines, and is similar in function to the slatec version.

 CALLING SEQUENCE:
   
   indx  = intrv(x, fullbkpt, nbkptord)

 INPUTS:
   x          - data x values
   fullbkpt   - Breakpoint vector returned by efc
   nbkptord   - Order of b-splines (4 is cubic)

 RETURNS:
   indx       - position of array elements with respect to breakpoints.

 OUTPUTS:

 OPTIONAL KEYWORDS:

 OPTIONAL OUTPUTS:

 COMMENTS:
   does the same function as intrv, although slower but easier to follow
    sorting is done here
   Again, assumes x is monotonically increasing

 EXAMPLES:

 REVISION HISTORY:
   31-Aug-2000 Written by Scott Burles, FNAL
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/bspline/intrv.pro">$IDLUTILS_DIR/pro/bspline/intrv.pro</a>)</strong></p>
<hr />
<h3 id="ISHEALPIX">ISHEALPIX</h3>
<p><a href="#INTRV">[Previous Routine]</a></p>
<p><a href="#IS_CAP_USED">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   ishealpix

 PURPOSE:
   Determine if array represents a healpix image

 CALLING SEQUENCE:
   type = ishealpix(image)

 INPUTS:
   image   - input array to be tested
   npix    - number of pixels - set if image not set

 KEYWORDS:
   silent  - suppress messages. 
   true    - test for true color (not implemented)

 OUTPUTS:
   type    - image type; 1=healpix, 0=not healpix

 COMMENTS:
   Define healpix as an array of 12*2^(2*N) pixels for pos. integer N.
   A looser definition is possible for ring ordering, but not for
    nested ordering. 
   Must set either image or npix
   
 REVISION HISTORY:
   2003-Dec-05   Written by Douglas Finkbeiner, Princeton

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/healpix/ishealpix.pro">$IDLUTILS_DIR/pro/healpix/ishealpix.pro</a>)</strong></p>
<hr />
<h3 id="IS_CAP_USED">IS_CAP_USED</h3>
<p><a href="#ISHEALPIX">[Previous Routine]</a></p>
<p><a href="#IS_FILE_READABLE_F">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   is_cap_used
 PURPOSE:
   Returns whether a cap is used in use_caps
 CALLING SEQUENCE:
   is_cap_used,use_caps,indx
 INPUTS:
   use_caps - bit mask indicating which cap is used
   indx - number indicating which cap we are interestedin
 OPTIONAL INPUTS:
 OUTPUTS:
 OPTIONAL INPUT/OUTPUTS:
 COMMENTS:
 EXAMPLES:
 BUGS:
   Number of caps limited to 32
 PROCEDURES CALLED:
 REVISION HISTORY:
   09-Nov-2002  Written by MRB (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mangle/is_cap_used.pro">$IDLUTILS_DIR/pro/mangle/is_cap_used.pro</a>)</strong></p>
<hr />
<h3 id="IS_FILE_READABLE_F">IS_FILE_READABLE()</h3>
<p><a href="#IS_CAP_USED">[Previous Routine]</a></p>
<p><a href="#IS_IN_CAP">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   is_file_readable()
 PURPOSE:
   Returns true if a file is readable.
 CALLING SEQUENCE:
   good= is_file_readable(filename,/compress)
 INPUT:
   filename - Name of a file.
 KEYWORDS:
   /compress - Passed directly to the OPENR procedure.
 OUTPUT:
   good  - 1 if good, 0 if bad
 BUGS:
   - NOT extensively tested.
 REVISION HISTORY:
   2005-06-03  converted from Schlegel email to code - Hogg
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/is_file_readable.pro">$IDLUTILS_DIR/pro/misc/is_file_readable.pro</a>)</strong></p>
<hr />
<h3 id="IS_IN_CAP">IS_IN_CAP</h3>
<p><a href="#IS_FILE_READABLE_F">[Previous Routine]</a></p>
<p><a href="#IS_IN_POLYGON">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   is_in_cap
 PURPOSE:
   Is an xyz (or radec) position in a given cap?
 CALLING SEQUENCE:
   result=is_in_cap(ra=, dec=, xyz=, cap )
 INPUTS:
   ra - set of ra values
   dec - set of dec values
   xyz - xyz value(s) (overrides ra and dec)
   cap - single cap to check
 OPTIONAL INPUTS:
 OUTPUTS:
 OPTIONAL INPUT/OUTPUTS:
 COMMENTS:
   Either ra and dec, or xyz must be set; xyz overrides ra and dec
 EXAMPLES:
 BUGS:
 PROCEDURES CALLED:
 REVISION HISTORY:
   01-Oct-2002  Written by MRB (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mangle/is_in_cap.pro">$IDLUTILS_DIR/pro/mangle/is_in_cap.pro</a>)</strong></p>
<hr />
<h3 id="IS_IN_POLYGON">IS_IN_POLYGON</h3>
<p><a href="#IS_IN_CAP">[Previous Routine]</a></p>
<p><a href="#IS_IN_WINDOW">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   is_in_polygon
 PURPOSE:
   Is an xyz (or radec) position in a given polygon?
 CALLING SEQUENCE:
   result=is_in_polygon(xyz=, ra=, dec= , polygon)
 INPUTS:
   ra - set of ra values
   dec - set of dec values
   xyz - xyz value(s) (overrides ra and dec)
   polygon - polygon with caps to check
 OPTIONAL INPUTS:
   ncaps - override polygon.ncaps (if ncaps &lt; polygon.ncaps)
 OUTPUTS:
 OPTIONAL INPUT/OUTPUTS:
 COMMENTS:
   Either ra and dec, or xyz must be set; xyz overrides ra and dec
 EXAMPLES:
 BUGS:
 PROCEDURES CALLED:
 REVISION HISTORY:
   01-Oct-2002  Written by MRB (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mangle/is_in_polygon.pro">$IDLUTILS_DIR/pro/mangle/is_in_polygon.pro</a>)</strong></p>
<hr />
<h3 id="IS_IN_WINDOW">IS_IN_WINDOW</h3>
<p><a href="#IS_IN_POLYGON">[Previous Routine]</a></p>
<p><a href="#IS_IN_WINDOW_PIX">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   is_in_window
 PURPOSE:
   Is an xyz (or radec) position in any of a given list of polygons?
 CALLING SEQUENCE:
   result=is_in_window(xyz=, ra=, dec= , polygons)
 INPUTS:
   polygons - polygons with caps to check
 OPTIONAL INPUTS:
   ra - [N] set of ra values
   dec - [N] set of dec values
   xyz - [3,N] xyz value(s) (overrides ra and dec)
   ncaps - override polygon.ncaps (if ncaps &lt; polygon.ncaps)
 OUTPUTS:
   result - [N] 1 if in window, 0 otherwise
 OPTIONAL OUTPUTS:
   in_polygon - [N] which polygon each ra,dec is in (-1 if none)
 COMMENTS:
   Either ra and dec, or xyz must be set; xyz overrides ra and dec
 REVISION HISTORY:
   01-Oct-2002  Written by MRB (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mangle/is_in_window.pro">$IDLUTILS_DIR/pro/mangle/is_in_window.pro</a>)</strong></p>
<hr />
<h3 id="IS_IN_WINDOW_PIX">IS_IN_WINDOW_PIX</h3>
<p><a href="#IS_IN_WINDOW">[Previous Routine]</a></p>
<p><a href="#JSON_TO_STRUCT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   is_in_window_pix
 PURPOSE:
   Is a radec position in any of a given list of polygons?
   Very similar to is_in_window but this code takes a
     mangle pixelization scheme to speed up intersections
 CALLING SEQUENCE:
   result=is_in_window(ra=, dec=, scheme=, polygons)
 INPUTS:
   polygons - polygons with caps to check
 OPTIONAL INPUTS:
   ra - [N] set of ra values
   dec - [N] set of dec values
   scheme - string that corresponds to a Mangle pixel scheme
            e.g., '4s' is simple pixels at resolution of 4
 OUTPUTS:
   result - [N] 1 if in window, 0 otherwise
 OPTIONAL OUTPUTS:
   in_polygon - [N] which polygon each ra,dec is in (-1 if none)
 COMMENTS:
   Much faster than is_in_window but requires polygons are
      pixelized with a mangle scheme (the same scheme as passed!)
      which can be read from the headers of mangle polygon files
   Currently only supports the simple pixelization scheme
 REQUIREMENTS:
   is_in_window and its requirements
   which_pix_polygon
   radec_to_simplepix
 REVISION HISTORY:
   10-Jul-2011  Written by Adam D. Myers (UWyo)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mangle/is_in_window_pix.pro">$IDLUTILS_DIR/pro/mangle/is_in_window_pix.pro</a>)</strong></p>
<hr />
<h3 id="JSON_TO_STRUCT">JSON_TO_STRUCT</h3>
<p><a href="#IS_IN_WINDOW_PIX">[Previous Routine]</a></p>
<p><a href="#LABELLOC">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
    json_to_struct

 PURPOSE:
    Convert a string or array of strings JSON notation, &amp; return it as
    an IDL structure.

 CALLING SEQUENCE
    structure = json_to_struct(json,[/nodelete])

 INPUTS:
    json - A string or array of strings in JSON notation.

 OPTIONAL INPUTS:
    nodelete - Do not remove any temporary files created.

 OUTPUTS:
    structure - An IDL structure or array of structures.

 NOTES:
    JSON keywords beginning with '$' (e.g., &quot;$oid&quot;:) will be replaced with
    '_$'.

    Named structures cannot contain anonymous sub-structures, so we will not
    attempt to create a named structure.

    Integer and real values get converted to INT &amp; FLOAT respectively,
    which may result in loss of precision.

 PROCEDURES CALLED:

 REVISION HISTORY:
    2011-06-07 Initial version by B. A. Weaver, NYU

 VERSION:
    $Id: json_to_struct.pro 125246 2011-06-16 20:51:38Z weaver $

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/json/json_to_struct.pro">$IDLUTILS_DIR/pro/json/json_to_struct.pro</a>)</strong></p>
<hr />
<h3 id="LABELLOC">LABELLOC</h3>
<p><a href="#JSON_TO_STRUCT">[Previous Routine]</a></p>
<p><a href="#LEGENDRE_ZERO">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   labelloc
 PURPOSE:
   convert fractional positions in X and Y to those appropriate for xyouts
 CALLING SEQUENCE:
   labelloc, xfrac, yfrac, xloc, yloc
 INPUTS:
   xfrac,yfrac - fractional distances from axes in x and y
 OUTPUTS:
   xloc, yloc - units appropriate for xyouts
 REVISION HISTORY:
   2003-11-21  started - Blanton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/labelloc.pro">$IDLUTILS_DIR/pro/misc/labelloc.pro</a>)</strong></p>
<hr />
<h3 id="LEGENDRE_ZERO">LEGENDRE_ZERO</h3>
<p><a href="#LABELLOC">[Previous Routine]</a></p>
<p><a href="#LG_TO_HELIO">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   legendre_zero

 PURPOSE:
   Compute zeros of the m=0 Legendre polynomials

 CALLING SEQUENCE:
   thzero = legendre_zero(l)

 INPUTS:
   l - order of Legendre polynomial Pl0(x) to compute
   
 KEYWORDS:
   
 OUTPUTS:
   thzero  - theta values of zeros [radians]

 EXAMPLES:
   
 COMMENTS:
   Just calls fx_root.  We need the common block and the function
     legfn. 

 REVISION HISTORY:
   2003-Feb-21  Written by Douglas Finkbeiner, Princeton

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/legendre_zero.pro">$IDLUTILS_DIR/pro/math/legendre_zero.pro</a>)</strong></p>
<hr />
<h3 id="LG_TO_HELIO">LG_TO_HELIO</h3>
<p><a href="#LEGENDRE_ZERO">[Previous Routine]</a></p>
<p><a href="#LINES2STRUCT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   lg_to_helio
 PURPOSE:
   Convert to heliocentric redshifts from Local-Group-centric redshifts.
 CALLING SEQUENCE:
   z_helio = lg_to_helio(z_lg,ra,dec)
 INPUTS:
   z_lg   - local-group-centric redshift
   RA        - right ascension (deg, J2000)
   Dec       - declination (deg, J2000)
 OUTPUTS:
   z_helio      - heliocentric redshift
 REVISION HISTORY:
   Originally imported by Hogg, 2002-08 or so.
   MRB corrected sign error in correction 2004-04-08 (affected tags
   v5_0_0 and previous)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/coord/lg_to_helio.pro">$IDLUTILS_DIR/pro/coord/lg_to_helio.pro</a>)</strong></p>
<hr />
<h3 id="LINES2STRUCT">LINES2STRUCT</h3>
<p><a href="#LG_TO_HELIO">[Previous Routine]</a></p>
<p><a href="#LL2UV">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   lines2struct
 PURPOSE:
   Convert a string array containing keyword-value pairs to a struct
 CALLING SEQUENCE:
   str= lines2struct(lines [, /relaxed])
 INPUTS:
   lines - [N] string array 
 OPTIONAL KEYWORDS:
   /relaxed - if set, do not bomb on repeated tags
 OUTPUTS:
   str - structure where keywords become tag names, values are values
 COMMENTS:
   All structure elements treated as type string
   Leading # indicates comments
   If /relaxed is set, first instance of a tag determines value
 REVISION HISTORY:
   May 7, 2008, MRB, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/lines2struct.pro">$IDLUTILS_DIR/pro/misc/lines2struct.pro</a>)</strong></p>
<hr />
<h3 id="LL2UV">LL2UV</h3>
<p><a href="#LINES2STRUCT">[Previous Routine]</a></p>
<p><a href="#LLE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
  NAME:
    ll2uv

  PURPOSE:
    To convert from longitude/latitude to unit vectors

  CALLING SEQUENCE:
    uv = ll2uv(lon_lat)

  INPUT:
    (n,2) longitude/latitude array

  OUTPUT:
    (n,3) unit vector array

  SUBROUTINES CALLED:
    None

  REVISION HISTORY

 SPR 9923 26-AUG-1992  Change unit vector output array to float type
 J.M. Gales
 29-March-2001  Added double keyword - Doug Finkbeiner, Princeton

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/astrom/ll2uv.pro">$IDLUTILS_DIR/pro/astrom/ll2uv.pro</a>)</strong></p>
<hr />
<h3 id="LLE">LLE</h3>
<p><a href="#LL2UV">[Previous Routine]</a></p>
<p><a href="#LLE_SM">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
    lle
 PURPOSE:
    Perform local linear embedding
 DESCRIPTION:
    Uses Sam Roweis's local linear embedding technique to reduce the 
    dimensionality of a data set.
 CATEGORY:
    Mathematical
 CALLING SEQUENCE:
    lle, data, ncoords, coords, weights=weights
 INPUTS:
    data - [p,N] data to be reduced
    ncoords - number of output dimensions desired
 OUTPUTS: 
    coords - [ncoords,N] embedding coordinates
 OPTIONAL OUTPUTS PARAMETERS:
    weights - reconstruction weights
 OPTIONAL INPUT PARAMETERS:
 KEYWORD PARAMETERS:
 COMMON BLOCKS:
 SIDE EFFECTS:
 BUGS:
    Not completed yet, do not use
 RESTRICTIONS:
 PROCEDURE:
 MODIFICATION HISTORY:
    2003-05-14 - Written by Michael Blanton (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/lle.pro">$IDLUTILS_DIR/pro/math/lle.pro</a>)</strong></p>
<hr />
<h3 id="LLE_SM">LLE_SM</h3>
<p><a href="#LLE">[Previous Routine]</a></p>
<p><a href="#LLE_SM_FULL">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
	  lle_sm
 PURPOSE:
   create sparse matrix from full matrix for LLE routines
 DESCRIPTION:
   rather crappy sparse matrix format for NxM matrix:
      .N - number of rows
      .M - number of columns
      .VALS - each nonzero value
      .NINDX - row of each nonzero value 
      .MINDX - column of each nonzero value 
   but it handles nonsquare matrices
 CATEGORY:
       Numerical
 CALLING SEQUENCE:
   sparse_matrix= lle_sm(full_matrix)
 INPUTS:
   full_matrix - complete NxM matrix 
 OPTIONAL INPUT PARAMETERS:
 KEYWORD PARAMETERS:
 OUTPUTS:
   sparse_matrix - full_matrix transformed into above format
 COMMON BLOCKS:
 SIDE EFFECTS:
 RESTRICTIONS:
   always at double precision
 PROCEDURE:
 MODIFICATION HISTORY:
	  Blanton 2003-05-26 
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/lle_sm.pro">$IDLUTILS_DIR/pro/math/lle_sm.pro</a>)</strong></p>
<hr />
<h3 id="LLE_SM_FULL">LLE_SM_FULL</h3>
<p><a href="#LLE_SM">[Previous Routine]</a></p>
<p><a href="#LLE_SM_MULT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
	  lle_sm_full
 PURPOSE:
   create full matrix from full matrix for LLE routines
 DESCRIPTION:
   rather crappy sparse matrix format for NxM matrix:
      .N - number of rows
      .M - number of columns
      .VALS - each nonzero value
      .NINDX - row of each nonzero value
      .MINDX - column of each nonzero value
   but it handles nonsquare matrices
 CATEGORY:
       Numerical
 CALLING SEQUENCE:
   full_matrix= lle_sm_full(sparse_matrix)
 INPUTS:
   sparse_matrix - matrix in above format
 OPTIONAL INPUT PARAMETERS:
 KEYWORD PARAMETERS:
 OUTPUTS:
   full_matrix - complete NxM matrix
 COMMON BLOCKS:
 SIDE EFFECTS:
 RESTRICTIONS:
   always at double precision
 PROCEDURE:
 MODIFICATION HISTORY:
	  Blanton 2003-05-26
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/lle_sm_full.pro">$IDLUTILS_DIR/pro/math/lle_sm_full.pro</a>)</strong></p>
<hr />
<h3 id="LLE_SM_MULT">LLE_SM_MULT</h3>
<p><a href="#LLE_SM_FULL">[Previous Routine]</a></p>
<p><a href="#LLE_SM_TRANSPOSE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
	  lle_sm_mult
 PURPOSE:
   multiply two sparse matrices kind of efficiently for LLE routines
 DESCRIPTION:
   rather crappy sparse matrix format for NxM matrix:
      .N - number of rows
      .M - number of columns
      .VALS - each nonzero value
      .NINDX - row of each nonzero value 
      .MINDX - column of each nonzero value 
   but it handles nonsquare matrices
 CATEGORY:
       Numerical
 CALLING SEQUENCE:
   cc= lle_sm_mult(aa,bb)
 INPUTS:
   aa - [N,M] sparse matrix input
   bb - [M,P] sparse matrix input
 OPTIONAL INPUT PARAMETERS:
 KEYWORD PARAMETERS:
 OUTPUTS:
   cc - [N,P] sparse matrix output (should be equal to idl's aa#bb) 
 COMMON BLOCKS:
 SIDE EFFECTS:
 RESTRICTIONS:
   always at double precision
 PROCEDURE:
 MODIFICATION HISTORY:
	  Blanton 2003-05-26 
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/lle_sm_mult.pro">$IDLUTILS_DIR/pro/math/lle_sm_mult.pro</a>)</strong></p>
<hr />
<h3 id="LLE_SM_TRANSPOSE">LLE_SM_TRANSPOSE</h3>
<p><a href="#LLE_SM_MULT">[Previous Routine]</a></p>
<p><a href="#LOCAL_EXTRAGALACTIC">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
	  lle_sm_transpose
 PURPOSE:
   transpose a sparse matrix for the LLE routines
 DESCRIPTION:
   transposes the rather crappy sparse matrix format for NxM matrix:
      .N - number of rows
      .M - number of columns
      .VALS - each nonzero value
      .NINDX - row of each nonzero value 
      .MINDX - column of each nonzero value 
   but it handles nonsquare matrices
 CATEGORY:
       Numerical
 CALLING SEQUENCE:
   mattrans= lle_sm_transpose(mat)
 INPUTS:
   mat - matrix in above format
 OPTIONAL INPUT PARAMETERS:
 KEYWORD PARAMETERS:
 OUTPUTS:
   mattrans - transposed matrix in above format
 COMMON BLOCKS:
 SIDE EFFECTS:
 RESTRICTIONS:
 PROCEDURE:
 MODIFICATION HISTORY:
	  Blanton 2003-05-26 
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/lle_sm_transpose.pro">$IDLUTILS_DIR/pro/math/lle_sm_transpose.pro</a>)</strong></p>
<hr />
<h3 id="LOCAL_EXTRAGALACTIC">LOCAL_EXTRAGALACTIC</h3>
<p><a href="#LLE_SM_TRANSPOSE">[Previous Routine]</a></p>
<p><a href="#LOGSUM">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   local_extragalactic
 PURPOSE:
   returns list of local extragalactic locations and names to plot
 CALLING SEQUENCE:
   local_extragalactic, ra, dec, cz_lg, names, list=list
 OPTIONAL INPUTS:
   list - list of names to match to (default: 
       ['VIRGO_CLUSTER', 'URSA_MAJOR_CLUSTER', $
        'PISCES_CLUSTER', 'COMA_CLUSTER' ] )
 OUTPUTS:
   ra - [N] ra (J2000 deg)
   dec - [N] dec (J2000 deg)
   cz_lg - [N] local group frame cz
   names - [N] object name
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/coord/local_extragalactic.pro">$IDLUTILS_DIR/pro/coord/local_extragalactic.pro</a>)</strong></p>
<hr />
<h3 id="LOGSUM">LOGSUM</h3>
<p><a href="#LOCAL_EXTRAGALACTIC">[Previous Routine]</a></p>
<p><a href="#LOOKBACK">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
	  logsum
 PURPOSE:
   sum quantities when you have them as logs (preserving dynamic range)
 CATEGORY:
       Numerical
 CALLING SEQUENCE:
   res= logsum(logs [,/double])
 KEYWORD PARAMETERS:
   /double - assume double precision input (otherwise assumes float)
 RESTRICTIONS:
   seems to not have expected precision
 MODIFICATION HISTORY:
	  Blanton and Roweis 2003-02-18 
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/logsum.pro">$IDLUTILS_DIR/pro/math/logsum.pro</a>)</strong></p>
<hr />
<h3 id="LOOKBACK">LOOKBACK</h3>
<p><a href="#LOGSUM">[Previous Routine]</a></p>
<p><a href="#LOOKFORGZIP">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   lookback
 PURPOSE:
   Compute lookback time (for c/H_0=1).
 CALLING SEQUENCE:
   t= lookback(z,OmegaM,OmegaL)
 INPUTS:
   z       - redshift or vector of redshifts
   OmegaM  - Omega-matter at z=0
   OmegaL  - Omega-Lambda at z=0
 OPTIONAL INPUTS:
 KEYWORDS
 OUTPUTS:
   lookback time in units of the Hubble time 1/H_0
 COMMENTS:
 BUGS:
   The integrator is crude, slow and repetetive.
   May not work for pathological parts of the OmegaM-OmegaL plane.
 EXAMPLES:
 PROCEDURES CALLED:
   dlookbackdz()
 REVISION HISTORY:
   2001-May-12  Written by Hogg (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/cosmography/lookback.pro">$IDLUTILS_DIR/pro/cosmography/lookback.pro</a>)</strong></p>
<hr />
<h3 id="LOOKFORGZIP">LOOKFORGZIP</h3>
<p><a href="#LOOKBACK">[Previous Routine]</a></p>
<p><a href="#LUMDIS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   lookforgzip

 PURPOSE:
   Look for a gzip-ed file, 

 CALLING SEQUENCE:
   thisfile = lookforgzip( filename, count= )

 INPUTS:
   filename   - Input file name w/out any &quot;.gz&quot; or &quot;.Z&quot; extension

 OPTIONAL KEYWORDS:

 OUTPUTS:
   thisfile   - Returns input file name with no extension if it exists,
                otherwise a &quot;.gz&quot; extension if that exists,
                otherwise a &quot;.Z&quot; extension if that exists,
                otherwise '' if none of the above exist.

 OPTIONAL OUTPUTS:
   count      - Number of files that matched

 COMMENTS:
   This routine uses FINDFILE().

 EXAMPLES:

 BUGS:

 PROCEDURES CALLED:

 REVISION HISTORY:
   20-Oct-2000  Written by S. Burles, FNAL
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/lookforgzip.pro">$IDLUTILS_DIR/pro/misc/lookforgzip.pro</a>)</strong></p>
<hr />
<h3 id="LUMDIS">LUMDIS</h3>
<p><a href="#LOOKFORGZIP">[Previous Routine]</a></p>
<p><a href="#MAKE_DEC_CAP">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   lumdis
 PURPOSE:
   Compute luminosity distances (for c/H_0=1).
 CALLING SEQUENCE:
   D= lumdis(z,OmegaM,OmegaL, weq=weq)
 INPUTS:
   z       - redshift or vector of redshifts
   OmegaM  - Omega-matter at z=0
   OmegaL  - Omega-Lambda at z=0
 OPTIONAL INPUTS:
   weq     - Equation of state (default=-1)
 KEYWORDS
 OUTPUTS:
   luminosity distance in units of the Hubble length c/H_0
 COMMENTS:
 BUGS:
   May not work for pathological parts of the OmegaM-OmegaL plane.
 EXAMPLES:
 PROCEDURES CALLED:
   propmotdis()
 REVISION HISTORY:
   25-Jun-2000  Written by Hogg (IAS)
   2004-Sep-8, Added equation of state for OmegaL, Padmanabhan
   (Princeton)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/cosmography/lumdis.pro">$IDLUTILS_DIR/pro/cosmography/lumdis.pro</a>)</strong></p>
<hr />
<h3 id="MAKE_DEC_CAP">MAKE_DEC_CAP</h3>
<p><a href="#LUMDIS">[Previous Routine]</a></p>
<p><a href="#MAKE_HTML_HELP">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   make_dec_cap
 PURPOSE:
   Creates a structure containing a cap expressing a limit in dec
 CALLING SEQUENCE:
   cap=make_dec_cap(declimit, [,sign= ]
 INPUTS:
   declimit - limit on dec 
 OPTIONAL INPUTS:
   sign - sign of the cap (default 1.)
 OUTPUTS:
 OPTIONAL INPUT/OUTPUTS:
 COMMENTS:
 EXAMPLES:
 BUGS:
 PROCEDURES CALLED:
 REVISION HISTORY:
   01-Oct-2002  Written by MRB (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mangle/make_dec_cap.pro">$IDLUTILS_DIR/pro/mangle/make_dec_cap.pro</a>)</strong></p>
<hr />
<h3 id="MAKE_HTML_HELP">MAKE_HTML_HELP</h3>
<p><a href="#MAKE_DEC_CAP">[Previous Routine]</a></p>
<p><a href="#MAKE_RA_CAP">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
       MAKE_HTML_HELP

 PURPOSE:
       Given a list of IDL procedure files (.PRO), VMS text library
       files (.TLB), or directories that contain such files, this procedure
       generates a file in the HTML format that contains the documentation
       for those routines that contain a DOC_LIBRARY style documentation
       template.  The output file is compatible with World Wide Web browsers.

 CATEGORY:
       Help, documentation.

 CALLING SEQUENCE:
       MAKE_HTML_HELP, Sources, Outfile

 INPUTS:
     Sources:  A string or string array containing the name(s) of the
               .pro or .tlb files (or the names of directories containing
               such files) for which help is desired.  If a source file is
               a VMS text library, it must include the .TLB file extension.
               If a source file is an IDL procedure, it must include the .PRO
               file extension.  All other source files are assumed to be
               directories.
     Outfile:  The name of the output file which will be generated.

 KEYWORDS:
       TITLE:  If present, a string which supplies the name that
               should appear as the Document Title for the help.
     VERBOSE:  Normally, MAKE_HTML_HELP does its work silently.
               Setting this keyword to a non-zero value causes the procedure
               to issue informational messages that indicate what it
               is currently doing. !QUIET must be 0 for these messages
               to appear.
      STRICT:  If this keyword is set to a non-zero value, MAKE_HTML_HELP will
               adhere strictly to the HTML format by scanning the
               the document headers for characters that are reserved in
               HTML (&lt;,&gt;,&amp;,&quot;).  These are then converted to the appropriate
               HTML syntax in the output file. By default, this keyword
               is set to zero (to allow for faster processing).
   LINKFILES:  If this keyword is set to a non-zero value,
               MAKE_HTML_HELP will generate &quot;file&quot; links to the idl
               procedures documented on the web page created by this
               code.
     VERSION:  If set to a string, MAKE_HTML_HELP will search for a function
               called version+'_version.pro' and add the value returned by
               that function to the output file.

 COMMON BLOCKS:
       None.

 SIDE EFFECTS:
       A help file with the name given by the Outfile argument is
       created.

 RESTRICTIONS:
       The following rules must be followed in formatting the .pro
       files that are to be searched.
               (a) The first line of the documentation block contains
                   only the characters &quot;;+&quot;, starting in column 1.
               (b) There must be a line which contains the string &quot;NAME:&quot;,
                   which is immediately followed by a line containing the
                   name of the procedure or function being described in
                   that documentation block.  If this NAME field is not
                   present, the name of the source file will be used.
               (c) The last line of the documentation block contains
                   only the characters &quot;;-&quot;, starting in column 1.
               (d) Every other line in the documentation block contains
                   a &quot;;&quot; in column 1.

       Note that a single .pro file can contain multiple procedures and/or
       functions, each with their own documentation blocks. If it is desired
       to have &quot;invisible&quot; routines in a file, i.e. routines which are only
       for internal use and should not appear in the help file, simply leave
       out the &quot;;+&quot; and &quot;;-&quot; lines in the documentation block for those
       routines.

       No reformatting of the documentation is done.

 MODIFICATION HISTORY:
       July 5, 1995, DD, RSI. Original version.
       July 13, 1995, Mark Rivers, University of Chicago. Added support for
               multiple source directories and multiple documentation
               headers per .pro file.
       July 17, 1995, DD, RSI. Added code to alphabetize the subjects;
               At the end of each description block in the HTML file,
               added a reference to the source .pro file.
       July 18, 1995, DD, RSI. Added STRICT keyword to handle angle brackets.
       July 19, 1995, DD, RSI. Updated STRICT to handle &amp; and &quot;.
               Changed calling sequence to accept .pro filenames, .tlb
               text librarie names, and/or directory names.
               Added code to set default subject to name of file if NAME
               field is not present in the doc header.
       February 10, 1998, MWC, UC Berkeley. Added purpose to the line
               which is output for each routine in the tableof
               contents. This used to just contain the name.
       April 1, 1998, MWC, UC Berkeley.  Added option to create file
               link to the location of the procedure being documented.
       2009-07-17, BAW, NYU.  Emits XHTML
       2011-11-29, BAW, NYU.  Adds a version string to the file if requested.
               Strict keyword now has no effect, but it is retained for
               backwards-compatibility.

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/make_html_help.pro">$IDLUTILS_DIR/pro/misc/make_html_help.pro</a>)</strong></p>
<hr />
<h3 id="MAKE_RA_CAP">MAKE_RA_CAP</h3>
<p><a href="#MAKE_HTML_HELP">[Previous Routine]</a></p>
<p><a href="#MAP_NEST2RING">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   make_ra_cap
 PURPOSE:
   Creates a structure containing a cap expressing a limit in ra
 CALLING SEQUENCE:
   cap=make_ra_cap(ralimit, [,sign= ])
 INPUTS:
   ralimit - limit on ra 
 OPTIONAL INPUTS:
   sign - sign of the cap (default 1.)
 REVISION HISTORY:
   01-Oct-2002  Written by MRB (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mangle/make_ra_cap.pro">$IDLUTILS_DIR/pro/mangle/make_ra_cap.pro</a>)</strong></p>
<hr />
<h3 id="MAP_NEST2RING">MAP_NEST2RING</h3>
<p><a href="#MAKE_RA_CAP">[Previous Routine]</a></p>
<p><a href="#MAP_RING2NEST">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   map_nest2ring

 PURPOSE:
   Convert a full-sky map in nested order to ring order

 CALLING SEQUENCE:
   ringmap=map_nest2ring(nestmap)

 INPUTS:
   nestmap  - healpix map in nested order

 OUTPUTS:
   ringmap  - healpix map in ring order

 COMMENTS:
   
 REVISION HISTORY:
   2003-Dec-04  Written by Douglas Finkbeiner, Princeton

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/healpix/map_nest2ring.pro">$IDLUTILS_DIR/pro/healpix/map_nest2ring.pro</a>)</strong></p>
<hr />
<h3 id="MAP_RING2NEST">MAP_RING2NEST</h3>
<p><a href="#MAP_NEST2RING">[Previous Routine]</a></p>
<p><a href="#MATCHND">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   map_ring2nest

 PURPOSE:
   Convert a full-sky map in ring order to nested order

 CALLING SEQUENCE:
   nestmap=map_ring2nest(ringmap)

 INPUTS:
   ringmap  - healpix map in ring order

 OUTPUTS:
   nestmap  - healpix map in nested order

 COMMENTS:
   
 REVISION HISTORY:
   2003-Dec-04  Written by Douglas Finkbeiner, Princeton

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/healpix/map_ring2nest.pro">$IDLUTILS_DIR/pro/healpix/map_ring2nest.pro</a>)</strong></p>
<hr />
<h3 id="MATCHND">MATCHND</h3>
<p><a href="#MAP_RING2NEST">[Previous Routine]</a></p>
<p><a href="#MEMSHIFT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   matchnd
 PURPOSE:
   match two sets of points in N dimensions
 CALLING SEQUENCE:
   matchnd, x1, x2, distance [, m1=, m2=, d12=, nmatch= ]
 INPUTS:
   x1 - [M,N1] positions in M-dimensions
   x2 - [M,N2] positions in M-dimensions
   distance - match distance
 OPTIONAL INPUTS:
   maxmatch - MRB: please explain!
   /silent  - don't splog anything
 OUTPUTS:
   m1 - [nmatch] matches to x1
   m2 - [nmatch] matches to x2
   d12 - [nmatch] distance between matches
   nmatch - number of matches
 COMMENTS:
   This code is BETA! Use at your own risk.
 REVISION HISTORY:
   12-Oct-2005  Written by Mike Blanton, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/matchnd.pro">$IDLUTILS_DIR/pro/math/matchnd.pro</a>)</strong></p>
<hr />
<h3 id="MEMSHIFT">MEMSHIFT</h3>
<p><a href="#MATCHND">[Previous Routine]</a></p>
<p><a href="#MJD2DATELIST">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   memshift

 PURPOSE:
   Shift elements in an array, which can be a structure array.

 CALLING SEQUENCE:
   memshift, array, isrc, idest, nmove

 INPUTS:
   array      - Array of any type except string or pointer; structures
                are allowed
   isrc       - Starting position in memory to copy from
   idest      - Starting position in memory to copy to
   nmove      - Number of array elements to copy

 OPTIONAL INPUTS:

 OUTPUT:
   array      - (Modified.)

 OPTIONAL OUTPUTS:

 COMMENTS:
   This routine is equivalent to the IDL command:
     array[idest:idest+nmove-1] = array[isrc:isrc+nmove-1]
   but is faster, at least on the Linux platform.  Note that the
   memory in the source and destination can be overlapping.
   The C code calls the Unix memmove() function.

   If an attempt is made to copy out-of-bounds, then this procedure
   intentionally crashes using the MESSAGE function.

 EXAMPLES:

 BUGS:

 PROCEDURES CALLED:
   Dynamic link to memshift.o

 REVISION HISTORY:
   18-Oct-2003  Written by David Schlegel, Princeton.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/memshift.pro">$IDLUTILS_DIR/pro/math/memshift.pro</a>)</strong></p>
<hr />
<h3 id="MJD2DATELIST">MJD2DATELIST</h3>
<p><a href="#MEMSHIFT">[Previous Routine]</a></p>
<p><a href="#MMEVAL">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   mjd2datelist

 PURPOSE:
   Construct a list of MJDs and date strings spanning a range of MJDs
   (useful for plot limits).

 CALLING SEQUENCE:
   mjd2datelist, mjstart, [ mjend, step=, mjdlist=, datelist= ]

 INPUTS:
   mjstart    - Starting modified Julian date to span.

 OPTIONAL INPUTS:
   mjend      - Ending modified Julian date to span; if not set, then
                only the date string for MJSTART is returned.
   step       - Step in either 'year', '6month', 'month', or 'day';
                default to 'year', or 'day' if MJEND not set.

 OUTPUTS:

 OPTIONAL OUTPUTS:
   mjlist     - List of modified Julian dates (MJDs)
   datelist   - List of dates in the form DD-MMM-YYYY, where MMM is
                the first three letters of the month name.

 COMMENTS:
   This routine returns a list of MJDs and date strings spaced by
   the amount specified by STEP that span the range [MJSTART,MJEND].
   If using STEP='year', the output list will be on the first date
   of each year and [MJSTART,MJEND] will fall internal to that list.
   If using STEP='month', the output list will be on each 01-Jan
   and 01-Jul.  If using STEP='month', the output list will be on
   the first of each month.

 EXAMPLES:
   Construct a list of all the Jan 1st dates that span the dates
   of the SDSS spectroscopic survey:
     IDL&gt; mjd2datelist, 51433, 52356, mjdlist=mjdlist, datelist=datelist
     IDL&gt; print, mjdlist
          51179.500   51544.500   51910.500   52275.500   52640.500
     IDL&gt; print, datelist
          01-Jan-1999 01-Jan-2000 01-Jan-2001 01-Jan-2002 01-Jan-2003

 BUGS:

 PROCEDURES CALLED:

 INTERNAL SUPPORT ROUTINES:

 REVISION HISTORY:
   26-Mar-2002  Written by D. Schlegel, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/coord/mjd2datelist.pro">$IDLUTILS_DIR/pro/coord/mjd2datelist.pro</a>)</strong></p>
<hr />
<h3 id="MMEVAL">MMEVAL</h3>
<p><a href="#MJD2DATELIST">[Previous Routine]</a></p>
<p><a href="#MMSPARSE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   mmeval
 PURPOSE:
   evaluate a matrix multiply sparsely
 CALLING SEQUENCE:
   mmeval, cc, bb, aa
 INPUTS:
   cc - sparse matrix struct (see below) [nz,ny]
   bb - [nx, nz] matrix 
   aa - [nx, ny] matrix 
 OUTPUTS:
   cc - sparse matrix struct (see below) [nz,ny]
 COMMENTS:
   The matrix multiply of bb.aa is evaluated specified by the sparse
   matrix structure of cc.
   The sparse matrix structure referred to above is:
       .VAL[NVAL]      - actual values in matrix
       .X[NVAL]        - columns for each value in matrix
       .NX             - number of columns
       .NY             - number of rows
       .ROWSTART[NY]   - starting position of each row in VAL, X
       .NXROW[NY]      - number of columns in each now 
   This code is called by nmf_sparse.
 REVISION HISTORY:
   2005-Feb-5  Written by Mike Blanton, NYU
               Adapted from Matlab code of Sam Roweis

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/mmeval.pro">$IDLUTILS_DIR/pro/math/mmeval.pro</a>)</strong></p>
<hr />
<h3 id="MMSPARSE">MMSPARSE</h3>
<p><a href="#MMEVAL">[Previous Routine]</a></p>
<p><a href="#MODFITSCARD">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   mmsparse
 PURPOSE:
   multiply a regular matrix by a sparse matrix
 CALLING SEQUENCE:
   mmsparse, cc, bb, aasparse 
 INPUTS:
   bb - sparse matrix struct (see below) [nx, nz] of inverse var
   aasparse - sparse matrix struct (see below) [nx, ny] 
 OUTPUTS:
   cc - [nz, ny] result
 COMMENTS:
   The sparse matrix structure referred to above is:
       .VAL[NVAL]      - actual values in matrix
       .X[NVAL]        - columns for each value in matrix
       .NX             - number of columns
       .NY             - number of rows
       .ROWSTART[NY]   - starting position of each row in VAL, X
       .NXROW[NY]      - number of columns in each now 
   This code is called by nmf_sparse.
 REVISION HISTORY:
   2005-Feb-5  Written by Mike Blanton, NYU
               Adapted from Matlab code of Sam Roweis

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/mmsparse.pro">$IDLUTILS_DIR/pro/math/mmsparse.pro</a>)</strong></p>
<hr />
<h3 id="MODFITSCARD">MODFITSCARD</h3>
<p><a href="#MMSPARSE">[Previous Routine]</a></p>
<p><a href="#MOON_ZENITH">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   modfitscard

 PURPOSE:
   Modify FITS card(s) in a file without changing the data.

 CALLING SEQUENCE:
   modfitscard, filename, card, value, [ comment, /delete, $
    _EXTRA=KeywordsForSxaddpar ]

 INPUTS:
   filename  - File name(s) to modify; this can be an array of file names,
               and it can include wildcards
   card      - Name of FITS card(s) to add or modify

 OPTIONAL INPUTS:
   value     - New value(s) for FITS card; mandatory card if DELETE not set;
               must have the same number of elements as CARD.
   comment   - Comment to appear in the card after its value; passed to
               the routine SXADDPAR.  If specified, it must have the same
               number of elements as CARD.
   delete    - If set, then delete all cards CARD from the header;
               VALUE is ignored if set.

 OUTPUTS:

 OPTIONAL OUTPUTS:

 COMMENTS:

 EXAMPLES:
   Modify the value of the DATE keyword in the primary header of all FITS
   files with '666' or '777' in the file name:
   IDL&gt; modfitscard, ['*666*.fits','*777*.fits'], 'DATE', '1994-03-23'

 BUGS:
   This routine calls DJS_MODFITS, which allows the size of the header
   to be changed.

   Wildcards are not supported for CARD, so you cannot say something like
   IDL&gt; modfitscard, 'test.fits', 'DATE*', '1994-03-23' ; Will not work!

 PROCEDURES CALLED:
   djs_modfits
   headfits()
   sxaddpar

 REVISION HISTORY:
   19-Apr-2000  Written by David Schlegel, Princeton.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/fits/modfitscard.pro">$IDLUTILS_DIR/pro/fits/modfitscard.pro</a>)</strong></p>
<hr />
<h3 id="MOON_ZENITH">MOON_ZENITH</h3>
<p><a href="#MODFITSCARD">[Previous Routine]</a></p>
<p><a href="#MPCHILIM">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   moon_zenith

 PURPOSE:
   Compute zenith angle of moon, given TAI

 CALLING SEQUENCE:
   zenithang = moon_zenith(TAI, [longitude=, latitude=])

 INPUTS:
   TAI            - time in seconds since MJD 0

 OPTIONAL KEYWORDS:
   longitude      - longitude of observatory [deg] - default to APO
   latitude       - latitude of observatory [deg]
 
 OUTPUTS:
   zenithang      - zenith angle of the moon [deg]


 COMMENTS:
   TAI must be specified.

 BUGS:
   Uses geocentric coords, should correct for position on Earth

 PROCEDURES CALLED:
   moonpos

 REVISION HISTORY:
   2001-Apr-06  Written by D. Finkbeiner, APO
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/coord/moon_zenith.pro">$IDLUTILS_DIR/pro/coord/moon_zenith.pro</a>)</strong></p>
<hr />
<h3 id="MPCHILIM">MPCHILIM</h3>
<p><a href="#MOON_ZENITH">[Previous Routine]</a></p>
<p><a href="#MPCHITEST">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   MPCHILIM

 AUTHOR:
   Craig B. Markwardt, NASA/GSFC Code 662, Greenbelt, MD 20770
   craigm@lheamail.gsfc.nasa.gov
   UPDATED VERSIONs can be found on my WEB PAGE: 
      http://cow.physics.wisc.edu/~craigm/idl/idl.html

 PURPOSE:
   Compute confidence limits for chi-square statistic

 MAJOR TOPICS:
   Curve and Surface Fitting, Statistics

 CALLING SEQUENCE:
   DELCHI = MPCHILIM(PROB, DOF, [/SIGMA, /CLEVEL, /SLEVEL ])

 DESCRIPTION:

  The function MPCHILIM() computes confidence limits of the
  chi-square statistic for a desired probability level.  The returned
  values, DELCHI, are the limiting chi-squared values: a chi-squared
  value of greater than DELCHI will occur by chance with probability
  PROB:

    P_CHI(CHI &gt; DELCHI; DOF) = PROB

  In specifying the probability level the user has three choices:

    * give the confidence level (default);

    * give the significance level (i.e., 1 - confidence level) and
      pass the /SLEVEL keyword; OR

    * give the &quot;sigma&quot; of the probability (i.e., compute the
      probability based on the normal distribution) and pass the
      /SIGMA keyword.

  Note that /SLEVEL, /CLEVEL and /SIGMA are mutually exclusive.

 INPUTS:

   PROB - scalar or vector number, giving the desired probability
          level as described above.

   DOF - scalar or vector number, giving the number of degrees of
         freedom in the chi-square distribution.

 RETURNS:

  Returns a scalar or vector of chi-square confidence limits.

 KEYWORD PARAMETERS:

   SLEVEL - if set, then PROB describes the significance level.

   CLEVEL - if set, then PROB describes the confidence level
            (default).

   SIGMA - if set, then PROB is the number of &quot;sigma&quot; away from the
           mean in the normal distribution.

 EXAMPLES:

   print, mpchilim(0.99d, 2d, /clevel)

   Print the 99% confidence limit for a chi-squared of 2 degrees of
   freedom.

   print, mpchilim(5d, 2d, /sigma)

   Print the &quot;5 sigma&quot; confidence limit for a chi-squared of 2
   degrees of freedom.  Here &quot;5 sigma&quot; indicates the gaussian
   probability of a 5 sigma event or greater. 
       P_GAUSS(5D) = 1D - 5.7330314e-07

 REFERENCES:

   Algorithms taken from CEPHES special function library, by Stephen
   Moshier. (http://www.netlib.org/cephes/)

 MODIFICATION HISTORY:
   Completed, 1999, CM
   Documented, 16 Nov 2001, CM
   Reduced obtrusiveness of common block and math error handling, 18
     Nov 2001, CM

  $Id: mpchilim.pro,v 1.1 2006-02-07 22:38:32 schlegel Exp $
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mpfit/mpchilim.pro">$IDLUTILS_DIR/pro/mpfit/mpchilim.pro</a>)</strong></p>
<hr />
<h3 id="MPCHITEST">MPCHITEST</h3>
<p><a href="#MPCHILIM">[Previous Routine]</a></p>
<p><a href="#MPCURVEFIT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   MPCHITEST

 AUTHOR:
   Craig B. Markwardt, NASA/GSFC Code 662, Greenbelt, MD 20770
   craigm@lheamail.gsfc.nasa.gov
   UPDATED VERSIONs can be found on my WEB PAGE: 
      http://cow.physics.wisc.edu/~craigm/idl/idl.html

 PURPOSE:
   Compute the probability of a given chi-squared value

 MAJOR TOPICS:
   Curve and Surface Fitting, Statistics

 CALLING SEQUENCE:
   PROB = MPCHITEST(CHI, DOF, [/SIGMA, /CLEVEL, /SLEVEL ])

 DESCRIPTION:

  The function MPCHITEST() computes the probability for a value drawn
  from the chi-square distribution to equal or exceed the given value
  CHI.  This can be used for confidence testing of a measured value
  obeying the chi-squared distribution.

    P_CHI(X &gt; CHI; DOF) = PROB

  In specifying the returned probability level the user has three
  choices:

    * return the confidence level when the /CLEVEL keyword is passed;
      OR

    * return the significance level (i.e., 1 - confidence level) when
      the /SLEVEL keyword is passed (default); OR

    * return the &quot;sigma&quot; of the probability (i.e., compute the
      probability based on the normal distribution) when the /SIGMA
      keyword is passed.

  Note that /SLEVEL, /CLEVEL and /SIGMA are mutually exclusive.

 INPUTS:

   CHI - chi-squared value to be tested.

   DOF - scalar or vector number, giving the number of degrees of
         freedom in the chi-square distribution.

 RETURNS:

  Returns a scalar or vector of probabilities, as described above,
  and according to the /SLEVEL, /CLEVEL and /SIGMA keywords.

 KEYWORD PARAMETERS:

   SLEVEL - if set, then PROB describes the significance level
            (default).

   CLEVEL - if set, then PROB describes the confidence level.

   SIGMA - if set, then PROB is the number of &quot;sigma&quot; away from the
           mean in the normal distribution.

 EXAMPLES:

   print, mpchitest(1300d,1252d)

   Print the probability for a chi-squared value with 1252 degrees of
   freedom to exceed a value of 1300, as a confidence level.

 REFERENCES:

   Algorithms taken from CEPHES special function library, by Stephen
   Moshier. (http://www.netlib.org/cephes/)

 MODIFICATION HISTORY:
   Completed, 1999, CM
   Documented, 16 Nov 2001, CM
   Reduced obtrusiveness of common block and math error handling, 18
     Nov 2001, CM

  $Id: mpchitest.pro,v 1.1 2006-02-07 22:38:32 schlegel Exp $
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mpfit/mpchitest.pro">$IDLUTILS_DIR/pro/mpfit/mpchitest.pro</a>)</strong></p>
<hr />
<h3 id="MPCURVEFIT">MPCURVEFIT</h3>
<p><a href="#MPCHITEST">[Previous Routine]</a></p>
<p><a href="#MPFIT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   MPCURVEFIT

 AUTHOR:
   Craig B. Markwardt, NASA/GSFC Code 662, Greenbelt, MD 20770
   craigm@lheamail.gsfc.nasa.gov
   UPDATED VERSIONs can be found on my WEB PAGE: 
      http://cow.physics.wisc.edu/~craigm/idl/idl.html

 PURPOSE:
   Perform Levenberg-Marquardt least-squares fit (replaces CURVEFIT)

 MAJOR TOPICS:
   Curve and Surface Fitting

 CALLING SEQUENCE:
   YFIT = MPCURVEFIT(X, Y, WEIGHTS, P, [SIGMA,] FUNCTION_NAME=FUNC, 
                     ITER=iter, ITMAX=itmax, 
                     CHISQ=chisq, NFREE=nfree, DOF=dof, 
                     NFEV=nfev, COVAR=covar, [/NOCOVAR, ] [/NODERIVATIVE, ]
                     FUNCTARGS=functargs, PARINFO=parinfo,
                     FTOL=ftol, XTOL=xtol, GTOL=gtol, TOL=tol,
                     ITERPROC=iterproc, ITERARGS=iterargs,
                     NPRINT=nprint, QUIET=quiet, 
                     ERRMSG=errmsg, STATUS=status)

 DESCRIPTION:

  MPCURVEFIT fits a user-supplied model -- in the form of an IDL
  function -- to a set of user-supplied data.  MPCURVEFIT calls
  MPFIT, the MINPACK-1 least-squares minimizer, to do the main
  work.

  Given the data and their uncertainties, MPCURVEFIT finds the best
  set of model parameters which match the data (in a least-squares
  sense) and returns them in the parameter P.  

  MPCURVEFIT returns the best fit function.
  
  The user must supply the following items:
   - An array of independent variable values (&quot;X&quot;).
   - An array of &quot;measured&quot; *dependent* variable values (&quot;Y&quot;).
   - An array of weighting values (&quot;WEIGHTS&quot;).
   - The name of an IDL function which computes Y given X (&quot;FUNC&quot;).
   - Starting guesses for all of the parameters (&quot;P&quot;).

  There are very few restrictions placed on X, Y or FUNCT.  Simply
  put, FUNCT must map the &quot;X&quot; values into &quot;Y&quot; values given the
  model parameters.  The &quot;X&quot; values may represent any independent
  variable (not just Cartesian X), and indeed may be multidimensional
  themselves.  For example, in the application of image fitting, X
  may be a 2xN array of image positions.

  MPCURVEFIT carefully avoids passing large arrays where possible to
  improve performance.

  See below for an example of usage.
   
 USER FUNCTION

  The user must define a function which returns the model value.  For
  applications which use finite-difference derivatives -- the default
  -- the user function should be declared in the following way:

    PRO MYFUNCT, X, P, YMOD
     ; The independent variable is X
     ; Parameter values are passed in &quot;P&quot;
     YMOD = ... computed model values at X ...
    END

  The returned array YMOD must have the same dimensions and type as
  the &quot;measured&quot; Y values.

  User functions may also indicate a fatal error condition
  using the ERROR_CODE common block variable, as described
  below under the MPFIT_ERROR common block definition.

  See the discussion under &quot;ANALYTIC DERIVATIVES&quot; and AUTODERIVATIVE
  in MPFIT.PRO if you wish to compute the derivatives for yourself.
  AUTODERIVATIVE is accepted and passed directly to MPFIT.  The user
  function must accept one additional parameter, DP, which contains
  the derivative of the user function with respect to each parameter
  at each data point, as described in MPFIT.PRO.

 CONSTRAINING PARAMETER VALUES WITH THE PARINFO KEYWORD

  The behavior of MPFIT can be modified with respect to each
  parameter to be fitted.  A parameter value can be fixed; simple
  boundary constraints can be imposed; limitations on the parameter
  changes can be imposed; properties of the automatic derivative can
  be modified; and parameters can be tied to one another.

  These properties are governed by the PARINFO structure, which is
  passed as a keyword parameter to MPFIT.

  PARINFO should be an array of structures, one for each parameter.
  Each parameter is associated with one element of the array, in
  numerical order.  The structure can have the following entries
  (none are required):
  
     .VALUE - the starting parameter value (but see the START_PARAMS
              parameter for more information).
  
     .FIXED - a boolean value, whether the parameter is to be held
              fixed or not.  Fixed parameters are not varied by
              MPFIT, but are passed on to MYFUNCT for evaluation.
  
     .LIMITED - a two-element boolean array.  If the first/second
                element is set, then the parameter is bounded on the
                lower/upper side.  A parameter can be bounded on both
                sides.  Both LIMITED and LIMITS must be given
                together.
  
     .LIMITS - a two-element float or double array.  Gives the
               parameter limits on the lower and upper sides,
               respectively.  Zero, one or two of these values can be
               set, depending on the values of LIMITED.  Both LIMITED
               and LIMITS must be given together.
  
     .PARNAME - a string, giving the name of the parameter.  The
                fitting code of MPFIT does not use this tag in any
                way.  However, the default ITERPROC will print the
                parameter name if available.
  
     .STEP - the step size to be used in calculating the numerical
             derivatives.  If set to zero, then the step size is
             computed automatically.  Ignored when AUTODERIVATIVE=0.
             This value is superceded by the RELSTEP value.

     .RELSTEP - the *relative* step size to be used in calculating
                the numerical derivatives.  This number is the
                fractional size of the step, compared to the
                parameter value.  This value supercedes the STEP
                setting.  If the parameter is zero, then a default
                step size is chosen.

     .MPSIDE - the sidedness of the finite difference when computing
               numerical derivatives.  This field can take four
               values:

                  0 - one-sided derivative computed automatically
                  1 - one-sided derivative (f(x+h) - f(x)  )/h
                 -1 - one-sided derivative (f(x)   - f(x-h))/h
                  2 - two-sided derivative (f(x+h) - f(x-h))/(2*h)

              Where H is the STEP parameter described above.  The
              &quot;automatic&quot; one-sided derivative method will chose a
              direction for the finite difference which does not
              violate any constraints.  The other methods do not
              perform this check.  The two-sided method is in
              principle more precise, but requires twice as many
              function evaluations.  Default: 0.

     .MPMAXSTEP - the maximum change to be made in the parameter
                  value.  During the fitting process, the parameter
                  will never be changed by more than this value in
                  one iteration.

                  A value of 0 indicates no maximum.  Default: 0.
  
     .TIED - a string expression which &quot;ties&quot; the parameter to other
             free or fixed parameters.  Any expression involving
             constants and the parameter array P are permitted.
             Example: if parameter 2 is always to be twice parameter
             1 then use the following: parinfo(2).tied = '2 * P(1)'.
             Since they are totally constrained, tied parameters are
             considered to be fixed; no errors are computed for them.
             [ NOTE: the PARNAME can't be used in expressions. ]

     .MPPRINT - if set to 1, then the default ITERPROC will print the
                parameter value.  If set to 0, the parameter value
                will not be printed.  This tag can be used to
                selectively print only a few parameter values out of
                many.  Default: 1 (all parameters printed)

  
  Future modifications to the PARINFO structure, if any, will involve
  adding structure tags beginning with the two letters &quot;MP&quot;.
  Therefore programmers are urged to avoid using tags starting with
  the same letters; otherwise they are free to include their own
  fields within the PARINFO structure, and they will be ignored.
  
  PARINFO Example:
  parinfo = replicate({value:0.D, fixed:0, limited:[0,0], $
                       limits:[0.D,0]}, 5)
  parinfo(0).fixed = 1
  parinfo(4).limited(0) = 1
  parinfo(4).limits(0)  = 50.D
  parinfo(*).value = [5.7D, 2.2, 500., 1.5, 2000.]
  
  A total of 5 parameters, with starting values of 5.7,
  2.2, 500, 1.5, and 2000 are given.  The first parameter
  is fixed at a value of 5.7, and the last parameter is
  constrained to be above 50.

 INPUTS:
   X - Array of independent variable values.

   Y - Array of &quot;measured&quot; dependent variable values.  Y should have
       the same data type as X.  The function FUNCT should map
       X-&gt;Y.

   WEIGHTS - Array of weights to be used in calculating the
             chi-squared value.  If WEIGHTS is specified then the ERR
             parameter is ignored.  The chi-squared value is computed
             as follows:

                CHISQ = TOTAL( (Y-FUNCT(X,P))^2 * ABS(WEIGHTS) )

             Here are common values of WEIGHTS:

                1D/ERR^2 - Normal weighting (ERR is the measurement error)
                1D/Y     - Poisson weighting (counting statistics)
                1D       - Unweighted

   P - An array of starting values for each of the parameters of the
       model.  The number of parameters should be fewer than the
       number of measurements.  Also, the parameters should have the
       same data type as the measurements (double is preferred).

       Upon successful completion the new parameter values are
       returned in P.

       If both START_PARAMS and PARINFO are passed, then the starting
       *value* is taken from START_PARAMS, but the *constraints* are
       taken from PARINFO.
 
   SIGMA - The formal 1-sigma errors in each parameter, computed from
           the covariance matrix.  If a parameter is held fixed, or
           if it touches a boundary, then the error is reported as
           zero.

           If the fit is unweighted (i.e. no errors were given, or
           the weights were uniformly set to unity), then SIGMA will
           probably not represent the true parameter uncertainties.

           *If* you can assume that the true reduced chi-squared
           value is unity -- meaning that the fit is implicitly
           assumed to be of good quality -- then the estimated
           parameter uncertainties can be computed by scaling SIGMA
           by the measured chi-squared value.

              DOF     = N_ELEMENTS(X) - N_ELEMENTS(P) ; deg of freedom
              CSIGMA  = SIGMA * SQRT(CHISQ / DOF)     ; scaled uncertainties

 RETURNS:

   Returns the array containing the best-fitting function.

 KEYWORD PARAMETERS:

   CHISQ - the value of the summed, squared, weighted residuals for
           the returned parameter values, i.e. the chi-square value.

   COVAR - the covariance matrix for the set of parameters returned
           by MPFIT.  The matrix is NxN where N is the number of
           parameters.  The square root of the diagonal elements
           gives the formal 1-sigma statistical errors on the
           parameters IF errors were treated &quot;properly&quot; in MYFUNC.
           Parameter errors are also returned in PERROR.

           To compute the correlation matrix, PCOR, use this:
           IDL&gt; PCOR = COV * 0
           IDL&gt; FOR i = 0, n-1 DO FOR j = 0, n-1 DO $
                PCOR(i,j) = COV(i,j)/sqrt(COV(i,i)*COV(j,j))

           If NOCOVAR is set or MPFIT terminated abnormally, then
           COVAR is set to a scalar with value !VALUES.D_NAN.

   DOF - number of degrees of freedom, computed as
             DOF = N_ELEMENTS(DEVIATES) - NFREE
         Note that this doesn't account for pegged parameters (see
         NPEGGED).

   ERRMSG - a string error or warning message is returned.

   FTOL - a nonnegative input variable. Termination occurs when both
          the actual and predicted relative reductions in the sum of
          squares are at most FTOL (and STATUS is accordingly set to
          1 or 3).  Therefore, FTOL measures the relative error
          desired in the sum of squares.  Default: 1D-10

   FUNCTION_NAME - a scalar string containing the name of an IDL
                   procedure to compute the user model values, as
                   described above in the &quot;USER MODEL&quot; section.

   FUNCTARGS - A structure which contains the parameters to be passed
               to the user-supplied function specified by FUNCT via
               the _EXTRA mechanism.  This is the way you can pass
               additional data to your user-supplied function without
               using common blocks.

               By default, no extra parameters are passed to the
               user-supplied function.

   GTOL - a nonnegative input variable. Termination occurs when the
          cosine of the angle between fvec and any column of the
          jacobian is at most GTOL in absolute value (and STATUS is
          accordingly set to 4). Therefore, GTOL measures the
          orthogonality desired between the function vector and the
          columns of the jacobian.  Default: 1D-10

   ITER - the number of iterations completed.

   ITERARGS - The keyword arguments to be passed to ITERPROC via the
              _EXTRA mechanism.  This should be a structure, and is
              similar in operation to FUNCTARGS.
              Default: no arguments are passed.

   ITERPROC - The name of a procedure to be called upon each NPRINT
              iteration of the MPFIT routine.  It should be declared
              in the following way:

              PRO ITERPROC, FUNCT, p, iter, fnorm, FUNCTARGS=fcnargs, $
                PARINFO=parinfo, QUIET=quiet, ...
                ; perform custom iteration update
              END
         
              ITERPROC must either accept all three keyword
              parameters (FUNCTARGS, PARINFO and QUIET), or at least
              accept them via the _EXTRA keyword.
          
              FUNCT is the user-supplied function to be minimized,
              P is the current set of model parameters, ITER is the
              iteration number, and FUNCTARGS are the arguments to be
              passed to FUNCT.  FNORM should be the
              chi-squared value.  QUIET is set when no textual output
              should be printed.  See below for documentation of
              PARINFO.

              In implementation, ITERPROC can perform updates to the
              terminal or graphical user interface, to provide
              feedback while the fit proceeds.  If the fit is to be
              stopped for any reason, then ITERPROC should set the
              common block variable ERROR_CODE to negative value (see
              MPFIT_ERROR common block below).  In principle,
              ITERPROC should probably not modify the parameter
              values, because it may interfere with the algorithm's
              stability.  In practice it is allowed.

              Default: an internal routine is used to print the
                       parameter values.

   ITMAX - The maximum number of iterations to perform.  If the
             number is exceeded, then the STATUS value is set to 5
             and MPFIT returns.
             Default: 200 iterations

   NFEV - the number of FUNCT function evaluations performed.

   NFREE - the number of free parameters in the fit.  This includes
           parameters which are not FIXED and not TIED, but it does
           include parameters which are pegged at LIMITS.

   NOCOVAR - set this keyword to prevent the calculation of the
             covariance matrix before returning (see COVAR)

   NODERIVATIVE - if set, then the user function will not be queried
                  for analytical derivatives, and instead the
                  derivatives will be computed by finite differences
                  (and according to the PARINFO derivative settings;
                  see above for a description).

   NPRINT - The frequency with which ITERPROC is called.  A value of
            1 indicates that ITERPROC is called with every iteration,
            while 2 indicates every other iteration, etc.  Note that
            several Levenberg-Marquardt attempts can be made in a
            single iteration.
            Default value: 1

   PARINFO - Provides a mechanism for more sophisticated constraints
             to be placed on parameter values.  When PARINFO is not
             passed, then it is assumed that all parameters are free
             and unconstrained.  Values in PARINFO are never 
             modified during a call to MPFIT.

             See description above for the structure of PARINFO.

             Default value:  all parameters are free and unconstrained.

   QUIET - set this keyword when no textual output should be printed
           by MPFIT

   STATUS - an integer status code is returned.  All values other
            than zero can represent success.  It can have one of the
            following values:

	   0  improper input parameters.
         
	   1  both actual and predicted relative reductions
	      in the sum of squares are at most FTOL.
         
	   2  relative error between two consecutive iterates
	      is at most XTOL
         
	   3  conditions for STATUS = 1 and STATUS = 2 both hold.
         
	   4  the cosine of the angle between fvec and any
	      column of the jacobian is at most GTOL in
	      absolute value.
         
	   5  the maximum number of iterations has been reached
         
	   6  FTOL is too small. no further reduction in
	      the sum of squares is possible.
         
	   7  XTOL is too small. no further improvement in
	      the approximate solution x is possible.
         
	   8  GTOL is too small. fvec is orthogonal to the
	      columns of the jacobian to machine precision.

   TOL - synonym for FTOL.  Use FTOL instead.

   XTOL - a nonnegative input variable. Termination occurs when the
          relative error between two consecutive iterates is at most
          XTOL (and STATUS is accordingly set to 2 or 3).  Therefore,
          XTOL measures the relative error desired in the approximate
          solution.  Default: 1D-10

   YERROR - upon return, the root-mean-square variance of the
            residuals.


 EXAMPLE:

   ; First, generate some synthetic data
   npts = 200
   x  = dindgen(npts) * 0.1 - 10.                  ; Independent variable 
   yi = gauss1(x, [2.2D, 1.4, 3000.])              ; &quot;Ideal&quot; Y variable
   y  = yi + randomn(seed, npts) * sqrt(1000. + yi); Measured, w/ noise
   sy = sqrt(1000.D + y)                           ; Poisson errors

   ; Now fit a Gaussian to see how well we can recover
   p0 = [1.D, 1., 1000.]                           ; Initial guess
   yfit = mpcurvefit(x, y, 1/sy^2, p0, $           ; Fit a function
                     FUNCTION_NAME='GAUSS1P',/autoderivative)
   print, p

   Generates a synthetic data set with a Gaussian peak, and Poisson
   statistical uncertainty.  Then the same function is fitted to the
   data to see how close we can get.  GAUSS1 and GAUSS1P are
   available from the same web page.


 COMMON BLOCKS:

   COMMON MPFIT_ERROR, ERROR_CODE

     User routines may stop the fitting process at any time by
     setting an error condition.  This condition may be set in either
     the user's model computation routine (MYFUNCT), or in the
     iteration procedure (ITERPROC).

     To stop the fitting, the above common block must be declared,
     and ERROR_CODE must be set to a negative number.  After the user
     procedure or function returns, MPFIT checks the value of this
     common block variable and exits immediately if the error
     condition has been set.  By default the value of ERROR_CODE is
     zero, indicating a successful function/procedure call.

 REFERENCES:

   MINPACK-1, Jorge More', available from netlib (www.netlib.org).
   &quot;Optimization Software Guide,&quot; Jorge More' and Stephen Wright, 
     SIAM, *Frontiers in Applied Mathematics*, Number 14.

 MODIFICATION HISTORY:
   Translated from MPFITFUN, 25 Sep 1999, CM
   Alphabetized documented keywords, 02 Oct 1999, CM
   Added QUERY keyword and query checking of MPFIT, 29 Oct 1999, CM
   Check to be sure that X and Y are present, 02 Nov 1999, CM
   Documented SIGMA for unweighted fits, 03 Nov 1999, CM
   Changed to ERROR_CODE for error condition, 28 Jan 2000, CM
   Copying permission terms have been liberalized, 26 Mar 2000, CM
   Propagated improvements from MPFIT, 17 Dec 2000, CM
   Corrected behavior of NODERIVATIVE, 13 May 2002, CM
   Documented RELSTEP field of PARINFO (!!), CM, 25 Oct 2002
   Make more consistent with comparable IDL routines, 30 Jun 2003, CM
   Minor documentation adjustment, 03 Feb 2004, CM
   Fix error in documentation, 26 Aug 2005, CM

  $Id: mpcurvefit.pro,v 1.2 2006-02-07 22:38:32 schlegel Exp $
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mpfit/mpcurvefit.pro">$IDLUTILS_DIR/pro/mpfit/mpcurvefit.pro</a>)</strong></p>
<hr />
<h3 id="MPFIT">MPFIT</h3>
<p><a href="#MPCURVEFIT">[Previous Routine]</a></p>
<p><a href="#MPFIT2DFUN">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   MPFIT

 AUTHOR:
   Craig B. Markwardt, NASA/GSFC Code 662, Greenbelt, MD 20770
   craigm@lheamail.gsfc.nasa.gov
   UPDATED VERSIONs can be found on my WEB PAGE: 
      http://cow.physics.wisc.edu/~craigm/idl/idl.html

 PURPOSE:
   Perform Levenberg-Marquardt least-squares minimization (MINPACK-1)

 MAJOR TOPICS:
   Curve and Surface Fitting

 CALLING SEQUENCE:
   parms = MPFIT(MYFUNCT, start_parms, FUNCTARGS=fcnargs, NFEV=nfev,
                 MAXITER=maxiter, ERRMSG=errmsg, NPRINT=nprint, QUIET=quiet, 
                 FTOL=ftol, XTOL=xtol, GTOL=gtol, NITER=niter, 
                 STATUS=status, ITERPROC=iterproc, ITERARGS=iterargs,
                 COVAR=covar, PERROR=perror, BESTNORM=bestnorm,
                 PARINFO=parinfo)

 DESCRIPTION:

  MPFIT uses the Levenberg-Marquardt technique to solve the
  least-squares problem.  In its typical use, MPFIT will be used to
  fit a user-supplied function (the &quot;model&quot;) to user-supplied data
  points (the &quot;data&quot;) by adjusting a set of parameters.  MPFIT is
  based upon MINPACK-1 (LMDIF.F) by More' and collaborators.

  For example, a researcher may think that a set of observed data
  points is best modelled with a Gaussian curve.  A Gaussian curve is
  parameterized by its mean, standard deviation and normalization.
  MPFIT will, within certain constraints, find the set of parameters
  which best fits the data.  The fit is &quot;best&quot; in the least-squares
  sense; that is, the sum of the weighted squared differences between
  the model and data is minimized.

  The Levenberg-Marquardt technique is a particular strategy for
  iteratively searching for the best fit.  This particular
  implementation is drawn from MINPACK-1 (see NETLIB), and seems to
  be more robust than routines provided with IDL.  This version
  allows upper and lower bounding constraints to be placed on each
  parameter, or the parameter can be held fixed.

  The IDL user-supplied function should return an array of weighted
  deviations between model and data.  In a typical scientific problem
  the residuals should be weighted so that each deviate has a
  gaussian sigma of 1.0.  If X represents values of the independent
  variable, Y represents a measurement for each value of X, and ERR
  represents the error in the measurements, then the deviates could
  be calculated as follows:

    DEVIATES = (Y - F(X)) / ERR

  where F is the analytical function representing the model.  You are
  recommended to use the convenience functions MPFITFUN and
  MPFITEXPR, which are driver functions that calculate the deviates
  for you.  If ERR are the 1-sigma uncertainties in Y, then

    TOTAL( DEVIATES^2 ) 

  will be the total chi-squared value.  MPFIT will minimize the
  chi-square value.  The values of X, Y and ERR are passed through
  MPFIT to the user-supplied function via the FUNCTARGS keyword.

  Simple constraints can be placed on parameter values by using the
  PARINFO keyword to MPFIT.  See below for a description of this
  keyword.

  MPFIT does not perform more general optimization tasks.  See TNMIN
  instead.  MPFIT is customized, based on MINPACK-1, to the
  least-squares minimization problem.

 USER FUNCTION

  The user must define a function which returns the appropriate
  values as specified above.  The function should return the weighted
  deviations between the model and the data.  For applications which
  use finite-difference derivatives -- the default -- the user
  function should be declared in the following way:

    FUNCTION MYFUNCT, p, X=x, Y=y, ERR=err
     ; Parameter values are passed in &quot;p&quot;
     model = F(x, p)
     return, (y-model)/err
    END

  See below for applications with analytical derivatives.

  The keyword parameters X, Y, and ERR in the example above are
  suggestive but not required.  Any parameters can be passed to
  MYFUNCT by using the FUNCTARGS keyword to MPFIT.  Use MPFITFUN and
  MPFITEXPR if you need ideas on how to do that.  The function *must*
  accept a parameter list, P.
  
  In general there are no restrictions on the number of dimensions in
  X, Y or ERR.  However the deviates *must* be returned in a
  one-dimensional array, and must have the same type (float or
  double) as the input arrays.

  User functions may also indicate a fatal error condition using the
  ERROR_CODE common block variable, as described below under the
  MPFIT_ERROR common block definition (by setting ERROR_CODE to a
  number between -15 and -1).

 ANALYTIC DERIVATIVES
 
  In the search for the best-fit solution, MPFIT by default
  calculates derivatives numerically via a finite difference
  approximation.  The user-supplied function need not calculate the
  derivatives explicitly.  However, if you desire to compute them
  analytically, then the AUTODERIVATIVE=0 keyword must be passed.  As
  a practical matter, it is often sufficient and even faster to allow
  MPFIT to calculate the derivatives numerically, and so
  AUTODERIVATIVE=0 is not necessary.

  Also, the user function must be declared with one additional
  parameter, as follows:

    FUNCTION MYFUNCT, p, dp, X=x, Y=y, ERR=err
     model = F(x, p)
     
     if n_params() GT 1 then begin
       ; Compute derivatives
       dp = make_array(n_elements(x), n_elements(p), value=x(0)*0)
       for i = 0, n_elements(p)-1 do $
         dp(*,i) = FGRAD(x, p, i)
     endif
    
     return, (y-model)/err
    END

  where FGRAD(x, p, i) is a user function which must compute the
  derivative of the model with respect to parameter P(i) at X.  When
  finite differencing is used for computing derivatives (ie, when
  AUTODERIVATIVE=1), the parameter DP is not passed.  Therefore
  functions can use N_PARAMS() to indicate whether they must compute
  the derivatives or not.

  Derivatives should be returned in the DP array. DP should be an m x
  n array, where m is the number of data points and n is the number
  of parameters.  dp(i,j) is the derivative at the ith point with
  respect to the jth parameter.  
  
  The derivatives with respect to fixed parameters are ignored; zero
  is an appropriate value to insert for those derivatives.  Upon
  input to the user function, DP is set to a vector with the same
  length as P, with a value of 1 for a parameter which is free, and a
  value of zero for a parameter which is fixed (and hence no
  derivative needs to be calculated).  This input vector may be
  overwritten as needed.

  If the data is higher than one dimensional, then the *last*
  dimension should be the parameter dimension.  Example: fitting a
  50x50 image, &quot;dp&quot; should be 50x50xNPAR.
  
 CONSTRAINING PARAMETER VALUES WITH THE PARINFO KEYWORD

  The behavior of MPFIT can be modified with respect to each
  parameter to be fitted.  A parameter value can be fixed; simple
  boundary constraints can be imposed; limitations on the parameter
  changes can be imposed; properties of the automatic derivative can
  be modified; and parameters can be tied to one another.

  These properties are governed by the PARINFO structure, which is
  passed as a keyword parameter to MPFIT.

  PARINFO should be an array of structures, one for each parameter.
  Each parameter is associated with one element of the array, in
  numerical order.  The structure can have the following entries
  (none are required):
  
     .VALUE - the starting parameter value (but see the START_PARAMS
              parameter for more information).
  
     .FIXED - a boolean value, whether the parameter is to be held
              fixed or not.  Fixed parameters are not varied by
              MPFIT, but are passed on to MYFUNCT for evaluation.
  
     .LIMITED - a two-element boolean array.  If the first/second
                element is set, then the parameter is bounded on the
                lower/upper side.  A parameter can be bounded on both
                sides.  Both LIMITED and LIMITS must be given
                together.
  
     .LIMITS - a two-element float or double array.  Gives the
               parameter limits on the lower and upper sides,
               respectively.  Zero, one or two of these values can be
               set, depending on the values of LIMITED.  Both LIMITED
               and LIMITS must be given together.
  
     .PARNAME - a string, giving the name of the parameter.  The
                fitting code of MPFIT does not use this tag in any
                way.  However, the default ITERPROC will print the
                parameter name if available.
  
     .STEP - the step size to be used in calculating the numerical
             derivatives.  If set to zero, then the step size is
             computed automatically.  Ignored when AUTODERIVATIVE=0.
             This value is superceded by the RELSTEP value.

     .RELSTEP - the *relative* step size to be used in calculating
                the numerical derivatives.  This number is the
                fractional size of the step, compared to the
                parameter value.  This value supercedes the STEP
                setting.  If the parameter is zero, then a default
                step size is chosen.

     .MPSIDE - the sidedness of the finite difference when computing
               numerical derivatives.  This field can take four
               values:

                  0 - one-sided derivative computed automatically
                  1 - one-sided derivative (f(x+h) - f(x)  )/h
                 -1 - one-sided derivative (f(x)   - f(x-h))/h
                  2 - two-sided derivative (f(x+h) - f(x-h))/(2*h)

              Where H is the STEP parameter described above.  The
              &quot;automatic&quot; one-sided derivative method will chose a
              direction for the finite difference which does not
              violate any constraints.  The other methods do not
              perform this check.  The two-sided method is in
              principle more precise, but requires twice as many
              function evaluations.  Default: 0.

     .MPMAXSTEP - the maximum change to be made in the parameter
                  value.  During the fitting process, the parameter
                  will never be changed by more than this value in
                  one iteration.

                  A value of 0 indicates no maximum.  Default: 0.
  
     .TIED - a string expression which &quot;ties&quot; the parameter to other
             free or fixed parameters as an equality constraint.  Any
             expression involving constants and the parameter array P
             are permitted.
             Example: if parameter 2 is always to be twice parameter
             1 then use the following: parinfo(2).tied = '2 * P(1)'.
             Since they are totally constrained, tied parameters are
             considered to be fixed; no errors are computed for them.
             [ NOTE: the PARNAME can't be used in expressions. ]

     .MPPRINT - if set to 1, then the default ITERPROC will print the
                parameter value.  If set to 0, the parameter value
                will not be printed.  This tag can be used to
                selectively print only a few parameter values out of
                many.  Default: 1 (all parameters printed)

     .MPFORMAT - IDL format string to print the parameter within
                 ITERPROC.  Default: '(G20.6)' An empty string will
                 also use the default.

  
  Future modifications to the PARINFO structure, if any, will involve
  adding structure tags beginning with the two letters &quot;MP&quot;.
  Therefore programmers are urged to avoid using tags starting with
  the same letters; otherwise they are free to include their own
  fields within the PARINFO structure, and they will be ignored.
  
  PARINFO Example:
  parinfo = replicate({value:0.D, fixed:0, limited:[0,0], $
                       limits:[0.D,0]}, 5)
  parinfo(0).fixed = 1
  parinfo(4).limited(0) = 1
  parinfo(4).limits(0)  = 50.D
  parinfo(*).value = [5.7D, 2.2, 500., 1.5, 2000.]
  
  A total of 5 parameters, with starting values of 5.7,
  2.2, 500, 1.5, and 2000 are given.  The first parameter
  is fixed at a value of 5.7, and the last parameter is
  constrained to be above 50.


 HARD-TO-COMPUTE FUNCTIONS: &quot;EXTERNAL&quot; EVALUATION

  The normal mode of operation for MPFIT is for the user to pass a
  function name, and MPFIT will call the user function multiple times
  as it iterates toward a solution.

  Some user functions are particularly hard to compute using the
  standard model of MPFIT.  Usually these are functions that depend
  on a large amount of external data, and so it is not feasible, or
  at least highly impractical, to have MPFIT call it.  In those cases
  it may be possible to use the &quot;(EXTERNAL)&quot; evaluation option.

  In this case the user is responsible for making all function *and
  derivative* evaluations.  The function and Jacobian data are passed
  in through the EXTERNAL_FVEC and EXTERNAL_FJAC keywords,
  respectively.  The user indicates the selection of this option by
  specifying a function name (MYFUNCT) of &quot;(EXTERNAL)&quot;.  No
  user-function calls are made when EXTERNAL evaluation is being
  used.

  At the end of each iteration, control returns to the user, who must
  reevaluate the function at its new parameter values.  Users should
  check the return value of the STATUS keyword, where a value of 9
  indicates the user should supply more data for the next iteration,
  and re-call MPFIT.  The user may refrain from calling MPFIT
  further; as usual, STATUS will indicate when the solution has
  converged and no more iterations are required.

  Because MPFIT must maintain its own data structures between calls,
  the user must also pass a named variable to the EXTERNAL_STATE
  keyword.  This variable must be maintained by the user, but not
  changed, throughout the fitting process.  When no more iterations
  are desired, the named variable may be discarded.


 INPUTS:
   MYFUNCT - a string variable containing the name of the function to
             be minimized.  The function should return the weighted
             deviations between the model and the data, as described
             above.

             For EXTERNAL evaluation of functions, this parameter
             should be set to a value of &quot;(EXTERNAL)&quot;.

   START_PARAMS - An array of starting values for each of the
                  parameters of the model.  The number of parameters
                  should be fewer than the number of measurements.
                  Also, the parameters should have the same data type
                  as the measurements (double is preferred).

                  This parameter is optional if the PARINFO keyword
                  is used (but see PARINFO).  The PARINFO keyword
                  provides a mechanism to fix or constrain individual
                  parameters.  If both START_PARAMS and PARINFO are
                  passed, then the starting *value* is taken from
                  START_PARAMS, but the *constraints* are taken from
                  PARINFO.
 
 RETURNS:

   Returns the array of best-fit parameters.


 KEYWORD PARAMETERS:

   AUTODERIVATIVE - If this is set, derivatives of the function will
                    be computed automatically via a finite
                    differencing procedure.  If not set, then MYFUNCT
                    must provide the (analytical) derivatives.
                    Default: set (=1) 
                    NOTE: to supply your own analytical derivatives,
                      explicitly pass AUTODERIVATIVE=0

   BESTNORM - the value of the summed squared weighted residuals for
              the returned parameter values, i.e. TOTAL(DEVIATES^2).

   COVAR - the covariance matrix for the set of parameters returned
           by MPFIT.  The matrix is NxN where N is the number of
           parameters.  The square root of the diagonal elements
           gives the formal 1-sigma statistical errors on the
           parameters IF errors were treated &quot;properly&quot; in MYFUNC.
           Parameter errors are also returned in PERROR.

           To compute the correlation matrix, PCOR, use this example:
           IDL&gt; PCOR = COV * 0
           IDL&gt; FOR i = 0, n-1 DO FOR j = 0, n-1 DO $
                PCOR(i,j) = COV(i,j)/sqrt(COV(i,i)*COV(j,j))

           If NOCOVAR is set or MPFIT terminated abnormally, then
           COVAR is set to a scalar with value !VALUES.D_NAN.

   DOF - number of degrees of freedom, computed as
             DOF = N_ELEMENTS(DEVIATES) - NFREE
         Note that this doesn't account for pegged parameters (see
         NPEGGED).

   ERRMSG - a string error or warning message is returned.

   EXTERNAL_FVEC - upon input, the function values, evaluated at
                   START_PARAMS.  This should be an M-vector, where M
                   is the number of data points.

   EXTERNAL_FJAC - upon input, the Jacobian array of partial
                   derivative values.  This should be a M x N array,
                   where M is the number of data points and N is the
                   number of parameters.  NOTE: that all FIXED or
                   TIED parameters must *not* be included in this
                   array.

   EXTERNAL_STATE - a named variable to store MPFIT-related state
                    information between iterations (used in input and
                    output to MPFIT).  The user must not manipulate
                    or discard this data until the final iteration is
                    performed.

   FASTNORM - set this keyword to select a faster algorithm to
              compute sum-of-square values internally.  For systems
              with large numbers of data points, the standard
              algorithm can become prohibitively slow because it
              cannot be vectorized well.  By setting this keyword,
              MPFIT will run faster, but it will be more prone to
              floating point overflows and underflows.  Thus, setting
              this keyword may sacrifice some stability in the
              fitting process.
              
   FTOL - a nonnegative input variable. Termination occurs when both
          the actual and predicted relative reductions in the sum of
          squares are at most FTOL (and STATUS is accordingly set to
          1 or 3).  Therefore, FTOL measures the relative error
          desired in the sum of squares.  Default: 1D-10

   FUNCTARGS - A structure which contains the parameters to be passed
               to the user-supplied function specified by MYFUNCT via
               the _EXTRA mechanism.  This is the way you can pass
               additional data to your user-supplied function without
               using common blocks.

               Consider the following example:
                if FUNCTARGS = { XVAL:[1.D,2,3], YVAL:[1.D,4,9],
                                 ERRVAL:[1.D,1,1] }
                then the user supplied function should be declared
                like this:
                FUNCTION MYFUNCT, P, XVAL=x, YVAL=y, ERRVAL=err

               By default, no extra parameters are passed to the
               user-supplied function, but your function should
               accept *at least* one keyword parameter.  [ This is to
               accomodate a limitation in IDL's _EXTRA
               parameter-passing mechanism. ]

   GTOL - a nonnegative input variable. Termination occurs when the
          cosine of the angle between fvec and any column of the
          jacobian is at most GTOL in absolute value (and STATUS is
          accordingly set to 4). Therefore, GTOL measures the
          orthogonality desired between the function vector and the
          columns of the jacobian.  Default: 1D-10

   ITERARGS - The keyword arguments to be passed to ITERPROC via the
              _EXTRA mechanism.  This should be a structure, and is
              similar in operation to FUNCTARGS.
              Default: no arguments are passed.

   ITERPRINT - The name of an IDL procedure, equivalent to PRINT,
               that ITERPROC will use to render output.  ITERPRINT
               should be able to accept at least four positional
               arguments.  In addition, it should be able to accept
               the standard FORMAT keyword for output formatting; and
               the UNIT keyword, to redirect output to a logical file
               unit (default should be UNIT=1, standard output).
               These keywords are passed using the ITERARGS keyword
               above.  The ITERPRINT procedure must accept the _EXTRA
               keyword.

   ITERPROC - The name of a procedure to be called upon each NPRINT
              iteration of the MPFIT routine.  ITERPROC is always
              called in the final iteration.  It should be declared
              in the following way:

              PRO ITERPROC, MYFUNCT, p, iter, fnorm, FUNCTARGS=fcnargs, $
                PARINFO=parinfo, QUIET=quiet, DOF=dof, ...
                ; perform custom iteration update
              END
         
              ITERPROC must either accept all three keyword
              parameters (FUNCTARGS, PARINFO and QUIET), or at least
              accept them via the _EXTRA keyword.
          
              MYFUNCT is the user-supplied function to be minimized,
              P is the current set of model parameters, ITER is the
              iteration number, and FUNCTARGS are the arguments to be
              passed to MYFUNCT.  FNORM should be the chi-squared
              value.  QUIET is set when no textual output should be
              printed.  DOF is the number of degrees of freedom,
              normally the number of points less the number of free
              parameters.  See below for documentation of PARINFO.

              In implementation, ITERPROC can perform updates to the
              terminal or graphical user interface, to provide
              feedback while the fit proceeds.  If the fit is to be
              stopped for any reason, then ITERPROC should set the
              common block variable ERROR_CODE to negative value
              between -15 and -1 (see MPFIT_ERROR common block
              below).  In principle, ITERPROC should probably not
              modify the parameter values, because it may interfere
              with the algorithm's stability.  In practice it is
              allowed.

              Default: an internal routine is used to print the
                       parameter values.

   ITERSTOP - Set this keyword if you wish to be able to stop the
              fitting by hitting the predefined ITERKEYSTOP key on
              the keyboard.  This only works if you use the default
              ITERPROC.

   ITERKEYSTOP - A keyboard key which will halt the fit (and if
                 ITERSTOP is set and the default ITERPROC is used).
                 ITERSTOPKEY may either be a one-character string
                 with the desired key, or a scalar integer giving the
                 ASCII code of the desired key.  
                 Default: 7b (control-g)

                 NOTE: the default value of ASCI 7 (control-G) cannot
                 be read in some windowing environments, so you must
                 change to a printable character like 'q'.

   MAXITER - The maximum number of iterations to perform.  If the
             number is exceeded, then the STATUS value is set to 5
             and MPFIT returns.
             Default: 200 iterations

   NFEV - the number of MYFUNCT function evaluations performed.

   NFREE - the number of free parameters in the fit.  This includes
           parameters which are not FIXED and not TIED, but it does
           include parameters which are pegged at LIMITS.

   NITER - the number of iterations completed.

   NOCOVAR - set this keyword to prevent the calculation of the
             covariance matrix before returning (see COVAR)

   NPEGGED - the number of free parameters which are pegged at a
             LIMIT.

   NPRINT - The frequency with which ITERPROC is called.  A value of
            1 indicates that ITERPROC is called with every iteration,
            while 2 indicates every other iteration, etc.  Be aware
            that several Levenberg-Marquardt attempts can be made in
            a single iteration.  Also, the ITERPROC is *always*
            called for the final iteration, regardless of the
            iteration number.
            Default value: 1

   PARINFO - Provides a mechanism for more sophisticated constraints
             to be placed on parameter values.  When PARINFO is not
             passed, then it is assumed that all parameters are free
             and unconstrained.  Values in PARINFO are never 
             modified during a call to MPFIT.

             See description above for the structure of PARINFO.

             Default value:  all parameters are free and unconstrained.

   PERROR - The formal 1-sigma errors in each parameter, computed
            from the covariance matrix.  If a parameter is held
            fixed, or if it touches a boundary, then the error is
            reported as zero.

            If the fit is unweighted (i.e. no errors were given, or
            the weights were uniformly set to unity), then PERROR
            will probably not represent the true parameter
            uncertainties.  

            *If* you can assume that the true reduced chi-squared
            value is unity -- meaning that the fit is implicitly
            assumed to be of good quality -- then the estimated
            parameter uncertainties can be computed by scaling PERROR
            by the measured chi-squared value.

              DOF     = N_ELEMENTS(X) - N_ELEMENTS(PARMS) ; deg of freedom
              PCERROR = PERROR * SQRT(BESTNORM / DOF)   ; scaled uncertainties

   QUIET - set this keyword when no textual output should be printed
           by MPFIT

   RESDAMP - a scalar number, indicating the cut-off value of
             residuals where &quot;damping&quot; will occur.  Residuals with
             magnitudes greater than this number will be replaced by
             their logarithm.  This partially mitigates the so-called
             large residual problem inherent in least-squares solvers
             (as for the test problem CURVI, http://www.maxthis.com/-
             curviex.htm).  A value of 0 indicates no damping.
             Default: 0

             Note: RESDAMP doesn't work with AUTODERIV=0

   STATUS - an integer status code is returned.  All values greater
            than zero can represent success (however STATUS EQ 5 may
            indicate failure to converge).  It can have one of the
            following values:

        -16  a parameter or function value has become infinite or an
             undefined number.  This is usually a consequence of
             numerical overflow in the user's model function, which
             must be avoided.

        -15 to -1 
             these are error codes that either MYFUNCT or ITERPROC
             may return to terminate the fitting process (see
             description of MPFIT_ERROR common below).  If either
             MYFUNCT or ITERPROC set ERROR_CODE to a negative number,
             then that number is returned in STATUS.  Values from -15
             to -1 are reserved for the user functions and will not
             clash with MPFIT.

	   0  improper input parameters.
         
	   1  both actual and predicted relative reductions
	      in the sum of squares are at most FTOL.
         
	   2  relative error between two consecutive iterates
	      is at most XTOL
         
	   3  conditions for STATUS = 1 and STATUS = 2 both hold.
         
	   4  the cosine of the angle between fvec and any
	      column of the jacobian is at most GTOL in
	      absolute value.
         
	   5  the maximum number of iterations has been reached
         
	   6  FTOL is too small. no further reduction in
	      the sum of squares is possible.
         
	   7  XTOL is too small. no further improvement in
	      the approximate solution x is possible.
         
	   8  GTOL is too small. fvec is orthogonal to the
	      columns of the jacobian to machine precision.

          9  A successful single iteration has been completed, and
             the user must supply another &quot;EXTERNAL&quot; evaluation of
             the function and its derivatives.  This status indicator
             is neither an error nor a convergence indicator.

   XTOL - a nonnegative input variable. Termination occurs when the
          relative error between two consecutive iterates is at most
          XTOL (and STATUS is accordingly set to 2 or 3).  Therefore,
          XTOL measures the relative error desired in the approximate
          solution.  Default: 1D-10


 EXAMPLE:

   p0 = [5.7D, 2.2, 500., 1.5, 2000.]
   fa = {X:x, Y:y, ERR:err}
   p = mpfit('MYFUNCT', p0, functargs=fa)

   Minimizes sum of squares of MYFUNCT.  MYFUNCT is called with the X,
   Y, and ERR keyword parameters that are given by FUNCTARGS.  The
   resulting parameter values are returned in p.


 COMMON BLOCKS:

   COMMON MPFIT_ERROR, ERROR_CODE

     User routines may stop the fitting process at any time by
     setting an error condition.  This condition may be set in either
     the user's model computation routine (MYFUNCT), or in the
     iteration procedure (ITERPROC).

     To stop the fitting, the above common block must be declared,
     and ERROR_CODE must be set to a negative number.  After the user
     procedure or function returns, MPFIT checks the value of this
     common block variable and exits immediately if the error
     condition has been set.  This value is also returned in the
     STATUS keyword: values of -1 through -15 are reserved error
     codes for the user routines.  By default the value of ERROR_CODE
     is zero, indicating a successful function/procedure call.

   COMMON MPFIT_PROFILE
   COMMON MPFIT_MACHAR
   COMMON MPFIT_CONFIG

     These are undocumented common blocks are used internally by
     MPFIT and may change in future implementations.

 THEORY OF OPERATION:

   There are many specific strategies for function minimization.  One
   very popular technique is to use function gradient information to
   realize the local structure of the function.  Near a local minimum
   the function value can be taylor expanded about x0 as follows:

      f(x) = f(x0) + f'(x0) . (x-x0) + (1/2) (x-x0) . f''(x0) . (x-x0)
             -----   ---------------   -------------------------------  (1)
     Order    0th          1st                      2nd

   Here f'(x) is the gradient vector of f at x, and f''(x) is the
   Hessian matrix of second derivatives of f at x.  The vector x is
   the set of function parameters, not the measured data vector.  One
   can find the minimum of f, f(xm) using Newton's method, and
   arrives at the following linear equation:

      f''(x0) . (xm-x0) = - f'(x0)                            (2)

   If an inverse can be found for f''(x0) then one can solve for
   (xm-x0), the step vector from the current position x0 to the new
   projected minimum.  Here the problem has been linearized (ie, the
   gradient information is known to first order).  f''(x0) is
   symmetric n x n matrix, and should be positive definite.

   The Levenberg - Marquardt technique is a variation on this theme.
   It adds an additional diagonal term to the equation which may aid the
   convergence properties:

      (f''(x0) + nu I) . (xm-x0) = -f'(x0)                  (2a)

   where I is the identity matrix.  When nu is large, the overall
   matrix is diagonally dominant, and the iterations follow steepest
   descent.  When nu is small, the iterations are quadratically
   convergent.

   In principle, if f''(x0) and f'(x0) are known then xm-x0 can be
   determined.  However the Hessian matrix is often difficult or
   impossible to compute.  The gradient f'(x0) may be easier to
   compute, if even by finite difference techniques.  So-called
   quasi-Newton techniques attempt to successively estimate f''(x0)
   by building up gradient information as the iterations proceed.

   In the least squares problem there are further simplifications
   which assist in solving eqn (2).  The function to be minimized is
   a sum of squares:

       f = Sum(hi^2)                                         (3)

   where hi is the ith residual out of m residuals as described
   above.  This can be substituted back into eqn (2) after computing
   the derivatives:

       f'  = 2 Sum(hi  hi')     
       f'' = 2 Sum(hi' hj') + 2 Sum(hi hi'')                (4)

   If one assumes that the parameters are already close enough to a
   minimum, then one typically finds that the second term in f'' is
   negligible [or, in any case, is too difficult to compute].  Thus,
   equation (2) can be solved, at least approximately, using only
   gradient information.

   In matrix notation, the combination of eqns (2) and (4) becomes:

        hT' . h' . dx = - hT' . h                          (5)

   Where h is the residual vector (length m), hT is its transpose, h'
   is the Jacobian matrix (dimensions n x m), and dx is (xm-x0).  The
   user function supplies the residual vector h, and in some cases h'
   when it is not found by finite differences (see MPFIT_FDJAC2,
   which finds h and hT').  Even if dx is not the best absolute step
   to take, it does provide a good estimate of the best *direction*,
   so often a line minimization will occur along the dx vector
   direction.

   The method of solution employed by MINPACK is to form the Q . R
   factorization of h', where Q is an orthogonal matrix such that QT .
   Q = I, and R is upper right triangular.  Using h' = Q . R and the
   ortogonality of Q, eqn (5) becomes

        (RT . QT) . (Q . R) . dx = - (RT . QT) . h
                     RT . R . dx = - RT . QT . h         (6)
                          R . dx = - QT . h

   where the last statement follows because R is upper triangular.
   Here, R, QT and h are known so this is a matter of solving for dx.
   The routine MPFIT_QRFAC provides the QR factorization of h, with
   pivoting, and MPFIT_QRSOLV provides the solution for dx.
   
 REFERENCES:

   MINPACK-1, Jorge More', available from netlib (www.netlib.org).
   &quot;Optimization Software Guide,&quot; Jorge More' and Stephen Wright, 
     SIAM, *Frontiers in Applied Mathematics*, Number 14.
   More', Jorge J., &quot;The Levenberg-Marquardt Algorithm:
     Implementation and Theory,&quot; in *Numerical Analysis*, ed. Watson,
     G. A., Lecture Notes in Mathematics 630, Springer-Verlag, 1977.

 MODIFICATION HISTORY:
   Translated from MINPACK-1 in FORTRAN, Apr-Jul 1998, CM
   Fixed bug in parameter limits (x vs xnew), 04 Aug 1998, CM
   Added PERROR keyword, 04 Aug 1998, CM
   Added COVAR keyword, 20 Aug 1998, CM
   Added NITER output keyword, 05 Oct 1998
      D.L Windt, Bell Labs, windt@bell-labs.com;
   Made each PARINFO component optional, 05 Oct 1998 CM
   Analytical derivatives allowed via AUTODERIVATIVE keyword, 09 Nov 1998
   Parameter values can be tied to others, 09 Nov 1998
   Fixed small bugs (Wayne Landsman), 24 Nov 1998
   Added better exception error reporting, 24 Nov 1998 CM
   Cosmetic documentation changes, 02 Jan 1999 CM
   Changed definition of ITERPROC to be consistent with TNMIN, 19 Jan 1999 CM
   Fixed bug when AUTDERIVATIVE=0.  Incorrect sign, 02 Feb 1999 CM
   Added keyboard stop to MPFIT_DEFITER, 28 Feb 1999 CM
   Cosmetic documentation changes, 14 May 1999 CM
   IDL optimizations for speed &amp; FASTNORM keyword, 15 May 1999 CM
   Tried a faster version of mpfit_enorm, 30 May 1999 CM
   Changed web address to cow.physics.wisc.edu, 14 Jun 1999 CM
   Found malformation of FDJAC in MPFIT for 1 parm, 03 Aug 1999 CM
   Factored out user-function call into MPFIT_CALL.  It is possible,
     but currently disabled, to call procedures.  The calling format
     is similar to CURVEFIT, 25 Sep 1999, CM
   Slightly changed mpfit_tie to be less intrusive, 25 Sep 1999, CM
   Fixed some bugs associated with tied parameters in mpfit_fdjac, 25
     Sep 1999, CM
   Reordered documentation; now alphabetical, 02 Oct 1999, CM
   Added QUERY keyword for more robust error detection in drivers, 29
     Oct 1999, CM
   Documented PERROR for unweighted fits, 03 Nov 1999, CM
   Split out MPFIT_RESETPROF to aid in profiling, 03 Nov 1999, CM
   Some profiling and speed optimization, 03 Nov 1999, CM
     Worst offenders, in order: fdjac2, qrfac, qrsolv, enorm.
     fdjac2 depends on user function, qrfac and enorm seem to be
     fully optimized.  qrsolv probably could be tweaked a little, but
     is still &lt;10% of total compute time.
   Made sure that !err was set to 0 in MPFIT_DEFITER, 10 Jan 2000, CM
   Fixed small inconsistency in setting of QANYLIM, 28 Jan 2000, CM
   Added PARINFO field RELSTEP, 28 Jan 2000, CM
   Converted to MPFIT_ERROR common block for indicating error
     conditions, 28 Jan 2000, CM
   Corrected scope of MPFIT_ERROR common block, CM, 07 Mar 2000
   Minor speed improvement in MPFIT_ENORM, CM 26 Mar 2000
   Corrected case where ITERPROC changed parameter values and
     parameter values were TIED, CM 26 Mar 2000
   Changed MPFIT_CALL to modify NFEV automatically, and to support
     user procedures more, CM 26 Mar 2000
   Copying permission terms have been liberalized, 26 Mar 2000, CM
   Catch zero value of zero a(j,lj) in MPFIT_QRFAC, 20 Jul 2000, CM
      (thanks to David Schlegel &lt;schlegel@astro.princeton.edu&gt;)
   MPFIT_SETMACHAR is called only once at init; only one common block
     is created (MPFIT_MACHAR); it is now a structure; removed almost
     all CHECK_MATH calls for compatibility with IDL5 and !EXCEPT;
     profiling data is now in a structure too; noted some
     mathematical discrepancies in Linux IDL5.0, 17 Nov 2000, CM
   Some significant changes.  New PARINFO fields: MPSIDE, MPMINSTEP,
     MPMAXSTEP.  Improved documentation.  Now PTIED constraints are
     maintained in the MPCONFIG common block.  A new procedure to
     parse PARINFO fields.  FDJAC2 now computes a larger variety of
     one-sided and two-sided finite difference derivatives.  NFEV is
     stored in the MPCONFIG common now.  17 Dec 2000, CM
   Added check that PARINFO and XALL have same size, 29 Dec 2000 CM
   Don't call function in TERMINATE when there is an error, 05 Jan
     2000
   Check for float vs. double discrepancies; corrected implementation
     of MIN/MAXSTEP, which I still am not sure of, but now at least
     the correct behavior occurs *without* it, CM 08 Jan 2001
   Added SCALE_FCN keyword, to allow for scaling, as for the CASH
     statistic; added documentation about the theory of operation,
     and under the QR factorization; slowly I'm beginning to
     understand the bowels of this algorithm, CM 10 Jan 2001
   Remove MPMINSTEP field of PARINFO, for now at least, CM 11 Jan
     2001
   Added RESDAMP keyword, CM, 14 Jan 2001
   Tried to improve the DAMP handling a little, CM, 13 Mar 2001
   Corrected .PARNAME behavior in _DEFITER, CM, 19 Mar 2001
   Added checks for parameter and function overflow; a new STATUS
     value to reflect this; STATUS values of -15 to -1 are reserved
     for user function errors, CM, 03 Apr 2001
   DAMP keyword is now a TANH, CM, 03 Apr 2001
   Added more error checking of float vs. double, CM, 07 Apr 2001
   Fixed bug in handling of parameter lower limits; moved overflow
     checking to end of loop, CM, 20 Apr 2001
   Failure using GOTO, TERMINATE more graceful if FNORM1 not defined,
     CM, 13 Aug 2001
   Add MPPRINT tag to PARINFO, CM, 19 Nov 2001
   Add DOF keyword to DEFITER procedure, and print degrees of
     freedom, CM, 28 Nov 2001
   Add check to be sure MYFUNCT is a scalar string, CM, 14 Jan 2002
   Addition of EXTERNAL_FJAC, EXTERNAL_FVEC keywords; ability to save
     fitter's state from one call to the next; allow '(EXTERNAL)'
     function name, which implies that user will supply function and
     Jacobian at each iteration, CM, 10 Mar 2002
   Documented EXTERNAL evaluation code, CM, 10 Mar 2002
   Corrected signficant bug in the way that the STEP parameter, and
     FIXED parameters interacted (Thanks Andrew Steffl), CM, 02 Apr
     2002
   Allow COVAR and PERROR keywords to be computed, even in case of
     '(EXTERNAL)' function, 26 May 2002
   Add NFREE and NPEGGED keywords; compute NPEGGED; compute DOF using
     NFREE instead of n_elements(X), thanks to Kristian Kjaer, CM 11
     Sep 2002
   Hopefully PERROR is all positive now, CM 13 Sep 2002
   Documented RELSTEP field of PARINFO (!!), CM, 25 Oct 2002
   Error checking to detect missing start pars, CM 12 Apr 2003
   Add DOF keyword to return degrees of freedom, CM, 30 June 2003
   Always call ITERPROC in the final iteration; add ITERKEYSTOP
     keyword, CM, 30 June 2003
   Correct bug in MPFIT_LMPAR of singularity handling, which might
     likely be fatal for one-parameter fits, CM, 21 Nov 2003
     (with thanks to Peter Tuthill for the proper test case)
   Minor documentation adjustment, 03 Feb 2004, CM
   Correct small error in QR factorization when pivoting; document
     the return values of QRFAC when pivoting, 21 May 2004, CM
   Add MPFORMAT field to PARINFO, and correct behavior of interaction
     between MPPRINT and PARNAME in MPFIT_DEFITERPROC (thanks to Tim
     Robishaw), 23 May 2004, CM
   Add the ITERPRINT keyword to allow redirecting output, 26 Sep
     2004, CM
   Correct MAXSTEP behavior in case of a negative parameter, 26 Sep
     2004, CM
   Fix bug in the parsing of MINSTEP/MAXSTEP, 10 Apr 2005, CM
   Fix bug in the handling of upper/lower limits when the limit was
     negative (the fitting code would never &quot;stick&quot; to the lower
     limit), 29 Jun 2005, CM
   Small documentation update for the TIED field, 05 Sep 2005, CM

  $Id: mpfit.pro,v 1.2 2006-02-07 22:38:32 schlegel Exp $
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mpfit/mpfit.pro">$IDLUTILS_DIR/pro/mpfit/mpfit.pro</a>)</strong></p>
<hr />
<h3 id="MPFIT2DFUN">MPFIT2DFUN</h3>
<p><a href="#MPFIT">[Previous Routine]</a></p>
<p><a href="#MPFIT2DPEAK">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   MPFIT2DFUN

 AUTHOR:
   Craig B. Markwardt, NASA/GSFC Code 662, Greenbelt, MD 20770
   craigm@lheamail.gsfc.nasa.gov
   UPDATED VERSIONs can be found on my WEB PAGE: 
      http://cow.physics.wisc.edu/~craigm/idl/idl.html

 PURPOSE:
   Perform Levenberg-Marquardt least-squares fit to a 2-D IDL function

 MAJOR TOPICS:
   Curve and Surface Fitting

 CALLING SEQUENCE:
   parms = MPFIT2DFUN(MYFUNCT, X, Y, Z, ERR, start_parms, ...)

 DESCRIPTION:

  MPFIT2DFUN fits a user-supplied model -- in the form of an IDL
  function -- to a set of user-supplied data.  MPFIT2DFUN calls
  MPFIT, the MINPACK-1 least-squares minimizer, to do the main
  work.  MPFIT2DFUN is a specialized version for two-dimensional 
  data.

  Given the data and their uncertainties, MPFIT2DFUN finds the best set
  of model parameters which match the data (in a least-squares
  sense) and returns them in an array.
  
  The user must supply the following items:
   - Two arrays of independent variable values (&quot;X&quot;, &quot;Y&quot;).
   - An array of &quot;measured&quot; *dependent* variable values (&quot;Z&quot;).
   - An array of &quot;measured&quot; 1-sigma uncertainty values (&quot;ERR&quot;).
   - The name of an IDL function which computes Z given (X,Y) (&quot;MYFUNCT&quot;).
   - Starting guesses for all of the parameters (&quot;START_PARAMS&quot;).

  There are very few restrictions placed on X, Y, Z, or MYFUNCT.
  Simply put, MYFUNCT must map the (X,Y) values into Z values given
  the model parameters.  The (X,Y) values are usually the independent
  X and Y coordinate positions in the two dimensional plane, but need
  not be.

  MPFIT2DFUN carefully avoids passing large arrays where possible to
  improve performance.

  See below for an example of usage.
   
 USER FUNCTION

  The user must define a function which returns the model value.  For
  applications which use finite-difference derivatives -- the default
  -- the user function should be declared in the following way:

    FUNCTION MYFUNCT, X, Y, P
     ; The independent variables are X and Y
     ; Parameter values are passed in &quot;P&quot;
     ZMOD = ... computed model values at (X,Y) ...
     return, ZMOD
    END

  The returned array YMOD must have the same dimensions and type as
  the &quot;measured&quot; Z values.

  User functions may also indicate a fatal error condition
  using the ERROR_CODE common block variable, as described
  below under the MPFIT_ERROR common block definition.

  See the discussion under &quot;ANALYTIC DERIVATIVES&quot; and AUTODERIVATIVE
  in MPFIT.PRO if you wish to compute the derivatives for yourself.
  AUTODERIVATIVE is accepted and passed directly to MPFIT.  The user
  function must accept one additional parameter, DP, which contains
  the derivative of the user function with respect to each parameter
  at each data point, as described in MPFIT.PRO.

 CREATING APPROPRIATELY DIMENSIONED INDEPENDENT VARIABLES

  The user must supply appropriate independent variables to
  MPFIT2DFUN.  For image fitting applications, this variable should
  be two-dimensional *arrays* describing the X and Y positions of
  every *pixel*.  [ Thus any two dimensional sampling is permitted,
  including irregular sampling. ]
  
  If the sampling is regular, then the x coordinates are the same for
  each row, and the y coordinates are the same for each column.  Call
  the x-row and y-column coordinates XR and YC respectively.  You can
  then compute X and Y as follows:
  
      X = XR # (YC*0 + 1)             eqn. 1
      Y = (XR*0 + 1) # YC             eqn. 2
  
  For example, if XR and YC have the following values:
  
    XR = [  1, 2, 3, 4, 5,]  ;; X positions of one row of pixels
    YC = [ 15,16,17 ]        ;; Y positions of one column of
                                pixels
  
  Then using equations 1 and 2 above will give these values to X and
  Y:
  
     X :  1  2  3  4  5       ;; X positions of all pixels
          1  2  3  4  5
          1  2  3  4  5
  
     Y : 15 15 15 15 15       ;; Y positions of all pixels
         16 16 16 16 16
         17 17 17 17 17
  
  Using the above technique is suggested, but *not* required.  You
  can do anything you wish with the X and Y values.  This technique
  only makes it easier to compute your model function values.

 CONSTRAINING PARAMETER VALUES WITH THE PARINFO KEYWORD

  The behavior of MPFIT can be modified with respect to each
  parameter to be fitted.  A parameter value can be fixed; simple
  boundary constraints can be imposed; limitations on the parameter
  changes can be imposed; properties of the automatic derivative can
  be modified; and parameters can be tied to one another.

  These properties are governed by the PARINFO structure, which is
  passed as a keyword parameter to MPFIT.

  PARINFO should be an array of structures, one for each parameter.
  Each parameter is associated with one element of the array, in
  numerical order.  The structure can have the following entries
  (none are required):
  
     .VALUE - the starting parameter value (but see the START_PARAMS
              parameter for more information).
  
     .FIXED - a boolean value, whether the parameter is to be held
              fixed or not.  Fixed parameters are not varied by
              MPFIT, but are passed on to MYFUNCT for evaluation.
  
     .LIMITED - a two-element boolean array.  If the first/second
                element is set, then the parameter is bounded on the
                lower/upper side.  A parameter can be bounded on both
                sides.  Both LIMITED and LIMITS must be given
                together.
  
     .LIMITS - a two-element float or double array.  Gives the
               parameter limits on the lower and upper sides,
               respectively.  Zero, one or two of these values can be
               set, depending on the values of LIMITED.  Both LIMITED
               and LIMITS must be given together.
  
     .PARNAME - a string, giving the name of the parameter.  The
                fitting code of MPFIT does not use this tag in any
                way.  However, the default ITERPROC will print the
                parameter name if available.
  
     .STEP - the step size to be used in calculating the numerical
             derivatives.  If set to zero, then the step size is
             computed automatically.  Ignored when AUTODERIVATIVE=0.
             This value is superceded by the RELSTEP value.

     .RELSTEP - the *relative* step size to be used in calculating
                the numerical derivatives.  This number is the
                fractional size of the step, compared to the
                parameter value.  This value supercedes the STEP
                setting.  If the parameter is zero, then a default
                step size is chosen.

     .MPSIDE - the sidedness of the finite difference when computing
               numerical derivatives.  This field can take four
               values:

                  0 - one-sided derivative computed automatically
                  1 - one-sided derivative (f(x+h) - f(x)  )/h
                 -1 - one-sided derivative (f(x)   - f(x-h))/h
                  2 - two-sided derivative (f(x+h) - f(x-h))/(2*h)

              Where H is the STEP parameter described above.  The
              &quot;automatic&quot; one-sided derivative method will chose a
              direction for the finite difference which does not
              violate any constraints.  The other methods do not
              perform this check.  The two-sided method is in
              principle more precise, but requires twice as many
              function evaluations.  Default: 0.

     .MPMINSTEP - the minimum change to be made in the parameter
                  value.  During the fitting process, the parameter
                  will be changed by multiples of this value.  The
                  actual step is computed as:

                     DELTA1 = MPMINSTEP*ROUND(DELTA0/MPMINSTEP)

                  where DELTA0 and DELTA1 are the estimated parameter
                  changes before and after this constraint is
                  applied.  Note that this constraint should be used
                  with care since it may cause non-converging,
                  oscillating solutions.

                  A value of 0 indicates no minimum.  Default: 0.

     .MPMAXSTEP - the maximum change to be made in the parameter
                  value.  During the fitting process, the parameter
                  will never be changed by more than this value.

                  A value of 0 indicates no maximum.  Default: 0.
  
     .TIED - a string expression which &quot;ties&quot; the parameter to other
             free or fixed parameters.  Any expression involving
             constants and the parameter array P are permitted.
             Example: if parameter 2 is always to be twice parameter
             1 then use the following: parinfo(2).tied = '2 * P(1)'.
             Since they are totally constrained, tied parameters are
             considered to be fixed; no errors are computed for them.
             [ NOTE: the PARNAME can't be used in expressions. ]
  
  Future modifications to the PARINFO structure, if any, will involve
  adding structure tags beginning with the two letters &quot;MP&quot;.
  Therefore programmers are urged to avoid using tags starting with
  the same letters; otherwise they are free to include their own
  fields within the PARINFO structure, and they will be ignored.
  
  PARINFO Example:
  parinfo = replicate({value:0.D, fixed:0, limited:[0,0], $
                       limits:[0.D,0]}, 5)
  parinfo(0).fixed = 1
  parinfo(4).limited(0) = 1
  parinfo(4).limits(0)  = 50.D
  parinfo(*).value = [5.7D, 2.2, 500., 1.5, 2000.]
  
  A total of 5 parameters, with starting values of 5.7,
  2.2, 500, 1.5, and 2000 are given.  The first parameter
  is fixed at a value of 5.7, and the last parameter is
  constrained to be above 50.

 INPUTS:
   MYFUNCT - a string variable containing the name of an IDL
             function.  This function computes the &quot;model&quot; Z values
             given the X,Y values and model parameters, as described above.

   X - Array of &quot;X&quot; independent variable values, as described above.
       These values are passed directly to the fitting function
       unmodified.

   Y - Array of &quot;Y&quot; independent variable values, as described
       above. X and Y should have the same data type.

   Z - Array of &quot;measured&quot; dependent variable values.  Z should have
       the same data type as X and Y.  The function MYFUNCT should
       map (X,Y)-&gt;Z.

   ERR - Array of &quot;measured&quot; 1-sigma uncertainties.  ERR should have
         the same data type as Z.  ERR is ignored if the WEIGHTS
         keyword is specified.

   START_PARAMS - An array of starting values for each of the
                  parameters of the model.  The number of parameters
                  should be fewer than the number of measurements.
                  Also, the parameters should have the same data type
                  as the measurements (double is preferred).

                  This parameter is optional if the PARINFO keyword
                  is used (see MPFIT).  The PARINFO keyword provides
                  a mechanism to fix or constrain individual
                  parameters.  If both START_PARAMS and PARINFO are
                  passed, then the starting *value* is taken from
                  START_PARAMS, but the *constraints* are taken from
                  PARINFO.
 
 RETURNS:

   Returns the array of best-fit parameters.

 KEYWORD PARAMETERS:

   BESTNORM - the value of the summed, squared, weighted residuals
              for the returned parameter values, i.e. the chi-square value.

   COVAR - the covariance matrix for the set of parameters returned
           by MPFIT.  The matrix is NxN where N is the number of
           parameters.  The square root of the diagonal elements
           gives the formal 1-sigma statistical errors on the
           parameters IF errors were treated &quot;properly&quot; in MYFUNC.
           Parameter errors are also returned in PERROR.

           To compute the correlation matrix, PCOR, use this:
           IDL&gt; PCOR = COV * 0
           IDL&gt; FOR i = 0, n-1 DO FOR j = 0, n-1 DO $
                PCOR(i,j) = COV(i,j)/sqrt(COV(i,i)*COV(j,j))

           If NOCOVAR is set or MPFIT terminated abnormally, then
           COVAR is set to a scalar with value !VALUES.D_NAN.

   DOF - number of degrees of freedom, computed as
             DOF = N_ELEMENTS(DEVIATES) - NFREE
         Note that this doesn't account for pegged parameters (see
         NPEGGED).

   ERRMSG - a string error or warning message is returned.

   FTOL - a nonnegative input variable. Termination occurs when both
          the actual and predicted relative reductions in the sum of
          squares are at most FTOL (and STATUS is accordingly set to
          1 or 3).  Therefore, FTOL measures the relative error
          desired in the sum of squares.  Default: 1D-10

   FUNCTARGS - A structure which contains the parameters to be passed
               to the user-supplied function specified by MYFUNCT via
               the _EXTRA mechanism.  This is the way you can pass
               additional data to your user-supplied function without
               using common blocks.

               By default, no extra parameters are passed to the
               user-supplied function.

   GTOL - a nonnegative input variable. Termination occurs when the
          cosine of the angle between fvec and any column of the
          jacobian is at most GTOL in absolute value (and STATUS is
          accordingly set to 4). Therefore, GTOL measures the
          orthogonality desired between the function vector and the
          columns of the jacobian.  Default: 1D-10

   ITERARGS - The keyword arguments to be passed to ITERPROC via the
              _EXTRA mechanism.  This should be a structure, and is
              similar in operation to FUNCTARGS.
              Default: no arguments are passed.

   ITERPROC - The name of a procedure to be called upon each NPRINT
              iteration of the MPFIT routine.  It should be declared
              in the following way:

              PRO ITERPROC, MYFUNCT, p, iter, fnorm, FUNCTARGS=fcnargs, $
                PARINFO=parinfo, QUIET=quiet, ...
                ; perform custom iteration update
              END
         
              ITERPROC must either accept all three keyword
              parameters (FUNCTARGS, PARINFO and QUIET), or at least
              accept them via the _EXTRA keyword.
          
              MYFUNCT is the user-supplied function to be minimized,
              P is the current set of model parameters, ITER is the
              iteration number, and FUNCTARGS are the arguments to be
              passed to MYFUNCT.  FNORM should be the
              chi-squared value.  QUIET is set when no textual output
              should be printed.  See below for documentation of
              PARINFO.

              In implementation, ITERPROC can perform updates to the
              terminal or graphical user interface, to provide
              feedback while the fit proceeds.  If the fit is to be
              stopped for any reason, then ITERPROC should set the
              common block variable ERROR_CODE to negative value (see
              MPFIT_ERROR common block below).  In principle,
              ITERPROC should probably not modify the parameter
              values, because it may interfere with the algorithm's
              stability.  In practice it is allowed.

              Default: an internal routine is used to print the
                       parameter values.

   MAXITER - The maximum number of iterations to perform.  If the
             number is exceeded, then the STATUS value is set to 5
             and MPFIT returns.
             Default: 200 iterations

   NFEV - the number of MYFUNCT function evaluations performed.

   NITER - the number of iterations completed.

   NOCOVAR - set this keyword to prevent the calculation of the
             covariance matrix before returning (see COVAR)

   NPRINT - The frequency with which ITERPROC is called.  A value of
            1 indicates that ITERPROC is called with every iteration,
            while 2 indicates every other iteration, etc.  Note that
            several Levenberg-Marquardt attempts can be made in a
            single iteration.
            Default value: 1

   PARINFO - Provides a mechanism for more sophisticated constraints
             to be placed on parameter values.  When PARINFO is not
             passed, then it is assumed that all parameters are free
             and unconstrained.  Values in PARINFO are never 
             modified during a call to MPFIT.

             See description above for the structure of PARINFO.

             Default value:  all parameters are free and unconstrained.

   PERROR - The formal 1-sigma errors in each parameter, computed
            from the covariance matrix.  If a parameter is held
            fixed, or if it touches a boundary, then the error is
            reported as zero.

            If the fit is unweighted (i.e. no errors were given, or
            the weights were uniformly set to unity), then PERROR
            will probably not represent the true parameter
            uncertainties.  *If* you can assume that the true reduced
            chi-squared value is unity -- meaning that the fit is
            implicitly assumed to be of good quality -- then the
            estimated parameter uncertainties can be computed by
            scaling PERROR by the measured chi-squared value.

              DOF     = N_ELEMENTS(Z) - N_ELEMENTS(PARMS) ; deg of freedom
              PCERROR = PERROR * SQRT(BESTNORM / DOF)   ; scaled uncertainties

   QUIET - set this keyword when no textual output should be printed
           by MPFIT

   STATUS - an integer status code is returned.  All values other
            than zero can represent success.  It can have one of the
            following values:

	   0  improper input parameters.
         
	   1  both actual and predicted relative reductions
	      in the sum of squares are at most FTOL.
         
	   2  relative error between two consecutive iterates
	      is at most XTOL
         
	   3  conditions for STATUS = 1 and STATUS = 2 both hold.
         
	   4  the cosine of the angle between fvec and any
	      column of the jacobian is at most GTOL in
	      absolute value.
         
	   5  the maximum number of iterations has been reached
         
	   6  FTOL is too small. no further reduction in
	      the sum of squares is possible.
         
	   7  XTOL is too small. no further improvement in
	      the approximate solution x is possible.
         
	   8  GTOL is too small. fvec is orthogonal to the
	      columns of the jacobian to machine precision.

   WEIGHTS - Array of weights to be used in calculating the
             chi-squared value.  If WEIGHTS is specified then the ERR
             parameter is ignored.  The chi-squared value is computed
             as follows:

                CHISQ = TOTAL( (Z-MYFUNCT(X,Y,P))^2 * ABS(WEIGHTS) )

             Here are common values of WEIGHTS:

                1D/ERR^2 - Normal weighting (ERR is the measurement error)
                1D/Z     - Poisson weighting (counting statistics)
                1D       - Unweighted

   XTOL - a nonnegative input variable. Termination occurs when the
          relative error between two consecutive iterates is at most
          XTOL (and STATUS is accordingly set to 2 or 3).  Therefore,
          XTOL measures the relative error desired in the approximate
          solution.  Default: 1D-10

   YFIT - the best-fit model function, as returned by MYFUNCT.

 EXAMPLE:

   p  = [2.2D, -0.7D, 1.4D, 3000.D]
   x  = (dindgen(200)*0.1 - 10.) # (dblarr(200) + 1)
   y  = (dblarr(200) + 1) # (dindgen(200)*0.1 - 10.)
   zi = gauss2(x, y, p)
   sz = sqrt(zi&gt;1)
   z  = zi + randomn(seed, 200, 200) * sz

   p0 = [0D, 0D, 1D, 10D]
   p = mpfit2dfun('GAUSS2', x, y, z, sz, p0)
   
   Generates a synthetic data set with a Gaussian peak, and Poisson
   statistical uncertainty.  Then the same function (but different
   starting parameters) is fitted to the data to see how close we can
   get.

   It is especially worthy to notice that the X and Y values are
   created as full images, so that a coordinate is attached to each
   pixel independently.  This is the format that GAUSS2 accepts, and
   the easiest for you to use in your own functions.


 COMMON BLOCKS:

   COMMON MPFIT_ERROR, ERROR_CODE

     User routines may stop the fitting process at any time by
     setting an error condition.  This condition may be set in either
     the user's model computation routine (MYFUNCT), or in the
     iteration procedure (ITERPROC).

     To stop the fitting, the above common block must be declared,
     and ERROR_CODE must be set to a negative number.  After the user
     procedure or function returns, MPFIT checks the value of this
     common block variable and exits immediately if the error
     condition has been set.  By default the value of ERROR_CODE is
     zero, indicating a successful function/procedure call.


 REFERENCES:

   MINPACK-1, Jorge More', available from netlib (www.netlib.org).
   &quot;Optimization Software Guide,&quot; Jorge More' and Stephen Wright, 
     SIAM, *Frontiers in Applied Mathematics*, Number 14.

 MODIFICATION HISTORY:
   Written, transformed from MPFITFUN, 26 Sep 1999, CM
   Alphabetized documented keywords, 02 Oct 1999, CM
   Added example, 02 Oct 1999, CM
   Tried to clarify definitions of X and Y, 29 Oct 1999, CM
   Added QUERY keyword and query checking of MPFIT, 29 Oct 1999, CM
   Check to be sure that X, Y and Z are present, 02 Nov 1999, CM
   Documented PERROR for unweighted fits, 03 Nov 1999, CM
   Changed to ERROR_CODE for error condition, 28 Jan 2000, CM
   Copying permission terms have been liberalized, 26 Mar 2000, CM
   Propagated improvements from MPFIT, 17 Dec 2000, CM
   Documented RELSTEP field of PARINFO (!!), CM, 25 Oct 2002
   Add DOF keyword to return degrees of freedom, CM, 23 June 2003
   Minor documentation adjustment, 03 Feb 2004, CM
   Fix the example to prevent zero errorbars, 28 Mar 2005, CM
   Defend against users supplying strangely dimensioned X and Y, 29
     Jun 2005, CM

  $Id: mpfit2dfun.pro,v 1.2 2006-02-07 22:38:32 schlegel Exp $
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mpfit/mpfit2dfun.pro">$IDLUTILS_DIR/pro/mpfit/mpfit2dfun.pro</a>)</strong></p>
<hr />
<h3 id="MPFIT2DPEAK">MPFIT2DPEAK</h3>
<p><a href="#MPFIT2DFUN">[Previous Routine]</a></p>
<p><a href="#MPFITELLIPSE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   MPFIT2DPEAK

 AUTHOR:
   Craig B. Markwardt, NASA/GSFC Code 662, Greenbelt, MD 20770
   craigm@lheamail.gsfc.nasa.gov
   UPDATED VERSIONs can be found on my WEB PAGE: 
      http://cow.physics.wisc.edu/~craigm/idl/idl.html

 PURPOSE:
   Fit a gaussian, lorentzian or Moffat model to data

 MAJOR TOPICS:
   Curve and Surface Fitting

 CALLING SEQUENCE:
   yfit = MPFIT2DPEAK(Z, A [, X, Y, /TILT ...] )

 DESCRIPTION:

   MPFIT2DPEAK fits a gaussian, lorentzian or Moffat model using the
   non-linear least squares fitter MPFIT.  MPFIT2DPEAK is meant to be
   a drop-in replacement for IDL's GAUSS2DFIT function (and requires
   MPFIT and MPFIT2DFUN).

   The choice of the fitting function is determined by the keywords
   GAUSSIAN, LORENTZIAN and MOFFAT.  By default the gaussian model
   function is used.  [ The Moffat function is a modified Lorentzian
   with variable power law index. ]  The two-dimensional peak has
   independent semimajor and semiminor axes, with an optional
   rotation term activated by setting the TILT keyword.  The baseline
   is assumed to be a constant.

      GAUSSIAN      A(0) + A(1)*exp(-0.5*u)
      LORENTZIAN    A(0) + A(1)/(u + 1)
      MOFFAT        A(0) + A(1)/(u + 1)^A(7)

      u = ( (x-A(4))/A(2) )^2 + ( (y-A(5))/A(3) )^2

         where x and y are cartesian coordinates in rotated
         coordinate system if TILT keyword is set.

   The returned parameter array elements have the following meanings:

      A(0)   Constant baseline level
      A(1)   Peak value
      A(2)   Peak half-width (x) -- gaussian sigma or half-width at half-max
      A(3)   Peak half-width (y) -- gaussian sigma or half-width at half-max
      A(4)   Peak centroid (x)
      A(5)   Peak centroid (y)
      A(6)   Rotation angle (radians) if TILT keyword set
      A(7)   Moffat power law index if MOFFAT keyword set

   By default the initial starting values for the parameters A are
   estimated from the data.  However, explicit starting values can be
   supplied using the ESTIMATES keyword.  Also, error or weighting
   values can optionally be provided; otherwise the fit is
   unweighted.

 RESTRICTIONS:

   If no starting parameter ESTIMATES are provided, then MPFIT2DPEAK
   attempts to estimate them from the data.  This is not a perfect
   science; however, the author believes that the technique
   implemented here is more robust than the one used in IDL's
   GAUSS2DFIT.  The author has tested cases of strong peaks, noisy
   peaks and broad peaks, all with success.


 INPUTS:

   Z - Two dimensional array of &quot;measured&quot; dependent variable values.
       Z should be of the same type and dimension as (X # Y).

   X - Optional vector of x positions for a single row of Z.

          X(i) should provide the x position of Z(i,*)

       Default: X values are integer increments from 0 to NX-1

   Y - Optional vector of y positions for a single column of Z.

          Y(j) should provide the y position of Z(*,j)

       Default: Y values are integer increments from 0 to NY-1

 OUTPUTS:
   A - Upon return, an array of best fit parameter values.  See the
       table above for the meanings of each parameter element.


 RETURNS:

   Returns the best fitting model function as a 2D array.

 KEYWORDS:

   ** NOTE ** Additional keywords such as PARINFO, BESTNORM, and
              STATUS are accepted by MPFIT2DPEAK but not documented
              here.  Please see the documentation for MPFIT for the
              description of these advanced options.

   CHISQ - the value of the summed squared residuals for the
           returned parameter values.

   CIRCULAR - if set, then the peak profile is assumed to be
              azimuthally symmetric.  When set, the parameters A(2)
              and A(3) will be identical and the TILT keyword will
              have no effect.

   DOF - number of degrees of freedom, computed as
             DOF = N_ELEMENTS(DEVIATES) - NFREE
         Note that this doesn't account for pegged parameters (see
         NPEGGED).

   ERROR - upon input, the measured 1-sigma uncertainties in the &quot;Z&quot;
           values.  If no ERROR or WEIGHTS are given, then the fit is
           unweighted.

   ESTIMATES - Array of starting values for each parameter of the
               model.
               Default: parameter values are estimated from data.

   GAUSSIAN - if set, fit a gaussian model function.  The Default.
   LORENTZIAN - if set, fit a lorentzian model function.
   MOFFAT - if set, fit a Moffat model function.

   MEASURE_ERRORS - synonym for ERRORS, for consistency with built-in
                    IDL fitting routines.

   NEGATIVE - if set, and ESTIMATES is not provided, then MPFIT2DPEAK
              will assume that a negative peak is present -- a
              valley.  Specifying this keyword is not normally
              required, since MPFIT2DPEAK can determine this
              automatically.

   NFREE - the number of free parameters in the fit.  This includes
           parameters which are not FIXED and not TIED, but it does
           include parameters which are pegged at LIMITS.

   PERROR - upon return, the 1-sigma uncertainties of the parameter
            values A.  These values are only meaningful if the ERRORS
            or WEIGHTS keywords are specified properly.

            If the fit is unweighted (i.e. no errors were given, or
            the weights were uniformly set to unity), then PERROR
            will probably not represent the true parameter
            uncertainties.  

            *If* you can assume that the true reduced chi-squared
            value is unity -- meaning that the fit is implicitly
            assumed to be of good quality -- then the estimated
            parameter uncertainties can be computed by scaling PERROR
            by the measured chi-squared value.

              DOF     = N_ELEMENTS(Z) - N_ELEMENTS(A)   ; deg of freedom
              PCERROR = PERROR * SQRT(BESTNORM / DOF)   ; scaled uncertainties

   QUIET - if set then diagnostic fitting messages are suppressed.
           Default: QUIET=1 (i.e., no diagnostics)

   SIGMA - synonym for PERROR (1-sigma parameter uncertainties), for
           compatibility with GAUSSFIT.  Do not confuse this with the
           Gaussian &quot;sigma&quot; width parameter.

   TILT - if set, then the major and minor axes of the peak profile
          are allowed to rotate with respect to the image axes.
          Parameter A(6) will be set to the clockwise rotation angle
          of the A(2) axis in radians.

   WEIGHTS - Array of weights to be used in calculating the
             chi-squared value.  If WEIGHTS is specified then the ERR
             parameter is ignored.  The chi-squared value is computed
             as follows:

                CHISQ = TOTAL( (Z-MYFUNCT(X,Y,P))^2 * ABS(WEIGHTS) )

             Here are common values of WEIGHTS:

                1D/ERR^2 - Normal weighting (ERR is the measurement error)
                1D/Y     - Poisson weighting (counting statistics)
                1D       - Unweighted

             The ERROR keyword takes precedence over any WEIGHTS
             keyword values.  If no ERROR or WEIGHTS are given, then
             the fit is unweighted.


 EXAMPLE:

 ; Construct a sample gaussian surface in range [-5,5] centered at [2,-3]
   x = findgen(100)*0.1 - 5. &amp; y = x
   xx = x # (y*0 + 1)
   yy = (x*0 + 1) # y
   rr = sqrt((xx-2.)^2 + (yy+3.)^2)

 ; Gaussian surface with sigma=0.5, peak value of 3, noise with sigma=0.2
   z = 3.*exp(-(rr/0.5)^2) + randomn(seed,100,100)*.2

 ; Fit gaussian parameters A
   zfit = mpfit2dpeak(z, a, x, y)

 REFERENCES:

   MINPACK-1, Jorge More', available from netlib (www.netlib.org).
   &quot;Optimization Software Guide,&quot; Jorge More' and Stephen Wright, 
     SIAM, *Frontiers in Applied Mathematics*, Number 14.

 MODIFICATION HISTORY:

   New algorithm for estimating starting values, CM, 31 Oct 1999
   Documented, 02 Nov 1999
   Small documentation fixes, 02 Nov 1999
   Documented PERROR for unweighted fits, 03 Nov 1999, CM
   Copying permission terms have been liberalized, 26 Mar 2000, CM
   Small cosmetic changes, 21 Sep 2000, CM
   Corrected bug introduced by cosmetic changes, 11 Oct 2000, CM :-)
   Added POSITIVE keyword, 17 Nov 2000, CM
   Removed TILT in common, in favor of FUNCTARGS approach, 23 Nov
     2000, CM
   Added SYMMETRIC keyword, documentation for TILT, and an example,
     24 Nov 2000, CM
   Changed SYMMETRIC to CIRCULAR, 17 Dec 2000, CM
   Really change SYMMETRIC to CIRCULAR!, 13 Sep 2002, CM
   Add error messages for SYMMETRIC and CIRCLE, 08 Nov 2002, CM
   Make more consistent with comparable IDL routines, 30 Jun 2003, CM
   Defend against users supplying strangely dimensioned X and Y, 29
     Jun 2005, CM

  $Id: mpfit2dpeak.pro,v 1.2 2006-02-07 22:38:32 schlegel Exp $
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mpfit/mpfit2dpeak.pro">$IDLUTILS_DIR/pro/mpfit/mpfit2dpeak.pro</a>)</strong></p>
<hr />
<h3 id="MPFITELLIPSE">MPFITELLIPSE</h3>
<p><a href="#MPFIT2DPEAK">[Previous Routine]</a></p>
<p><a href="#MPFITEXPR">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   MPFITELLIPSE

 AUTHOR:
   Craig B. Markwardt, NASA/GSFC Code 662, Greenbelt, MD 20770
   craigm@lheamail.gsfc.nasa.gov
   UPDATED VERSIONs can be found on my WEB PAGE: 
      http://cow.physics.wisc.edu/~craigm/idl/idl.html

 PURPOSE:
   Approximate fit to points forming an ellipse

 MAJOR TOPICS:
   Curve and Surface Fitting

 CALLING SEQUENCE:
   parms = MPFITELLIPSE(X, Y, start_parms, [/TILT, WEIGHTS=wts, ...])

 DESCRIPTION:

   MPFITELLIPSE fits a closed elliptical or circular curve to a two
   dimensional set of data points.  The user specifies the X and Y
   positions of the points, and an optional set of weights.  The
   ellipse may also be tilted at an arbitrary angle.

   The best fitting ellipse parameters are returned from by
   MPFITELLIPSE as a vector, whose values are:

      P(0)   Ellipse semi axis 1
      P(1)   Ellipse semi axis 2   ( = P(0) if CIRCLE keyword set)
      P(2)   Ellipse center - x value
      P(3)   Ellipse center - y value
      P(4)   Ellipse rotation angle (radians) if TILT keyword set

   The user may specify an initial set of trial parameters, but by
   default MPFITELLIPSE will estimate the parameters automatically.

   Users should be aware that in the presence of large amounts of
   noise, namely when the measurement error becomes significant
   compared to the ellipse axis length, then the estimated parameters
   become unreliable.  Generally speaking the computed axes will
   overestimate the true axes.  For example when (SIGMA_R/R) becomes
   0.5, the radius of the ellipse is overestimated by about 40%.

   Users can weight their data as they see appropriate.  However, the
   following prescription for the weighting appears to be the correct
   one, and produces values comparable to the typical chi-squared
   value.

     WEIGHTS = 0.75/(SIGMA_X^2 + SIGMA_Y^2)

   where SIGMA_X and SIGMA_Y are the measurement error vectors in the
   X and Y directions respectively.  However, it should be pointed
   out that this weighting is only appropriate for a set of points
   whose measurement errors are comparable.  If a more robust
   estimation of the parameter values is needed, the so-called
   orthogonal distance regression package should be used (ODRPACK,
   available in FORTRAN at www.netlib.org).

 INPUTS:

   X - measured X positions of the points in the ellipse.
   Y - measured Y positions of the points in the ellipse.

   START_PARAMS - an array of starting values for the ellipse
                  parameters, as described above.  This parameter is
                  optional; if not specified by the user, then the
                  ellipse parameters are estimated automatically from
                  the properties of the data.

 RETURNS:

   Returns the best fitting model ellipse parameters.

 KEYWORDS:

   ** NOTE ** Additional keywords such as PARINFO, BESTNORM, and
              STATUS are accepted by MPFITELLIPSE but not documented
              here.  Please see the documentation for MPFIT for the
              description of these advanced options.

   PERROR - upon return, the 1-sigma uncertainties of the returned
            ellipse parameter values.  These values are only
            meaningful if the WEIGHTS keyword is specified properly.

            If the fit is unweighted (i.e. no errors were given, or
            the weights were uniformly set to unity), then PERROR
            will probably not represent the true parameter
            uncertainties.  

   QUIET - if set then diagnostic fitting messages are suppressed.
           Default: QUIET=1 (i.e., no diagnostics)

   CIRCULAR - if set, then the curve is assumed to be a circle
              instead of ellipse.  When set, the parameters P(0) and
              P(1) will be identical and the TILT keyword will have
              no effect.

   TILT - if set, then the major and minor axes of the ellipse
          are allowed to rotate with respect to the data axes.
          Parameter P(4) will be set to the clockwise rotation angle
          of the P(0) axis in radians.

   WEIGHTS - Array of weights to be used in calculating the
             chi-squared value.  If WEIGHTS is specified then the ERR
             parameter is ignored.  The chi-squared value is computed
             as follows:

                CHISQ = TOTAL( (Z-MYFUNCT(X,Y,P))^2 * ABS(WEIGHTS)^2 )

             Users may wish to follow the guidelines for WEIGHTS
             described above.


 EXAMPLE:

 ; Construct a set of points on an ellipse, with some noise
   ph0 = 2*!pi*randomu(seed,50)
   x =  50. + 32.*cos(ph0) + 4.0*randomn(seed, 50)
   y = -75. + 65.*sin(ph0) + 0.1*randomn(seed, 50)

 ; Compute weights function
   weights = 0.75/(4.0^2 + 0.1^2)

 ; Fit ellipse and plot result
   p = mpfitellipse(x, y)
   plot, x, y, psym=1
   phi = dindgen(101)*2D*!dpi/100
   oplot, p(2)+p(0)*cos(phi), p(3)+p(1)*sin(phi)

 REFERENCES:

   MINPACK-1, Jorge More', available from netlib (www.netlib.org).
   &quot;Optimization Software Guide,&quot; Jorge More' and Stephen Wright, 
     SIAM, *Frontiers in Applied Mathematics*, Number 14.

 MODIFICATION HISTORY:

   Ported from MPFIT2DPEAK, 17 Dec 2000, CM
   More documentation, 11 Jan 2001, CM
   Example corrected, 18 Nov 2001, CM
   Change CIRCLE keyword to the correct CIRCULAR keyword, 13 Sep
      2002, CM
   Add error messages for SYMMETRIC and CIRCLE, 08 Nov 2002, CM
   Found small error in computation of _EVAL (when CIRCULAR) was set;
      sanity check when CIRCULAR is set, 21 Jan 2003, CM

  $Id: mpfitellipse.pro,v 1.1 2006-02-07 22:38:32 schlegel Exp $
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mpfit/mpfitellipse.pro">$IDLUTILS_DIR/pro/mpfit/mpfitellipse.pro</a>)</strong></p>
<hr />
<h3 id="MPFITEXPR">MPFITEXPR</h3>
<p><a href="#MPFITELLIPSE">[Previous Routine]</a></p>
<p><a href="#MPFITFUN">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   MPFITEXPR

 AUTHOR:
   Craig B. Markwardt, NASA/GSFC Code 662, Greenbelt, MD 20770
   craigm@lheamail.gsfc.nasa.gov
   UPDATED VERSIONs can be found on my WEB PAGE: 
      http://cow.physics.wisc.edu/~craigm/idl/idl.html

 PURPOSE:
   Perform Levenberg-Marquardt least-squares fit to arbitrary expression

 MAJOR TOPICS:
   Curve and Surface Fitting

 CALLING SEQUENCE:
   MYFUNCT = 'X*(1-X)+3'
   parms = MPFITEXPR(MYFUNCT, XVAL, YVAL, ERR, start_parms, ...)

 DESCRIPTION:

  MPFITEXPR fits a user-supplied model -- in the form of an arbitrary IDL
  expression -- to a set of user-supplied data.  MPFITEXPR calls
  MPFIT, the MINPACK-1 least-squares minimizer, to do the main
  work.

  Given the data and their uncertainties, MPFITEXPR finds the best set
  of model parameters which match the data (in a least-squares
  sense) and returns them in an array.
  
  The user must supply the following items:
   - An array of independent variable values (&quot;X&quot;).
   - An array of &quot;measured&quot; *dependent* variable values (&quot;Y&quot;).
   - An array of &quot;measured&quot; 1-sigma uncertainty values (&quot;ERR&quot;).
   - A text IDL expression which computes Y given X.
   - Starting guesses for all of the parameters (&quot;START_PARAMS&quot;).

  There are very few restrictions placed on X, Y or the expression of
  the model.  Simply put, the expression must map the &quot;X&quot; values into
  &quot;Y&quot; values given the model parameters.  The &quot;X&quot; values may
  represent any independent variable (not just Cartesian X), and
  indeed may be multidimensional themselves.  For example, in the
  application of image fitting, X may be a 2xN array of image
  positions.

  Some rules must be obeyed in constructing the expression.  First,
  the independent variable name *MUST* be &quot;X&quot; in the expression,
  regardless of the name of the variable being passed to MPFITEXPR.
  This is demonstrated in the above calling sequence, where the X
  variable passed in is called &quot;XVAL&quot; but the expression still refers
  to &quot;X&quot;.  Second, parameter values must be referred to as an array
  named &quot;P&quot;.

  If you do not pass in starting values for the model parameters,
  MPFITEXPR will attempt to determine the number of parameters you
  intend to have (it does this by looking for references to the array
  variable named &quot;P&quot;).  When no starting values are passed in, the
  values are assumed to start at zero.

  MPFITEXPR carefully avoids passing large arrays where possible to
  improve performance.

  See below for an example of usage.

 EVALUATING EXPRESSIONS

  This source module also provides a function called MPEVALEXPR.  You
  can use this function to evaluate your expression, given a list of
  parameters.  This is one of the easier ways to compute the model
  once the best-fit parameters have been found.  Here is an example:

       YMOD = MPEVALEXPR(MYFUNCT, XVAL, PARMS)

  where MYFUNCT is the expression (see MYFUNCT below), XVAL is the
  list of &quot;X&quot; values, and PARMS is an array of parameters.  The
  returned array YMOD contains the expression MYFUNCT evaluated at
  each point in XVAL.

 PASSING PRIVATE DATA TO AN EXPRESSION

  The most complicated optimization problems typically involve other
  external parameters, in addition to the fitted parameters.  While
  it is extremely easy to rewrite an expression dynamically, in case
  one of the external parameters changes, the other possibility is to
  use the PRIVATE data structure.

  The user merely passes a structure to the FUNCTARGS keyword.  The
  user expression receives this value as the variable PRIVATE.
  MPFITEXPR nevers accesses this variable so it can contain any
  desired values.  Usually it would be an IDL structure so that any
  named external parameters can be passed to the expression.


 CONSTRAINING PARAMETER VALUES WITH THE PARINFO KEYWORD

  The behavior of MPFIT can be modified with respect to each
  parameter to be fitted.  A parameter value can be fixed; simple
  boundary constraints can be imposed; limitations on the parameter
  changes can be imposed; properties of the automatic derivative can
  be modified; and parameters can be tied to one another.

  These properties are governed by the PARINFO structure, which is
  passed as a keyword parameter to MPFIT.

  PARINFO should be an array of structures, one for each parameter.
  Each parameter is associated with one element of the array, in
  numerical order.  The structure can have the following entries
  (none are required):
  
     .VALUE - the starting parameter value (but see the START_PARAMS
              parameter for more information).
  
     .FIXED - a boolean value, whether the parameter is to be held
              fixed or not.  Fixed parameters are not varied by
              MPFIT, but are passed on to MYFUNCT for evaluation.
  
     .LIMITED - a two-element boolean array.  If the first/second
                element is set, then the parameter is bounded on the
                lower/upper side.  A parameter can be bounded on both
                sides.  Both LIMITED and LIMITS must be given
                together.
  
     .LIMITS - a two-element float or double array.  Gives the
               parameter limits on the lower and upper sides,
               respectively.  Zero, one or two of these values can be
               set, depending on the values of LIMITED.  Both LIMITED
               and LIMITS must be given together.
  
     .PARNAME - a string, giving the name of the parameter.  The
                fitting code of MPFIT does not use this tag in any
                way.  However, the default ITERPROC will print the
                parameter name if available.
  
     .STEP - the step size to be used in calculating the numerical
             derivatives.  If set to zero, then the step size is
             computed automatically.  Ignored when AUTODERIVATIVE=0.
             This value is superceded by the RELSTEP value.

     .RELSTEP - the *relative* step size to be used in calculating
                the numerical derivatives.  This number is the
                fractional size of the step, compared to the
                parameter value.  This value supercedes the STEP
                setting.  If the parameter is zero, then a default
                step size is chosen.

     .MPSIDE - the sidedness of the finite difference when computing
               numerical derivatives.  This field can take four
               values:

                  0 - one-sided derivative computed automatically
                  1 - one-sided derivative (f(x+h) - f(x)  )/h
                 -1 - one-sided derivative (f(x)   - f(x-h))/h
                  2 - two-sided derivative (f(x+h) - f(x-h))/(2*h)

              Where H is the STEP parameter described above.  The
              &quot;automatic&quot; one-sided derivative method will chose a
              direction for the finite difference which does not
              violate any constraints.  The other methods do not
              perform this check.  The two-sided method is in
              principle more precise, but requires twice as many
              function evaluations.  Default: 0.

     .MPMINSTEP - the minimum change to be made in the parameter
                  value.  During the fitting process, the parameter
                  will be changed by multiples of this value.  The
                  actual step is computed as:

                     DELTA1 = MPMINSTEP*ROUND(DELTA0/MPMINSTEP)

                  where DELTA0 and DELTA1 are the estimated parameter
                  changes before and after this constraint is
                  applied.  Note that this constraint should be used
                  with care since it may cause non-converging,
                  oscillating solutions.

                  A value of 0 indicates no minimum.  Default: 0.

     .MPMAXSTEP - the maximum change to be made in the parameter
                  value.  During the fitting process, the parameter
                  will never be changed by more than this value.

                  A value of 0 indicates no maximum.  Default: 0.
  
     .TIED - a string expression which &quot;ties&quot; the parameter to other
             free or fixed parameters.  Any expression involving
             constants and the parameter array P are permitted.
             Example: if parameter 2 is always to be twice parameter
             1 then use the following: parinfo(2).tied = '2 * P(1)'.
             Since they are totally constrained, tied parameters are
             considered to be fixed; no errors are computed for them.
             [ NOTE: the PARNAME can't be used in expressions. ]
  
  Future modifications to the PARINFO structure, if any, will involve
  adding structure tags beginning with the two letters &quot;MP&quot;.
  Therefore programmers are urged to avoid using tags starting with
  the same letters; otherwise they are free to include their own
  fields within the PARINFO structure, and they will be ignored.
  
  PARINFO Example:
  parinfo = replicate({value:0.D, fixed:0, limited:[0,0], $
                       limits:[0.D,0]}, 5)
  parinfo(0).fixed = 1
  parinfo(4).limited(0) = 1
  parinfo(4).limits(0)  = 50.D
  parinfo(*).value = [5.7D, 2.2, 500., 1.5, 2000.]
  
  A total of 5 parameters, with starting values of 5.7,
  2.2, 500, 1.5, and 2000 are given.  The first parameter
  is fixed at a value of 5.7, and the last parameter is
  constrained to be above 50.

 INPUTS:
   MYFUNCT - a string variable containing an IDL expression.  The
             only restriction is that the independent variable *must*
             be referred to as &quot;X&quot; and model parameters *must* be
             referred to as an array called &quot;P&quot;.  Do not use symbol
             names beginning with the underscore, &quot;_&quot;.

             The expression should calculate &quot;model&quot; Y values given
             the X values and model parameters.  Using the vector
             notation of IDL, this can be quite easy to do.  If your
             expression gets complicated, you may wish to make an IDL
             function which will improve performance and readibility.

             The resulting array should be of the same size and
             dimensions as the &quot;measured&quot; Y values.

   X - Array of independent variable values.

   Y - Array of &quot;measured&quot; dependent variable values.  Y should have
       the same data type as X.  The function MYFUNCT should map
       X-&gt;Y.

   ERR - Array of &quot;measured&quot; 1-sigma uncertainties.  ERR should have
         the same data type as Y.  ERR is ignored if the WEIGHTS
         keyword is specified.

   START_PARAMS - An array of starting values for each of the
                  parameters of the model.  The number of parameters
                  should be fewer than the number of measurements.
                  Also, the parameters should have the same data type
                  as the measurements (double is preferred).

                  This parameter is optional if the PARINFO keyword
                  is used (see MPFIT).  The PARINFO keyword provides
                  a mechanism to fix or constrain individual
                  parameters.  If both START_PARAMS and PARINFO are
                  passed, then the starting *value* is taken from
                  START_PARAMS, but the *constraints* are taken from
                  PARINFO.

                  If no parameters are given, then MPFITEXPR attempts
                  to determine the number of parameters by scanning
                  the expression.  Parameters determined this way are
                  initialized to zero.  This technique is not fully
                  reliable, so users are advised to pass explicit
                  parameter starting values.
 

 RETURNS:

   Returns the array of best-fit parameters.


 KEYWORD PARAMETERS:

   BESTNORM - the value of the summed, squared, weighted residuals
              for the returned parameter values, i.e. the chi-square value.

   COVAR - the covariance matrix for the set of parameters returned
           by MPFIT.  The matrix is NxN where N is the number of
           parameters.  The square root of the diagonal elements
           gives the formal 1-sigma statistical errors on the
           parameters IF errors were treated &quot;properly&quot; in MYFUNC.
           Parameter errors are also returned in PERROR.

           To compute the correlation matrix, PCOR, use this:
           IDL&gt; PCOR = COV * 0
           IDL&gt; FOR i = 0, n-1 DO FOR j = 0, n-1 DO $
                PCOR(i,j) = COV(i,j)/sqrt(COV(i,i)*COV(j,j))

           If NOCOVAR is set or MPFIT terminated abnormally, then
           COVAR is set to a scalar with value !VALUES.D_NAN.

   DOF - number of degrees of freedom, computed as
             DOF = N_ELEMENTS(DEVIATES) - NFREE
         Note that this doesn't account for pegged parameters (see
         NPEGGED).

   ERRMSG - a string error or warning message is returned.

   FTOL - a nonnegative input variable. Termination occurs when both
          the actual and predicted relative reductions in the sum of
          squares are at most FTOL (and STATUS is accordingly set to
          1 or 3).  Therefore, FTOL measures the relative error
          desired in the sum of squares.  Default: 1D-10

   FUNCTARGS - passed directly to the expression as the variable
               PRIVATE.  Any user-private data can be communicated to
               the user expression using this keyword.
               Default: PRIVATE is undefined in user expression

   GTOL - a nonnegative input variable. Termination occurs when the
          cosine of the angle between fvec and any column of the
          jacobian is at most GTOL in absolute value (and STATUS is
          accordingly set to 4). Therefore, GTOL measures the
          orthogonality desired between the function vector and the
          columns of the jacobian.  Default: 1D-10

   ITERARGS - The keyword arguments to be passed to ITERPROC via the
              _EXTRA mechanism.  This should be a structure, and is
              similar in operation to FUNCTARGS.
              Default: no arguments are passed.

   ITERPROC - The name of a procedure to be called upon each NPRINT
              iteration of the MPFIT routine.  It should be declared
              in the following way:

              PRO ITERPROC, MYFUNCT, p, iter, fnorm, FUNCTARGS=fcnargs, $
                PARINFO=parinfo, QUIET=quiet, ...
                ; perform custom iteration update
              END
         
              ITERPROC must either accept all three keyword
              parameters (FUNCTARGS, PARINFO and QUIET), or at least
              accept them via the _EXTRA keyword.
          
              MYFUNCT is the user-supplied function to be minimized,
              P is the current set of model parameters, ITER is the
              iteration number, and FUNCTARGS are the arguments to be
              passed to MYFUNCT.  FNORM should be the
              chi-squared value.  QUIET is set when no textual output
              should be printed.  See below for documentation of
              PARINFO.

              In implementation, ITERPROC can perform updates to the
              terminal or graphical user interface, to provide
              feedback while the fit proceeds.  If the fit is to be
              stopped for any reason, then ITERPROC should set the
              common block variable ERROR_CODE to negative value (see
              MPFIT_ERROR common block below).  In principle,
              ITERPROC should probably not modify the parameter
              values, because it may interfere with the algorithm's
              stability.  In practice it is allowed.

              Default: an internal routine is used to print the
                       parameter values.

   MAXITER - The maximum number of iterations to perform.  If the
             number is exceeded, then the STATUS value is set to 5
             and MPFIT returns.
             Default: 200 iterations

   NFEV - the number of MYFUNCT function evaluations performed.

   NFREE - the number of free parameters in the fit.  This includes
           parameters which are not FIXED and not TIED, but it does
           include parameters which are pegged at LIMITS.

   NITER - the number of iterations completed.

   NOCOVAR - set this keyword to prevent the calculation of the
             covariance matrix before returning (see COVAR)

   NPEGGED - the number of free parameters which are pegged at a
             LIMIT.

   NPRINT - The frequency with which ITERPROC is called.  A value of
            1 indicates that ITERPROC is called with every iteration,
            while 2 indicates every other iteration, etc.  Note that
            several Levenberg-Marquardt attempts can be made in a
            single iteration.
            Default value: 1

   PARINFO - Provides a mechanism for more sophisticated constraints
             to be placed on parameter values.  When PARINFO is not
             passed, then it is assumed that all parameters are free
             and unconstrained.  Values in PARINFO are never 
             modified during a call to MPFIT.

             See description above for the structure of PARINFO.

             Default value:  all parameters are free and unconstrained.

   PERROR - The formal 1-sigma errors in each parameter, computed
            from the covariance matrix.  If a parameter is held
            fixed, or if it touches a boundary, then the error is
            reported as zero.

            If the fit is unweighted (i.e. no errors were given, or
            the weights were uniformly set to unity), then PERROR
            will probably not represent the true parameter
            uncertainties.  

            *If* you can assume that the true reduced chi-squared
            value is unity -- meaning that the fit is implicitly
            assumed to be of good quality -- then the estimated
            parameter uncertainties can be computed by scaling PERROR
            by the measured chi-squared value.

              DOF     = N_ELEMENTS(X) - N_ELEMENTS(PARMS) ; deg of freedom
              PCERROR = PERROR * SQRT(BESTNORM / DOF)   ; scaled uncertainties

   QUIET - set this keyword when no textual output should be printed
           by MPFIT

   STATUS - an integer status code is returned.  All values other
            than zero can represent success.  It can have one of the
            following values:

	   0  improper input parameters.
         
	   1  both actual and predicted relative reductions
	      in the sum of squares are at most FTOL.
         
	   2  relative error between two consecutive iterates
	      is at most XTOL
         
	   3  conditions for STATUS = 1 and STATUS = 2 both hold.
         
	   4  the cosine of the angle between fvec and any
	      column of the jacobian is at most GTOL in
	      absolute value.
         
	   5  the maximum number of iterations has been reached
         
	   6  FTOL is too small. no further reduction in
	      the sum of squares is possible.
         
	   7  XTOL is too small. no further improvement in
	      the approximate solution x is possible.
         
	   8  GTOL is too small. fvec is orthogonal to the
	      columns of the jacobian to machine precision.

   WEIGHTS - Array of weights to be used in calculating the
             chi-squared value.  If WEIGHTS is specified then the ERR
             parameter is ignored.  The chi-squared value is computed
             as follows:

                CHISQ = TOTAL( (Y-MYFUNCT(X,P))^2 * ABS(WEIGHTS) )

             Here are common values of WEIGHTS:

                1D/ERR^2 - Normal weighting (ERR is the measurement error)
                1D/Y     - Poisson weighting (counting statistics)
                1D       - Unweighted

   XTOL - a nonnegative input variable. Termination occurs when the
          relative error between two consecutive iterates is at most
          XTOL (and STATUS is accordingly set to 2 or 3).  Therefore,
          XTOL measures the relative error desired in the approximate
          solution.  Default: 1D-10

   YFIT - the best-fit model function, as returned by MYFUNCT.


 EXAMPLE:

   ; First, generate some synthetic data
   x  = dindgen(200) * 0.1 - 10.                   ; Independent variable 
   yi = gauss1(x, [2.2D, 1.4, 3000.]) + 1000       ; &quot;Ideal&quot; Y variable
   y  = yi + randomn(seed, 200) * sqrt(yi)         ; Measured, w/ noise
   sy = sqrt(y)                                    ; Poisson errors

   ; Now fit a Gaussian to see how well we can recover
   expr = 'P(0) + GAUSS1(X, P(1:3))'               ; fitting function
   p0 = [800.D, 1.D, 1., 500.]                     ; Initial guess
   p = mpfitexpr(expr, x, y, sy, p0)               ; Fit the expression
   print, p

   plot, x, y                                      ; Plot data
   oplot, x, mpevalexpr(expr, x, p)                ; Plot model

   Generates a synthetic data set with a Gaussian peak, and Poisson
   statistical uncertainty.  Then a model consisting of a constant
   plus Gaussian is fit to the data.


 COMMON BLOCKS:

   COMMON MPFIT_ERROR, ERROR_CODE

     User routines may stop the fitting process at any time by
     setting an error condition.  This condition may be set in either
     the user's model computation routine (MYFUNCT), or in the
     iteration procedure (ITERPROC).

     To stop the fitting, the above common block must be declared,
     and ERROR_CODE must be set to a negative number.  After the user
     procedure or function returns, MPFIT checks the value of this
     common block variable and exits immediately if the error
     condition has been set.  By default the value of ERROR_CODE is
     zero, indicating a successful function/procedure call.


 REFERENCES:

   MINPACK-1, Jorge More', available from netlib (www.netlib.org).
   &quot;Optimization Software Guide,&quot; Jorge More' and Stephen Wright, 
     SIAM, *Frontiers in Applied Mathematics*, Number 14.

 MODIFICATION HISTORY:
   Written, Apr-Jul 1998, CM
   Added PERROR keyword, 04 Aug 1998, CM
   Added COVAR keyword, 20 Aug 1998, CM
   Added NITER output keyword, 05 Oct 1998
      D.L Windt, Bell Labs, windt@bell-labs.com;
   Added ability to return model function in YFIT, 09 Nov 1998
   Parameter values can be tied to others, 09 Nov 1998
   Added MPEVALEXPR utility function, 09 Dec 1998
   Cosmetic documentation updates, 16 Apr 1999, CM
   More cosmetic documentation updates, 14 May 1999, CM
   Made sure to update STATUS value, 25 Sep 1999, CM
   Added WEIGHTS keyword, 25 Sep 1999, CM
   Changed from handles to common blocks, 25 Sep 1999, CM
     - commons seem much cleaner and more logical in this case.
   Alphabetized documented keywords, 02 Oct 1999, CM
   Added QUERY keyword and query checking of MPFIT, 29 Oct 1999, CM
   Check to be sure that X and Y are present, 02 Nov 1999, CM
   Documented PERROR for unweighted fits, 03 Nov 1999, CM
   Removed ITERPROC='' when quiet EQ 1, 10 Jan 2000, CM
   Changed to ERROR_CODE for error condition, 28 Jan 2000, CM
   Updated the EXAMPLE, 26 Mar 2000, CM
   Copying permission terms have been liberalized, 26 Mar 2000, CM
   Propagated improvements from MPFIT, 17 Dec 2000, CM
   Correct reference to _WTS in MPFITEXPR_EVAL, 25 May 2001, CM
      (thanks to Mark Fardal)
   Added useful FUNCTARGS behavior (as yet undocumented), 04 Jul
      2002, CM
   Documented FUNCTARGS/PRIVATE behavior, 22 Jul 2002, CM
   Added NFREE and NPEGGED keywords, 13 Sep 2002, CM
   Documented RELSTEP field of PARINFO (!!), CM, 25 Oct 2002
   Add DOF keyword, CM, 31 Jul 2003
   Add FUNCTARGS keyword to MPEVALEXPR, CM 08 Aug 2003
   Minor documentation adjustment, 03 Feb 2004, CM

  $Id: mpfitexpr.pro,v 1.2 2006-02-07 22:38:32 schlegel Exp $
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mpfit/mpfitexpr.pro">$IDLUTILS_DIR/pro/mpfit/mpfitexpr.pro</a>)</strong></p>
<hr />
<h3 id="MPFITFUN">MPFITFUN</h3>
<p><a href="#MPFITEXPR">[Previous Routine]</a></p>
<p><a href="#MPFITPEAK">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   MPFITFUN

 AUTHOR:
   Craig B. Markwardt, NASA/GSFC Code 662, Greenbelt, MD 20770
   craigm@lheamail.gsfc.nasa.gov
   UPDATED VERSIONs can be found on my WEB PAGE: 
      http://cow.physics.wisc.edu/~craigm/idl/idl.html

 PURPOSE:
   Perform Levenberg-Marquardt least-squares fit to IDL function

 MAJOR TOPICS:
   Curve and Surface Fitting

 CALLING SEQUENCE:
   parms = MPFITFUN(MYFUNCT, X, Y, ERR, start_params, ...)

 DESCRIPTION:

  MPFITFUN fits a user-supplied model -- in the form of an IDL
  function -- to a set of user-supplied data.  MPFITFUN calls
  MPFIT, the MINPACK-1 least-squares minimizer, to do the main
  work.

  Given the data and their uncertainties, MPFITFUN finds the best set
  of model parameters which match the data (in a least-squares
  sense) and returns them in an array.
  
  The user must supply the following items:
   - An array of independent variable values (&quot;X&quot;).
   - An array of &quot;measured&quot; *dependent* variable values (&quot;Y&quot;).
   - An array of &quot;measured&quot; 1-sigma uncertainty values (&quot;ERR&quot;).
   - The name of an IDL function which computes Y given X (&quot;MYFUNCT&quot;).
   - Starting guesses for all of the parameters (&quot;START_PARAMS&quot;).

  There are very few restrictions placed on X, Y or MYFUNCT.  Simply
  put, MYFUNCT must map the &quot;X&quot; values into &quot;Y&quot; values given the
  model parameters.  The &quot;X&quot; values may represent any independent
  variable (not just Cartesian X), and indeed may be multidimensional
  themselves.  For example, in the application of image fitting, X
  may be a 2xN array of image positions.

  MPFITFUN carefully avoids passing large arrays where possible to
  improve performance.

  See below for an example of usage.

 USER FUNCTION

  The user must define a function which returns the model value.  For
  applications which use finite-difference derivatives -- the default
  -- the user function should be declared in the following way:

    FUNCTION MYFUNCT, X, P
     ; The independent variable is X
     ; Parameter values are passed in &quot;P&quot;
     YMOD = ... computed model values at X ...
     return, YMOD
    END

  The returned array YMOD must have the same dimensions and type as
  the &quot;measured&quot; Y values.

  User functions may also indicate a fatal error condition
  using the ERROR_CODE common block variable, as described
  below under the MPFIT_ERROR common block definition.

  See the discussion under &quot;ANALYTIC DERIVATIVES&quot; and AUTODERIVATIVE
  in MPFIT.PRO if you wish to compute the derivatives for yourself.
  AUTODERIVATIVE is accepted by MPFITFUN and passed directly to
  MPFIT.  The user function must accept one additional parameter, DP,
  which contains the derivative of the user function with respect to
  each parameter at each data point, as described in MPFIT.PRO.

 CONSTRAINING PARAMETER VALUES WITH THE PARINFO KEYWORD

  The behavior of MPFIT can be modified with respect to each
  parameter to be fitted.  A parameter value can be fixed; simple
  boundary constraints can be imposed; limitations on the parameter
  changes can be imposed; properties of the automatic derivative can
  be modified; and parameters can be tied to one another.

  These properties are governed by the PARINFO structure, which is
  passed as a keyword parameter to MPFIT.

  PARINFO should be an array of structures, one for each parameter.
  Each parameter is associated with one element of the array, in
  numerical order.  The structure can have the following entries
  (none are required):
  
     .VALUE - the starting parameter value (but see the START_PARAMS
              parameter for more information).
  
     .FIXED - a boolean value, whether the parameter is to be held
              fixed or not.  Fixed parameters are not varied by
              MPFIT, but are passed on to MYFUNCT for evaluation.
  
     .LIMITED - a two-element boolean array.  If the first/second
                element is set, then the parameter is bounded on the
                lower/upper side.  A parameter can be bounded on both
                sides.  Both LIMITED and LIMITS must be given
                together.
  
     .LIMITS - a two-element float or double array.  Gives the
               parameter limits on the lower and upper sides,
               respectively.  Zero, one or two of these values can be
               set, depending on the values of LIMITED.  Both LIMITED
               and LIMITS must be given together.
  
     .PARNAME - a string, giving the name of the parameter.  The
                fitting code of MPFIT does not use this tag in any
                way.  However, the default ITERPROC will print the
                parameter name if available.
  
     .STEP - the step size to be used in calculating the numerical
             derivatives.  If set to zero, then the step size is
             computed automatically.  Ignored when AUTODERIVATIVE=0.
             This value is superceded by the RELSTEP value.

     .RELSTEP - the *relative* step size to be used in calculating
                the numerical derivatives.  This number is the
                fractional size of the step, compared to the
                parameter value.  This value supercedes the STEP
                setting.  If the parameter is zero, then a default
                step size is chosen.

     .MPSIDE - the sidedness of the finite difference when computing
               numerical derivatives.  This field can take four
               values:

                  0 - one-sided derivative computed automatically
                  1 - one-sided derivative (f(x+h) - f(x)  )/h
                 -1 - one-sided derivative (f(x)   - f(x-h))/h
                  2 - two-sided derivative (f(x+h) - f(x-h))/(2*h)

              Where H is the STEP parameter described above.  The
              &quot;automatic&quot; one-sided derivative method will chose a
              direction for the finite difference which does not
              violate any constraints.  The other methods do not
              perform this check.  The two-sided method is in
              principle more precise, but requires twice as many
              function evaluations.  Default: 0.

     .MPMINSTEP - the minimum change to be made in the parameter
                  value.  During the fitting process, the parameter
                  will be changed by multiples of this value.  The
                  actual step is computed as:

                     DELTA1 = MPMINSTEP*ROUND(DELTA0/MPMINSTEP)

                  where DELTA0 and DELTA1 are the estimated parameter
                  changes before and after this constraint is
                  applied.  Note that this constraint should be used
                  with care since it may cause non-converging,
                  oscillating solutions.

                  A value of 0 indicates no minimum.  Default: 0.

     .MPMAXSTEP - the maximum change to be made in the parameter
                  value.  During the fitting process, the parameter
                  will never be changed by more than this value.

                  A value of 0 indicates no maximum.  Default: 0.
  
     .TIED - a string expression which &quot;ties&quot; the parameter to other
             free or fixed parameters.  Any expression involving
             constants and the parameter array P are permitted.
             Example: if parameter 2 is always to be twice parameter
             1 then use the following: parinfo(2).tied = '2 * P(1)'.
             Since they are totally constrained, tied parameters are
             considered to be fixed; no errors are computed for them.
             [ NOTE: the PARNAME can't be used in expressions. ]
  
  Future modifications to the PARINFO structure, if any, will involve
  adding structure tags beginning with the two letters &quot;MP&quot;.
  Therefore programmers are urged to avoid using tags starting with
  the same letters; otherwise they are free to include their own
  fields within the PARINFO structure, and they will be ignored.
  
  PARINFO Example:
  parinfo = replicate({value:0.D, fixed:0, limited:[0,0], $
                       limits:[0.D,0]}, 5)
  parinfo(0).fixed = 1
  parinfo(4).limited(0) = 1
  parinfo(4).limits(0)  = 50.D
  parinfo(*).value = [5.7D, 2.2, 500., 1.5, 2000.]
  
  A total of 5 parameters, with starting values of 5.7,
  2.2, 500, 1.5, and 2000 are given.  The first parameter
  is fixed at a value of 5.7, and the last parameter is
  constrained to be above 50.

 INPUTS:
   MYFUNCT - a string variable containing the name of an IDL function.
             This function computes the &quot;model&quot; Y values given the
             X values and model parameters, as desribed above.

   X - Array of independent variable values.

   Y - Array of &quot;measured&quot; dependent variable values.  Y should have
       the same data type as X.  The function MYFUNCT should map
       X-&gt;Y.

   ERR - Array of &quot;measured&quot; 1-sigma uncertainties.  ERR should have
         the same data type as Y.  ERR is ignored if the WEIGHTS
         keyword is specified.

   START_PARAMS - An array of starting values for each of the
                  parameters of the model.  The number of parameters
                  should be fewer than the number of measurements.
                  Also, the parameters should have the same data type
                  as the measurements (double is preferred).

                  This parameter is optional if the PARINFO keyword
                  is used (see MPFIT).  The PARINFO keyword provides
                  a mechanism to fix or constrain individual
                  parameters.  If both START_PARAMS and PARINFO are
                  passed, then the starting *value* is taken from
                  START_PARAMS, but the *constraints* are taken from
                  PARINFO.
 

 RETURNS:

   Returns the array of best-fit parameters.


 KEYWORD PARAMETERS:

   BESTNORM - the value of the summed squared residuals for the
              returned parameter values.

   COVAR - the covariance matrix for the set of parameters returned
           by MPFIT.  The matrix is NxN where N is the number of
           parameters.  The square root of the diagonal elements
           gives the formal 1-sigma statistical errors on the
           parameters IF errors were treated &quot;properly&quot; in MYFUNC.
           Parameter errors are also returned in PERROR.

           To compute the correlation matrix, PCOR, use this:
           IDL&gt; PCOR = COV * 0
           IDL&gt; FOR i = 0, n-1 DO FOR j = 0, n-1 DO $
                PCOR(i,j) = COV(i,j)/sqrt(COV(i,i)*COV(j,j))

           If NOCOVAR is set or MPFIT terminated abnormally, then
           COVAR is set to a scalar with value !VALUES.D_NAN.

   CASH - when set, the fit statistic is changed to a derivative of
          the CASH statistic.  The model function must be strictly
          positive.

   DOF - number of degrees of freedom, computed as
             DOF = N_ELEMENTS(DEVIATES) - NFREE
         Note that this doesn't account for pegged parameters (see
         NPEGGED).

   ERRMSG - a string error or warning message is returned.

   FTOL - a nonnegative input variable. Termination occurs when both
          the actual and predicted relative reductions in the sum of
          squares are at most FTOL (and STATUS is accordingly set to
          1 or 3).  Therefore, FTOL measures the relative error
          desired in the sum of squares.  Default: 1D-10

   FUNCTARGS - A structure which contains the parameters to be passed
               to the user-supplied function specified by MYFUNCT via
               the _EXTRA mechanism.  This is the way you can pass
               additional data to your user-supplied function without
               using common blocks.

               By default, no extra parameters are passed to the
               user-supplied function.

   GTOL - a nonnegative input variable. Termination occurs when the
          cosine of the angle between fvec and any column of the
          jacobian is at most GTOL in absolute value (and STATUS is
          accordingly set to 4). Therefore, GTOL measures the
          orthogonality desired between the function vector and the
          columns of the jacobian.  Default: 1D-10

   ITERARGS - The keyword arguments to be passed to ITERPROC via the
              _EXTRA mechanism.  This should be a structure, and is
              similar in operation to FUNCTARGS.
              Default: no arguments are passed.

   ITERPROC - The name of a procedure to be called upon each NPRINT
              iteration of the MPFIT routine.  It should be declared
              in the following way:

              PRO ITERPROC, MYFUNCT, p, iter, fnorm, FUNCTARGS=fcnargs, $
                PARINFO=parinfo, QUIET=quiet, ...
                ; perform custom iteration update
              END
         
              ITERPROC must either accept all three keyword
              parameters (FUNCTARGS, PARINFO and QUIET), or at least
              accept them via the _EXTRA keyword.
          
              MYFUNCT is the user-supplied function to be minimized,
              P is the current set of model parameters, ITER is the
              iteration number, and FUNCTARGS are the arguments to be
              passed to MYFUNCT.  FNORM should be the
              chi-squared value.  QUIET is set when no textual output
              should be printed.  See below for documentation of
              PARINFO.

              In implementation, ITERPROC can perform updates to the
              terminal or graphical user interface, to provide
              feedback while the fit proceeds.  If the fit is to be
              stopped for any reason, then ITERPROC should set the
              common block variable ERROR_CODE to negative value (see
              MPFIT_ERROR common block below).  In principle,
              ITERPROC should probably not modify the parameter
              values, because it may interfere with the algorithm's
              stability.  In practice it is allowed.

              Default: an internal routine is used to print the
                       parameter values.

   MAXITER - The maximum number of iterations to perform.  If the
             number is exceeded, then the STATUS value is set to 5
             and MPFIT returns.
             Default: 200 iterations

   NFEV - the number of MYFUNCT function evaluations performed.

   NFREE - the number of free parameters in the fit.  This includes
           parameters which are not FIXED and not TIED, but it does
           include parameters which are pegged at LIMITS.

   NITER - the number of iterations completed.

   NOCOVAR - set this keyword to prevent the calculation of the
             covariance matrix before returning (see COVAR)

   NPEGGED - the number of free parameters which are pegged at a
             LIMIT.

   NPRINT - The frequency with which ITERPROC is called.  A value of
            1 indicates that ITERPROC is called with every iteration,
            while 2 indicates every other iteration, etc.  Note that
            several Levenberg-Marquardt attempts can be made in a
            single iteration.
            Default value: 1

   PARINFO - Provides a mechanism for more sophisticated constraints
             to be placed on parameter values.  When PARINFO is not
             passed, then it is assumed that all parameters are free
             and unconstrained.  Values in PARINFO are never 
             modified during a call to MPFIT.

             See description above for the structure of PARINFO.

             Default value:  all parameters are free and unconstrained.

   PERROR - The formal 1-sigma errors in each parameter, computed
            from the covariance matrix.  If a parameter is held
            fixed, or if it touches a boundary, then the error is
            reported as zero.

            If the fit is unweighted (i.e. no errors were given, or
            the weights were uniformly set to unity), then PERROR
            will probably not represent the true parameter
            uncertainties.  

            *If* you can assume that the true reduced chi-squared
            value is unity -- meaning that the fit is implicitly
            assumed to be of good quality -- then the estimated
            parameter uncertainties can be computed by scaling PERROR
            by the measured chi-squared value.

              DOF     = N_ELEMENTS(X) - N_ELEMENTS(PARMS) ; deg of freedom
              PCERROR = PERROR * SQRT(BESTNORM / DOF)   ; scaled uncertainties

   QUIET - set this keyword when no textual output should be printed
           by MPFIT

   STATUS - an integer status code is returned.  All values other
            than zero can represent success.  It can have one of the
            following values:

	   0  improper input parameters.
         
	   1  both actual and predicted relative reductions
	      in the sum of squares are at most FTOL.
         
	   2  relative error between two consecutive iterates
	      is at most XTOL
         
	   3  conditions for STATUS = 1 and STATUS = 2 both hold.
         
	   4  the cosine of the angle between fvec and any
	      column of the jacobian is at most GTOL in
	      absolute value.
         
	   5  the maximum number of iterations has been reached
         
	   6  FTOL is too small. no further reduction in
	      the sum of squares is possible.
         
	   7  XTOL is too small. no further improvement in
	      the approximate solution x is possible.
         
	   8  GTOL is too small. fvec is orthogonal to the
	      columns of the jacobian to machine precision.

   WEIGHTS - Array of weights to be used in calculating the
             chi-squared value.  If WEIGHTS is specified then the ERR
             parameter is ignored.  The chi-squared value is computed
             as follows:

                CHISQ = TOTAL( (Y-MYFUNCT(X,P))^2 * ABS(WEIGHTS) )

             Here are common values of WEIGHTS:

                1D/ERR^2 - Normal weighting (ERR is the measurement error)
                1D/Y     - Poisson weighting (counting statistics)
                1D       - Unweighted

   XTOL - a nonnegative input variable. Termination occurs when the
          relative error between two consecutive iterates is at most
          XTOL (and STATUS is accordingly set to 2 or 3).  Therefore,
          XTOL measures the relative error desired in the approximate
          solution.  Default: 1D-10

   YFIT - the best-fit model function, as returned by MYFUNCT.

   
 EXAMPLE:

   ; First, generate some synthetic data
   npts = 200
   x  = dindgen(npts) * 0.1 - 10.                  ; Independent variable 
   yi = gauss1(x, [2.2D, 1.4, 3000.])              ; &quot;Ideal&quot; Y variable
   y  = yi + randomn(seed, npts) * sqrt(1000. + yi); Measured, w/ noise
   sy = sqrt(1000.D + y)                           ; Poisson errors

   ; Now fit a Gaussian to see how well we can recover
   p0 = [1.D, 1., 1000.]                   ; Initial guess (cent, width, area)
   p = mpfitfun('GAUSS1', x, y, sy, p0)    ; Fit a function
   print, p

   Generates a synthetic data set with a Gaussian peak, and Poisson
   statistical uncertainty.  Then the same function is fitted to the
   data (with different starting parameters) to see how close we can
   get.


 COMMON BLOCKS:

   COMMON MPFIT_ERROR, ERROR_CODE

     User routines may stop the fitting process at any time by
     setting an error condition.  This condition may be set in either
     the user's model computation routine (MYFUNCT), or in the
     iteration procedure (ITERPROC).

     To stop the fitting, the above common block must be declared,
     and ERROR_CODE must be set to a negative number.  After the user
     procedure or function returns, MPFIT checks the value of this
     common block variable and exits immediately if the error
     condition has been set.  By default the value of ERROR_CODE is
     zero, indicating a successful function/procedure call.

 REFERENCES:

   MINPACK-1, Jorge More', available from netlib (www.netlib.org).
   &quot;Optimization Software Guide,&quot; Jorge More' and Stephen Wright, 
     SIAM, *Frontiers in Applied Mathematics*, Number 14.

 MODIFICATION HISTORY:
   Written, Apr-Jul 1998, CM
   Added PERROR keyword, 04 Aug 1998, CM
   Added COVAR keyword, 20 Aug 1998, CM
   Added ITER output keyword, 05 Oct 1998
      D.L Windt, Bell Labs, windt@bell-labs.com;
   Added ability to return model function in YFIT, 09 Nov 1998
   Analytical derivatives allowed via AUTODERIVATIVE keyword, 09 Nov 1998
   Parameter values can be tied to others, 09 Nov 1998
   Cosmetic documentation updates, 16 Apr 1999, CM
   More cosmetic documentation updates, 14 May 1999, CM
   Made sure to update STATUS, 25 Sep 1999, CM
   Added WEIGHTS keyword, 25 Sep 1999, CM
   Changed from handles to common blocks, 25 Sep 1999, CM
     - commons seem much cleaner and more logical in this case.
   Alphabetized documented keywords, 02 Oct 1999, CM
   Added QUERY keyword and query checking of MPFIT, 29 Oct 1999, CM
   Corrected EXAMPLE (offset of 1000), 30 Oct 1999, CM
   Check to be sure that X and Y are present, 02 Nov 1999, CM
   Documented PERROR for unweighted fits, 03 Nov 1999, CM
   Changed to ERROR_CODE for error condition, 28 Jan 2000, CM
   Corrected errors in EXAMPLE, 26 Mar 2000, CM
   Copying permission terms have been liberalized, 26 Mar 2000, CM
   Propagated improvements from MPFIT, 17 Dec 2000, CM
   Added CASH statistic, 10 Jan 2001
   Added NFREE and NPEGGED keywords, 11 Sep 2002, CM
   Documented RELSTEP field of PARINFO (!!), CM, 25 Oct 2002
   Add DOF keyword to return degrees of freedom, CM, 23 June 2003

  $Id: mpfitfun.pro,v 1.2 2006-02-07 22:38:32 schlegel Exp $
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mpfit/mpfitfun.pro">$IDLUTILS_DIR/pro/mpfit/mpfitfun.pro</a>)</strong></p>
<hr />
<h3 id="MPFITPEAK">MPFITPEAK</h3>
<p><a href="#MPFITFUN">[Previous Routine]</a></p>
<p><a href="#MPFTEST">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   MPFITPEAK

 AUTHOR:
   Craig B. Markwardt, NASA/GSFC Code 662, Greenbelt, MD 20770
   craigm@lheamail.gsfc.nasa.gov
   UPDATED VERSIONs can be found on my WEB PAGE: 
      http://cow.physics.wisc.edu/~craigm/idl/idl.html

 PURPOSE:
   Fit a gaussian, lorentzian or Moffat model to data

 MAJOR TOPICS:
   Curve and Surface Fitting

 CALLING SEQUENCE:
   yfit = MPFITPEAK(X, Y, A, NTERMS=nterms, ...)

 DESCRIPTION:

   MPFITPEAK fits a gaussian, lorentzian or Moffat model using the
   non-linear least squares fitter MPFIT.  MPFITPEAK is meant to be a
   drop-in replacement for IDL's GAUSSFIT function (and requires
   MPFIT and MPFITFUN).

   The choice of the fitting function is determined by the keywords
   GAUSSIAN, LORENTZIAN and MOFFAT.  By default the gaussian model
   function is used.  [ The Moffat function is a modified Lorentzian
   with variable power law index. (Moffat, A. F. J. 1969, Astronomy &amp;
   Astrophysics, v. 3, p. 455-461) ]

   The functional form of the baseline is determined by NTERMS and
   the function to be fitted.  NTERMS represents the total number of
   parameters, A, to be fitted.  The functional forms and the
   meanings of the parameters are described in this table:

                 GAUSSIAN#          Lorentzian#         Moffat#

   Model     A(0)*exp(-0.5*u^2)   A(0)/(u^2 + 1)   A(0)/(u^2 + 1)^A(3)

   A(0)         Peak Value          Peak Value        Peak Value
   A(1)        Peak Centroid       Peak Centroid     Peak Centroid
   A(2)       Gaussian Sigma           HWHM%             HWHM%
   A(3)         + A(3)    *          + A(3)   *      Moffat Index
   A(4)         + A(4)*x  *          + A(4)*x *         + A(4)   *
   A(5)                                                 + A(5)*x *

   Notes: # u = (x - A(1))/A(2)
          % Half-width at half maximum
          * Optional depending on NTERMS

   By default the initial starting values for the parameters A are
   estimated from the data.  However, explicit starting values can be
   supplied using the ESTIMATES keyword.  Also, error or weighting
   values can optionally be provided; otherwise the fit is
   unweighted.

   MPFITPEAK fits the peak value of the curve.  The area under a
   gaussian peak is A(0)*A(2)*SQRT(2*!DPI); the area under a
   lorentzian peak is A(0)*A(2)*!DPI.

 RESTRICTIONS:

   If no starting parameter ESTIMATES are provided, then MPFITPEAK
   attempts to estimate them from the data.  This is not a perfect
   science; however, the author believes that the technique
   implemented here is more robust than the one used in IDL's
   GAUSSFIT.  The author has tested cases of strong peaks, noisy
   peaks and broad peaks, all with success.

   Users should be aware that if the baseline term contains a strong
   linear component then the automatic estimation may fail.  For
   automatic estimation to work the peak amplitude should dominate
   over the the maximum baseline.

 INPUTS:
   X - Array of independent variable values, whose values should
       monotonically increase.

   Y - Array of &quot;measured&quot; dependent variable values.  Y should have
       the same data type and dimension as X.


 OUTPUTS:
   A - Upon return, an array of NTERMS best fit parameter values.
       See the table above for the meanings of each parameter
       element.


 RETURNS:

   Returns the best fitting model function.

 KEYWORDS:

   ** NOTE ** Additional keywords such as PARINFO, BESTNORM, and
              STATUS are accepted by MPFITPEAK but not documented
              here.  Please see the documentation for MPFIT for the
              description of these advanced options.

   CHISQ - the value of the summed squared residuals for the
           returned parameter values.

   DOF - number of degrees of freedom, computed as
             DOF = N_ELEMENTS(DEVIATES) - NFREE
         Note that this doesn't account for pegged parameters (see
         NPEGGED).

   ERROR - upon input, the measured 1-sigma uncertainties in the &quot;Y&quot;
           values.  If no ERROR or WEIGHTS are given, then the fit is
           unweighted.

   ESTIMATES - Array of starting values for each parameter of the
               model.  The number of parameters should at least be
               three (four for Moffat), and if less than NTERMS, will
               be extended with zeroes.
               Default: parameter values are estimated from data.

   GAUSSIAN - if set, fit a gaussian model function.  The Default.
   LORENTZIAN - if set, fit a lorentzian model function.
   MOFFAT - if set, fit a Moffat model function.

   MEASURE_ERRORS - synonym for ERRORS, for consistency with built-in
                    IDL fitting routines.

   NEGATIVE / POSITIVE - if set, and ESTIMATES is not provided, then
                         MPFITPEAK will assume that a
                         negative/positive peak is present.
                         Default: determined automatically

   NFREE - the number of free parameters in the fit.  This includes
           parameters which are not FIXED and not TIED, but it does
           include parameters which are pegged at LIMITS.

   NTERMS - An integer describing the number of fitting terms.
            NTERMS must have a minimum value, but can optionally be
            larger depending on the desired baseline.  

            For gaussian and lorentzian models, NTERMS must be three
            (zero baseline), four (constant baseline) or five (linear
            baseline).  Default: 4

            For the Moffat model, NTERMS must be four (zero
            baseline), five (constant baseline), or six (linear
            baseline).  Default: 5

   PERROR - upon return, the 1-sigma uncertainties of the parameter
            values A.  These values are only meaningful if the ERRORS
            or WEIGHTS keywords are specified properly.

            If the fit is unweighted (i.e. no errors were given, or
            the weights were uniformly set to unity), then PERROR
            will probably not represent the true parameter
            uncertainties.  

            *If* you can assume that the true reduced chi-squared
            value is unity -- meaning that the fit is implicitly
            assumed to be of good quality -- then the estimated
            parameter uncertainties can be computed by scaling PERROR
            by the measured chi-squared value.

              DOF     = N_ELEMENTS(X) - N_ELEMENTS(PARMS) ; deg of freedom
              PCERROR = PERROR * SQRT(BESTNORM / DOF)   ; scaled uncertainties

   QUIET - if set then diagnostic fitting messages are suppressed.
           Default: QUIET=1 (i.e., no diagnostics)

   SIGMA - synonym for PERROR (1-sigma parameter uncertainties), for
           compatibility with GAUSSFIT.  Do not confuse this with the
           Gaussian &quot;sigma&quot; width parameter.

   WEIGHTS - Array of weights to be used in calculating the
             chi-squared value.  If WEIGHTS is specified then the ERROR
             keyword is ignored.  The chi-squared value is computed
             as follows:

                CHISQ = TOTAL( (Y-MYFUNCT(X,P))^2 * ABS(WEIGHTS) )

             Here are common values of WEIGHTS:

                1D/ERR^2 - Normal weighting (ERR is the measurement error)
                1D/Y     - Poisson weighting (counting statistics)
                1D       - Unweighted

             The ERROR keyword takes precedence over any WEIGHTS
             keyword values.  If no ERROR or WEIGHTS are given, then
             the fit is unweighted.

   YERROR - upon return, the root-mean-square variance of the
            residuals.


 EXAMPLE:

   ; First, generate some synthetic data
   npts = 200
   x  = dindgen(npts) * 0.1 - 10.                  ; Independent variable 
   yi = gauss1(x, [2.2D, 1.4, 3000.]) + 1000       ; &quot;Ideal&quot; Y variable
   y  = yi + randomn(seed, npts) * sqrt(1000. + yi); Measured, w/ noise
   sy = sqrt(1000.D + y)                           ; Poisson errors

   ; Now fit a Gaussian to see how well we can recover the original
   yfit = mpfitpeak(x, y, a, error=sy)
   print, p

   Generates a synthetic data set with a Gaussian peak, and Poisson
   statistical uncertainty.  Then the same function is fitted to the
   data.

 REFERENCES:

   MINPACK-1, Jorge More', available from netlib (www.netlib.org).
   &quot;Optimization Software Guide,&quot; Jorge More' and Stephen Wright, 
     SIAM, *Frontiers in Applied Mathematics*, Number 14.

 MODIFICATION HISTORY:

   New algorithm for estimating starting values, CM, 31 Oct 1999
   Documented, 02 Nov 1999
   Small documentation fixes, 02 Nov 1999
   Slight correction to calculation of dx, CM, 02 Nov 1999
   Documented PERROR for unweighted fits, 03 Nov 1999, CM
   Copying permission terms have been liberalized, 26 Mar 2000, CM
   Change requirements on # elements in X and Y, 20 Jul 2000, CM
      (thanks to David Schlegel &lt;schlegel@astro.princeton.edu&gt;)
   Added documentation on area under curve, 29 Aug 2000, CM
   Added POSITIVE and NEGATIVE keywords, 17 Nov 2000, CM
   Added reference to Moffat paper, 10 Jan 2001, CM
   Added usage message, 26 Jul 2001, CM
   Documentation clarification, 05 Sep 2001, CM
   Make more consistent with comparable IDL routines, 30 Jun 2003, CM
   Assumption of sorted data was removed, CM, 06 Sep 2003, CM
   Add some defensive code against divide by zero, 30 Nov 2005, CM

  $Id: mpfitpeak.pro,v 1.2 2006-02-07 22:38:32 schlegel Exp $
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mpfit/mpfitpeak.pro">$IDLUTILS_DIR/pro/mpfit/mpfitpeak.pro</a>)</strong></p>
<hr />
<h3 id="MPFTEST">MPFTEST</h3>
<p><a href="#MPFITPEAK">[Previous Routine]</a></p>
<p><a href="#MPNORMLIM">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   MPFTEST

 AUTHOR:
   Craig B. Markwardt, NASA/GSFC Code 662, Greenbelt, MD 20770
   craigm@lheamail.gsfc.nasa.gov
   UPDATED VERSIONs can be found on my WEB PAGE: 
      http://cow.physics.wisc.edu/~craigm/idl/idl.html

 PURPOSE:
   Compute the probability of a given F value

 MAJOR TOPICS:
   Curve and Surface Fitting, Statistics

 CALLING SEQUENCE:
   PROB = MPFTEST(F, DOF1, DOF2, [/SIGMA, /CLEVEL, /SLEVEL ])

 DESCRIPTION:

  The function MPFTEST() computes the probability for a value drawn
  from the F-distribution to equal or exceed the given value of F.
  This can be used for confidence testing of a measured value obeying
  the F-distribution (i.e., for testing the ratio of variances, or
  equivalently for the addition of parameters to a fitted model).

    P_F(X &gt; F; DOF1, DOF2) = PROB

  In specifying the returned probability level the user has three
  choices:

    * return the confidence level when the /CLEVEL keyword is passed;
      OR

    * return the significance level (i.e., 1 - confidence level) when
      the /SLEVEL keyword is passed (default); OR

    * return the &quot;sigma&quot; of the probability (i.e., compute the
      probability based on the normal distribution) when the /SIGMA
      keyword is passed.

  Note that /SLEVEL, /CLEVEL and /SIGMA are mutually exclusive.

  For the ratio of variance test, the two variances, VAR1 and VAR2,
  should be distributed according to the chi-squared distribution
  with degrees of freedom DOF1 and DOF2 respectively.  The F-value is
  computed as:

     F = (VAR1/DOF1) / (VAR2/DOF2)

  and then the probability is computed as:

     PROB = MPFTEST(F, DOF1, DOF2, ... )


  For the test of additional parameters in least squares fitting, the
  user should perform two separate fits, and have two chi-squared
  values.  One fit should be the &quot;original&quot; fit with no additional
  parameters, and one fit should be the &quot;new&quot; fit with M additional
  parameters.

    CHI1 - chi-squared value for original fit

    DOF1 - number of degrees of freedom of CHI1 (number of data
           points minus number of original parameters)

    CHI2 - chi-squared value for new fit

    DOF2 - number of degrees of freedom of CHI2

  Note that according to this formalism, the number of degrees of
  freedom in the &quot;new&quot; fit, DOF2, should be less than the number of
  degrees of freedom in the &quot;original&quot; fit, DOF1 (DOF2 &lt; DOF1); and
  also CHI2 &lt; CHI1.

  With the above definition, the F value is computed as:

    F = ( (CHI1-CHI2)/(DOF1-DOF2) )   /  (CHI2/DOF2)

  where DOF1-DOF2 is equal to M, and then the F-test probability is
  computed as:

     PROB = MPFTEST(F, DOF1-DOF2, DOF2, ... )

  Note that this formalism assumes that the addition of the M
  parameters is a small peturbation to the overall fit.  If the
  additional parameters dramatically changes the character of the
  model, then the first &quot;ratio of variance&quot; test is more appropriate,
  where F = (CHI1/DOF1) / (CHI2/DOF2).

 INPUTS:

   F - ratio of variances as defined above.

   DOF1 - number of degrees of freedom in first variance component.

   DOF2 - number of degrees of freedom in second variance component.


 RETURNS:

  Returns a scalar or vector of probabilities, as described above,
  and according to the /SLEVEL, /CLEVEL and /SIGMA keywords.

 KEYWORD PARAMETERS:

   SLEVEL - if set, then PROB describes the significance level
            (default).

   CLEVEL - if set, then PROB describes the confidence level.

   SIGMA - if set, then PROB is the number of &quot;sigma&quot; away from the
           mean in the normal distribution.

 EXAMPLE:

   chi1 = 62.3D &amp; dof1 = 42d
   chi2 = 54.6D &amp; dof2 = 40d

   f = ((chi1-chi2)/(dof1-dof2)) / (chi2/dof2)
   print, mpftest(f, dof1-dof2, dof2)

   This is a test for addition of parameters.  The &quot;original&quot;
   chi-squared value was 62.3 with 42 degrees of freedom, and the
   &quot;new&quot; chi-squared value was 54.6 with 40 degrees of freedom.
   These values reflect the addition of 2 parameters and the
   reduction of the chi-squared value by 7.7.  The significance of
   this set of circumstances is 0.071464757.

 REFERENCES:

   Algorithms taken from CEPHES special function library, by Stephen
   Moshier. (http://www.netlib.org/cephes/)

 MODIFICATION HISTORY:
   Completed, 1999, CM
   Documented, 16 Nov 2001, CM
   Reduced obtrusiveness of common block and math error handling, 18
     Nov 2001, CM
   Added documentation, 30 Dec 2001, CM
   Documentation corrections (thanks W. Landsman), 17 Jan 2002, CM
   Example docs were corrected (Thanks M. Perez-Torres), 17 Feb 2002,
     CM
   Example corrected again (sigh...), 13 Feb 2003, CM

  $Id: mpftest.pro,v 1.1 2006-02-07 22:38:32 schlegel Exp $
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mpfit/mpftest.pro">$IDLUTILS_DIR/pro/mpfit/mpftest.pro</a>)</strong></p>
<hr />
<h3 id="MPNORMLIM">MPNORMLIM</h3>
<p><a href="#MPFTEST">[Previous Routine]</a></p>
<p><a href="#MPNORMTEST">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   MPNORMLIM

 AUTHOR:
   Craig B. Markwardt, NASA/GSFC Code 662, Greenbelt, MD 20770
   craigm@lheamail.gsfc.nasa.gov
   UPDATED VERSIONs can be found on my WEB PAGE: 
      http://cow.physics.wisc.edu/~craigm/idl/idl.html

 PURPOSE:
   Compute confidence limits for normally distributed variable

 MAJOR TOPICS:
   Curve and Surface Fitting, Statistics

 CALLING SEQUENCE:
   Z = MPNORMLIM(PROB, [/CLEVEL, /SLEVEL ])

 DESCRIPTION:

  The function MPNORMLIM() computes confidence limits of a normally
  distributed variable (with zero mean and unit variance), for a
  desired probability level.  The returned values, Z, are the
  limiting values: a the magnitude of a normally distributed value
  is greater than Z by chance with a probability PROB:

    P_NORM(ABS(X) &gt; Z) = PROB

  In specifying the probability level the user has two choices:

    * give the confidence level (default);

    * give the significance level (i.e., 1 - confidence level) and
      pass the /SLEVEL keyword; OR

  Note that /SLEVEL and /CLEVEL are mutually exclusive.

 INPUTS:

   PROB - scalar or vector number, giving the desired probability
          level as described above.

 RETURNS:

  Returns a scalar or vector of normal confidence limits.

 KEYWORD PARAMETERS:

   SLEVEL - if set, then PROB describes the significance level.

   CLEVEL - if set, then PROB describes the confidence level
            (default).

 EXAMPLE:

   print, mpnormlim(0.99d, /clevel)

   Print the 99% confidence limit for a normally distributed
   variable.  In this case it is about 2.58 sigma.

 REFERENCES:

   Algorithms taken from CEPHES special function library, by Stephen
   Moshier. (http://www.netlib.org/cephes/)

 MODIFICATION HISTORY:
   Completed, 1999, CM
   Documented, 16 Nov 2001, CM
   Reduced obtrusiveness of common block and math error handling, 18
     Nov 2001, CM

  $Id: mpnormlim.pro,v 1.1 2006-02-07 22:38:32 schlegel Exp $
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mpfit/mpnormlim.pro">$IDLUTILS_DIR/pro/mpfit/mpnormlim.pro</a>)</strong></p>
<hr />
<h3 id="MPNORMTEST">MPNORMTEST</h3>
<p><a href="#MPNORMLIM">[Previous Routine]</a></p>
<p><a href="#MQLADVANCE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   MPNORMTEST

 AUTHOR:
   Craig B. Markwardt, NASA/GSFC Code 662, Greenbelt, MD 20770
   craigm@lheamail.gsfc.nasa.gov
   UPDATED VERSIONs can be found on my WEB PAGE: 
      http://cow.physics.wisc.edu/~craigm/idl/idl.html

 PURPOSE:
   Compute the probability of a given normally distributed Z value

 MAJOR TOPICS:
   Curve and Surface Fitting, Statistics

 CALLING SEQUENCE:
   PROB = MPNORMTEST(Z, [/CLEVEL, /SLEVEL ])

 DESCRIPTION:

  The function MPNORMTEST() computes the probability for the
  magnitude of a value drawn from the normal distribution to equal or
  exceed the given value Z.  This can be used for confidence testing
  of a measured value obeying the normal distribution.

    P_NORM(ABS(X) &gt; Z) = PROB

  In specifying the returned probability level the user has two
  choices:

    * return the confidence level when the /CLEVEL keyword is passed;
      OR

    * return the significance level (i.e., 1 - confidence level) when
      the /SLEVEL keyword is passed (default).

  Note that /SLEVEL and /CLEVEL are mutually exclusive.

 INPUTS:

   Z - the value to best tested.  Z should be drawn from a normal
       distribution with zero mean and unit variance.  If a given
       quantity Y has mean MU and standard deviation STD, then Z can
       be computed as Z = (Y-MU)/STD.

 RETURNS:

  Returns a scalar or vector of probabilities, as described above,
  and according to the /SLEVEL and /CLEVEL keywords.

 KEYWORD PARAMETERS:

   SLEVEL - if set, then PROB describes the significance level
            (default).

   CLEVEL - if set, then PROB describes the confidence level.

 EXAMPLES:

   print, mpnormtest(5d, /slevel)

   Print the probability for the magnitude of a randomly distributed
   variable with zero mean and unit variance to exceed 5, as a
   significance level.

 REFERENCES:

   Algorithms taken from CEPHES special function library, by Stephen
   Moshier. (http://www.netlib.org/cephes/)

 MODIFICATION HISTORY:
   Completed, 1999, CM
   Documented, 16 Nov 2001, CM
   Reduced obtrusiveness of common block and math error handling, 18
     Nov 2001, CM
   Corrected error in handling of CLEVEL keyword, 05 Sep 2003

  $Id: mpnormtest.pro,v 1.1 2006-02-07 22:38:32 schlegel Exp $
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mpfit/mpnormtest.pro">$IDLUTILS_DIR/pro/mpfit/mpnormtest.pro</a>)</strong></p>
<hr />
<h3 id="MQLADVANCE">MQLADVANCE</h3>
<p><a href="#MPNORMTEST">[Previous Routine]</a></p>
<p><a href="#MRDFITS_ROWS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   mqladvance

 PURPOSE:
   Generate MODIFIED associated Legendre polynomials one l at a time

 CALLING SEQUENCE:
   mqladvance, x, m, Mql_1, Mql, norm_1, norm, lmax=lmax

 INPUTS:
   x       - argument of Plm; in some cases x=cos(theta)
   m       - m (scalar, double precision)
   Mql_1   - Plm array, (Nx, lmax) of P_lm(x,l) for given m-1

 OPTIONAL INPUTS:
   norm_1  - Array of normalization exponents.  Actual Mql_1 are
             Mql_1 * 2^norm_1
   
 KEYWORDS:
   lmax    - set to lmax on first call; default determined from Mql_1

 OUTPUTS:
   Mql     - Plm array, (Nx, lmax) of P_lm(x,l) for given m

 OPTIONAL OUTPUTS:
   norm    - Array of normalization exponents.  Actual Mql are
             Mql * 2^norm.  If norm is set, norm_1 must be set (or m=0)

 RESTRICTIONS:
   Do not exceed m=lmax!
   If you require m,l gt ~1024, you should set norm and norm_1; this will
   prevent underflows and render the recursion correct, at the expense of a
   factor of 2 slowdown.

 EXAMPLES:
   see healpix2alm.pro

 COMMENTS:
   Based on prescription in Numerical Recipes. 

   Must set either lmax (first time) or mql_1 (afterwards)

   NOTE:  The Plms are the associated Legendre polynomials times 
      sqrt((l-m)!/(l+m)!) for convenience in generating Ylms. 

   First written years ago at Berkeley
   Appears to be good to roughly machine roundoff error

   This code is the same recursion as plmadvance, but runs
     faster.  plmadvance is deprecated. 

 REVISION HISTORY:
   2003-Feb-19  Written by Douglas Finkbeiner, Princeton
   2003-Nov-13  Comments fixed up - DPF
   2004-Aug-16  trap floating underflow - DPF
   2009-Apr-17  Fixed floating underflows via normalization arr - EFS

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/healpix/mqladvance.pro">$IDLUTILS_DIR/pro/healpix/mqladvance.pro</a>)</strong></p>
<hr />
<h3 id="MRDFITS_ROWS">MRDFITS_ROWS</h3>
<p><a href="#MQLADVANCE">[Previous Routine]</a></p>
<p><a href="#MULTI_PSF_FIT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   MRDFITS_ROWS
 PURPOSE:
   Wrapper on MRDFITS() to read selected rows of a FITS file
 CALLING SEQUENCE:
 INPUTS:
   see MRDFITS
 KEYWORDS:
   see MRDFITS
 COMMENTS:
   The normal usage of MRDFITS with the ROWS= keyword reads all rows
   of the file necessary to span the smallest and highest row number.
   This routine loops through reading one row at a time instead,
   which works if the full file is larger than memory.
 OUTPUTS:
   see MRDFITS
 BUGS:
   This function could be smarter about reading consecutive rows in
   the same read, and not re-reading the same row more than once.
 REVISION HISTORY:
   2012-04-19  Written by D. Schlegel, LBL
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/fits/mrdfits_rows.pro">$IDLUTILS_DIR/pro/fits/mrdfits_rows.pro</a>)</strong></p>
<hr />
<h3 id="MULTI_PSF_FIT">MULTI_PSF_FIT</h3>
<p><a href="#MRDFITS_ROWS">[Previous Routine]</a></p>
<p><a href="#MUNU_TO_RADEC">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   multi_psf_fit
 PURPOSE:
   given an image and a psf, fit a multiple psf model to the image
 CALLING SEQUENCE:
   multi_psf_fit, image, invvar, psf [, x=, y=, flux=, npsf= ]
 INPUTS:
   image - [N,M] image to fit
   invvar - [N,M] inverse variance image
   psf - [P,P] psf image (assumed to be centered at P/2)
 OPTIONAL INPUTS:
   npsf - number of psfs to fit (default to 2)
 OPTIONAL KEYWORDS:
   /silent - call mpfit silently
 OUTPUTS:
   x - [npsf] x centers of best fit
   y - [npsf] y centers of best fit
   flux - [npsf] fluxes of best fit
 COMMENTS:
   Uses 'find' to get starting positions and then calls 'mpfit'. 
 BUGS:
   Only well-tested for double-psf case.  
 REVISION HISTORY:
   31-Mar-2002  Written by Mike Blanton, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/image/multi_psf_fit.pro">$IDLUTILS_DIR/pro/image/multi_psf_fit.pro</a>)</strong></p>
<hr />
<h3 id="MUNU_TO_RADEC">MUNU_TO_RADEC</h3>
<p><a href="#MULTI_PSF_FIT">[Previous Routine]</a></p>
<p><a href="#MWRFITS_CHUNKS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   munu_to_radec

 PURPOSE:
   Convert from SDSS great circle coordinates to equatorial coordinates.

 CALLING SEQUENCE:
   munu_to_radec, mu, nu, [ ra, dec, stripe=, node=, incl=, phi= ]

 INPUTS:
   mu         - Mu coordinate, scalar or array (degrees)
   nu         - Nu coordinate, scalar or array (degrees)

 OPTIONAL INPUTS:
   stripe     - Stripe number for SDSS coordinate system.  If specified,
                the NODE,INCL are ignored; scalar or array with same
                dimensions as MU.
   node       - Node of great circle on the J2000 celestial equator (degrees),
                scalar or array with same dimensions as MU.
   incl       - Inclination of great circle relative to the J2000
                celestial equator (degrees); scalar or array with same
                dimensions as MU.

 OUTPUTS:

 OPTIONAL OUTPUTS:
   ra         - Right ascension (J2000 degrees)
   dec        - Declination (J2000 degrees)
   phi        - Counter-clockwise position angle w.r.t. north for an arc
                in the +nu direction.

 COMMENTS:
   Either STRIPE or NODE,INCL must be specified.

 EXAMPLES:

 BUGS:

 PROCEDURES CALLED:
   cirrange
   stripe_to_incl()

 REVISION HISTORY:
   20-Feb-2002  Written by M. Blanton, NYU
   03-Oct-2002  Modified by David Schlegel, Princeton.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/coord/munu_to_radec.pro">$IDLUTILS_DIR/pro/coord/munu_to_radec.pro</a>)</strong></p>
<hr />
<h3 id="MWRFITS_CHUNKS">MWRFITS_CHUNKS</h3>
<p><a href="#MUNU_TO_RADEC">[Previous Routine]</a></p>
<p><a href="#NEAR_LIST">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   mwrfits_chunks

 PURPOSE:
   Write a FITS binary table in chunks.

 CALLING SEQUENCE:
   mwrfits_chunks, input, filename, [ header, chunksize=, /append, $
    /silent, _EXTRA=KeywordsForMwrfits ]

 INPUTS:
   input     - Structure to be written.

 OPTIONAL INPUTS:
   chunksize - Number of rows to write in each sub-write.
   append    - If set, then append to an existing HDU.  In this case,
               it is up to the user to be certain that the INPUT
               structure is identical to that in the existing file.
               Any string elements in INPUT must be of equal length or shorter
               than the existing strings in the file.
   silent    - If set, then suppress informational messages.

 OUTPUTS:

 OPTIONAL OUTPUTS:

 COMMENTS:
   This procedure can be used instead of MWRFITS to write a large
   FITS binary table without doubling the memory usage.

   If using the /APPEND option, any string elements will be trimmed to
   the length allowed by the existing data in the output file.
   But at least it won't crash!

 BUGS:

 PROCEDURES CALLED:
   fxpar()
   fxposit()
   mwrfits

 INTERNAL SUPPORT PROCEDURES:
   mwrbin_append

 REVISION HISTORY:
   05-Jun-2002  Written by David Schlegel, Princeton, based upon
                e-mail from Tom McGlynn.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/fits/mwrfits_chunks.pro">$IDLUTILS_DIR/pro/fits/mwrfits_chunks.pro</a>)</strong></p>
<hr />
<h3 id="NEAR_LIST">NEAR_LIST</h3>
<p><a href="#MWRFITS_CHUNKS">[Previous Routine]</a></p>
<p><a href="#NMF_SPARSE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   near_list

 PURPOSE:
   return index list of positions near a given central position

 CALLING SEQUENCE:
   ind=near_list(racen, deccen, ra, dec, rad, count=count)

 INPUTS:
   racen, deccen - (RA,dec) of central position [deg]
   ra, dec       - list of coords to test       [deg]
   radius        - radius to search within      [deg]
   
 OPTIONAL OUTPUTS:
   count         - number of elements returned

 COMMENTS:
   Assumes same equinox for input and output coords. 
   
 REVISION HISTORY:
   2001-May-25  Written by Douglas Finkbeiner, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/coord/near_list.pro">$IDLUTILS_DIR/pro/coord/near_list.pro</a>)</strong></p>
<hr />
<h3 id="NMF_SPARSE">NMF_SPARSE</h3>
<p><a href="#NEAR_LIST">[Previous Routine]</a></p>
<p><a href="#NNLS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   nmf_sparse
 PURPOSE:
   non-negative PCA routine, sparse version
 CALLING SEQUENCE:
   nmf_sparse, data, data_ivar, ncomp, mmatrix, tol, templates=,
   coeffs=
 INPUTS:
   data - sparse matrix struct (see below) [Nd, Nk] of data
   data_ivar - sparse matrix struct (see below) [Nd, Nk] of inverse var
   ncomp - number of basis vectors sought
   mmatrix - [Nd, Nf] transformation from desired basis to observed coords
             (observed coords are in Nd dimensions, desired basis is
             in Nf dimensions)
   tol - tolerance of fit
 INPUT/OUTPUTS:
   templates - [nf, ncomp] initial guess at templates
   coeffs - [ncomp, nk] initial guess at coefficients
 COMMENTS:
   Nk are the number of data points
   Nd are the number of types of measurements
   Nf are the number of model components
   
   The sparse matrix structure referred to above is:
       .VAL[NVAL]      - actual values in matrix
       .X[NVAL]        - columns for each value in matrix
       .NX             - number of columns
       .NY             - number of rows
       .ROWSTART[NY]   - starting position of each row in VAL, X
       .NXROW[NY]      - number of columns in each now 
 REVISION HISTORY:
   2005-Feb-5  Written by Mike Blanton, NYU
               Adapted from Matlab code of Sam Roweis

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/nmf_sparse.pro">$IDLUTILS_DIR/pro/math/nmf_sparse.pro</a>)</strong></p>
<hr />
<h3 id="NNLS">NNLS</h3>
<p><a href="#NMF_SPARSE">[Previous Routine]</a></p>
<p><a href="#NONNEG_MULT_UPDATE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   nnls
 PURPOSE:
   non-negative least-square fitting routine
 COMMENTS:
   See documentation in $IDLUTILS_DIR/src/math/nnls.f.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/nnls.pro">$IDLUTILS_DIR/pro/math/nnls.pro</a>)</strong></p>
<hr />
<h3 id="NONNEG_MULT_UPDATE">NONNEG_MULT_UPDATE</h3>
<p><a href="#NNLS">[Previous Routine]</a></p>
<p><a href="#NONNEG_MULT_UPDATE_SOLVE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
	 nonneg_mult_update
 PURPOSE:
	 Apply an SSL multiplicative update to iterate nonnegative quadratic problem
 DESCRIPTION:
  Using the method of Sha, Saul, &amp; Lee (2002), &quot;Multiplicative
  updates for nonnegative quadratic programming in support vector
  machines&quot; (UPenn Tech Report MS-CIS-02-19), apply a multiplicative
  update to an attempted solution to a nonnegative quadratic problem
  (QP with box constraints):

     F(v) = (1/2) v^T.A.v + b^T.v for v_i &gt;= 0 for all i.

  It requires the user to supply a function avfunc(vec,sign) which returns
  A+.v if sign&gt;0. and A-.v if sign&lt;0, where:

     A+_ij = A_ij for A_ij&gt;0.
             0.   otherwise

     A-_ij = |A_ij|  for A_ij&lt;0.
             0.      otherwise

 CATEGORY:
       Numerical
 CALLING SEQUENCE:
	 new = nonneg_mult_update(old,avfunc,b)
 INPUTS:
	 old - start vector
  avfunc - function which returns A+.v or A-.v, depending
  b - vector
 OPTIONAL INPUT PARAMETERS:
 KEYWORD PARAMETERS:
 OUTPUTS:
  factor - return the factor used in this vector
 COMMON BLOCKS:
 SIDE EFFECTS:
 RESTRICTIONS:
  Untested.
 PROCEDURE:
 MODIFICATION HISTORY:
	  Written 2003-01-02 MRB (NYU) at suggestion of Sam Roweis
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/nonneg_mult_update.pro">$IDLUTILS_DIR/pro/math/nonneg_mult_update.pro</a>)</strong></p>
<hr />
<h3 id="NONNEG_MULT_UPDATE_SOLVE">NONNEG_MULT_UPDATE_SOLVE</h3>
<p><a href="#NONNEG_MULT_UPDATE">[Previous Routine]</a></p>
<p><a href="#NUMLINES_F">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
	 nonneg_mult_update_solve
 PURPOSE:
	 Use nonneg_mult_update to iterate to convergence
 DESCRIPTION:
  From some starting point, iterates to convergence a
  box-constrained QP problem: 

     F(v) = (1/2) v^T.A.v + b^T.v for v_i &gt;= 0 for all i.

  Uses the method of Sha, Saul, &amp; Lee (2002), &quot;Multiplicative
  updates for nonnegative quadratic programming in support vector
  machines&quot; (UPenn Tech Report MS-CIS-02-19).

  It requires the user to supply a function avfunc(vec,sign) which returns
  A+.v if sign&gt;0. and A-.v if sign&lt;0, where:
  
     A+_ij = A_ij for A_ij&gt;0.
             0.   otherwise

     A-_ij = |A_ij|  for A_ij&lt;0.
             0.      otherwise
 
  Alternatively, if /matrix is set, nonneg_mult_update_solve will
  interpret the input avfunc as a matrix and construct the
  appropriate functions. 
 CATEGORY:
       Numerical
 CALLING SEQUENCE:
	 solution = nonneg_mult_update_solve(start,avfunc,b)
 INPUTS:
	 start - start vector
  avfunc - function which returns A+.v or A-.v, depending
  b - vector
 OPTIONAL INPUT PARAMETERS:
 KEYWORD PARAMETERS:
  /matrix - indicates that avfunc is actually just the matrix A,
            and the default A+/-.v function should be used
 OUTPUTS:
	 Return value is the shifted array.
 COMMON BLOCKS:
 SIDE EFFECTS:
 RESTRICTIONS:
  Tested only in simple cases.
 PROCEDURE:
 MODIFICATION HISTORY:
	  Written 2003-01-02 MRB (NYU) at suggestion of Sam Roweis
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/nonneg_mult_update_solve.pro">$IDLUTILS_DIR/pro/math/nonneg_mult_update_solve.pro</a>)</strong></p>
<hr />
<h3 id="NUMLINES_F">NUMLINES()</h3>
<p><a href="#NONNEG_MULT_UPDATE_SOLVE">[Previous Routine]</a></p>
<p><a href="#NW_AD_GRID">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   numlines() 

 PURPOSE:
   Returns the number of lines in a file.

 CALLING SEQUENCE:
   lines = numlines( infile [,/compress, /noexpand_path] )

 INPUT:
   infile:      Input file name

 OPTIONAL INPUTS:
   compress:      If set, assume the file is GZIP compressed.
   noexpand_path: If set, no wildcard expansion will be
                  performed on the filename.
   
 OUTPUTS:
   lines:       Number of lines in the file.

 PROCEDURES CALLED:
   FILE_LINES()

 NOTE:
   This is purely a wrapper on FILE_LINES(), but
   is retained for backwards-compatibility

 REVISION HISTORY:
   Replaced numlines which has been removed from Goddard, B. A. Weaver, 2012-06-21   
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/numlines.pro">$IDLUTILS_DIR/pro/misc/numlines.pro</a>)</strong></p>
<hr />
<h3 id="NW_AD_GRID">NW_AD_GRID</h3>
<p><a href="#NUMLINES_F">[Previous Routine]</a></p>
<p><a href="#NW_ARCSINH">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
NAME:
  nw_ad_grid
PURPOSE:
  Creates AD coordinate grid
CALLING SEQUENCE:
  nw_ad_grid,rain,decin,hdr,[dra=,ddec=,name=,linethick=,color=,/nolabels]
INPUTS:
  hdr         - header of the FITS image to be overlayed
OPTIONAL INPUTS:
  dra,ddec    - spacing of grid lines
  linethick   - thickness of line in unrebinned pixels -- assuming
                the PS file has xsize=7.5in!
  astr        - over-rules &quot;hdr&quot;
  color       - dur
OPTIONAL KEYWORDS:
  nolabels    - don't label grid lines
  gsss        - use gsss not usual WCS
OUTPUTS:
  [adds to currently open plot]
OPTIONAL OUTPUTS:
  astr        - extracted astr structure if not gsa
DEPENDENCIES:
BUGS:
  - Requires PS file to have xsize=7.5in!  Can this be read from a
    &quot;bang&quot; variable?
REVISION HISTORY:
  7/8/04 written - wherry
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/rgbcolor/nw_ad_grid.pro">$IDLUTILS_DIR/pro/rgbcolor/nw_ad_grid.pro</a>)</strong></p>
<hr />
<h3 id="NW_ARCSINH">NW_ARCSINH</h3>
<p><a href="#NW_AD_GRID">[Previous Routine]</a></p>
<p><a href="#NW_CUT_TO_BOX">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
NAME:
  nw_arcsinh
PURPOSE:
  scales the fits image by a degree of nonlinearity specified by user
INPUTS:
  colors      - (NXxNYx3) array that contains the R/G/B images
OPTIONAL INPUTS:
  nonlinearity- 'b'
              - b=0 for linear fit, b=Inf for logarithmic
              - default is 3
KEYWORDS:

OUTPUTS:
  The image
COMMENTS:
  The input image must be background-subtracted (ie, have zero background).
BUGS:
  
REVISION HISTORY:
  11/07/03 written - wherry
  11/12/03 changed radius - wherry
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/rgbcolor/nw_arcsinh.pro">$IDLUTILS_DIR/pro/rgbcolor/nw_arcsinh.pro</a>)</strong></p>
<hr />
<h3 id="NW_CUT_TO_BOX">NW_CUT_TO_BOX</h3>
<p><a href="#NW_ARCSINH">[Previous Routine]</a></p>
<p><a href="#NW_FLOAT_TO_BYTE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
NAME:
  nw_cut_to_box
PURPOSE:
  Limits the pixel values of the image to a 'box', so that the colors
  do not saturate to white but to a specific color.
INPUTS:
  colors      - (NXxNYx3) array that contains the R/G/B images
OPTIONAL INPUTS:
  origin      - (3x1) array containing R0/G0/B0
              - default is [0,0,0]
KEYWORDS:

OUTPUTS:
  The color limited image
BUGS:
  
REVISION HISTORY:
  11/07/03 written - wherry
  11/12/03 changed default origin - wherry
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/rgbcolor/nw_cut_to_box.pro">$IDLUTILS_DIR/pro/rgbcolor/nw_cut_to_box.pro</a>)</strong></p>
<hr />
<h3 id="NW_FLOAT_TO_BYTE">NW_FLOAT_TO_BYTE</h3>
<p><a href="#NW_CUT_TO_BOX">[Previous Routine]</a></p>
<p><a href="#NW_REBIN_IMAGE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
NAME:
  nw_float_to_byte
PURPOSE:
  Converts an array of floats in [0.0,1.0] to bytes in [0,255].
INPUTS:
  image       - image array of any dimensions; data range should be
                0.0 to 1.0
OPTIONAL INPUTS:
  bits        - number of bits per element; default 8; must be LE 8
KEYWORDS:
  none
OUTPUTS:
  The float-value image
REVISION HISTORY:
  2003-03-10  written - wherry
  2004-03-20  bits keyword - Hogg
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/rgbcolor/nw_float_to_byte.pro">$IDLUTILS_DIR/pro/rgbcolor/nw_float_to_byte.pro</a>)</strong></p>
<hr />
<h3 id="NW_REBIN_IMAGE">NW_REBIN_IMAGE</h3>
<p><a href="#NW_FLOAT_TO_BYTE">[Previous Routine]</a></p>
<p><a href="#NW_RGB_MAKE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
NAME:
  nw_rebin_image
PURPOSE:
  Divide the dimensions of the image by specified value
CALLING SEQUENCE:
  colors= nw_rebin_image(colors,rebin)
INPUTS:
  colors      - [NX,NY,3] array containing the R, G, and B images
  rebin       - factor by which to reduce the size of the output
                image from the input image; ie, if passed a 200x200
                image and rebin=2, it will return a 100x100 image; if
                passed rebin=0.5, it will return a 400x400 image.
OPTIONAL INPUTS:
  none
KEYWORDS:
  none
OUTPUTS:
  The resized image 
BUGS:
  Non-robust checking for whether or not to use IDL &quot;rebin&quot;.
DEPENDENCIES:

REVISION HISTORY:
  11/14/03 written - wherry
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/rgbcolor/nw_rebin_image.pro">$IDLUTILS_DIR/pro/rgbcolor/nw_rebin_image.pro</a>)</strong></p>
<hr />
<h3 id="NW_RGB_MAKE">NW_RGB_MAKE</h3>
<p><a href="#NW_REBIN_IMAGE">[Previous Routine]</a></p>
<p><a href="#NW_SCALE_RGB">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
NAME:
  nw_rgb_make
PURPOSE:
  Creates JPEG (or TIFF) from images
CALLING SEQUENCE:
  nw_rgb_make, Rim, Gim, Bim, [name=, scales=, nonlinearity=, $
      origin=, rebinfactor=, /saturatetowhite]
INPUTS:
  Rim,Gim,Bim - R, G, and B fits file names, or data arrays
OPTIONAL INPUTS:
  name        - name of the output jpeg file
  scales      - (3x1) array to scale the R/G/B
              - defaults are [1.,1.,1.]
  nonlinearity- 'b'
              - b=0 for linear fit, b=Inf for logarithmic
              - default is 3
  origin      - (3x1) array containing R0/G0/B0
              - default is [0,0,0]
  rebinfactor - integer by which to rebin pixels in the x and y
                directions; eg, a rebinfactor of 2 halves the number
                of pixels in each direction and quarters the total
                number of pixels in the image.
  quality     - quality input for WRITE_JPEG
  overlay     - [nx/rebinfactor,ny/rebinfactor,3] image to overlay on
                the input images
  dpitiff     - set TIFF &quot;dots per inch&quot; resolution (only if /tiff set)
OPTIONAL KEYWORDS:
  saturatetowhite  - saturate high-value pixels to white rather than to color
  png         - make png instead of jpeg (and ignore &quot;quality&quot;)
  tiff        - make tiff instead of jpeg (and ignore &quot;quality&quot;)
  invert      - ???
OPTIONAL OUTPUTS:
  
EXAMPLE:
  
KEYWORDS:
  none
OUTPUTS:
  JPEG (or TIFF or PNG)
DEPENDENCIES:
  
BUGS:
  - If the code congridded before making the initial colors matrix, it
    would use less memory and be faster.
  - If run both /png and /tiff, behavior is undefined.
  - I (DWH) don't understand why I didn't have to run reverse()
    before making the PNG.

REVISION HISTORY:
 12/03/03 written - wherry
 [sometime]  - TIFF support - Hogg
 2008-02-12  - PNG support - Hogg
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/rgbcolor/nw_rgb_make.pro">$IDLUTILS_DIR/pro/rgbcolor/nw_rgb_make.pro</a>)</strong></p>
<hr />
<h3 id="NW_SCALE_RGB">NW_SCALE_RGB</h3>
<p><a href="#NW_RGB_MAKE">[Previous Routine]</a></p>
<p><a href="#OFFSET_FROM_PAIRS_F">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
NAME:
  nw_scale_rgb
PURPOSE:
  mulitiplies the RGB image by their respective scales
CALLING SEQUENCE:
  nw_scale_rgb, colors, [scales=]
INPUTS:
  colors      - (NXxNYx3) array containing the R, G, and B
OPTIONAL INPUTS:
  scales      - (3x1) array to scale the R/G/B
              - defaults are [1.,1.,1.]
KEYWORDS:
  none
OUTPUTS:
  The RGB image 
COMMENTS:
  The input image must be background-subtracted (ie, have zero background).
BUGS:
  
DEPENDENCIES:

REVISION HISTORY:
  11/07/03 written - wherry
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/rgbcolor/nw_scale_rgb.pro">$IDLUTILS_DIR/pro/rgbcolor/nw_scale_rgb.pro</a>)</strong></p>
<hr />
<h3 id="OFFSET_FROM_PAIRS_F">OFFSET_FROM_PAIRS()</h3>
<p><a href="#NW_SCALE_RGB">[Previous Routine]</a></p>
<p><a href="#PIE_PLOT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   OFFSET_FROM_PAIRS()
 PURPOSE:
   Offset from some pairs.
 BUGS:
   - No correct code header!
 REVISION HISTORY:
 D. Finkbeiner - modified to compare probabilities of first and
                 second peaks.  -DPF 4 Nov 2000
 set errflag if best value on edge - DPF 26 Nov 2000
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/astrom/offset_from_pairs.pro">$IDLUTILS_DIR/pro/astrom/offset_from_pairs.pro</a>)</strong></p>
<hr />
<h3 id="PIE_PLOT">PIE_PLOT</h3>
<p><a href="#OFFSET_FROM_PAIRS_F">[Previous Routine]</a></p>
<p><a href="#PIXFONT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   pie_plot
 PURPOSE:
   given r and theta, plot a pie diagram
 CALLING SEQUENCE:
   pie_plot, radius, theta [, rrange=, thrange=, keywords for djs_plot]
 INPUTS:
   radius - [N] the radius (arbitrary units)
   theta - [N] the angle (degrees)
 OPTIONAL INPUTS:
   rrange - [2] range of radius (default [0., 1.05*max(radius)])
   thrange - [2] range of angle (deg; default [0.,360.])
   thaxes - [Naxes] angle(s) to put radial axes at
   saxes - [Naxes] +1 or -1, desired sidedness of axes
   rlabel - label to put on r axis (default none)
   rotate - rotate plot by this angle in deg (default 0.)
 OPTIONAL KEYWORDS:
   /hours - mark ticks in hours, not degrees
   /over - overplot (no axes)
   /nodata - do not plot the data
   /plots - use plots, not djs_oplot, for points
 COMMENTS:
   Gets rid of initial axes by plotting in white. (Better way?)
   Only tested with PostScript device.
 BUGS:
   Alpha code!
 REVISION HISTORY:
   5-Aug-2008 MRB, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/pie_plot.pro">$IDLUTILS_DIR/pro/plot/pie_plot.pro</a>)</strong></p>
<hr />
<h3 id="PIXFONT">PIXFONT</h3>
<p><a href="#PIE_PLOT">[Previous Routine]</a></p>
<p><a href="#PLANCKCORR">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   pixfont

 PURPOSE:
   pixelize a font for inclusion in a pixelized image

 CALLING SEQUENCE:
   im = pixfont(str, [ xsize=, ysize=, charsize=, align= ])

 INPUTS:
   str      - String(s) to pixelize; if this is an array
   
 KEYWORDS:
   xsize    - xsize of pixelized area; default to 1024 pixels
   ysize    - ysize of pixelized area; default to 200 pixels
   charsize - character size (default ysize/10)
   align    - Alignment, 0=left, 0.5=center, 1=right; default to 0 (left)

 OUTPUTS:
   im       - Byte image of dimensions XSIZE,YSIZE 

 RESTRICTIONS:
   If you make the font too big, it will just run off the edge. 
 
 EXAMPLES:
   One string, default size:
     im = pixfont('Hello, world!')
   same with smaller letters:
     im = pixfont('Hello, world!',charsize=10)
   Two lines of text:
     im = pixfont(['Hello, world!','- Anonymous programmer'], $
                     charsize=10,align=1)

 REVISION HISTORY:
   2003-May-23  Written by Douglas Finkbeiner, Princeton
   2007-May-15  moved from photoop to idlutils - DPF

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/pixfont.pro">$IDLUTILS_DIR/pro/plot/pixfont.pro</a>)</strong></p>
<hr />
<h3 id="PLANCKCORR">PLANCKCORR</h3>
<p><a href="#PIXFONT">[Previous Routine]</a></p>
<p><a href="#PLOT_POLY">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   planckcorr
 PURPOSE:
   Compute factor to convert from brightness temp to thermodynamic temp

 CALLING SEQUENCE:
   planckcorr, nu_ghz

 INPUTS:
   nu_ghz -    frequency in GHz

 OUTPUTS:
   &lt;value&gt; -   conversion factor

 PROCEDURES CALLED:
   &lt;none&gt;

 COMMENTS:
   This conversion factor corresponds to the PLNCKCOR FITS header
   keyword found in COBE/DMR data files produced by NASA.
   For comparison, their results for 31.5, 53, and 90 GHz are

   PLNCKCOR=             1.025724 /  Thermodynamic temperature = 
   PLNCKCOR=             1.074197 /  Thermodynamic temperature =  
   PLNCKCOR=             1.225941 /  Thermodynamic temperature =
   COMMENT                        /   PLNCKCOR * antenna temperature  

 REVISION HISTORY:
   Written by D. Finkbeiner, 10 March, 1999 - Berkeley
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/dust/planckcorr.pro">$IDLUTILS_DIR/pro/dust/planckcorr.pro</a>)</strong></p>
<hr />
<h3 id="PLOT_POLY">PLOT_POLY</h3>
<p><a href="#PLANCKCORR">[Previous Routine]</a></p>
<p><a href="#POLYGON_OVERLAP">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   plot_poly
 PURPOSE:
   plots a mangle polygon (or passes back what you need to plot it)
 CALLING SEQUENCE:
   plot_poly, poly [, offset=, xrange=, yrange=, filename=, /fill, $
      /nooutline, xsize=, ysize=, /over, color=, minside=, dangle=, $
      outline_thick=, splot=, /aitoff ]
 INPUTS:
   poly - mangle polygon (e.g. one created by construct_polygon())
 OPTIONAL INPUTS:
   offset - offset to apply to ra
   xrange, yrange - ranges to pass to plot
   filename, xsize, ysize - PS file to output to (and its sizes)
   minsize, dangle - pass to gverts
 OPTIONAL KEYWORDS:
   /fill - fill
   /over - over plot on current device
   /nooutine - do not outline
 COMMENTS:
 EXAMPLES:
 BUGS:
 PROCEDURES CALLED:
 REVISION HISTORY:
   01-Oct-2002  Written by MRB (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mangle/plot_poly.pro">$IDLUTILS_DIR/pro/mangle/plot_poly.pro</a>)</strong></p>
<hr />
<h3 id="POLYGON_OVERLAP">POLYGON_OVERLAP</h3>
<p><a href="#PLOT_POLY">[Previous Routine]</a></p>
<p><a href="#POLYWARP_ROTATE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   polygon_overlap
 PURPOSE:
   create the polygon which is the overlap between two polygons
 CALLING SEQUENCE:
   newpoly= polygon_overlap(poly1,poly2)
 INPUTS:
   poly1 - first input polygon
   poly2 - second input polygon
 OPTIONAL INPUTS:
 OUTPUTS:
   newpoly - output polygon
 OPTIONAL INPUT/OUTPUTS:
 COMMENTS:
   To get the area of the overlap (in sterradians):
     newpoly=polygon_overlap(poly1,poly2)
     print, newpoly.str
 EXAMPLES:
 BUGS:
 PROCEDURES CALLED:
 REVISION HISTORY:
   31-Jan-2003  Written by MRB (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mangle/polygon_overlap.pro">$IDLUTILS_DIR/pro/mangle/polygon_overlap.pro</a>)</strong></p>
<hr />
<h3 id="POLYWARP_ROTATE">POLYWARP_ROTATE</h3>
<p><a href="#POLYGON_OVERLAP">[Previous Routine]</a></p>
<p><a href="#POLYWARP_SHIFT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   polywarp_rotate
 PURPOSE:
   wrapper on polywarp to do a simple rotation
 CALLING SEQUENCE
   newim= polywarp_rotate( im , theta,  [center=] )
 INPUTS:
   im       - [nx,ny] original image
   theta    - angle of rotation (counter-clockwise is position)
 OPTIONAL INPUTS:
   center    - [2] x/y center to rotate about 
                (default [(nx-1)*0.5, (ny-1)*0.5])
 OUTPUTS:
   newim    - [nx,ny] final image
 COMMENTS:
   polywarp uses a cubic approximation to the sinc function. 
   this routine rotates the image about its center. 
 REVISION HISTORY:
   2004-04-15  Written - Blanton (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/image/polywarp_rotate.pro">$IDLUTILS_DIR/pro/image/polywarp_rotate.pro</a>)</strong></p>
<hr />
<h3 id="POLYWARP_SHIFT">POLYWARP_SHIFT</h3>
<p><a href="#POLYWARP_ROTATE">[Previous Routine]</a></p>
<p><a href="#POLY_ITER">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   polywarp_shift
 PURPOSE:
   wrapper on polywarp to do a simple shift
 CALLING SEQUENCE
   newim= polywarp_rotate( im , shift )
 INPUTS:
   im       - [nx,ny] original image
   shift    - [2] x,y shift
 OUTPUTS:
   newim    - [nx,ny] final image
 COMMENTS:
   polywarp uses a cubic approximation to the sinc function. 
 REVISION HISTORY:
   2004-04-15  Written - Blanton (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/image/polywarp_shift.pro">$IDLUTILS_DIR/pro/image/polywarp_shift.pro</a>)</strong></p>
<hr />
<h3 id="POLY_ITER">POLY_ITER</h3>
<p><a href="#POLYWARP_SHIFT">[Previous Routine]</a></p>
<p><a href="#POPULATE_IMAGE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   poly_iter

 PURPOSE:
   Calls IDL poly_fit iteratively with outlier rejection

 CALLING SEQUENCE:
   poly_iter, x, y, ndeg, nsig, yfit, coeff=coeff

 INPUTS:
   x, y    - indep, dep variables
   ndeg    - degree of polynomial 
   yfit    - fit y at given x values

 OUTPUTS:
   coeff   - array of coefficients

 COMMENTS:

 EXAMPLES:

 BUGS:

 PROCEDURES CALLED:
   poly_fit

 REVISION HISTORY:
   moved from hoggpt 10-Jan-2002
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/poly_iter.pro">$IDLUTILS_DIR/pro/math/poly_iter.pro</a>)</strong></p>
<hr />
<h3 id="POPULATE_IMAGE">POPULATE_IMAGE</h3>
<p><a href="#POLY_ITER">[Previous Routine]</a></p>
<p><a href="#POSITRONIUM_SPECTRUM">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   populate_image

 PURPOSE:
   Populate a vector or image with weights at the specified positions.

 CALLING SEQUENCE:
   populate_image, image, x, [y, weights=, assign=]

 INPUTS:
   image      - Image vector or array
   x          - X coordinate(s) of locations to populate, 0-indexed

 OPTIONAL INPUTS:
   y          - Y coordinate(s) of locations to populate, 0-indexed
   weights    - Weight(s) to add at each X or X,Y position
   assign     - Assignment scheme:
                'ngp': nearest grid point assignment; default
                'cic': cloud-in-cell assignment

 OUTPUTS:
   image      - (Modified)

 COMMENTS:
   If IMAGE is type double, then that image and X and Y are all treated
   as double-precision in the assignment code.  Otherwise, all values
   are treated as floating-point.

 BUGS:

 PROCEDURES CALLED:
   Dynamic link to pop_image.c

 REVISION HISTORY:
   17-May-2000  Written by D. Schlegel, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/image/populate_image.pro">$IDLUTILS_DIR/pro/image/populate_image.pro</a>)</strong></p>
<hr />
<h3 id="POSITRONIUM_SPECTRUM">POSITRONIUM_SPECTRUM</h3>
<p><a href="#POPULATE_IMAGE">[Previous Routine]</a></p>
<p><a href="#PPMTOMPEG">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   positronium_spectrum

 PURPOSE:
   Compute the Ore and Powell ortho-positronium spectrum

 CALLING SEQUENCE:
   spec = positronium_sepctrum(Egamma)

 INPUTS:
   Egamma - photon energy at which to evaluate spectrum

 OUTPUTS:
   spec   - photon spectrum (dN/dEgamma), 
               i.e. number of photons per dEgamma

 RESTRICTIONS:
   returns nonzero result only for 0 &lt; Egamma &lt; 510.998903

 EXAMPLES:
   E.g. to check the mean photon energy is 2/3 m_e:
    Egamma = (findgen(511000)+0.5)/1000
    F = positronium_spectrum(Egamma)
    print, total(Egamma*F) / total(F) *1.5

 COMMENTS:
   Ore &amp; Powell, Phys. Rev. 75 (1949) 1696

   The Ore &amp; Powell result is incorrect at low energy (~13.6 eV)
    see http://arxiv.org/pdf/hep-ph/0311002v2
    for a higher precision approximation. 

 REVISION HISTORY:
   26-Jun-2008  Written by Douglas Finkbeiner, CfA
   22-May-2008   verified and commented - DPF

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/physics/positronium_spectrum.pro">$IDLUTILS_DIR/pro/physics/positronium_spectrum.pro</a>)</strong></p>
<hr />
<h3 id="PPMTOMPEG">PPMTOMPEG</h3>
<p><a href="#POSITRONIUM_SPECTRUM">[Previous Routine]</a></p>
<p><a href="#PREDICT_SYNC">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   ppmtompeg

 PURPOSE:
   Wrapper for ppmtompeg, the open-source UNIX mpeg writer

 CALLING SEQUENCE:
   ppmtompeg, bytcube, [ output, tmpdir= ]
 
 INPUTS:
   bytcube  - Byte array [X,Y,NFRAME]
   output   - Output file name; default 'idl.mpeg'

 KEYWORDS:
   tmpdir   - temp directory to do dirty work in; default to '/tmp/mpeg1234/'

 OUTPUTS:

 COMMENTS:
   A single mpeg file is written.
   Temporary files are removed after the MPEG file is made.

 EXAMPLES:
   ppmtompeg, bytscl(imagecube, min=800, max=1600), 'movie.mpeg'

 PROCEDURES CALLED:
   rmfile

 INTERNAL SUPPORT PROCEDURES:
   ppmtompeg_parameters

 REVISION HISTORY:
   2002-Mar-29  Douglas Finkbeiner, Princeton University
                  dfink@astro.princeton.edu

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mpeg/ppmtompeg.pro">$IDLUTILS_DIR/pro/mpeg/ppmtompeg.pro</a>)</strong></p>
<hr />
<h3 id="PREDICT_SYNC">PREDICT_SYNC</h3>
<p><a href="#PPMTOMPEG">[Previous Routine]</a></p>
<p><a href="#PREDICT_THERMAL">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   predict_sync

 PURPOSE:
   Read predictions of synchtron emission and return sky intensity.

 CALLING SEQUENCE:
   value = predict_sync( [ gall, galb, nu=nu, infile=infile, $
    skipline=skipline, outfile=outfile, interp=interp, $
    noloop=noloop, verbose=verbose, ipath=ipath, units=units ] )

 INPUTS:

 OPTIONAL INPUTS:
   gall:       Galactic longitude(s) in degrees
   galb:       Galactic latitude(s) in degrees
   nu:         Frequency in GHz.  If this is a vector, it must be the same
               dimension as GALL and GALB.  If this is a scalar, then it
               applies to all positions GALL, GALB.
   infile:     If set, then read GALL, GALB from this file.  If NU is not
               set, then NU is read as the 3rd column of this same file.
   skipline:   Number of lines to skip at the top of the input file
   outfile:    If set, then write results to this file
   interp:     Set this flag to return a linearly interpolated value
               from the 4 nearest pixels.
   noloop:     Set this flag to read all values at once without a FOR loop.
               This is a faster option for reading a large number of values,
               but requires reading an entire FITS image into memory.
               (Actually, the smallest possible sub-image is read.)
   verbose:    Set this flag for verbose output, printing pixel coordinates
               and map values.  Setting NOLOOP disables this option.
   ipath:      Path name for synchrotron maps; default to path set by the
               environment variable $DUST_DIR/map, or to the current
               directory.
   units:      Units for output values:
               'MJy'    : MJy/sr (default)
               'microK' : brightness (antenna) temperature [micro-Kelvin]
               'thermo' : thermodynamic temperature [micro-Kelvin]

 OUTPUTS:
   value:      Predicted emission value(s) from synchtrotron maps

 COMMENTS:
   These predictions are based upon the following radio surveys:
     408 MHz - Haslam et al. 1981, A&amp;A, 100, 209
     1420 MHz - Reich &amp; Reich 1986, A&amp;AS, 63, 205
     2326 MHz - Jonas, Baart, &amp; Nicolson 1998 MNRAS, 297, 977
   A detailed description of this data product may be found in:
   &quot;Extrapolation of the Haslam 408 MHz survey to CMBR Frequencies&quot;,
   by D. P. Finkbeiner, &amp; M. Davis, in preparation.

   Either the coordinates GALL, GALB and NU must be set, or their values
   must exist in the file INFILE.  Output is written to the variable VALUE
   and/or the file OUTFILE.

 EXAMPLES:
   Read the predicted synchtrotron emission at Galactic (l,b)=(12,+34.5) 
   interpolating from the nearest 4 pixels, and return result in VALUE.
   &gt; value = predict_sync(12, 34.5, nu=3000, /interp)

 PROCEDURES CALLED:
   fac_flux2temp()
   planckcorr()
   rdfloat
   wcs_getval()

 DATA FILES:
   Haslam_clean_ngp.fits
   Haslam_clean_sgp.fits
   Synch_Beta_ngp.fits
   Synch_Beta_sgp.fits

 REVISION HISTORY:
   17-Mar-1999  Written by David Schlegel, Princeton
                &amp; Doug Finkbeiner, Berkeley
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/dust/predict_sync.pro">$IDLUTILS_DIR/pro/dust/predict_sync.pro</a>)</strong></p>
<hr />
<h3 id="PREDICT_THERMAL">PREDICT_THERMAL</h3>
<p><a href="#PREDICT_SYNC">[Previous Routine]</a></p>
<p><a href="#PROPMOTDIS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   predict_thermal

 PURPOSE:
   Read predictions of thermal dust emission from Finkbeiner et al. maps
   and return sky intensity.

 CALLING SEQUENCE:
   value = predict_thermal( [ gall, galb, nu=nu, infile=infile, $
    skipline=skipline, outfile=outfile, resolution=resolution, model=model, $
    interp=interp, noloop=noloop, verbose=verbose, ipath=ipath, units=units ] )

 INPUTS:

 OPTIONAL INPUTS:
   gall:       Galactic longitude(s) in degrees
   galb:       Galactic latitude(s) in degrees
   nu:         Frequency in GHz.  If this is a vector, it must be the same
               dimension as GALL and GALB.  If this is a scalar, then it
               applies to all positions GALL, GALB.
   resolution: Set to one of the following (default is 'I4096'):
               'I4096' : IRAS 4096^2 map (highest-resolution; default)
               'I2048' : IRAS 2048^2 map
               'I1024' : IRAS 1024^2 map
               'D1024' : DIRBE 1024^2 map
   model:      Model number (default to 8):
               1: One-component, nu^1.5 emissivity
               2: One-component, nu^1.7 emissivity
               3: One-component, nu^2.0 emissivity
               4: One-component, nu^2.2 emissivity
               5: Two-component, alpha1=1.5, alpha2=2.6, Pollack et al. model
               6: Two-component, both nu^2 emissivities, fit f+q
               7: Two-component, alpha1=1.5, alpha2=2.6, fit f+q
               8: Two-component, alpha1=1.67, alpha2=2.70, fit alphas+f+q
   infile:     If set, then read GALL, GALB from this file.  If NU is not
               set, then NU is read as the 3rd column of this same file.
   skipline:   Number of lines to skip at the top of the input file
   outfile:    If set, then write results to this file
   interp:     Set this flag to return a linearly interpolated value
               from the 4 nearest pixels.
   noloop:     Set this flag to read all values at once without a FOR loop.
               This is a faster option for reading a large number of values,
               but requires reading an entire FITS image into memory.
               (Actually, the smallest possible sub-image is read.)
   verbose:    Set this flag for verbose output, printing pixel coordinates
               and map values.  Setting NOLOOP disables this option.
   ipath:      Path name for dust maps; default to path set by the
               environment variable $DUST_DIR/map, or to the current
               directory.
   units:      Units for output values:
               'MJy'    : MJy/sr (default)
               'microK' : brightness (antenna) temperature [micro-Kelvin]
               'thermo' : thermodynamic temperature [micro-Kelvin]
                          assuming T(CMB) = 2.73 K

 OUTPUTS:
   value:      Predicted emission value(s) from Lambert-projection maps

 COMMENTS:
   These predictions are based upon the following paper:
   &quot;Extrapolation of Galactic Dust Emission at 100 Microns to CMBR
   Frequencies using FIRAS&quot;, Finkbeiner, D. P., Davis, M., &amp; Schlegel, D. J.,
   ApJ, 1999, submitted (5 March 1999)

   Either the coordinates GALL, GALB and NU must be set, or their values
   must exist in the file INFILE.  Output is written to the variable VALUE
   and/or the file OUTFILE.

 EXAMPLES:
   Read the predicted thermal emission from dust at Galactic (l,b)=(12,+34.5) 
   interpolating from the nearest 4 pixels, and return result in VALUE.
   &gt; value = predict_thermal(12, 34.5, nu=3000, /interp)

 PROCEDURES CALLED:
   djs_planck()
   fac_flux2temp()
   planckcorr()
   rdfloat
   wcs_getval()

 DATA FILES:
   FINK_Rmap_ngp.fits
   FINK_Rmap_sgp.fits
   SFD_d100_1024_ngp.fits
   SFD_d100_1024_sgp.fits
   SFD_i100_1024_ngp.fits
   SFD_i100_1024_sgp.fits
   SFD_i100_2048_ngp.fits
   SFD_i100_2048_sgp.fits
   SFD_i100_4096_ngp.fits
   SFD_i100_4096_sgp.fits

 INTERNAL PROCEDURES:
   kfactor()

 REVISION HISTORY:
   10-Mar-1999  Written by David Schlegel, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/dust/predict_thermal.pro">$IDLUTILS_DIR/pro/dust/predict_thermal.pro</a>)</strong></p>
<hr />
<h3 id="PROPMOTDIS">PROPMOTDIS</h3>
<p><a href="#PREDICT_THERMAL">[Previous Routine]</a></p>
<p><a href="#PSF_CHISQ">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   propmotdis
 PURPOSE:
   Compute proper motion distances (for c/H_0=1).
 CALLING SEQUENCE:
   D= propmotdis(z,OmegaM,OmegaL, weq=weq)
 INPUTS:
   z       - redshift or vector of redshifts
   OmegaM  - Omega-matter at z=0
   OmegaL  - Omega-Lambda at z=0
 OPTIONAL INPUTS:
   weq     - Equation of state (default = -1)
 KEYWORDS
 OUTPUTS:
   proper motion distance in units of the Hubble length c/H_0
 COMMENTS:
 BUGS:
   May not work for pathological parts of the OmegaM-OmegaL plane.
 EXAMPLES:
 PROCEDURES CALLED:
   comdis()
 REVISION HISTORY:
   25-Jun-2000  Written by Hogg (IAS)
   2004-Sep-8, Added equation of state for OmegaL, Padmanabhan (Princeton)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/cosmography/propmotdis.pro">$IDLUTILS_DIR/pro/cosmography/propmotdis.pro</a>)</strong></p>
<hr />
<h3 id="PSF_CHISQ">PSF_CHISQ</h3>
<p><a href="#PROPMOTDIS">[Previous Routine]</a></p>
<p><a href="#PSF_EVAL">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   psf_chisq

 PURPOSE:
   Compute chi^2 for the given PSF model, PSF stars, and ivars

 CALLING SEQUENCE:
   
 INPUTS:
   
 OPTIONAL INPUTS:
   
 KEYWORDS:
   
 OUTPUTS:
   
 OPTIONAL OUTPUTS:
   
 EXAMPLES:
   
 COMMENTS:
   
 REVISION HISTORY:
   2009-Jul-10 - Written by Douglas Finkbeiner, CfA (visiting IfA)

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/psf/psf_chisq.pro">$IDLUTILS_DIR/pro/psf/psf_chisq.pro</a>)</strong></p>
<hr />
<h3 id="PSF_EVAL">PSF_EVAL</h3>
<p><a href="#PSF_CHISQ">[Previous Routine]</a></p>
<p><a href="#PSF_FINDSTARS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   psf_eval

 PURPOSE:
   Evaluate PSF at (x,y), possibly sinc-shifted to center (dx,dy)

 CALLING SEQUENCE:
   psfs = psf_eval(x, y, coeff, cenrad, dx=dx, dy=dy, scale=scale)

 INPUTS:
   x,y     - image coordinates at which to evaluate PSF
   coeff   - coefficients from psf_polyfit()
   cenrad  - radius used to center and normalize.  From par struct.

 OPTIONAL INPUTS:
   dx,dy   - subpixel shift for sinc-shift
   scale   - range of (x,y) (2 element array) to rescale (x,y) to [-1,1]

 OUTPUTS:
   psfs    - (npix, npix, nstar) array of psfs

 COMMENTS:
   see psf_polyfit()

 REVISION HISTORY:
   2006-May-27   Written by Douglas Finkbeiner, Princeton

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/psf/psf_eval.pro">$IDLUTILS_DIR/pro/psf/psf_eval.pro</a>)</strong></p>
<hr />
<h3 id="PSF_FINDSTARS">PSF_FINDSTARS</h3>
<p><a href="#PSF_EVAL">[Previous Routine]</a></p>
<p><a href="#PSF_FIT_COEFFS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   psf_findstars

 PURPOSE:
   Find stars suitable for using in PSF estimation

 CALLING SEQUENCE:
   psf_findstars, image, ivar, npad, clean, xstar, ystar, nsigma=, $
                  satmask=, badpixels=

 INPUTS:
   image      - image to locate stars in
   ivar       - inverse variance image -- must be correctly
                calibrated, or some of the algorithms will NOT WORK!

 OPTIONAL INPUTS:
   npad       - do not consider npad pixels around the edge.  DEFAULT 2
   
 KEYWORDS:
   nsigma     - only consider stars brighter than nsigma sigma above mean
   satmask    - saturation mask (1=bad)
                badpixels  - bad pixel mask (should mask out
                             everything around bad columns, bleeds, etc.)

 OUTPUTS:
   clean      - clean image, at least clean enough to use for PSF
                estimation. 
   {x,y}star  - integer pixel locations of stars (0-indexed)
 
 RESTRICTIONS:
   This routine simply will not work right if you do not pass the
   correct ivar array, because it calls psf_reject_cr(). 
   (If you don't know your gain, we can't help you.)

 EXAMPLES:
   
 COMMENTS:
   This routine does NOT return an exhaustive list of stars.  It is
    somewhat selective about avoiding the bad pixel mask, etc.  Also,
    it will return a few CRs, if they are roughly band-limited. 
    But it will reject most of the CRs (unless they are on the bad
    pixel mask!)

   After you have the PSF, you should call a real CR rejection
    routine to properly clean the image and a real object finder. 

 REVISION HISTORY:
   2006-May-26  Written by Douglas Finkbeiner, Princeton

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/psf/psf_findstars.pro">$IDLUTILS_DIR/pro/psf/psf_findstars.pro</a>)</strong></p>
<hr />
<h3 id="PSF_FIT_COEFFS">PSF_FIT_COEFFS</h3>
<p><a href="#PSF_FINDSTARS">[Previous Routine]</a></p>
<p><a href="#PSF_FLAGNAME">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   psf_fit_coeffs

 PURPOSE:
   Attempt to fit coefficients for delta-function PSF model

 CALLING SEQUENCE:
   pstr = psf_fit_coeffs(image, ivar, satmask, par, cf, status=)

 INPUTS:
   image   - image to operate on 
   ivar    - iverse variance image
   satmask - mask of saturated pixels (1=saturated)
   par     - structure from psf_par.pro

 OUTPUTS:
   status  - status flags
   pstr    - structure containing useful information about PSF stars

 OPTIONAL OUTPUTS:
   
 EXAMPLES:
   
 COMMENTS:
   
 REVISION HISTORY:
   2009-Jul-10 - Written by Douglas Finkbeiner, CfA (visiting IfA)

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/psf/psf_fit_coeffs.pro">$IDLUTILS_DIR/pro/psf/psf_fit_coeffs.pro</a>)</strong></p>
<hr />
<h3 id="PSF_FLAGNAME">PSF_FLAGNAME</h3>
<p><a href="#PSF_FIT_COEFFS">[Previous Routine]</a></p>
<p><a href="#PSF_FLAGVAL">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   psf_flagname

 PURPOSE:
   Return bitmask labels corresponding to bit numbers.

 CALLING SEQUENCE:
   label = psf_flagname(flagprefix, flagvalue, [ /concat, /silent ] )

 INPUTS:
   flagprefix - Flag name (scalar string).  The following are supported:
                PSF
   flagvalue  - Signed long with any number of its bits set.

 OPTIONAL KEYWORDS:
   concat     - If set, then concatenate all of the output labels in
                LABEL into a single whitespace-separated string.
   silent     - If set, then don't print a warning when there is no bit label
                corresponding to one of the bit values.

 OUTPUTS:
   label      - String name(s) corresponding to each non-zero bit in FLAGVALUE.

 COMMENTS:
   This function is the inverse of PSF_FLAGVAL().

 PROCEDURES CALLED:
   flagname

 REVISION HISTORY:
   10-Aug-2009 - Initial version, EFS
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/psf/psf_flagname.pro">$IDLUTILS_DIR/pro/psf/psf_flagname.pro</a>)</strong></p>
<hr />
<h3 id="PSF_FLAGVAL">PSF_FLAGVAL</h3>
<p><a href="#PSF_FLAGNAME">[Previous Routine]</a></p>
<p><a href="#PSF_GET_MAGS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   psf_flagval

 PURPOSE:
   Access to PSF flag values via text labels

 CALLING SEQUENCE:
   value = psf_flagval(flagprefix, label)

 INPUTS:
   flagprefix - Flag name (scalar string).  (Presently always PSF)
   label      - String name(s) corresponding to each non-zero bit in
                FLAGVALUE.
   
 OUTPUTS:
   value      - Signed long with any number of its bits set.

 REVISION HISTORY:
   2009-Aug-10 - Initial version, EFS

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/psf/psf_flagval.pro">$IDLUTILS_DIR/pro/psf/psf_flagval.pro</a>)</strong></p>
<hr />
<h3 id="PSF_GET_MAGS">PSF_GET_MAGS</h3>
<p><a href="#PSF_FLAGVAL">[Previous Routine]</a></p>
<p><a href="#PSF_GRID">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   psf_get_mags

 PURPOSE:
   compute psf magnitudes of objects at locations in image

 CALLING SEQUENCE:
   magstr = psf_get_mags(image, ivar, x, y, par, pstr, tol=tol, plot=plot)

 INPUTS:
   image - image in which to find magnitudes
   ivar  - ivar of image
   x     - x coordinate of object (only integer part used)
   y     - y coordinate of object (only integer part used)
   par   - value of psf_par
   pstr  - structure from psf_fit_coeffs
   tol   - tolerance for psf peak minimization algorithm
   plot  - plot results if set

 OUTPUTS:
   structure describing results of magnitude measurements
   (magnitudes, offsets, statuses, chisqs)
   
 REVISION HISTORY:
   2009-Aug-10 - Initial version, EFS

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/psf/psf_get_mags.pro">$IDLUTILS_DIR/pro/psf/psf_get_mags.pro</a>)</strong></p>
<hr />
<h3 id="PSF_GRID">PSF_GRID</h3>
<p><a href="#PSF_GET_MAGS">[Previous Routine]</a></p>
<p><a href="#PSF_MULTI_FIT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   psf_grid

 PURPOSE:
   returns image of a grid of psfs

 CALLING SEQUENCE:
   arr = psf_grid(stack, npad)

 INPUTS:
   stack  - float [nbox, nbox, npsf] array of PSFs

 OPTIONAL INPUTS:
   npad   - how many pixels to black out on boundaries
   
 OUTPUTS:
   arr    - grid of PSFs convient for displaying.
   
 EXAMPLES:
   see psf_tvstack.pro

 COMMENTS:
   from &quot;spread_stack&quot; in 2006. 

 REVISION HISTORY:
   2009-Jul-10 - Written by Douglas Finkbeiner, CfA (visiting IfA)

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/psf/psf_grid.pro">$IDLUTILS_DIR/pro/psf/psf_grid.pro</a>)</strong></p>
<hr />
<h3 id="PSF_MULTI_FIT">PSF_MULTI_FIT</h3>
<p><a href="#PSF_GRID">[Previous Routine]</a></p>
<p><a href="#PSF_NORM">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   psf_multi_fit

 PURPOSE:
   Fit multiple PSFs to a postage stamp, given a preliminary PSF.

 CALLING SEQUENCE:
   psf_multi_fit, stamps, stampivar, psfs, par, sub, faint, nfaint=nfaint

 INPUTS:
   
 OPTIONAL INPUTS:
   
 KEYWORDS:
   
 OUTPUTS:
   
 OPTIONAL OUTPUTS:
   
 RESTRICTIONS:
   
 EXAMPLES:
   
 COMMENTS:
   
 REVISION HISTORY:
   2006-May-25   Written by Douglas Finkbeiner, Princeton

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/psf/psf_multi_fit.pro">$IDLUTILS_DIR/pro/psf/psf_multi_fit.pro</a>)</strong></p>
<hr />
<h3 id="PSF_NORM">PSF_NORM</h3>
<p><a href="#PSF_MULTI_FIT">[Previous Routine]</a></p>
<p><a href="#PSF_PEAK">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   psf_norm

 PURPOSE:
   Sum the counts inside a box of radius rad centered on stamp

 CALLING SEQUENCE:
   norm = psf_norm(stamp, rad)

 INPUTS:
   stamp    - postage stamp of star
   rad      - radius of normalization box

 OUTPUTS:
   norm     - total of counts in centered box

 EXAMPLES:
   norm = psf_norm(stampcen, par.cenrad)

 COMMENTS:
   Sum the counts inside a box of radius rad centered on stamp.
   This is thought to be more stable than using the peak value. 
   To use peak value, simply set rad to zero.

 REVISION HISTORY:
   2006-May-25   Written by Douglas Finkbeiner, Princeton

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/psf/psf_norm.pro">$IDLUTILS_DIR/pro/psf/psf_norm.pro</a>)</strong></p>
<hr />
<h3 id="PSF_PEAK">PSF_PEAK</h3>
<p><a href="#PSF_NORM">[Previous Routine]</a></p>
<p><a href="#PSF_POLYFIT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   psf_peak

 PURPOSE:
   Find sinc-interpolated peak in a psf stamp
   
 CALLING SEQUENCE:
   peakflux = psf_peak(image, x, y, dx=dx, dy=dy, status=status, tol=tol)

 INPUTS:
   image  - stamp in which to find peak
   x      - guess x coordinate
   y      - guess y coordinate
   dx     - computed peak offset from guess in x direction
   dy     - computed peak offset from guess in y direction
   status - flag indicating what may have gone wrong with the fit
   tol    - tolerance to use in minimization

 OUTPUTS:
   the found peak flux
   
 REVISION HISTORY:
   2009-Aug-10 - Initial version, EFS

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/psf/psf_peak.pro">$IDLUTILS_DIR/pro/psf/psf_peak.pro</a>)</strong></p>
<hr />
<h3 id="PSF_POLYFIT">PSF_POLYFIT</h3>
<p><a href="#PSF_PEAK">[Previous Routine]</a></p>
<p><a href="#PSF_PSFIVAR">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   psf_polyfit

 PURPOSE:
   Fit polynomial as a function of image (x,y) to each pixel in stamp

 CALLING SEQUENCE:
   cf = psf_polyfit(stack, ivar, x, y, par, ndeg=ndeg, reject=reject, $
            cond=cond, scale=scale)
 INPUTS:
   stack    - postage stamps to fit (npix, npix, nstar)
   ivar     - ivar for same
   {x,y}    - star positions ([0..2048,0..1361] for SDSS)
   par      - par structure
   ndeg     - degree of fit

 OPTIONAL INPUTS:
   scale    - range of (x,y) (2 element array) to rescale (x,y) to [-1,1]

 KEYWORDS:
   reject   - set to reject stars that don't fit well and refit

 OUTPUTS:
   ndeg     - degree of fit ACTUALLY DONE.

 OPTIONAL OUTPUTS:
   cond     - worst condition number encountered in fit

 RESTRICTIONS:
   
 EXAMPLES:
   
 COMMENTS:
   Outliers are rejected on a star by star basis, not just pixel by
    pixel. 
   If there are not enough stars for the requested degree, falls back
    to a more appropriate number. 
   Calling routine should inspect Condition number and reduce degree
    further if necessary.

   We should have a noise floor in the ivar!!!
   
 REVISION HISTORY:
   2006-May-27   Written by Douglas Finkbeiner, Princeton

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/psf/psf_polyfit.pro">$IDLUTILS_DIR/pro/psf/psf_polyfit.pro</a>)</strong></p>
<hr />
<h3 id="PSF_PSFIVAR">PSF_PSFIVAR</h3>
<p><a href="#PSF_POLYFIT">[Previous Routine]</a></p>
<p><a href="#PSF_REJECT_CR">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   psf_psfivar

 PURPOSE:
   compute the inverse variance of our psf model evaluated at x, y
   
 CALLING SEQUENCE:
   ivar = psf_psfivar(x, y, cf, cfcovar, scale=scale)
   
 INPUTS:
   x       - x pixel in stamp
   y       - y pixel in stamp
   cf      - fit coefficients
   cfcovar - fit covariance matrix
   scale   - scale used in computing fit
   
 OUTPUTS:
   inverse variance evaluated at x, y
   
 COMMENTS:
   This does what it says, but I don't think its use in psf_fit_coeffs is
   right yet.  A step in the right direction, however.
   
 REVISION HISTORY:
   2009-Aug-10 - Initial version, EFS

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/psf/psf_psfivar.pro">$IDLUTILS_DIR/pro/psf/psf_psfivar.pro</a>)</strong></p>
<hr />
<h3 id="PSF_REJECT_CR">PSF_REJECT_CR</h3>
<p><a href="#PSF_PSFIVAR">[Previous Routine]</a></p>
<p><a href="#PSF_REJECT_CR_SINGLE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   psf_reject_cr

 PURPOSE:
   Find pixels contaminated by cosmic rays (CRs) using PSF criteria

 CALLING SEQUENCE:
   crmask = psf_reject_cr(image, ivar, [ psfvals, ] satmask=, $
    [ pstr=, nsigma=, cfac=, niter=, c2fudge= ] )

 INPUTS:
   image     - image to test
   ivar      - inverse variance of image
   psfvals   - values of psf at 1 pix and sqrt(2) pixels from center
               [2-element array]; must be set if PSTR is not
   satmask   - saturated pixel mask (1=saturated)

 OPTIONAL KEYORDS:
   pstr      - ???
   nsigma    - minimum value (in sigma) for condition 2 [default 6]
   cfac      - consistency factor [in sigma] for condition 3 [default 3]
   niter     - max number of iterations [default 6]
   c2fudge   - fudge factor to multiply psfvals by on first pass [default 0.8] 

 OUTPUTS:
   crmask    - byte array, same size as image (1=CR)

 EXAMPLES:

 COMMENTS:
   Algorithms designed by R Lupton and J. Gunn, implemented in C by Lupton,
    re-implemented by M. Blanton as reject_cr. 
    Now completely rewritten by D. Finkbeiner as psf_reject_cr.
    see Lupton's CR.c in photo product for more. 

   Do NOT need to call with zeroed image.
   Lupton's screed is at: http://www.astro.princeton.edu/~rhl/photomisc/

 REVISION HISTORY:
   2005-Mar-09  Written by Douglas Finkbeiner, Princeton

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/image/psf_reject_cr.pro">$IDLUTILS_DIR/pro/image/psf_reject_cr.pro</a>)</strong></p>
<hr />
<h3 id="PSF_REJECT_CR_SINGLE">PSF_REJECT_CR_SINGLE</h3>
<p><a href="#PSF_REJECT_CR">[Previous Routine]</a></p>
<p><a href="#PSF_STAMPS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   psf_reject_cr_single

 PURPOSE:
   test a list of &quot;suspect&quot; pixels for cosmic rays (CRs)

 CALLING SEQUENCE:
   result=psf_reject_cr_single(im, gd, ivar, satmask, min_sigma, $
         c3fac, psfvals, ind0, neighbor=neighbor)

 INPUTS:
   im        - image to test
   gd        - array of &quot;good pixels&quot; to use (1=good)
   ivar      - inverse variance of image
   satmask   - saturated pixel mask (1=saturated)
   min_sigma - minimum value (in sigma) for condition 2
   c3fac     - consistency factor [in sigma] for condition 3
   psfvals   - values of psf at 1 pix and sqrt(2) pixels from center, as
               either a 2-element array or a [2,M] array for the M possible
               cosmics as defined in IND0
   ind0      - index list of pixels to investigate [M]

 OUTPUTS:
   result    - byte array of results, same length as ind0 [M] (1=CR)

 OPTIONAL OUTPUTS:
   neighbor  - index list of neighbors of just-found CRs, which is useful
               if this routine is called iteratively to find neighboring CRs

 EXAMPLES:
   always called by psf_reject_cr

 COMMENTS:
   Algorithms designed by R Lupton and J. Gunn, implemented in C by Lupton,
    re-implemented by M. Blanton as reject_cr. 
    Now completely rewritten by D. Finkbeiner as psf_reject_cr.
    see psf_reject_cr for more details. 
   gd indicates which pixels may be safely used for interpolate and
    background determination.  gd gets updated as CRs are zapped. 
   
 REVISION HISTORY:
   2005-Mar-09  Written by Douglas Finkbeiner, Princeton

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/image/psf_reject_cr_single.pro">$IDLUTILS_DIR/pro/image/psf_reject_cr_single.pro</a>)</strong></p>
<hr />
<h3 id="PSF_STAMPS">PSF_STAMPS</h3>
<p><a href="#PSF_REJECT_CR_SINGLE">[Previous Routine]</a></p>
<p><a href="#PSF_STAMP_CENTER_ITER">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   psf_stamps

 PURPOSE:
   Cut out postage stamps around stars of interest

 CALLING SEQUENCE:
   stamps = psf_stamps(image, ivar, px, py, par, shift=, dx=, dy=, $
                                       stampivar=stampivar
 INPUTS:
   image      - image to locate stars in
   ivar       - inverse variance image -- must be correctly
                calibrated, or some of the algorithms will NOT WORK!
   p{x,y}     - integer (X,Y) positions from psf_findstars
   par        - parameter structure (see psf_par.pro)

 OPTIONAL INPUTS:
   
 KEYWORDS:
   shift      - do a sub-pixel shift with psf_stamp_center_iter

 OUTPUTS:
   stamps     - array of stamps [par.boxrad*2+1, par.boxrad*2+1, nstar]
   stampivar  - ivar stamps corresponding to stamps
   d{x,y}     - sub-pixel shift (add to px,py for 0-indexed location)
   p{x,y}     - may be modified to include only stars where the
                center pixel is the brightest.

 RESTRICTIONS:
   
 EXAMPLES:
   
 COMMENTS:
   This code handles image edges correctly, even though you probably
    do not want those stars.
   calls stamp_center_iter()

 REVISION HISTORY:
   2006-May-25  Written by Douglas Finkbeiner, Princeton

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/psf/psf_stamps.pro">$IDLUTILS_DIR/pro/psf/psf_stamps.pro</a>)</strong></p>
<hr />
<h3 id="PSF_STAMP_CENTER_ITER">PSF_STAMP_CENTER_ITER</h3>
<p><a href="#PSF_STAMPS">[Previous Routine]</a></p>
<p><a href="#PSF_VALIDATE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   psf_stamp_center_iter

 PURPOSE:
   Find sinc shift (dx,dy) such that central pixels are symmetric

 CALLING SEQUENCE:
   shifted_image = psf_stamp_center_iter(image, rad, maxiter=, dx=, dy=, $
                                         center= )
 INPUTS:
   image       - postage stamp to shift
   rad         - radius of box for flux-weighted center
 
 OPTIONAL INPUTS:
   maxiter     - number of iterations (Default 5)
   center      - optional input (x,y) position of center.  
                  Otherwise, assume center of stamp.

 OUTPUTS:
   d{x,y}      - sub-pixel offsets. 
   status      - status code (0=bad zero, 1=good, 2=near edge)

 EXAMPLES:
   see psf_stamps.pro

 RESTRICTIONS:
   rad=0 should mean center on sinc-interpolated peak, but this is
    not implemented yet.

 COMMENTS:
   One could also use the sinc-interpolated peak as the center. 
    This is thought to be slightly more robust.  

 REVISION HISTORY:
   2006-May-25   Written by Douglas Finkbeiner, Princeton

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/psf/psf_stamp_center_iter.pro">$IDLUTILS_DIR/pro/psf/psf_stamp_center_iter.pro</a>)</strong></p>
<hr />
<h3 id="PSF_VALIDATE">PSF_VALIDATE</h3>
<p><a href="#PSF_STAMP_CENTER_ITER">[Previous Routine]</a></p>
<p><a href="#PSF_ZERO">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   psf_validate

 PURPOSE:
   sanity checks on PSF fit

 CALLING SEQUENCE:
   psf_validate, pstr

 INPUTS:
   pstr   - psf structure (see psf_fit_coeffs

 OUTPUTS:
   junk to screen

 OPTIONAL OUTPUTS:
   
 RESTRICTIONS:
   
 EXAMPLES:
   
 COMMENTS:
   
 REVISION HISTORY:
   2006-Jun-06   Written by Douglas Finkbeiner, Princeton (6/6/6)

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/psf/psf_validate.pro">$IDLUTILS_DIR/pro/psf/psf_validate.pro</a>)</strong></p>
<hr />
<h3 id="PSF_ZERO">PSF_ZERO</h3>
<p><a href="#PSF_VALIDATE">[Previous Routine]</a></p>
<p><a href="#QUICK_PHOTFRAC">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   psf_zero

 PURPOSE:
   Determine the zero point in a PSF stamp

 CALLING SEQUENCE:
   psf_zero, stamps, stampivar, sub, psf, par, faint, chisq

 INPUTS:
   
 OPTIONAL INPUTS:
   
 KEYWORDS:
   
 OUTPUTS:
   
 OPTIONAL OUTPUTS:
   
 EXAMPLES:
   
 COMMENTS:
    doesn't use psf to get radius -- maybe should!
    changes stamps and sub!!!
   
 REVISION HISTORY:
   2009-Jul-10 - Written by Douglas Finkbeiner, CfA (visiting IfA)

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/psf/psf_zero.pro">$IDLUTILS_DIR/pro/psf/psf_zero.pro</a>)</strong></p>
<hr />
<h3 id="QUICK_PHOTFRAC">QUICK_PHOTFRAC</h3>
<p><a href="#PSF_ZERO">[Previous Routine]</a></p>
<p><a href="#QU_TO_BAPHI">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   quick_photfrac

 PURPOSE:
   Create a list of pixel numbers and their fractional contribution to
   an annular region.

 CALLING SEQUENCE:
   quick_photfrac, xcen, ycen, Rvec, xdimen=, ydimen=, /ragged, $
    [ xPixNum=, yPixNum=, pixnum=, fracs=, fillfrac= ]

 INPUTS:
   xcen:       X center(s)
   ycen:       Y center(s)
   Rvec:       Either a 2-element array with two radii to define an annulus,
               or a scalar to define a circular aperature.

 OPTIONAL INPUTS:
   xdimen:     Number of X pixels.
   ydimen:     Number of Y pixels.
   ragged:     Use ragged edges (weights either 0 or 1) - faster

 OUTPUTS:
   pixnum:     Pixel number, 0-indexed, for referencing array using one index.
   xPixNum:    Pixel number in X, 0-indexed.
   yPixNum:    Pixel number in Y, 0-indexed.
   fracs:      Return value of covering fraction of the annulus
               over the pixel number.
   fillfrac:   Ratio of returned pixel areas to the annulus area;
               this ratio should equal 1.0 if the aperature falls completely
               within the image boundaries

 COMMENTS:
   The total counts within this region is given by
     totcounts = total( pData(pixnum) * fracs )
   The area within this region is given by
     area = total(fracs)
   The average counts is given by
     totcounts = total( pData(pixnum) * fracs ) / total(fracs)

   If no pixels within the given annulus are found, then return pixnum=-1.

 BUGS:
   The area can be calculated with TOTAL(FRACS), and will differ
   slightly from the analytic area within a circle.

 PROCEDURES CALLED:
   djs_ceil()
   djs_floor()

 REVISION HISTORY:
   Written by D. Finkbeiner, 2000-Nov-02
  derived from djs_photfrac
   Written D. Schlegel, 27 November 1996, Durham
   
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/djsphot/quick_photfrac.pro">$IDLUTILS_DIR/pro/djsphot/quick_photfrac.pro</a>)</strong></p>
<hr />
<h3 id="QU_TO_BAPHI">QU_TO_BAPHI</h3>
<p><a href="#QUICK_PHOTFRAC">[Previous Routine]</a></p>
<p><a href="#QZAP">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   qu_to_baphi
 PURPOSE:
   transform q and u values to b/a and pih
 CALLING SEQUENCE:
   qu_to_baphi, q, u, ba, phi
 INPUTS:
   q - Stokes q parameter
   u - Stokes u parameter
 OPTIONAL INPUTS:
 OUTPUTS:
   ba - b/a
   phi - angle phi
 OPTIONAL INPUT/OUTPUTS:
 DATA DEPENDENCIES:
 COMMENTS:
 EXAMPLES:v
 BUGS:
 PROCEDURES CALLED:
 REVISION HISTORY:
   10-Aug-2002  Written by Mike Blanton, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/image/qu_to_baphi.pro">$IDLUTILS_DIR/pro/image/qu_to_baphi.pro</a>)</strong></p>
<hr />
<h3 id="QZAP">QZAP</h3>
<p><a href="#QU_TO_BAPHI">[Previous Routine]</a></p>
<p><a href="#RADEC2STRING">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   qzap

 PURPOSE:
   Remove cosmic rays from a 2-D image.

 CALLING SEQUENCE:
   qzap, name, outname, [ outmaskname, skyfiltsize=skyfiltsize, $
    boxsize=boxsize, nsigma=nsigma, /nofluxratio, maxiter=maxiter, $
    fluxcompare=fluxcompare, nrings=nrings, path=path, nzap=nzap ]

 INPUTS:
   name       - 2-D image array, or name of input FITS file.
   outname    - Output image array, or name of output FITS file.

 OPTIONAL INPUTS:
   outmaskname- Output mask array, or name of output FITS file.
   skyfiltsize- Boxsize for computing local sky value; default to 15.
   boxsize    - Boxsize for computing local median; default to 5.
   nsigma     - Rejection threshhold in sigma; default to 4.
   fluxratio  - Comparison value for identifying cosmics; default to 0.15
   maxiter    - Number of zapping iterations; default to 2.
   nofluxcompare - Set to disable the flux comparison algorithm, which
                is the &quot;black magic&quot; heart of this routine.
   nrings     - Radius of cosmic ray neighbors to also zap; default to 1.
   path       - Input/output path name

 OPTIONAL OUTPUTS:
   NZAP       - Number of pixels zapped.

 COMMENTS:
   Based on the tried and true IRAF QZAP routine by Mark Dickinson.
   Results from IDL qzap.pro and IRAF QZAP are found to be virtually
   identical.

 PROCEDURES CALLED:
   djs_iterstat

 REVISION HISTORY:
   20-Aug-1999  Written by Cullen Blake &amp; David Schlegel, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/image/qzap.pro">$IDLUTILS_DIR/pro/image/qzap.pro</a>)</strong></p>
<hr />
<h3 id="RADEC2STRING">RADEC2STRING</h3>
<p><a href="#QZAP">[Previous Routine]</a></p>
<p><a href="#RADEC_GREATCIRCLE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   radec2string
 PURPOSE:
   converts RA and DEC to string versions
 CALLING SEQUENCE:
   radec2string, ra, dec, outstring [, rahr=, ramin=, rasec=, $
     decdeg=, decmin=, decsec=, rastr=, decstr=, precision= ]
 INPUTS:
   ra - deg
   dec - deg
 OPTIONAL INPUTS:
   precision  - how many decimal places to put on dec; ra gets one more
 OUTPUTS:
   outstring - output string of form xx:xx:xx.xxx[+|-]xx:xx:xx.xx
 OPTIONAL OUTPUTS:
   rahr, ramin, rasec - components of first half of string
   decdeg, decmin, decsec - components of second half of string
   rastr, decstr - first and second halves separately
 COMMENTS:
   Defaults to SDSS name conventions.
   Don't EVER use goddard/pro/astro/adstring.pro.
   Hacked from hogg_iau_name
 BUGS:
   Doesn't deal properly with precision&lt;0 
 REVISION HISTORY:
   2005-10-24  Blanton (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/radec2string.pro">$IDLUTILS_DIR/pro/misc/radec2string.pro</a>)</strong></p>
<hr />
<h3 id="RADEC_GREATCIRCLE">RADEC_GREATCIRCLE</h3>
<p><a href="#RADEC2STRING">[Previous Routine]</a></p>
<p><a href="#RADEC_TO_ETALAMBDA">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   radec_greatcircle

 PURPOSE:
   Solve for the great circle for a set of RA,DEC positions at a set of times.

 CALLING SEQUENCE:
   fitval = radec_greatcircle(ralist, declist, xposlist, yposlist, $
    [ timelist, start_parms, maxiter=, fixed=, muerr=, nuerr=, $
    /debug, niter=, status=, muresid=, nuresid= ] )

 INPUTS:
   ralist     - RA coordinates (degrees) [NPOINTS]
   declist    - DEC coordinates (degrees) [NPOINTS]
   xposlist   - X positions, perpendicular to scan direction [NPOINTS]
   yposlist   - Y positions, along the scan direction [NPOINTS]

 OPTIONAL INPUTS:
   timelist   - Time stamps.  If specified, then a time^2 term is
                also fit along the scan direction, for a total of
                6 fit parameters instead of 5 [NPOINTS].
   start_parms- Initial guess for the great circle fit [NPARM].
   maxiter    - Maximum number of iterations for fit; default to 5000
   fixed      - If set, then fit for each parameter where this is 0,
                and fit for each parameter where this is 1 [NPARM].
   muerr      - Error of each point in MU coordinate; default to 1 arcsec;
                either a scalar or of length [NPOINTS]; used for chi^2
   nuerr      - Error of each point in NU coordinate; default to 1 arcsec;
                either a scalar or of length [NPOINTS]; used for chi^2
   debug      - If set, then plot the MU,NU deviations in units of arcsec
                at each iteration of the fit.  Also, don't call MPFIT()
                with /QUIET, but print its verbose output on each iteration.

 OUTPUTS:
   fitval     - Best-fit parameters [NPARM].

 OPTIONAL OUTPUTS:
   niter      - Number of iterations performed.
   status     - Return status from MPFIT() function, set to a non-zero
                value if an error occurred.
   muresid    - MU coordinate residuals from best-fit
   nuresid    - NU coordinate residuals from best-fit

 COMMENTS:
   The fit parameters are as follows:
     FITVAL[0] - Starting MU coordinate from [0,360) degrees
     FITVAL[1] - Node of great circle from [0,360) degrees
     FITVAL[2] - Inclination of great circle from [0,180) degrees
     FITVAL[3] - Perpendicular offset of scan from the great circle [degrees];
                 this is what is called XBORE for SDSS imaging scans.
                 Fix this parameter to zero if you want to fit exactly along
                 a great circle, and not offset from it.
     FITVAL[4] - Tracking rate in degrees per unit of YPOSLIST;
                 for example, if YPOSLIST is is units of pixels,
                 this is in units of degrees/pixel
     FITVAL[5] - Optional parameter for fitting a quadratic term in time

   The set of parametric equations to convert from xposlist,yposlist,timelist
   to ra,dec are as follows:
     mu = FITVAL[0] + yposlist * FITVAL[4] + FITVAL[5] * timelist^2
     nu = xposlist + FITVAL[3]
     xx = cos(mu-node) * cos(nu)
     yy = sin(mu-node) * cos(nu) * cos(FITVAL[2]) - sin(nu) * sin(FITVAL[2])
     zz = sin(mu-node) * cos(nu) * sin(FITVAL[2]) + sin(nu) * cos(FITVAL[2])
     ra = (180/!pi) * atan(yy,xx) + FITVAL[1]
     dec = (180/!pi) * asin(zz)

  Note that one can change the sign of the inclination by adding 180 degrees
  to the node.

 EXAMPLES:

 BUGS:

 PROCEDURES CALLED:
   cirrange
   djs_plot
   mpfit()
   radec_to_munu

 INTERNAL SUPPPORT ROUTINES:
   radec_gcfn()

 REVISION HISTORY:
   21-Nov-2002  Written by David Schlegel, Princeton.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/coord/radec_greatcircle.pro">$IDLUTILS_DIR/pro/coord/radec_greatcircle.pro</a>)</strong></p>
<hr />
<h3 id="RADEC_TO_ETALAMBDA">RADEC_TO_ETALAMBDA</h3>
<p><a href="#RADEC_GREATCIRCLE">[Previous Routine]</a></p>
<p><a href="#RADEC_TO_MUNU">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   radec_to_etalambda
 PURPOSE:
   convert from RA, Dec to eta, lambda (SDSS survey coordinates)
 CALLING SEQUENCE:
   radec_to_etalambda, ra,dec,eta,lambda,stripenumber=stripenumber
 INPUTS:
   ra      RA (deg), J2000
   dec     Dec (deg), J2000
 OUTPUTS:
   eta     SDSS survey coordinate eta (deg)
   lambda  SDSS survey coordinate lambda (deg)
 OPTIONAL OUTPUTS:
   stripenumber   SDSS survey stripe number (integer)
 BUGS:
   Location of the survey center is hard-wired (in etalambda_to_radec.pro);
     it should be read from astrotools.
 REVISION HISTORY:
   2001-Jul-21  written by Hogg (NYU)
   2002-Oct-04  modified by Blanton (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/coord/radec_to_etalambda.pro">$IDLUTILS_DIR/pro/coord/radec_to_etalambda.pro</a>)</strong></p>
<hr />
<h3 id="RADEC_TO_MUNU">RADEC_TO_MUNU</h3>
<p><a href="#RADEC_TO_ETALAMBDA">[Previous Routine]</a></p>
<p><a href="#RADEC_TO_SIMPLEPIX">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   radec_to_munu

 PURPOSE:
   Convert from equatorial coordinates to SDSS great circle coordinates.

 CALLING SEQUENCE:
   radec_to_munu, ra, dec, [ mu, nu, stripe=, node=, incl=, phi= ]

 INPUTS:
   ra         - Right ascension (J2000 degrees)
   dec        - Declination (J2000 degrees)

 OPTIONAL INPUTS:
   stripe     - Stripe number for SDSS coordinate system.  If specified,
                the NODE,INCL are ignored; scalar or array with same
                dimensions as MU.
   node       - Node of great circle on the J2000 celestial equator (degrees),
                scalar or array with same dimensions as MU.
   incl       - Inclination of great circle relative to the J2000

 OUTPUTS:

 OPTIONAL OUTPUTS:
   mu         - Mu coordinate, scalar or array (degrees)
   nu         - Nu coordinate, scalar or array (degrees)
   phi        - Counter-clockwise position angle w.r.t. north for an arc
                in the +nu direction.

 COMMENTS:
   Either STRIPE or NODE,INCL must be specified.

 EXAMPLES:

 BUGS:

 PROCEDURES CALLED:
   cirrange
   stripe_to_incl()

 REVISION HISTORY:
   20-Feb-2002  Written by M. Blanton, NYU
   03-Oct-2002  Modified by David Schlegel, Princeton.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/coord/radec_to_munu.pro">$IDLUTILS_DIR/pro/coord/radec_to_munu.pro</a>)</strong></p>
<hr />
<h3 id="RADEC_TO_SIMPLEPIX">RADEC_TO_SIMPLEPIX</h3>
<p><a href="#RADEC_TO_MUNU">[Previous Routine]</a></p>
<p><a href="#RDSS_FITS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   radec_to_simplepix

 PURPOSE:
   convert ra and dec to the pixel number in the mangle simplepix scheme
   
 CALLING SEQUENCE:
   radec_to_simplepix, ra, dec, pixnum

 INPUTS:
   ra     - right ascension (degrees)
   dec    - declination (degrees)
   pixres - pixel resolution (e.g., 4s at top of mangle file means pixres=4)

 OPTIONAL INPUTS:

 OUTPUTS:
   pixnum  - pixel number in mangle simplepix scheme
                                
 COMMENTS: 
   converts to spherical polar coordinates first
   then from spherical polar to pixel number

 EXAMPLES:

 REQUIREMENTS:

 CREDITS:
   Hacked off Martin White's c++ routine

 REVISION HISTORY:
   22-Mar-2011  Written by Adam D. Myers, UWyo
   6-July-2011  p2/2 to p2/2LL so valid to pixres=31, Adam D. Myers, UWyo
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mangle/radec_to_simplepix.pro">$IDLUTILS_DIR/pro/mangle/radec_to_simplepix.pro</a>)</strong></p>
<hr />
<h3 id="RDSS_FITS">RDSS_FITS</h3>
<p><a href="#RADEC_TO_SIMPLEPIX">[Previous Routine]</a></p>
<p><a href="#READ_BINARY_POLYGONS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   rdss_fits

 PURPOSE:
   Read a FITS file into IDL data and header variables

 CALLING SEQUENCE:
   image = rdss_fits( filename, [ hdr, /nofloat, /silent ] )

 INPUTS:
   filename   - Scalar string containing the name of the FITS file  
                (including extension) to be read.   If the filename has
                a *.gz extension, it will be treated as a gzip compressed
                file.   If it has a .Z extension, it will be treated as a
                Unix compressed file.

 OPTIONAL KEYWORDS:
   nofloat    - If set, then keep data as unsigned integers.
   silent     - suppress informational messages

 OUTPUTS:
   image      - FITS data array constructed from designated record.
                If the specified file was not found, then return -1.

 OPTIONAL OUTPUTS:
   hdr        - String array containing the header from the FITS file.

 COMMENTS:
   This routine will read a simple FITS image, or convert a non-standard
   SDSS image that uses unsigned 16-bit integers.  One can pass any other
   keywords expected by READFITS().

 EXAMPLES:

 PROCEDURES CALLED:
   mrdfits()
   sxaddpar
   sxdelpar
   sxpar()

 REVISION HISTORY:
   13-May-1999  Written by David Schlegel, Princeton.
   07-Jan-2001  Finkbeiner - added /silent because of U16 message
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/fits/rdss_fits.pro">$IDLUTILS_DIR/pro/fits/rdss_fits.pro</a>)</strong></p>
<hr />
<h3 id="READ_BINARY_POLYGONS">READ_BINARY_POLYGONS</h3>
<p><a href="#RDSS_FITS">[Previous Routine]</a></p>
<p><a href="#READ_DS_COOLING">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   read_binary_polygons
 PURPOSE:
   Read a &quot;polygon&quot; format binary file written by mangle, and return
   in the IDL structure format
 CALLING SEQUENCE:
   read_binary_polygons, infile, polygons, id [, unit=]
 INPUTS:
   infile - input file name
 OPTIONAL INPUTS:
   unit - if present, read from given unit
 OUTPUTS:
   polygons - arrays of structures (eg those made by construct_field_polygon) 
   id - array of id's for polygons (should be unique)
 OPTIONAL INPUT/OUTPUTS:
 COMMENTS:
 EXAMPLES:
 BUGS:
 PROCEDURES CALLED:
 REVISION HISTORY:
   27-Sep-2003  Written by MRB (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mangle/read_binary_polygons.pro">$IDLUTILS_DIR/pro/mangle/read_binary_polygons.pro</a>)</strong></p>
<hr />
<h3 id="READ_DS_COOLING">READ_DS_COOLING</h3>
<p><a href="#READ_BINARY_POLYGONS">[Previous Routine]</a></p>
<p><a href="#READ_FITS_POLYGONS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   read_ds_cooling

 PURPOSE:
   Read in Dopita &amp; Sutherland 1993 cooling function

 CALLING SEQUENCE:
   read_ds_cooling, fname, logT, loglambda

 INPUTS:
   fname - one of
            m-00.cie
            m-05.cie
            m+05.cie
            m-10.cie
            m-15.cie
            m-20.cie
            m-30.cie
            mzero.cie
   logT  - log10 T in Kelvin
   loglambda - log of cooling function [erg/s cm^3]
 
 OPTIONAL OUTPUTS:
   logT  - if not passed, then logT is set to values in file

 RESTRICTIONS:
   
 EXAMPLES:
   
 COMMENTS:
   
 REVISION HISTORY:
   2007-Mar-19  Written by Douglas Finkbeiner, CfA

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/cooling/read_ds_cooling.pro">$IDLUTILS_DIR/pro/cooling/read_ds_cooling.pro</a>)</strong></p>
<hr />
<h3 id="READ_FITS_POLYGONS">READ_FITS_POLYGONS</h3>
<p><a href="#READ_DS_COOLING">[Previous Routine]</a></p>
<p><a href="#READ_MANGLE_POLYGONS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   read_fits_polygons
 PURPOSE:
   Read a &quot;polygon&quot; format fits file 
 CALLING SEQUENCE:
   read_fits_polygons, infile, polygons
 INPUTS:
   infile - input file name
 OPTIONAL INPUTS:
 OUTPUTS:
   polygons - arrays of structures (eg those made by construct_field_polygon) 
 OPTIONAL INPUT/OUTPUTS:
 COMMENTS:
   The main point of this is to extract the xcaps and cmcaps columns
   and replace them with caps.x and caps.cm
 EXAMPLES:
 BUGS:
 PROCEDURES CALLED:
 REVISION HISTORY:
   30-Nov-2002  Written by MRB (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mangle/read_fits_polygons.pro">$IDLUTILS_DIR/pro/mangle/read_fits_polygons.pro</a>)</strong></p>
<hr />
<h3 id="READ_MANGLE_POLYGONS">READ_MANGLE_POLYGONS</h3>
<p><a href="#READ_FITS_POLYGONS">[Previous Routine]</a></p>
<p><a href="#READ_MANGLE_VERTICES">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   read_mangle_polygons
 PURPOSE:
   Read a &quot;polygon&quot; format ascii file written by mangle, and return
   in the IDL structure format
 CALLING SEQUENCE:
   read_mangle_polygons, infile, polygons, id [, unit=]
 INPUTS:
   infile - input file name
 OPTIONAL INPUTS:
   unit - if present, read from given unit
 OUTPUTS:
   polygons - arrays of structures (eg those made by construct_field_polygon) 
   id - array of id's for polygons (should be unique)
 REVISION HISTORY:
   30-Nov-2002  Written by MRB (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mangle/read_mangle_polygons.pro">$IDLUTILS_DIR/pro/mangle/read_mangle_polygons.pro</a>)</strong></p>
<hr />
<h3 id="READ_MANGLE_VERTICES">READ_MANGLE_VERTICES</h3>
<p><a href="#READ_MANGLE_POLYGONS">[Previous Routine]</a></p>
<p><a href="#READ_TBL">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   read_mangle_vertices
 PURPOSE:
   Read in a set of vertices, mangle style
 CALLING SEQUENCE:
   read_mangle_vertices, infile, vertices, id
 INPUTS:
   infile - input file name
 OPTIONAL INPUTS:
 OUTPUTS:
   vertices - arrays of structures (eg those made by
              construct_field_vertex) 
   id - array of id's for vertices (should be unique)
   weight - arrays of weights for each vertex
   str - area of each vertex?
 OPTIONAL INPUT/OUTPUTS:
 COMMENTS:
 EXAMPLES:
 BUGS:
 PROCEDURES CALLED:
 REVISION HISTORY:
   30-Nov-2002  Written by MRB (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mangle/read_mangle_vertices.pro">$IDLUTILS_DIR/pro/mangle/read_mangle_vertices.pro</a>)</strong></p>
<hr />
<h3 id="READ_TBL">READ_TBL</h3>
<p><a href="#READ_MANGLE_VERTICES">[Previous Routine]</a></p>
<p><a href="#READ_YANNY_POLYGONS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   read_tbl
 PURPOSE:
   Read .tbl/.hdr format files output by postgres (like those of 2MASS)
 CALLING SEQUENCE:
   table= read_tbl(filebase [, chunksize=])
 INPUTS:
   filebase - filebase for filebase.hdr and filebase.tbl files
 OPTIONAL INPUTS:
   chunksize - size of chunks to read in at a time before converting [1000]
 COMMENTS:
   Returns a structure in &quot;table&quot;
   Not very extensively tested
 BUGS:
   I don't know if I've included ALL possible types in type2var
 REVISION HISTORY:
   2003-01-29 written by Michael Blanton (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/read_tbl.pro">$IDLUTILS_DIR/pro/misc/read_tbl.pro</a>)</strong></p>
<hr />
<h3 id="READ_YANNY_POLYGONS">READ_YANNY_POLYGONS</h3>
<p><a href="#READ_TBL">[Previous Routine]</a></p>
<p><a href="#REBIN_SPECTRUM">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   read_yanny_polygons
 PURPOSE:
   Read a &quot;polygon&quot; format yanny file 
 CALLING SEQUENCE:
   read_yanny_polygons, infile, polygons
 INPUTS:
   infile - input file name
 OPTIONAL INPUTS:
 OUTPUTS:
   polygons - arrays of structures (eg those made by construct_field_polygon) 
 OPTIONAL INPUT/OUTPUTS:
 COMMENTS:
   The main point of this is to extract the xcaps and cmcaps columns
   and replace them with caps.x and caps.cm
 EXAMPLES:
 BUGS:
 PROCEDURES CALLED:
 REVISION HISTORY:
   30-Nov-2002  Written by MRB (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mangle/read_yanny_polygons.pro">$IDLUTILS_DIR/pro/mangle/read_yanny_polygons.pro</a>)</strong></p>
<hr />
<h3 id="REBIN_SPECTRUM">REBIN_SPECTRUM</h3>
<p><a href="#READ_YANNY_POLYGONS">[Previous Routine]</a></p>
<p><a href="#REJECT_CR">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   rebin_spectrum

 PURPOSE:
   Rebin a 1-D spectrum using CIC assignment onto arbitrary pixel boundaries.

 CALLING SEQUENCE:
   yflux = rebin_spectrum( xflux, xwave, ywave )

 INPUTS:
   xflux      - Flux vector [NOLD]
   xwave      - Wavelengths of pixel edges for input XFLUX [NOLD+1],
                or the central wavelength of each pixel [NOLD]
   ywave      - Wavelengths of pixel edges for output YFLUX [NNEW+1],
                or the central wavelength of each pixel [NNEW]

 OPTIONAL INPUTS:

 OUTPUTS:
   yflux      - Rebinned spectrum

 COMMENTS:
   This function does a straight cloud-in-cell re-assignment of flux
   from one spectrum to another.  The boundaries of the flux in pixel #i,
   XFLUX[i], in the first spectrum is assumed to be uniformly distributed
   between the wavelengths [XWAVE[i],XWAVE[i+1]].  This flux is re-assigned
   to YFLUX, whose pixel #j is assumed to cover [YWAVE[j],YWAVE[j+1]].
   This algorithm is strictly flux-conserving for the wavelengths that
   overlap.

   If one wavelength grid is an integral multiple of the other, than this
   is equivalent to using the IDL REBIN command.  For example, the following
   exactly puts the flux from the XFLUX spectrum into bins twice as big:
     IDL&gt; xflux=randomu(1234,100)
     IDL&gt; xwave=findgen(101)
     IDL&gt; ywave=findgen(51)*2
     IDL&gt; yflux=rebin_spectrum(xflux,xwave,ywave)
   This could also be accomplished with
     IDL&gt; yflux2=rebin(xflux,50)
   In this example, the two pixels of the input spectrum span the
   wavelengths [0,1] and [1,2].  The first pixel of the output spectrum
   spans [0,2].

   Both XWAVE and YWAVE must be in strictly ascending order, and cannot
   repeat any wavelengths within those vectors.

   One can also call this routine with XWAVE having the same number of
   elements as XFLUX.  In that case, we assume that the wavelengths are
   at the center of each pixel, and internal to this routine compute
   (by linear interpolation) where the pixel boundaries are.  For this case,
   we also interpret YWAVE as being at the pixel centers.

 BUGS:
   This should probably be implmented in C for better speed.
   We do not test that XWAVE and YWAVE are strictly ascending.

 PROCEDURES CALLED:

 REVISION HISTORY:
   18-Jan-2003  Written by D. Schlegel, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/image/rebin_spectrum.pro">$IDLUTILS_DIR/pro/image/rebin_spectrum.pro</a>)</strong></p>
<hr />
<h3 id="REJECT_CR">REJECT_CR</h3>
<p><a href="#REBIN_SPECTRUM">[Previous Routine]</a></p>
<p><a href="#RESAMPLE_SPECTRUM">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   reject_cr

 PURPOSE:
   Detects cosmic rays by finding features sharper than the PSF

 CALLING SEQUENCE:
   reject_cr, image, image_ivar, psfvals, rejects, nsig=nsig, $
     cfudge=cfudge, c2fudge=c2fudge

 INPUTS:
   image - [nx,ny] input image (sky-subtracted)
   image_ivar - [nx,ny] variance image
   psfvals - [2] values of psf at 1 pix and sqrt(2) pixels from center

 OPTIONAL INPUTS:
   nsig - number of sigma above background required (default 6)
   cfudge - number of sigma inconsistency required (default 3.)
   c2fudge - fudge factor applied to psf (default 0.8)
   threshold - threshold flux to keep a CR (default 0.)
   niter - number of iterations to search for neighbors (default 3)
   ignoremask - do not process pixels with this set to 1

 OUTPUTS:
   rejects - [nrejects] list of rejected pixels (-1 if none)
   nrejects - number of rejected pixels

 COMMENTS:
   Ignores pixels with image_ivar set to zero. 

 BUGS:

 PROCEDURES CALLED:

 REVISION HISTORY:
   Started - 18-Nov-2003 M. Blanton (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/image/reject_cr.pro">$IDLUTILS_DIR/pro/image/reject_cr.pro</a>)</strong></p>
<hr />
<h3 id="RESAMPLE_SPECTRUM">RESAMPLE_SPECTRUM</h3>
<p><a href="#REJECT_CR">[Previous Routine]</a></p>
<p><a href="#RESTORE_SYSVARS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   resample_spectrum

 PURPOSE:
   Rebin a 1-D spectrum using CIC assignment onto arbitrary pixel boundaries.

 CALLING SEQUENCE:
   yflux = resample_spectrum( xflux, xwave, ywave, xdisp=, ydisp= )

 INPUTS:
   xflux      - Flux vector [NOLD]
   xwave      - Wavelengths of pixel edges for input XFLUX [NOLD+1],
                or the central wavelength of each pixel [NOLD];
                this can be in any units, such as Angstroms or log-wavelength
   ywave      - Wavelengths of pixel edges for output YFLUX [NNEW+1],
                or the central wavelength of each pixel [NNEW];
                this must be in the same units as XWAVE

 OPTIONAL INPUTS:
   xdisp      - Dispersion of input spectrum in same units as XWAVE [NOLD]
   ydisp      - Dispersion of output spectrum in same units as XWAVE [NNEW]

 OUTPUTS:
   yflux      - Rebinned spectrum

 COMMENTS:
   This function does a straight cloud-in-cell re-assignment of flux
   from one spectrum to another.  The boundaries of the flux in pixel #i,
   XFLUX[i], in the first spectrum is assumed to be uniformly distributed
   between the wavelengths [XWAVE[i],XWAVE[i+1]].  This flux is re-assigned
   to YFLUX, whose pixel #j is assumed to cover [YWAVE[j],YWAVE[j+1]].
   This algorithm is strictly flux-conserving for the wavelengths that
   overlap.

   If one wavelength grid is an integral multiple of the other, than this
   is equivalent to using the IDL REBIN command.  For example, the following
   exactly puts the flux from the XFLUX spectrum into bins twice as big:
     IDL&gt; xflux=randomu(1234,100)
     IDL&gt; xwave=findgen(101)
     IDL&gt; ywave=findgen(51)*2
     IDL&gt; yflux=resample_spectrum(xflux,xwave,ywave)
   This could also be accomplished with
     IDL&gt; yflux2=rebin(xflux,50)
   In this example, the two pixels of the input spectrum span the
   wavelengths [0,1] and [1,2].  The first pixel of the output spectrum
   spans [0,2].

   Both XWAVE and YWAVE must be in strictly ascending order, and cannot
   repeat any wavelengths within those vectors.

   One can also call this routine with XWAVE having the same number of
   elements as XFLUX.  In that case, we assume that the wavelengths are
   at the center of each pixel, and internal to this routine compute
   (by linear interpolation) where the pixel boundaries are.  For this case,
   we also interpret YWAVE as being at the pixel centers.

 BUGS:
   This should probably be implmented in C for better speed.
   We do not test that XWAVE and YWAVE are strictly ascending.

 PROCEDURES CALLED:

 REVISION HISTORY:
   29-Sep-2006  Written by D. Schlegel, LBL
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/image/resample_spectrum.pro">$IDLUTILS_DIR/pro/image/resample_spectrum.pro</a>)</strong></p>
<hr />
<h3 id="RESTORE_SYSVARS">RESTORE_SYSVARS</h3>
<p><a href="#RESAMPLE_SPECTRUM">[Previous Routine]</a></p>
<p><a href="#RMFILE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   restore_sysvars

 PURPOSE:
   restore plot system variabls from structure created by sysvars

 CALLING SEQUENCE:
   restore_sysvars, state

 INPUTS:
   state  - structure containing previous values of !p,!d,!x,!y,!z
   
 EXAMPLES:
   state = sysvars(/print)
     &lt;code to print stuff&gt;
   restore_sysvars, state
   
 REVISION HISTORY:
   2001-Aug-06  Written by Douglas Finkbeiner, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/restore_sysvars.pro">$IDLUTILS_DIR/pro/plot/restore_sysvars.pro</a>)</strong></p>
<hr />
<h3 id="RMFILE">RMFILE</h3>
<p><a href="#RESTORE_SYSVARS">[Previous Routine]</a></p>
<p><a href="#ROSAT_FITS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   rmfile

 PURPOSE:
   Delete file from disk.

 CALLING SEQUENCE:
   rmfile, filename

 INPUTS:
   filename   - File to delete.

 OUTPUTS:

 COMMENTS:

 EXAMPLES:

 BUGS:

 PROCEDURES CALLED:

 REVISION HISTORY:
   14-Oct-1999  Written by D. Schlegel, APO
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/rmfile.pro">$IDLUTILS_DIR/pro/misc/rmfile.pro</a>)</strong></p>
<hr />
<h3 id="ROSAT_FITS">ROSAT_FITS</h3>
<p><a href="#RMFILE">[Previous Routine]</a></p>
<p><a href="#ROSAT__DEFINE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   rosat_fits
 PURPOSE:
   Convert RASS FSC text file into FITS
 CALLING SEQUENCE:
   rosat_fits
 REVISION HISTORY:
   2010-04-23  Written by Blanton, NYU
   2012-03-08  Replace numlines() with FILE_LINES()
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/rosat/rosat_fits.pro">$IDLUTILS_DIR/pro/rosat/rosat_fits.pro</a>)</strong></p>
<hr />
<h3 id="ROSAT__DEFINE">ROSAT__DEFINE</h3>
<p><a href="#ROSAT_FITS">[Previous Routine]</a></p>
<p><a href="#RSEX">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   rosat__define

 PURPOSE:
   Define a rosat structure

 CALLING SEQUENCE:
   rosat0 = {rosat}

 REVISION HISTORY:
   2011-03-26  Written by B. A. Weaver, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/rosat/rosat__define.pro">$IDLUTILS_DIR/pro/rosat/rosat__define.pro</a>)</strong></p>
<hr />
<h3 id="RSEX">RSEX</h3>
<p><a href="#ROSAT__DEFINE">[Previous Routine]</a></p>
<p><a href="#SDSS_ASTROMBAD">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
       RSEX

 PURPOSE:
       Read in arbitrary SExtractor format catalogs, using native
       header information &amp; data themselves.  Correctly reads longs,
       strings, and doubles.  

 INPUTS:
       A SExtractor-format catalog

 OPTIONAL INPUTS:
       use_row - use this row of the catalog to determine the format
                 of the output data structure (zero-indexed; default
                 0); this is necessary because occasionally a column
                 in the first row is a different format (e.g., LONG)
                 than the rest of the rows (e.g., DOUBLE)

 KEYWORD PARAMETERS:

 OUTPUTS:
       Returns a structure with all catalog entries, using field
       names for tagnames. 

 COMMON BLOCKS:
       None.

 RESTRICTIONS:
       None.

 PROCEDURE:
       Use syntax
       cs = rsex('catalog.cat')

 COMMENTS:

 PROCEDURES USED:
       FINDFILE
       CREATE_STRUCT
       VALID_NUM
       VALID_NUM_ARR

 MODIFICATION HISTORY:
 LAM = L. Moustakas
 JM  = J. Moustakas
       LAM '04may02 - fixed problem case of there being an array of
                      values based on the last header tag position.
                      will now work with that case after special
                      check. 
       LAM '04feb04 - converted from the old lrsex.pro; adapted to
                      detect and read longs, strings, and doubles.  
       JM  '04sep22 - skip comment lines in the header designated
                      with a double-hash (##)
       JM  '07aug18 - added USE_ROW optional input
       JM  '08jul25 - use a variable logical unit number
       LAM+JM '08dec11 - vetted - no changes made
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/rsex.pro">$IDLUTILS_DIR/pro/misc/rsex.pro</a>)</strong></p>
<hr />
<h3 id="SDSS_ASTROMBAD">SDSS_ASTROMBAD</h3>
<p><a href="#RSEX">[Previous Routine]</a></p>
<p><a href="#SDSS_FLAGEXIST">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   sdss_astrombad
 PURPOSE:
   For a list of RUN, CAMCOL, FIELD, return whether each field has bad astrometry
 CALLING SEQUENCE:
   bad= sdss_astrombad(run, camcol, field)
 INPUTS:
   run, camcol, field - [N] field identifiers
   rerun - which rerun 
 OUTPUTS:
   bad - 0 for good, 1 for bad
 COMMENTS:
   Reads data from:
    $PHOTOLOG_DIR/opfiles/opBadFields.par
   Note that if there is a problem with one camcol, we assume a
   problem with all camcols.
 REVISION HISTORY:
   10-Oct-2012  morphed by M. Blanton, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/sdss/sdss_astrombad.pro">$IDLUTILS_DIR/pro/sdss/sdss_astrombad.pro</a>)</strong></p>
<hr />
<h3 id="SDSS_FLAGEXIST">SDSS_FLAGEXIST</h3>
<p><a href="#SDSS_ASTROMBAD">[Previous Routine]</a></p>
<p><a href="#SDSS_FLAGNAME">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   sdss_flagexist

 PURPOSE:
   Returns whether a flag exists

 CALLING SEQUENCE:
   exist= sdss_flagexist(flagprefix, label, flagexist=)

 INPUTS:
   flagprefix - Flag name (scalar string).  The following are supported:
                SPPIXMASK, TARGET, TTARGET.
   label      - String name(s) corresponding to each non-zero bit in FLAGVALUE.

 OUTPUTS:
   exist - 1 if label exists for this flag (0 otherwise)
   flagexist - 1 if this flag exists (0 otherwise)

 PROCEDURES CALLED:
   splog
   yanny_free
   yanny_read

 DATA FILES:
   $IDLUTILS_DIR/data/sdss/sdssMaskbits.par

 REVISION HISTORY:
	   2010-07-02: made by modifying sdss_flagval, MRB, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/sdss/sdss_flagexist.pro">$IDLUTILS_DIR/pro/sdss/sdss_flagexist.pro</a>)</strong></p>
<hr />
<h3 id="SDSS_FLAGNAME">SDSS_FLAGNAME</h3>
<p><a href="#SDSS_FLAGEXIST">[Previous Routine]</a></p>
<p><a href="#SDSS_FLAGVAL">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   sdss_flagname

 PURPOSE:
   Return bitmask labels corresponding to bit numbers.

 CALLING SEQUENCE:
   label = sdss_flagname(flagprefix, flagvalue, [ /concat, /silent ] )

 INPUTS:
   flagprefix - Flag name (scalar string).  The following are supported:
                SPPIXMASK, TARGET, TTARGET.
   flagvalue  - Signed long with any number of its bits set.

 OPTIONAL KEYWORDS:
   concat     - If set, then concatenate all of the output labels in
                LABEL into a single whitespace-separated string.
   silent     - If set, then don't print a warning when there is no bit label
                corresponding to one of the bit values.

 OUTPUTS:
   label      - String name(s) corresponding to each non-zero bit in FLAGVALUE.

 OPTIONAL OUTPUTS:

 COMMENTS:
   This function is the inverse of SDSS_FLAGVAL().

 EXAMPLES:

 BUGS:

 PROCEDURES CALLED:
   splog
   yanny_free
   yanny_read

 DATA FILES:
   $IDLUTILS_DIR/data/sdss/sdssMaskbits.par

 REVISION HISTORY:
   01-Apr-2002 Written by D. Schlegel, Princeton.
   19-Aug-2008 Modified by A. Kim.  sdssMaskbits.par now has accompanying 
               information on the associated datatype for the bits.  
               Code modified to read in this information, check the validity
               of the par file, and return values of the correct type.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/sdss/sdss_flagname.pro">$IDLUTILS_DIR/pro/sdss/sdss_flagname.pro</a>)</strong></p>
<hr />
<h3 id="SDSS_FLAGVAL">SDSS_FLAGVAL</h3>
<p><a href="#SDSS_FLAGNAME">[Previous Routine]</a></p>
<p><a href="#SDSS_OBJID">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   sdss_flagval

 PURPOSE:
   Return bitmask values corresponding to labels.

 CALLING SEQUENCE:
   value = sdss_flagval(flagprefix, label)

 INPUTS:
   flagprefix - Flag name (scalar string).  The following are supported:
                SPPIXMASK, TARGET, TTARGET.
   label      - String name(s) corresponding to each non-zero bit in FLAGVALUE.

 OPTIONAL KEYWORDS:

 OUTPUTS:
   value      - Signed long with any number of its bits set.

 OPTIONAL OUTPUTS:

 COMMENTS:
   This function is the inverse of SDSS_FLAGNAME().

 EXAMPLES:

 BUGS:

 PROCEDURES CALLED:
   splog
   yanny_free
   yanny_read

 DATA FILES:
   $IDLUTILS_DIR/data/sdss/sdssMaskbits.par

 REVISION HISTORY:
   02-Apr-2002 Written by D. Schlegel, Princeton.
   19-Aug-2008 Modified by A. Kim.  sdssMaskbits.par now has accompanying
               information on the associated datatype for the bits.
               Code modified to read in this information, check the validity
               of the par file, and return values of the correct type.
	2009-10-01: make flagprefix case insensitive again.  Erin Sheldon, BNL
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/sdss/sdss_flagval.pro">$IDLUTILS_DIR/pro/sdss/sdss_flagval.pro</a>)</strong></p>
<hr />
<h3 id="SDSS_OBJID">SDSS_OBJID</h3>
<p><a href="#SDSS_FLAGVAL">[Previous Routine]</a></p>
<p><a href="#SDSS_SPECOBJID">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
  sdss_objid
 PURPOSE:
  convert object identifiers to CAS-style OBJID
 CALLING SEQUENCE:
  objid= sdss_objid(run, camcol, field, id, rerun=, skyversion=)
 INPUTS:
  run - [N] run of object(s)
  camcol - [N] camcol of object(s)
  field - [N] field of object(s)
  id - [N] id of object(s)
  rerun - [N] reruns of object(s)
 OPTIONAL INPUTS: 
  skyversion - [N] skyversion of object(s) [default to 1]
 OUTPUTS:
  objid - [N] resulting CAS-style objid(s)
 COMMENTS:
  Bits are assigned in objid (a ulong64 #)
    63 	empty  	unassigned
    59-62 	skyVersion 	resolved sky version (0-15)
    48-58 	rerun 	number of pipeline rerun
    32-47 	run 	run number
    29-31 	camcol 	camera column (1-6)
    28 	firstField 	[is this the first field in segment?] 0 for now
    16-27 	field 	field number within run
    0-15 	object 	object number within field
 BUGS:
  firstField flag never set.
 REVISION HISTORY:
  Written by MRB, NYU 24-10-2008
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/sdss/sdss_objid.pro">$IDLUTILS_DIR/pro/sdss/sdss_objid.pro</a>)</strong></p>
<hr />
<h3 id="SDSS_SPECOBJID">SDSS_SPECOBJID</h3>
<p><a href="#SDSS_OBJID">[Previous Routine]</a></p>
<p><a href="#SDSS_SWEEP_CIRCLE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
  sdss_specobjid
 PURPOSE:
  convert spectrum identifiers to CAS-style SPECID
 CALLING SEQUENCE:
  specobjid= sdss_specobjid(plate, fiber, mjd, rerun [, line=, index=])
 INPUTS:
  plate - [N] plate id
  fiberid - [N] fiber number
  mjd - [N] mjd
  rerun - [N] reruns of object(s)
 OPTIONAL INPUTS:
  line - a line measure, with this code number (1-indexed)
  index - an index measure, with this code number (1-indexed)
 OUTPUTS:
  specobjid - [N] resulting CAS-style specobjid(s)
 COMMENTS:
  Cannot specify both &quot;line&quot; and &quot;index&quot; as non-zero
  Bits are assigned in specobjid (a ulong64 #)
    50-63 plate id number (14 bits)
    38-49 fiber id number  (12 bits)
    24-37 MJD (date) plate was observed minus 50000 (14 bits)
    10-23 rerun (14 bits)
    0-9   line/redshift/index: 0 for SpecObj, else number of
          spectroscopic line (SpecLine) or index (SpecLineIndex)
          (10 bits)
  This definition differs from that in DR7.
  MJD must be &gt; 50000
  Rerun can be an integer, like 26, or a string of the form 'vN_M_P',
    where N, M and P are integers, with the restriction 5&lt;=N&lt;=6,
    0&lt;=M&lt;=99, and 0&lt;=P&lt;=99. This is understood to be the RUN2D value
    for a spectrum. In the latter case, the 14 bits for the rerun are
    filled with (N-1)*10000+M*100+P
 BUGS:
  No provision is made for v7 or greater software versions, or for
   cases where the RUN1D value is relevant (not either '' or equal to
   RUN2D).
 REVISION HISTORY:
  Written by MRB, NYU 24-10-2008
 VERSION:
  $Id: sdss_specobjid.pro 130412 2012-02-16 21:22:13Z blanton $
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/sdss/sdss_specobjid.pro">$IDLUTILS_DIR/pro/sdss/sdss_specobjid.pro</a>)</strong></p>
<hr />
<h3 id="SDSS_SWEEP_CIRCLE">SDSS_SWEEP_CIRCLE</h3>
<p><a href="#SDSS_SPECOBJID">[Previous Routine]</a></p>
<p><a href="#SDSS_TRANSFORM__DEFINE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   sdss_sweep_circle
 PURPOSE:
   Read the SDSS datasweep files and return objects around a location
 CALLING SEQUENCE:
   objs= sdss_sweep_circle(ra, dec, radius [, type=])
 INPUTS:
   ra, dec - central location (J2000 deg)
   radius - search radius (deg)
 OPTIONAL INPUTS:
   type - type of object to search for, from 'star', 'gal', 'sky'
          [default 'star']
 OPTIONAL KEYWORDS:
   /all - keep all objects, not just SURVEY_PRIMARY
   /silent - suppress mrdfits verbosity
 COMMENTS:
   Assumes that a datasweep directory is located at $PHOTO_SWEEP,
   and that index files have been created
 REVISION HISTORY:
   12-Jun-2008 MRB, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/sdss/sdss_sweep_circle.pro">$IDLUTILS_DIR/pro/sdss/sdss_sweep_circle.pro</a>)</strong></p>
<hr />
<h3 id="SDSS_TRANSFORM__DEFINE">SDSS_TRANSFORM__DEFINE</h3>
<p><a href="#SDSS_SWEEP_CIRCLE">[Previous Routine]</a></p>
<p><a href="#SETFITPARM">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   sdss_transform__define

 PURPOSE:
   Defines a set of methods for coordinate transformations.

 CATEGORY:
   SDSS specific

 METHODS:
   A list of methods can be obtained with 
     IDL&gt; methods,'sdss_transform'
   Documentation can be obtained with
     IDL&gt; doc_method,'sdss_transform::methodname'
 
     ::eq2csurvey - From equatorial to corrected survey coords.
     ::csurvey2eq - From corrected survey to equatorial.
     ::eq2gc - From equatorial to SDSS great circle coords.
     ::gc2eq - From great circle to equatorial
     ::munu2rowcol - From mu,nu to CCD row,col
     ::rowcol2munu - From CCD row,col to mu,nu
     ::eq2rowcol - From equatorial to CCD row,col
     ::rowcol2eq - From CCD row,col to equatorial.
   
  These involve the poorly defined &quot;survey coordinates&quot;
     ::eq2survey - From equatorial to survey coords.
     ::survey2eq - From survey to equatorial.
     ::gc2survey - From great circle to survey coords.
     ::survey2gc - From survey to great circle coords.

 MODIFICATION HISTORY:
   Consolidated all programs into a class file.  2006-12-3 Erin Sheldon NYU
	 2009-06-05: Copied into idlutils from sdssidl.  
		See http://code.google.com/p/sdssidl/
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/coord/sdss_transform__define.pro">$IDLUTILS_DIR/pro/coord/sdss_transform__define.pro</a>)</strong></p>
<hr />
<h3 id="SETFITPARM">SETFITPARM</h3>
<p><a href="#SDSS_TRANSFORM__DEFINE">[Previous Routine]</a></p>
<p><a href="#SET_USE_CAPS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   SetFitParm

 AUTHOR:
	F.Bringezu, denet - Internetservice, Halle Germany,
	bringezu@denet.de

 PURPOSE:
   Provide a widget interface for creating a parinfo structure.
   This parinfo structure can by used by mpfit routines of Craig B. Markwardt.

 MAJOR TOPICS:
   Widget, mpfit.

 CALLING SEQUENCE:
   parinfo=SetFitParm(used_parinfo)

 DESCRIPTION:

   SetFitParm creates PARINFO using a widget interface.
   PARINFO provides constraints for paramters used by the mpfit routines.

   PARINFO is an array of structures, one for each parameter.

   A detailed description can be found in the documentation of mpcurvefit.pro
   This routine creates an array that contains a structure for each element.
   The structure has the following entries.

   - VALUE (DOUBLE): The starting parameter
   - FIXED (BOOLEAN): 1 fix the parameter, 0 don't fix it at the
     point given in VALUE.
   - LIMITS (DBLARRAY(2)): Set upper and lower limit.
   - LIMITED (BOOLEAN ARRAY 2):  Fix the limit.


   The parameter OLDPARINFO is optional. OLDPARINFO is used to set
   the default values in the widget.

   You can simply run:
   test=SetFitParm() to create the array for the first time.
   Once the array is created it can be used to set the default values
   in the widget by calling

   test2=SetFitParm(test)

 INPUTS:


 OPTIONAL INPUTS:

   OLDFITPARM - The default values of the new array

 INPUT KEYWORD PARAMETERS:

   PARENT - if this widget is to be a child, set this keyword to the
            parent widget ID.

 OUTPUT KEYWORD PARAMETERS:

   CANCEL - if the user selected the cancel button on the SETFITPARM
            widget, then this keyword will be set upon exit.

 OUTPUTS:
   PARINFO array of structures

 SEE ALSO:
   mpcurvefit

 MODIFICATION HISTORY:
   Written, FB, 12/1999
   Documented, FB, Jan 2000
   Generalized positioning code, CM 01 Feb 2000

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mpfit/setfitparm.pro">$IDLUTILS_DIR/pro/mpfit/setfitparm.pro</a>)</strong></p>
<hr />
<h3 id="SET_USE_CAPS">SET_USE_CAPS</h3>
<p><a href="#SETFITPARM">[Previous Routine]</a></p>
<p><a href="#SHUFFLE_INDX">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   set_use_caps
 PURPOSE:
   Set the bits in use_caps for a polygon such 
   that a certain list of caps are being used. Unless
   /allow_doubles is set, this routine automatically
   sets use_caps such that no two caps with use_caps
   set are identical. If /add is set, this routine 
   doesn't set use_caps to zero before proceeding. 
 CALLING SEQUENCE:
   set_use_caps,polygon,list [, /allow_doubles, add=add]
 INPUTS:
   polygon - [Npoly] polygon or polygons to alter
   list - [Nindices] list of indices to set in each polygon
 OPTIONAL INPUTS:
 OUTPUTS:
 OPTIONAL INPUT/OUTPUTS:
 COMMENTS:
  If there are two caps identical except for the sign of cm, we 
  turn off *all* the caps --- it is zero!
 EXAMPLES:
 BUGS:
   Number of caps limited to 32
 PROCEDURES CALLED:
 REVISION HISTORY:
   09-Nov-2002  Written by MRB (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mangle/set_use_caps.pro">$IDLUTILS_DIR/pro/mangle/set_use_caps.pro</a>)</strong></p>
<hr />
<h3 id="SHUFFLE_INDX">SHUFFLE_INDX</h3>
<p><a href="#SET_USE_CAPS">[Previous Routine]</a></p>
<p><a href="#SIGMA_PBAR_P">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   shuffle_indx
 PURPOSE:
   yield an index to randomly rearrange an array 
 CALLING SEQUENCES:
   indx= shuffle_indx(num [, seed=, num_sub=])
 INPUTS:
   num - number of elements in an array
 OPTIONAL INPUTS:
   seed - seed to pass to randomu
   num_sub - only get the first num_sub elements of the rearranged array
 OUTPUTS:
   indx - [num] or [num_sub] index of the shuffled rearrangement
 BUGS:
 Written MRB 2003-03-02
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/shuffle_indx.pro">$IDLUTILS_DIR/pro/misc/shuffle_indx.pro</a>)</strong></p>
<hr />
<h3 id="SIGMA_PBAR_P">SIGMA_PBAR_P</h3>
<p><a href="#SHUFFLE_INDX">[Previous Routine]</a></p>
<p><a href="#SLATEC_BVALU">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   sigma_pbar_p

 PURPOSE:
   Annihilation cross section of pbar on p as a function of sqrt(s)
   
 CALLING SEQUENCE:
   sigma = sigma_pbar_p(E_in)

 INPUTS:
   E_in    - Input energy, default is sqrt(s) [MeV]
             if /labframe set, then total energy of pbar in p rest-frame.

 KEYWORDS:
   labframe - set to interpret energy argument as total energy of
              pbar in rest from of proton, appropriate for
              anti-proton cosmic rays.

 OUTPUTS:
   sigma    - cross section in barns.  (1 barn = 1E-24 cm^2)

 OPTIONAL OUTPUTS:
   
 RESTRICTIONS:
   If total energy is LESS than the rest mass of the two particles,
   print warnings.

 EXAMPLES:
     sig = sigma_pbar_p(sqrts)

 COMMENTS:
   Cross section formula taken from
     http://atlas.web.cern.ch/Atlas/GROUPS/SOFTWARE/OO/domains/simulation/G4PhysicsStudies/documentation/ameline/node70.html
   sqrt(s) is in MeV and corresponds to center of mass total energy
   (including rest mass of the two particles)
   s = (p1+p2)^2 where p1 and p2 are the 4-vectors (E,px,py,pz), and 
    the &quot;square&quot; operation uses the Minkowski metric (1,-1,-1,-1) and c=1.
   
 REVISION HISTORY:
   2006-Feb-04  Written by Douglas Finkbeiner, Princeton

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/physics/sigma_pbar_p.pro">$IDLUTILS_DIR/pro/physics/sigma_pbar_p.pro</a>)</strong></p>
<hr />
<h3 id="SLATEC_BVALU">SLATEC_BVALU</h3>
<p><a href="#SIGMA_PBAR_P">[Previous Routine]</a></p>
<p><a href="#SLATEC_EFC">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   slatec_bvalu

 PURPOSE:
   Evaluate a bspline 

 CALLING SEQUENCE:
   
    y = slatec_bvalu(x, fullbkpt, coeff, ideriv=ideriv)

 INPUTS:
   x          - Vector of positions to evaluate
   fullbkpt   - Breakpoint vector returned by SLATEC_EFC()
   coeff      - B-spline coefficients calculated by SLATEC_EFC()

 OPTIONAL KEYWORDS:
   ideriv     - Derivative to evaluate at x; default to 0

 OUTPUTS:
   y          - Evaluations corresponding to x positions

 OPTIONAL OUTPUTS:

 COMMENTS:

 EXAMPLES:

 PROCEDURES CALLED:
   Dynamic link to bvalu_idl in slatec/src/idlwrapper.c,
   which calls bvalu.f in the library &quot;libslatecidl.so&quot;.

 REVISION HISTORY:
   15-Oct-1999  Written by Scott Burles, Chicago
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/slatec/slatec_bvalu.pro">$IDLUTILS_DIR/pro/slatec/slatec_bvalu.pro</a>)</strong></p>
<hr />
<h3 id="SLATEC_EFC">SLATEC_EFC</h3>
<p><a href="#SLATEC_BVALU">[Previous Routine]</a></p>
<p><a href="#SLATEC_SPLINEFIT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   slatec_efc

 PURPOSE:
   Calculate a B-spline in the least-squares sense

 CALLING SEQUENCE:
   
   fullbkpt = slatec_efc(x, y, coeff, bkpt=bkpt, nord=nord, $
    invsig=invsig, bkspace=bkspace, nbkpts=nbkpts, everyn=everyn, /silent)

 INPUTS:
   x          - data x values
   y          - data y values

 OPTIONAL INPUTS:
   bkpt       - Breakpoint vector returned by efc (without padding)

 OPTIONAL KEYWORDS:
   nord       - Order of b-splines (default 4: cubic)
   invsig     - Inverse of sigma for weighted fit
   bkspace    - Spacing of breakpoints in units of x
   everyn     - Spacing of breakpoints in good pixels
   nbkpts     - Number of breakpoints to span x range
                 minimum is 2 (the endpoints)
   silent     - Do not produce non-critical messages
   x2         - 2nd dependent variable for 2d fitting
   npoly      - polynomial order to fit over 2nd variable, default 2


 OUTPUTS:
   coeff      - B-spline coefficients calculated by efc
   fullbkpt   - The fullbkpt vector required by evaluations with bvalu

 OPTIONAL OUTPUTS:
   bkpt       - Breakpoints without padding

 COMMENTS:
   If both bkspace and nbkpts are passed, bkspace is used.
   X values must be sorted.

 EXAMPLES:

   x = findgen(100)
   y = randomu(100,100)
   fullbkpt = slatec_efc(x, y, coeff, bkspace = 10.0)

   xfit = findgen(10)*10.0
   yfit = bvalu(xfit, fullbkpt, coeff)


 PROCEDURES CALLED:
   findbkpt()

   efc_idl in src/slatec/idlwrapper.c
         which wraps to efc.o in libslatecidl.so

 REVISION HISTORY:
   15-Oct-1999  Written by Scott Burles, Chicago
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/slatec/slatec_efc.pro">$IDLUTILS_DIR/pro/slatec/slatec_efc.pro</a>)</strong></p>
<hr />
<h3 id="SLATEC_SPLINEFIT">SLATEC_SPLINEFIT</h3>
<p><a href="#SLATEC_EFC">[Previous Routine]</a></p>
<p><a href="#SOLVE_POLY_RATIO">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   slatec_splinefit

 PURPOSE:
   Calculate a B-spline in the least squares sense with rejection

 CALLING SEQUENCE:
   
   fullbkpt = slatec_splinefit(x, y, coeff, invvar=, x2=, npoly=, $
    bkpt=, fullbkpt=, maxiter=, upper=, lower=, $
    rejper=, /eachgroup, /secondkludge, $
    mask=, _EXTRA=KeywordsForEfc)

 INPUTS:
   x          - Data x values
   y          - Data y values
   bkpt       - Breakpoint vector returned by SLATEC_EFC()

 OPTIONAL KEYWORDS:
   invvar     - Inverse variance of y; if not set, then set to be
                consistent with the standard deviation.  This only matters
                if rejection is being done.
   x2         - 2nd dependent variable for 2-D fitting 
   npoly      - Polynomial order to fit over 2nd variable (X2); default to 2.
   maxiter    - maximum number of iterations (default 5)
   upper      - Sigma rejection threshold for positive deviations; default to 5
   lower      - Sigma rejection threshold for negative deviations; default to 5
   rejper     - Alternative rejection algorithm, rejecting at most the
                fraction REJPER of the points per iteration (but rejecting
                at least one point if there are any bad ones).
   eachgroup  - Alternative rejection algorithm ???
   secondkludge - ???

 KEYWORDS FOR SLATEC_EFC:
   nord
   bkspace
   nbkpts
   everyn

 OUTPUTS:
   fullbkpt   - The fullbkpt vector required by evaluations with
                SLATEC_BVALU().  Return -1 if the spline fit fails
                due to all points (or all but 1) being rejected.

 OPTIONAL OUTPUTS:
   coeff      - B-spline coefficients calculated by SLATEC_EFC().
   bkpt       - Breakpoints without padding
   mask       - Mask array, set to 0 for good points and 1 for rejected points

 COMMENTS:
   If both bkspace and nbkpts are passed, bkspace is used

 EXAMPLES:

   x = findgen(100)
   y = randomu(100,100)
   fullbkpt = slatec_splinefit(x, y, coeff, invvar=invvar, nbkpts=10)

   xfit = findgen(10)*10.0
   yfit = slatec_bvalu(xfit, fullbkpt, coeff)

 PROCEDURES CALLED:
   slatec_bvalu()
   slatec_efc()

 REVISION HISTORY:
   15-Oct-1999  Written by Scott Burles, Chicago
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/slatec/slatec_splinefit.pro">$IDLUTILS_DIR/pro/slatec/slatec_splinefit.pro</a>)</strong></p>
<hr />
<h3 id="SOLVE_POLY_RATIO">SOLVE_POLY_RATIO</h3>
<p><a href="#SLATEC_SPLINEFIT">[Previous Routine]</a></p>
<p><a href="#SORTINPLACE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   solve_poly_ratio

 PURPOSE:
   Compute the polynomial function that multiplies one spectrum
   to agree with another

 CALLING SEQUENCE:
   solve_poly_ratio( xvector, aflux, bflux, aivar, [ bivar, npoly=, nback=, $
    inparams=, yfit=, ymult=, yadd=, acoeff=, totchi2=, status=, perror ] )

 INPUTS:
   xvector    - X axis from which to construct polynomial terms; this vector
                should be well-conditioned (for example, in the range [0,1])
                such that raising it to powers does not result in numeric
                overflows [NPIX]
   aflux      - Flux vector to be rescaled [NPIX]
   bflux      - Reference flux vector [NPIX]
   aivar      - Inverse variance for AFLUX [NPIX]

 OPTIONAL INPUTS:
   bivar      - Inverse variance for BFLUX [NPIX]
   npoly      - Number of polynomial terms for multiplying AFLUX; this must
                be a positive integer; default to 1
   nback      - Number of polynomial terms to add to AFLUX
   inparams   - Starting guess for polynomial + additive terms if the
                second method is used (specifying AIVAR,BIVAR) [NPOLY+NBACK];
                if not set, then a fit is first performed without
                allowing the errors AIVAR to be rescaled with the flux
   status     - Return value from MPFIT if using the 2nd fit method
   perror     - Return value from MPFIT if using the 2nd fit method

 OUTPUTS:
   yfit       - Rescaled AFLUX with additive, background terms:
                AFLUX * SUM{i=0,NPOLY-1} XVECTOR^i + SUM{j=0,NBACK-1} XVECTOR^j

 OPTIONAL OUTPUTS:
   ymult      - Final multiplicative polynomial [NPIX]
   yadd       - Final addditive polynomial [NPIX]
   acoeff     - All coefficicents, starting with the multiplicative
                [NMULT+NBACK]
   totchi2    - Total chi^2

 COMMENTS:
   Fit for the polynomial vector multiplying one vector to agree
   with another such that
     BFLUX = polynomial * AFLUX + background

   The polynomials are defined such that:
      YFIT = YMULT * AFLUX + YADD

   There are two modes of operation for this routine.
   The simpler algorithm is if AIVAR is specified but not BIVAR.
   One is minimzing the sum of the squares of the chi values:
     chi = (BFLUX - polynomial * AFLUX - background) * sqrt(AIVAR)
   That is a linear problem that we solve with SVD.

   The second algorithm has an error associates with each input vector.
   The problem is now nonlinear, because BIVAR is rescaled appropriately
   with BFLUX.  The errors are the quadrature sum from AIVAR and the
   rescaled BIVAR.
   The errors are rescaled at every function evaluation, but we
   only allow the errors to get smaller by up to a factor of 1e4,
   and we only allow them to get larger slowly (as the square root).
   This should very strongly constrain the flux-corrrection vectors
   from going too small (or negative), or too large.

 EXAMPLES:

 BUGS:

 DATA FILES:

 PROCEDURES CALLED:
   mpfit()

 INTERNAL SUPPORT ROUTINES:
   solve_poly_fn()
   solve_poly_chi_fn()
   solve_poly_vectors()
   solve_poly_ratio2()
   solve_poly_ratio1()

 REVISION HISTORY:
   05-Feb-2004  Written by D. Schlegel, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/solve_poly_ratio.pro">$IDLUTILS_DIR/pro/math/solve_poly_ratio.pro</a>)</strong></p>
<hr />
<h3 id="SORTINPLACE">SORTINPLACE</h3>
<p><a href="#SOLVE_POLY_RATIO">[Previous Routine]</a></p>
<p><a href="#SPHEREGROUP">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   sortinplace

 PURPOSE:
   Sort an array in-place, without making a second copy of the data

 CALLING SEQUENCE:
   sortinplace, a, isort

 INPUTS:
   a          - Array of any data type
   isort      - Indices for sorting the A array, such as an index
                list returned by the SORT() function

 OPTIONAL INPUTS:

 OUTPUTS:
   a          - (Modified)

 OPTIONAL OUTPUTS:

 COMMENTS:
   This routine is particularly useful when sorting in-place a large
   array of structures.  More simply, one would execute
      a = a[isort]
   but the above command makes a second copy of the array &quot;a&quot;.

 EXAMPLES:

 BUGS:
   The index list ISORT must be a unique list of indices into
   the array A, with no duplicate entries and no out-of-bounds
   values (such as -1).

 DATA FILES:

 PROCEDURES CALLED:

 INTERNAL SUPPORT ROUTINES:

 REVISION HISTORY:
   29-May-2004  Written by D. Schlegel, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/sortinplace.pro">$IDLUTILS_DIR/pro/misc/sortinplace.pro</a>)</strong></p>
<hr />
<h3 id="SPHEREGROUP">SPHEREGROUP</h3>
<p><a href="#SORTINPLACE">[Previous Routine]</a></p>
<p><a href="#SPHEREMATCH">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   spheregroup

 PURPOSE:
   Perform friends-of-friends grouping given ra/dec type coords 

 CALLING SEQUENCE:
   ingroup = spheregroup( ra, dec, linklength, [chunksize=], $
     [multgroup=], [firstgroup=], [nextgroup=] )

 INPUTS:
   ra         - ra coordinates in degrees (N-dimensional array)
   dec        - dec coordinates in degrees (N-dimensional array)
   linklength - linking length for groups (degrees)

 OPTIONAL INPUTS:
   chunksize  - the algorithm breaks the sphere up into a bunch of
                regions with a characteristic size chunksize
                (degrees). By default this is max(0.1,4*linklength)

 OUTPUTS:
   ingroup    - group number of each object (N-dimensional array);
                -1 if no groups

 OPTIONAL INPUT/OUTPUTS:
   multgroup  - multiplicity of each group 
   firstgroup - first member of each group 
   nextgroup  - index of next member of group for each object

 COMMENTS:
   The code breaks the survey region into chunks which overlap by
   about linklength. Friends-of-friends is run on each chunk
   separately. Finally, the bookkeeping is done to combine the
   results (i.e. joining groups across chunk boundaries). This should
   scale as area*density^2, 

   It is important that chunksize is &gt;=4.*linklength, and this is
   enforced.

   firstgroup and nextgroup form a primitive &quot;linked list&quot;, which 
   can be used to step through a particular group, as in the example 
   below.

 EXAMPLES:
   Group a set of points on a scale of 55'', then step through
   members of the third group:

   &gt; ingroup=spheregroup(ra,dec,.0152778,multgroup=mult, $
   &gt; firstgroup=first, nextgroup=next)
   &gt; indx=firstgroup[2]
   &gt; for i = 0, multgroup[2] do begin &amp; $
   &gt; print,ra[indx],dec[indx] &amp; $
   &gt; indx=nextgroup[indx]  &amp; $
   &gt; end

   Of course, you could just &quot;print,ra[where(ingroup eq 2)]&quot;, but I
   wanted to demostrate how the linked list worked.

 BUGS:
   Behavior at poles not well tested.

 PROCEDURES CALLED:
   Dynamic link to spheregroup.c

 REVISION HISTORY:
   19-Jul-2001  Written by Mike Blanton, Fermiland
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/spheregroup/spheregroup.pro">$IDLUTILS_DIR/pro/spheregroup/spheregroup.pro</a>)</strong></p>
<hr />
<h3 id="SPHEREMATCH">SPHEREMATCH</h3>
<p><a href="#SPHEREGROUP">[Previous Routine]</a></p>
<p><a href="#SPLOG">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   spherematch

 PURPOSE:
   Take two sets of ra/dec coords and efficiently match them. It 
   returns all matches between the sets of objects, and the distances
   between the objects. The matches are returned sorted by increasing
   distance. A parameter &quot;maxmatch&quot; can be set to the number of matches 
   returned for each object in either list. Thus, maxmatch=1 (the default)
   returns the closest possible set of matches. maxmatch=0 means to
   return all matches

 CALLING SEQUENCE:
   spherematch, ra1, dec1, ra2, dec2, matchlength, match1, match2, $
     		       distance12, [maxmatch=maxmatch]

 INPUTS:
   ra1         - ra coordinates in degrees (N-dimensional array)
   dec1        - dec coordinates in degrees (N-dimensional array)
   ra2         - ra coordinates in degrees (N-dimensional array)
   dec2        - dec coordinates in degrees (N-dimensional array)
   matchlength - distance which defines a match (degrees)

 OPTIONAL INPUTS:
   maxmatch    - Return only maxmatch matches for each object, at
                 most. Defaults to maxmatch=1 (only the closest
                 match for each object). maxmatch=0 returns all
                 matches.
   estnmatch   - Estimate of the TOTAL number of matches.  If this is 
                 absent or wrong, the C code is called twice,
                 doubling execution time!

 OUTPUTS:
   match1     - List of indices of matches in list 1; -1 if no matches
   match2     - List of indices of matches in list 2; -1 if no matches
   distance12 - Distance of matches; 0 if no matches

 OPTIONAL OUTPUTS:

 COMMENTS:
   The code breaks the survey region into chunks of size
   4*matchlength. Matches are then performed by considering only 
   objects in a given chunk and neighboring chunks. This makes the
   code fast.

   The matches are returned sorted by distance.

   If you have a big list and a small list, call with the 
   BIG LIST FIRST!!!
   i.e.
   
   spherematch, BIGra, BIGdec, SMALLra, SMALLdec, matchlength, $
                      matchBIG, matchSMALL, distance12

   This method is inherently asymmetric.  Calling in this order will 
   exploit the asymmetry to reduce memory usage and execution time. 

 EXAMPLES:

 BUGS:
   Behavior at poles not well tested.

 PROCEDURES CALLED:
   Dynamic link to spherematch.c

 REVISION HISTORY:
   20-Jul-2001  Written by Mike Blanton, Fermiland
   01-Mar-2006  estnmatch keyword added - D. Finkbeiner, Princeton
          estnmatch allows the caller to estimate the number of 
          matches, so the wrapper can allocate memory for results before
          calling the C code.  If the estimate is absent or wrong,
          the code is called a second time (as before). 
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/spheregroup/spherematch.pro">$IDLUTILS_DIR/pro/spheregroup/spherematch.pro</a>)</strong></p>
<hr />
<h3 id="SPLOG">SPLOG</h3>
<p><a href="#SPHEREMATCH">[Previous Routine]</a></p>
<p><a href="#SPLOT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   splog

 PURPOSE:
   Logging routine for writing to standard output and/or a log file.

 CALLING SEQUENCE:
   splog, v1, v2 ..., [, _EXTRA=extra, /noname, prelog=, filename=, $
    /append, /close, /no_stdout ]

 INPUTS:
   v1, v2 ... - The expressions to be passed to PRINT or PRINTF

 OPTIONAL KEYWORDS:
   _EXTRA     - Any keywords for PRINT or PRINTF, such as FORMAT
   noname     - If set, then suppress printing name of calling routine
   prelog     - If set, then print this string immediately after the
                name of the calling routine on each line, i.e. 'b1'
   filename   - If specified, then open this file for text output
   append     - If set at the same time as FILENAME, then append to this file;
                default is to overwrite file
   close      - If set, then close the output file
   no_stdout  - If set, then do not print anything to the standard output.

 OUTPUTS:

 OPTIONAL OUTPUTS:

 COMMENTS:
   The output is formatted just like with the IDL PRINT command, except
   that extraneous whitespace is removed from non-STRING elements unless
   a FORMAT keyword is used.

 EXAMPLES:
   Open a file for text output, write to it, then close it:
     splog, filename='test.log'
     splog, 'This is a test', 123.4, format='(a,f8.2)'
     splog, /close
   Alternatively, this can all be done on one line
     splog, filename='test.log', /close, $
      'This is a test', 123.4, format='(a,f8.2)'

 BUGS:

 PROCEDURES CALLED:

 REVISION HISTORY:
   17-Nov-1999  Written by D. Schlegel, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/splog.pro">$IDLUTILS_DIR/pro/misc/splog.pro</a>)</strong></p>
<hr />
<h3 id="SPLOT">SPLOT</h3>
<p><a href="#SPLOG">[Previous Routine]</a></p>
<p><a href="#SQUAREPHOT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   splot

 PURPOSE:
   Interactive plotting tool for 1-D (spectral) data.

 CALLING SEQUENCE:
   splot, [x], y, $
    [color=, psym=, symsize=, thick=, xoffset=, yoffset= ]

   soplot, [x], y, [/autoscale], $
    [color=, psym=, symsize=, thick= ]

   sxyouts, x, y, string, [alignment=, charsize=, charthick=, color=, $
    font=, orientation= ]

   spolyfill, x, y, [ color=, fill=0, /image_interp, /line_fill, pattern=, $
    spacing= ]

   serase, [nerase, /norefresh]

 INPUTS:

 OUTPUT:

 COMMENTS:
   This code is based upon Aaron Barth's ATV procedure.

 EXAMPLES:

 BUGS:
   Doesn't use the passed XRANGE, YRANGE properly yet...
   Move around widgets to be more compact above plotting window.
   Write splot_readfits.
   Make POSITION= changeable based upon CHARSIZE.
   Gaussian fitting or integrated gaussian fitting.
   Allow one to step through an image row at a time? Or link to ATV?
   Use the WCS in splot_gettrack.
   Add widget button option to fix Y range or let it float, or fix YMIN=0.
   Include options for plotting contours, etc?
   Options for XLOG, YLOG
   For FITS files, take XTITLE, YTITLE from header
   Option to pass header as param in SPLOT

 PROCEDURES CALLED:
   fits_read

 INTERNAL SUPPORT ROUTINES:
   splot_gausspix
   splot_startup
   splot_clearkeylist
   splot_displayall
   splot_readfits
   splot_writeeps
   splot_cleartext
   splot_zoom
   splot_gettrack
   splot_event
   splot_shutdown
   splot_resize
   splot_icolor()
   splot_setheader
   splot_headinfo
   splot_headinfo_event
   splot_plot1plot
   splot_plot1poly
   splot_plot1text
   splot_plotwindow
   splot_plotall
   spolyfill
   sxyouts
   splot_move_cursor
   splot_set_minmax
   splot_get_minmax
   splot_refresh
   splot_help
   splot_help_event
   splot_plotparam_refresh
   splot_plotparam
   splot_plotparam_event
   serase
   splot_autoscale
   soplot
   splot

 REVISION HISTORY:
   28-Sep-1999  Written by David Schlegel, Princeton.
   19-Jun-2001  Gaussfit amplitude was wrong - fixed - D. Finkbeiner
   27-May-2004  add plugin keyword for coordinate plugins - D. Finkbeiner
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/splot.pro">$IDLUTILS_DIR/pro/plot/splot.pro</a>)</strong></p>
<hr />
<h3 id="SQUAREPHOT">SQUAREPHOT</h3>
<p><a href="#SPLOT">[Previous Routine]</a></p>
<p><a href="#SSHIFT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   squarephot

 PURPOSE:
   Simple (square) aperature photometry.

 COMMENTS:
   This routine has all the same calling arguments as DJS_PHOT(), but
   does not use most of them.  The sky is computed as the median of the
   entire image.  The flux is computed from square aperatures.  Nothing
   else is computed.  This proc is basically for testing purposes.

 CALLING SEQUENCE:
   03-Jun-2000  Written by D. Schlegel, Princeton.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/djsphot/squarephot.pro">$IDLUTILS_DIR/pro/djsphot/squarephot.pro</a>)</strong></p>
<hr />
<h3 id="SSHIFT">SSHIFT</h3>
<p><a href="#SQUAREPHOT">[Previous Routine]</a></p>
<p><a href="#SSHIFT2D">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
	sshift
 PURPOSE:
	Shift data using a damped sinc function for fractional part.
 DESCRIPTION:

	This function will shift an array of data pointed to by x and
	extending for n points.  The amount of the shift is given by shift.
	The result of the operation is placed at xp.  A shift that is within
	0.0001 of a whole number is treated to be that of the whole number.  If
	the shift is by an integral number of pixels then the shift involves
	reindexing the data, no interpolation is done.  If the shift is some
	non-integral amount then the data is resampled using a damped sinc
	function.

	The sense of the shift is as follows: think of the array plotted on a
	fixed scale.  A shift of 1 corresponds to shifting the data by one data
	point to the right relative to the fixed scale, ie. x[3]=xp[4].

	The data will fall off one end or another of the output vector as a
	result of the shift.  However, this is not as significant as the edge
	effect, the convolution is not complete for any data point within 10
	points of the edge, so those points cannot be trusted.  The missing
	points in the convolution are assumed to be equal to the end points.

 CATEGORY:
       Numerical
 CALLING SEQUENCE:
	xp = sshift(x,shift)
 INPUTS:
	x     - Input data array to be shifted.
	shift - Amount to shift (negative to left).
 OPTIONAL INPUT PARAMETERS:
 KEYWORD PARAMETERS:
 OUTPUTS:
	Return value is the shifted array.
 COMMON BLOCKS:
 SIDE EFFECTS:
 RESTRICTIONS:
	The input and output arrays cannot be the same.
 PROCEDURE:
 MODIFICATION HISTORY:
	Adapted from Zodiac routine: shiftc/sshift
	  Marc W. Buie, Lowell Observatory, 1992 October 2
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/sshift.pro">$IDLUTILS_DIR/pro/math/sshift.pro</a>)</strong></p>
<hr />
<h3 id="SSHIFT2D">SSHIFT2D</h3>
<p><a href="#SSHIFT">[Previous Routine]</a></p>
<p><a href="#SSHIFTROTATE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
    sshift2d
 PURPOSE:
    Shift a 2-D array using a damped sinc function for the fractional part.
 DESCRIPTION:

 CATEGORY:
    Mathematical
 CALLING SEQUENCE:
    result = sshift2d( array, shiftvec )
 INPUTS:
    array    : Array to be shifted.
    shiftvec : Vector of two elements: [ xshift, yshift ].
 OPTIONAL INPUT PARAMETERS:

 KEYWORD PARAMETERS:

 OUTPUTS:
    The shifted array is returned as the function value.
 COMMON BLOCKS:

 SIDE EFFECTS:

 RESTRICTIONS:

 PROCEDURE:

 MODIFICATION HISTORY:
    February, 1993:
    Copied from &quot;sincshift.pro&quot; written by John Spencer, Lowell Observatory.
    Very minor modifications by Doug Loucks, Lowell Observatory.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/sshift2d.pro">$IDLUTILS_DIR/pro/math/sshift2d.pro</a>)</strong></p>
<hr />
<h3 id="SSHIFTROTATE">SSHIFTROTATE</h3>
<p><a href="#SSHIFT2D">[Previous Routine]</a></p>
<p><a href="#STRING2RADEC">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   sshiftrotate

 PURPOSE:
   Routine to sinc-shift and rotate a 2-D image, but preserving scale.

 CALLING SEQUENCE:
   newimg =  sshiftrotate( image, [ theta, xshift=, yshift=, xcen=, ycen=, $
    /bigger, xoffset=, yoffset= ]

 INPUTS:
   image      - Image (2-dimensional)

 OPTIONAL KEYWORDS:
   theta      - Rotate image counter-clockwise this angle [degrees] about
                the 0-indexed point XCEN,YCEN; default to 0 degrees
   xshift    - Shift in X direction
   yshift    - Shift in Y direction
   xcen       - Center X position for rotation; default to the center of
                the image
   ycen       - Center Y position for rotation; default to the center of
                the image
   bigger     - If set, then keep the bigger image necessary for containing
                the shifted + rotated image.

 OUTPUTS:
   newimg     - Rotated and shifted image

 OPTIONAL OUTPUTS:
   xoffset    - If /BIGGER is set, then this contains the integer pixel
                offset in the X direction of the enlarged image.
   yoffset    - If /BIGGER is set, then this contains the integer pixel
                offset in the Y direction of the enlarged image.

 COMMENTS:
   When both a shifT (XSHIFT,YSHIFT) and a rotation (THETA) are specified,
   the resulting image is as if the shift is performed first, and the
   rotation second.

 EXAMPLES:
   Generate a random image and rotate by 30 degrees:
     IDL&gt; image = smooth(randomu(1234,200,200),5)
     IDL&gt; newimg = sshiftrotate(image,30)

 BUGS:
   The sinc shifts need not do all pixels in each row each time, only
     the &quot;active&quot; area!???  This will just be for a speed improvement.
   Special-case rotations of 0,90,180,270 !???
   Optionally return a mask of the illuminated region???
   Optionally fill in missing regions with some value???
   Allow double-precision for the image, or for the arithmatic???

 PROCEDURES CALLED:
   cirrange
   sshift()

 REVISION HISTORY:
   18-Sep-2002  Written by D. Schlegel, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/sshiftrotate.pro">$IDLUTILS_DIR/pro/math/sshiftrotate.pro</a>)</strong></p>
<hr />
<h3 id="STRING2RADEC">STRING2RADEC</h3>
<p><a href="#SSHIFTROTATE">[Previous Routine]</a></p>
<p><a href="#STRIPE_TO_ETA">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   string2radec

 PURPOSE:
   Convert hours, min, sec + deg, min, sec to ra dec in floating degrees

 CALLING SEQUENCE:
   string2radec, rahour, ramin, rasec, decdeg, decmin, decsec, ra, dec, $
    [ rastr=, decstr= ]
 INPUTS:
   rahour - hours in ra (string)
   ramin - minutes in ra (string)
   rasec - seconds in ra (string)
   decdeg - degrees in dec (string) 
   decmin - arcminutes in dec (string)
   decsec - arcseconds in dec (string)
 OPTIONAL KEYWORDS:
   rastr - If set, then override RAHOUR,RAMIN,RASEC with a single string
           with those values separated by colons
   decstr- If set, then override DECDEG,DECMIN,DECSEC with a single string
           with those values separated by colons
 OUTPUTS:
   ra - ra in degrees
   dec - dec in degrees
 COMMENTS:
   The sign in dec is set by the sign in &quot;decdeg&quot;, so that you need
   to propagate the negative in &quot;-00&quot; to the whole expression

 BUGS:

 PROCEDURES CALLED:

 REVISION HISTORY:
   18-Nov-2003  Michael Blanton, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/string2radec.pro">$IDLUTILS_DIR/pro/misc/string2radec.pro</a>)</strong></p>
<hr />
<h3 id="STRIPE_TO_ETA">STRIPE_TO_ETA</h3>
<p><a href="#STRING2RADEC">[Previous Routine]</a></p>
<p><a href="#STRIPE_TO_INCL">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   stripe_to_eta

 PURPOSE:
   Convert from SDSS great circle coordinates to equatorial coordinates.

 CALLING SEQUENCE:
   eta = stripe_to_eta(stripe)

 INPUTS:
   stripe     - Stripe number for SDSS coordinate system.  If specified,
                the NODE,INCL are ignored; scalar or array.

 OPTIONAL INPUTS:

 OUTPUTS:
   eta        - Eta in SDSS (lambda,eta) coordinate system (degrees);
                scalar or array with same dimensions as STRIPE.

 OPTIONAL OUTPUTS:

 COMMENTS:

 EXAMPLES:

 BUGS:

 PROCEDURES CALLED:

 REVISION HISTORY:
   20-Feb-2002  Written by M. Blanton, NYU
   03-Oct-2002  Modified by David Schlegel, Princeton.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/coord/stripe_to_eta.pro">$IDLUTILS_DIR/pro/coord/stripe_to_eta.pro</a>)</strong></p>
<hr />
<h3 id="STRIPE_TO_INCL">STRIPE_TO_INCL</h3>
<p><a href="#STRIPE_TO_ETA">[Previous Routine]</a></p>
<p><a href="#STRUCT2LINES">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   stripe_to_incl

 PURPOSE:
   Convert from SDSS stripe number to an inclination relative to the equator.

 CALLING SEQUENCE:
   inc = stripe_to_incl(stripe)

 INPUTS:
   stripe     - Stripe number for SDSS coordinate system.  If specified,
                the NODE,INCL are ignored; scalar or array.

 OPTIONAL INPUTS:

 OUTPUTS:
   incl       - Inclination of great circle relative to the J2000
                celestial equator (degrees); scalar or array with same
                dimensions as STRIPE.

 OPTIONAL OUTPUTS:

 COMMENTS:

 EXAMPLES:

 BUGS:

 PROCEDURES CALLED:
   stripe_to_eta()

 REVISION HISTORY:
   20-Feb-2002  Written by M. Blanton, NYU
   03-Oct-2002  Modified by David Schlegel, Princeton.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/coord/stripe_to_incl.pro">$IDLUTILS_DIR/pro/coord/stripe_to_incl.pro</a>)</strong></p>
<hr />
<h3 id="STRUCT2LINES">STRUCT2LINES</h3>
<p><a href="#STRIPE_TO_INCL">[Previous Routine]</a></p>
<p><a href="#STRUCT_ADDTAGS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   struct2lines
 PURPOSE:
   Convert a struct to string array containing keyword-value pairs 
 CALLING SEQUENCE:
   lines= struct2lines(str)
 INPUTS:
   str - structure where keywords are tag names, values are values
 OUTPUTS:
   lines - [N] string array 
 COMMENTS:
   All structure elements treated as type string
 REVISION HISTORY:
   May 7, 2008, MRB, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/struct2lines.pro">$IDLUTILS_DIR/pro/misc/struct2lines.pro</a>)</strong></p>
<hr />
<h3 id="STRUCT_ADDTAGS">STRUCT_ADDTAGS</h3>
<p><a href="#STRUCT2LINES">[Previous Routine]</a></p>
<p><a href="#STRUCT_APPEND">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   struct_addtags

 PURPOSE:
   Add tags from one structure (array) to another

 CALLING SEQUENCE:
   outstruct = struct_addtags(astruct, bstruct)

 INPUTS:
   astruct    - First structure, which can be an array
   bstruct    - Second structure, which can be an array

 OPTIONAL INPUTS:

 OUTPUTS:
   outstruct  - Ouput structure array

 OPTIONAL OUTPUTS:

 COMMENTS:
   The dimensions of the output array match that of ASTRUCT.  For example,
   if ASTRUCT has dimensions [5,10], and BSTRUCT has dimensions [2,25],
   the output structure has dimensions [5,10].

 EXAMPLES:

 BUGS:

 PROCEDURES CALLED:
   copy_struct
   copy_struct_inx

 REVISION HISTORY:
   28-Jun-2000  Written by D. Schlegel, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/struct_addtags.pro">$IDLUTILS_DIR/pro/misc/struct_addtags.pro</a>)</strong></p>
<hr />
<h3 id="STRUCT_APPEND">STRUCT_APPEND</h3>
<p><a href="#STRUCT_ADDTAGS">[Previous Routine]</a></p>
<p><a href="#STRUCT_PRINT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   struct_append

 PURPOSE:
   Append more array elements to a structure.

 CALLING SEQUENCE:
   outstruct = struct_append( struct1, struct2, [ /force ] )

 INPUTS:
   struct1    - First structure; the output structure will match the tags
                in this, and match the name if it's a named structure.
   struct2    - Second structure to append to the first.

 OPTIONAL INPUTS:
   force      - If set, then append these two structures, even if one or
                both are arrays of zeros rather than actual structures.

 OUTPUTS:

 OPTIONAL OUTPUTS:

 COMMENTS:
   If either structure is undefined are set to zero, then return the other
   one only.  If one of the structures is defined (and non-zero), but not
   a structure, then a blank structure is put in its place.

 EXAMPLES:
   &gt; a={one:1,two:2}
   &gt; b={one:11,three:33}
   &gt; print,struct_append(a,b)
     {       1       2}{      11       0}

 BUGS:

 PROCEDURES CALLED:
   headfits()

 REVISION HISTORY:
   26-Jun-2000  Written by David Schlegel, Princeton.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/struct_append.pro">$IDLUTILS_DIR/pro/misc/struct_append.pro</a>)</strong></p>
<hr />
<h3 id="STRUCT_PRINT">STRUCT_PRINT</h3>
<p><a href="#STRUCT_APPEND">[Previous Routine]</a></p>
<p><a href="#STRUCT_SELECTTAGS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   struct_print

 PURPOSE:
   Formatted print of a structure to standard out, a file, or an array.

 CALLING SEQUENCE:
   struct_print, struct, [ lun=, filename=, tarray=, css=, /no_head, /html, $
    fdigit=, ddigit=, alias=, formatcodes= ]

 INPUTS:
   struct     - Structure

 OPTIONAL INPUTS:
   filename   - Output file name; open and close this file
   lun        - LUN number for an output file if one is already open
                (overrides FILENAME)
   no_head    - Do not print the header lines that label the columns,
                and do not increase the width of a column to occomodate
                the column name.
   html       - If set, then output as an XHTML table
   fdigit     - Number of digits for type FLOAT numbers; default to 5.
   ddigit     - Number of digits for type DOUBLE numbers; default to 7.
   alias      - Set up aliases to convert from the IDL structure
                to the FITS column name.  The value should be
                a STRARR(2,*) value where the first element of
                each pair of values corresponds to a column
                in the structure and the second is the name
                to be used in the FITS file.
                The order of the alias keyword is compatible with
                use in MWRFITS,MRDFITS.
   formatcodes- Explicit format codes for specific structure elements.
                The value should be a STRARR(2,*) value where teh first
                element of each pair of values corresponds to a column
                name (before applying any ALIAS), and the second is the
                format code, such as &quot;a10&quot; for a 10-character string,
                or &quot;f10.5&quot; for a floating-point value with 5 places after
                the decimal point.  Note that this may truncate the
                names in the two-line header if the format is fewer
                characters than that name length.

 OUTPUTS:

 OPTIONAL OUTPUTS:
   tarray     - String array for output
   css        - String array containing CSS information to make the
                XHTML table look nice.

 COMMENTS:
   If neither FILENAME or LUN is set and TARRAY is not returned,
   then write to the standard output.

 EXAMPLES:

 BUGS:
   If FORMATCODES is used, then it is possible to have numeric values
   that do not fit within the specified format, which are then printed
   as asterisks.  For example, printing the value 123.4 with the format
   code &quot;f3.1&quot; will result in printing &quot;***&quot;.

 PROCEDURES CALLED:

 INTERNAL SUPPORT ROUTINES:
   struct_checktype()

 REVISION HISTORY:
   01-Nov-2000  Written by David Schlegel, Princeton.
   2009-12-04 Now emits valid XHTML 1.1 tables.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/struct_print.pro">$IDLUTILS_DIR/pro/misc/struct_print.pro</a>)</strong></p>
<hr />
<h3 id="STRUCT_SELECTTAGS">STRUCT_SELECTTAGS</h3>
<p><a href="#STRUCT_PRINT">[Previous Routine]</a></p>
<p><a href="#STRUCT_TO_JSON">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   struct_selecttags

 PURPOSE:
   Trim a structure to a specified list of tags using SELECT and EXCEPT

 CALLING SEQUENCE:
   outstruct = struct_selecttags(tdat, [ select_tags=, except_tags= ])

 INPUTS:
   tdat       - Input structure, which can be an array

 OPTIONAL INPUTS:
   except_tags- Option string array of column names to not return.
                This can include wildcards.
                Set to ' ' to not exclude any tags.
   select_tags- Option string array of column names to return, which
                takes priority over EXCEPT_TAGS.
                This can include wildcards.

 OUTPUTS:
   outstruct  - Ouput structure array

 OPTIONAL OUTPUTS:

 COMMENTS:

 EXAMPLES:

 BUGS:

 PROCEDURES CALLED:

 REVISION HISTORY:
   11-Nov-2003  Written by D. Schlegel, Princeton, broken out of SDSS_READOBJ
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/struct_selecttags.pro">$IDLUTILS_DIR/pro/misc/struct_selecttags.pro</a>)</strong></p>
<hr />
<h3 id="STRUCT_TO_JSON">STRUCT_TO_JSON</h3>
<p><a href="#STRUCT_SELECTTAGS">[Previous Routine]</a></p>
<p><a href="#STRUCT_TRIMTAGS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
    struct_to_json

 PURPOSE:
    Convert a structure to JSON notation, &amp; return it as a string.

 CALLING SEQUENCE
    json = struct_to_json(structure,[map=map],[oned=oned])

 INPUTS:
    structure - A single structure or an array of structures.

 OPTIONAL INPUTS:
    map  - A two-dimensional string array.  This can be used to override
           the default output tag names. For example, if you need
           a mixed-case tag name in the output map=[['SQUARE','Square']]
    oned - A one-dimensional string array. This is used to force
           named substructures to be printed as arrays, even if they only
           contain one element.

 OUTPUTS:
    json - A string in JSON notation, or an array of strings, one for
           each element of the input structure. Structure tags will be
           converted to lowercase, unless overridden by the map input.

 NOTES:
    There is an ambiguity in IDL for substructures, since structures are
    never scalar.  So substructures that have only one element are converted
    to sub-objects, rather than an array of sub-objects with one element.
    This behaviour can be overridden with the oned keyword.

 PROCEDURES CALLED:

 REVISION HISTORY:
    2011-06-07 Initial version by B. A. Weaver, NYU

 VERSION:
    $Id: struct_to_json.pro 125246 2011-06-16 20:51:38Z weaver $

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/json/struct_to_json.pro">$IDLUTILS_DIR/pro/json/struct_to_json.pro</a>)</strong></p>
<hr />
<h3 id="STRUCT_TRIMTAGS">STRUCT_TRIMTAGS</h3>
<p><a href="#STRUCT_TO_JSON">[Previous Routine]</a></p>
<p><a href="#STR_SEP">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   struct_trimtags

 PURPOSE:
   Trim a structure to a list of selected and/or excluded tags

 CALLING SEQUENCE:
   outstruct = struct_trimtags(instruct, [ select_tags=, except_tags=, $
    format= ]

 INPUTS:
   instruct   - Input structure, which can be an array

 OPTIONAL INPUTS:
   select_tags- List of tag names to include; this can use wildcards.
   except_tags- List of tag names to exclude; this can use wildcards.
   format     - If set, then convert all tags to strings using this
                array of format codes (one per output tag).  These format
                codes should not include parentheses.  For example,
                they could be ['f7.2','a'].

 OUTPUTS:
   outstruct  - Ouput structure array

 OPTIONAL OUTPUTS:

 COMMENTS:
   The selection based upon SELECT_TAGS is performed before excluding
   tags based upon EXCEPT_TAGS.  The order of the tags in the output
   structure is the same as the order set by SELECT_TAGS, which allows
   one to re-order the tags in a structure.

 EXAMPLES:

 BUGS:
   No checks are done to assure that tags are not selected multiple
   times (which will crash this code).
   No checks are done that FORMAT has the correct number of elements,
   which could also crash this code.

 PROCEDURES CALLED:
   copy_struct
   copy_struct_inx

 REVISION HISTORY:
   05-Jun-2002  Written by D. Schlegel, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/struct_trimtags.pro">$IDLUTILS_DIR/pro/misc/struct_trimtags.pro</a>)</strong></p>
<hr />
<h3 id="STR_SEP">STR_SEP</h3>
<p><a href="#STRUCT_TRIMTAGS">[Previous Routine]</a></p>
<p><a href="#SXASCII_READ">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
    STR_SEP

 PURPOSE:
    This routine cuts a string into pieces which are separated by the 
    separator string.
 CATEGORY:
    String processing.
 CALLING SEQUENCE:
    arr = STR_SEP(str, separator)

 INPUTS:
    str - The string to be separated.
    separator - The separator.

 KEYWORDS:
    ESC = escape character.  Only valid if separator is a single character.
		Characters following the escape character are treated
		literally and not interpreted as separators.
		For example, if the separator is a comma,
		and the escape character is a backslash, the character
		sequence 'a\,b' is a single field containing the characters
		'a,b'.
    REMOVE_ALL = if set, remove all blanks from fields.
    TRIM = if set, remove only leading and trailing blanks from fields.

 OUTPUT: 
    An array of strings as function value.

 COMMON BLOCKS:
    None

 SIDE EFFECTS:
    No known side effects.

 RESTRICTIONS:
    None.

 EXAMPLE:
    array = STR_SEP (&quot;ulib.usca.test&quot;, &quot;.&quot;)

 MODIFICATION HISTORY:
	July 1992, AH,	CreaSo		Created.
	December, 1994, DMS, RSI	Added TRIM and REMOVE_ALL.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/TeXtoIDL/str_sep.pro">$IDLUTILS_DIR/pro/TeXtoIDL/str_sep.pro</a>)</strong></p>
<hr />
<h3 id="SXASCII_READ">SXASCII_READ</h3>
<p><a href="#STR_SEP">[Previous Routine]</a></p>
<p><a href="#SXCOMBINEPAR">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   sxascii_read 

 PURPOSE:
   This routine has no obvious purpose.

 CALLING SEQUENCE:
   sxascii_read, filename, [ pstr, hdr=hdr]

 INPUTS:
   filename   - Input file name for Yanny parameter file

 OPTIONAL INPUTS:

 OUTPUT:

 OPTIONAL OUTPUTS:
   pstr       - Only one structure can be returned
   hdr        - hdr will include the query

 COMMENTS:
   Return 0's if the file does not exist.

   Read and write variables that are denoted INT in the Yanny file
   as IDL-type LONG, and LONG as IDL-type LONG64.  This is because
   Yanny files assume type INT is a 4-byte integer, whereas in IDL
   that type is only 2-byte.

 EXAMPLES:

 BUGS:
   Not set up yet to deal with multi-dimensional arrays.

   Not yet tested with char?

 PROCEDURES CALLED:
   needs to compile yanny_read.pro to run

 INTERNAL SUPPORT ROUTINES:

 REVISION HISTORY:
   16-May-2001  Written by S Burles, FNAL
   18-Jun-2002  Revisions (better or worse?)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/yanny/sxascii_read.pro">$IDLUTILS_DIR/pro/yanny/sxascii_read.pro</a>)</strong></p>
<hr />
<h3 id="SXCOMBINEPAR">SXCOMBINEPAR</h3>
<p><a href="#SXASCII_READ">[Previous Routine]</a></p>
<p><a href="#SYNCH_POWER">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   sxcombinepar

 PURPOSE:
   Combine values of specified header cards from many FITS headers.

 CALLING SEQUENCE:
   sxcombinepar, hdrarr, cardname, outhdr, [ func=, weights=, /zeros, $
    outcard=, _EXTRA=KeywordsForSxaddpar ]

 INPUTS:
   hdrarr     - Array of pointers to FITS headers
   cardname   - Name(s) of header cards to average
   outhdr     - Output header

 OPTIONAL KEYWORDS:
   func       - Function to apply:
                  'average'
                  'median'
                  'min'
                  'max'
                  'total'
                Default to 'average'
   weights    - If set, then weight each of the input headers by these weights;
                only applicable when the function type is 'average'.
   zeros      - If set, then include zero values when determining the
                average or other function.  But never use the zeros
                returned by SXPAR() if a header is missing that card
                altogether.
   outcard    - Card name(s) in output header; if not specified, then use
                the same name as in CARDNAME.
   _EXTRA     - Optional keywords for SXADDPAR (such as BEFORE,AFTER,FORMAT).

 OUTPUTS:
   outhdr     - (Modified.)

 COMMENTS:

 BUGS:

 PROCEDURES CALLED:
   sxaddpar
   sxpar()

 REVISION HISTORY:
   31-Jan-2002  Written by D. Schlegel, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/fits/sxcombinepar.pro">$IDLUTILS_DIR/pro/fits/sxcombinepar.pro</a>)</strong></p>
<hr />
<h3 id="SYNCH_POWER">SYNCH_POWER</h3>
<p><a href="#SXCOMBINEPAR">[Previous Routine]</a></p>
<p><a href="#SYSVARS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   synch_power

 PURPOSE:
   Compute power per Hz per particle for synchrotron radiation

 CALLING SEQUENCE:
   power = synch_power(gamma, B, nu)

 INPUTS:
   gamma  - relativistic gamma factor (gamma=1/sqrt(1-beta^2))
   B      - B field  [Gauss]
   nu     - frequency to evaluate function at.      [Hz]

 OUTPUTS:
   power  - pitch-angle-averaged synchrotron spectrum [erg/sec/Hz]

 RESTRICTIONS:
   
 EXAMPLES:
   
 COMMENTS:
   use Gaussian units
   Note that Jackson defines \omega_c differently by a factor of 2.
    My convention is more standard (I believe). 

 REVISION HISTORY:
   2004-Jul-17  Written by Douglas Finkbeiner, Princeton
   2004-Sep-01  Actually integrate over pitch angle - DPF

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/physics/synch_power.pro">$IDLUTILS_DIR/pro/physics/synch_power.pro</a>)</strong></p>
<hr />
<h3 id="SYSVARS">SYSVARS</h3>
<p><a href="#SYNCH_POWER">[Previous Routine]</a></p>
<p><a href="#TAG_INDX">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   sysvars

 PURPOSE:
   store IDL system variables in a structure for later restoration 

 CALLING SEQUENCE:
   state = sysvars(print=print, X=X)

 KEYWORDS:
   print  - set default Postscript settings
   X      - set default X settings

 OUTPUTS:
   state  - structure containing previous values of !p,!d,!x,!y,!z

 EXAMPLES:
   state = sysvars(/print)
     &lt;code to print stuff&gt;
   restore_sysvars, state

 COMMENTS:
   Use restore_sysvars to restore !{p,x,y,z}.  !d is a readonly, but
   is carried along for the ride. 

 REVISION HISTORY:
   2001-Aug-06  Written by Douglas Finkbeiner, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/sysvars.pro">$IDLUTILS_DIR/pro/plot/sysvars.pro</a>)</strong></p>
<hr />
<h3 id="TAG_INDX">TAG_INDX</h3>
<p><a href="#SYSVARS">[Previous Routine]</a></p>
<p><a href="#TAI2AIRMASS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   tag_indx
 PURPOSE:
   Returns the column number of the given tag to the given structure
   (-1 if none)
 CALLING SEQUENCE:
   indx=tag_indx(struct,name)   
 INPUTS:
   struct - a structure
   name - name of tag to search for
 OPTIONAL INPUTS:
 OUTPUTS:
 OPTIONAL INPUT/OUTPUTS:
 COMMENTS:
 EXAMPLES:
 BUGS:
 PROCEDURES CALLED:
 REVISION HISTORY:
   06-Sep-2002  Written by Mike Blanton, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/tag_indx.pro">$IDLUTILS_DIR/pro/misc/tag_indx.pro</a>)</strong></p>
<hr />
<h3 id="TAI2AIRMASS">TAI2AIRMASS</h3>
<p><a href="#TAG_INDX">[Previous Routine]</a></p>
<p><a href="#TEXTOIDL">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   tai2airmass

 PURPOSE:
   Compute airmass.

 CALLING SEQUENCE:
   airmass = tai2airmass( ra, dec, [ equinox, jd=, tai=, mjd=, $
    longitude=, latitude=, altitude=, ha=, ipa= ] )

 INPUTS:
   ra             - Right ascension [degrees]
   dec            - Declination [degrees]
   equinox        - Equinox of observation for RA, DEC; default to 2000.

 OPTIONAL KEYWORDS:
   jd             - Decimal Julian date.  Note this should probably be
                    type DOUBLE.
   tai            - Number of seconds since Nov 17 1858
                    Note this should probably either be type DOUBLE or LONG64.
   mjd            - Modified Julian date.
   longitude      - Longitude of observatory;
                    default to (360-105.820417) deg for APO
   latitute       - Latitude of observatory; default to 32.780361 deg for APO
   altitude       - Altitude of observatory; default to 2788 m for APO
   node           - Node of great circle on the sky (degrees); required
                    if returning IPA.
   incl           - Inclination of great circle on the sky (degrees); required
                    if returning IPA.

 OUTPUTS:
   airmass        - Airmass; 1.0 for zenith

 OPTIONAL OUTPUTS:
   ha             - Hour angle (degrees)
   ipa            - Position angle for image rotator (degrees)

 COMMENTS:
   TAI, JD, or MJD must be specified.

   This routine only returns sec(z) for the airmass.
   Formula from Smart, Spherical Astronomy.

 EXAMPLES:

 BUGS:
   Outputs SLIGHTLY different airmasses from those computed by the PT
     system.  We think that they may be going to second order.
   EQUINOX does nothing except for the IPA calculation!
   ALTITUDE is unused!

 PROCEDURES CALLED:
   ct2lst
   ll2uv()
   precess

 REVISION HISTORY:
   10-May-2000  Written by D. Schlegel, Princeton, &amp; D. Hogg, IAS
   02-Jun-2000  Fixed minor bugs, Schlegel
   05-Nov-2000  Added HA keyword
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/coord/tai2airmass.pro">$IDLUTILS_DIR/pro/coord/tai2airmass.pro</a>)</strong></p>
<hr />
<h3 id="TEXTOIDL">TEXTOIDL</h3>
<p><a href="#TAI2AIRMASS">[Previous Routine]</a></p>
<p><a href="#TEXTOIDL_MATCHDELIM">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
       TEXTOIDL
 PURPOSE:
       Convert a valid TeX string to a valid IDL string for plot labels.
 CATEGORY:
       text/strings
 CALLING SEQUENCE:
       new = textoidl(old)
 INPUTS:
       old            -- TeX string to be converted.  Will not be     in
                         modified.  old may be a string array.
 KEYWORD PARAMETERS:
       FONT           -- Set to 0 to use hardware font, -1 to use 
                         vector.  Note that the only hardware font 
                         supported is PostScript.
       /TEX_SEQUENCES -- return the available TeX sequences
       /HELP          -- print out info on use of the function
                         and exit.
 OUTPUTS:
       new            -- IDL string corresponding to old.             out
 COMMON BLOCKS:
 SIDE EFFECTS:
 NOTES:
       - Use the procedure SHOWTEX to get a list of the available TeX
         control sequences.  
       - The only hardware font for which translation is available is
         PostScript. 
       - The only device for which hardware font'
         translation is available is PostScript.'
       - The FONT keyword overrides the font selected'
         by !p.font'
 EXAMPLE:
       out = TeXtoIDL('\Gamma^2 + 5N_{ed}')
       The string out may be used in XYOUTS or other IDL text
       display routines.  It will be an uppercase Gamma, with an
       exponent of 2, then a plus sign, then an N with the subscript
       ed.
 MODIFICATION HISTORY:
       $Id: textoidl.pro,v 1.9 2007-08-28 17:04:45 blanton Exp $
       $Log: not supported by cvs2svn $
       Revision 1.8  2004/07/19 16:48:04  schlegel
       Replace calls to the obsolete function RSTRPOS() with STRPOS(/REVERSE_SEARCH).

       Revision 1.7  2000/11/20 02:27:24  dfink
       Added \AA option for Anstroms

       Revision 1.6  2000/07/12 14:31:33  hogg
       fixed another ()/[] bug.

       Revision 1.5  2000/06/15 18:21:23  hogg
       fixed tiny () -&gt; [] bugs

       Revision 1.4  2000/06/03 17:12:42  dfink
       Fink's new textoidl - all procedures in one file; avoid name conflict

       Revision 1.4  1996/06/14 20:00:27  mcraig
       Updated Copyright info.

       Revision 1.3  1996/05/09 00:22:17  mcraig
       Added error handling, cleaned up documentation.

       Revision 1.2  1996/02/08 18:52:50  mcraig
       Added ability to use hardware fonts for PostScript device.

       Revision 1.1  1996/01/31 18:47:37  mcraig
       Initial revision

 RELEASE:
       $Name: not supported by cvs2svn $

 COPYRIGHT:
  Copyright (C) 1996 The Regents of the University of California, All
  Rights Reserved.  Written by Matthew W. Craig.
  See the file COPYRIGHT for restrictions on distrubting this code.
  This code comes with absolutely NO warranty; see DISCLAIMER for details.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/TeXtoIDL/textoidl.pro">$IDLUTILS_DIR/pro/TeXtoIDL/textoidl.pro</a>)</strong></p>
<hr />
<h3 id="TEXTOIDL_MATCHDELIM">TEXTOIDL_MATCHDELIM</h3>
<p><a href="#TEXTOIDL">[Previous Routine]</a></p>
<p><a href="#TEXTOIDL_NEXTTOK">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
       TEXTOIDL_MATCHDELIM
 PURPOSE:
        Match open/close delimiters in a string.
 CATEGORY:
        text/strings
 CALLING SEQUENCE:
        position = textoidl_matchdelim( strn, [openpos])
 INPUTS:
        strn        -- a string containing an open                 in
                       delimiter (e.g. '{') in which you 
                       want to find the matching closing  
                       delimiter (e.g. '}')
 KEYWORD PARAMETERS:
        OPEN_DELIM  -- A single character containing the opening   in
                       delimiter (e.g. '(').  Default is '{'
        CLOSE_DELIM -- A single character containing the closing   in
                       delimiter (e.g. ')').  Default is '}'
 OUTPUTS:
        position -- returns the position in strn of the            out
                    closing delimiter, -1 if no closing found.
        openpos  -- Set to a named variable to receive the         out
                    position of the first opening delimiter.
                    Optional.
 COMMON BLOCKS:
 SIDE EFFECTS:
 NOTES:
        - Any pair of (nonidentical) characters can be used as
          delimiters. 
 EXAMPLE:
        textoidl_matchdelim('{one{two}}three') returns 9, the character just
        before 'three'.  
 MODIFICATION HISTORY:
       $Id: textoidl.pro,v 1.9 2007-08-28 17:04:45 blanton Exp $
       $Log: not supported by cvs2svn $
       Revision 1.8  2004/07/19 16:48:04  schlegel
       Replace calls to the obsolete function RSTRPOS() with STRPOS(/REVERSE_SEARCH).

       Revision 1.7  2000/11/20 02:27:24  dfink
       Added \AA option for Anstroms

       Revision 1.6  2000/07/12 14:31:33  hogg
       fixed another ()/[] bug.

       Revision 1.5  2000/06/15 18:21:23  hogg
       fixed tiny () -&gt; [] bugs

       Revision 1.4  2000/06/03 17:12:42  dfink
       Fink's new textoidl - all procedures in one file; avoid name conflict

       Revision 1.3  1996/06/14 20:00:27  mcraig
       Updated Copyright info.

       Revision 1.2  1996/05/09 00:22:17  mcraig
       Removed restriction that open delim must be first char.  Added argument
       to allow for return of position of open delim.

       Revision 1.1  1996/01/31 18:41:06  mcraig
       Initial revision

 RELEASE:
       $Name: not supported by cvs2svn $

 COPYRIGHT:
  Copyright (C) 1996 The Regents of the University of California, All
  Rights Reserved.  Written by Matthew W. Craig.
  See the file COPYRIGHT for restrictions on distrubting this code.
  This code comes with absolutely NO warranty; see DISCLAIMER for details.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/TeXtoIDL/textoidl.pro">$IDLUTILS_DIR/pro/TeXtoIDL/textoidl.pro</a>)</strong></p>
<hr />
<h3 id="TEXTOIDL_NEXTTOK">TEXTOIDL_NEXTTOK</h3>
<p><a href="#TEXTOIDL_MATCHDELIM">[Previous Routine]</a></p>
<p><a href="#TEXTOIDL_STRCNT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
       TEXTOIDL_NEXTTOK
 PURPOSE:
       Find the next occurance of any of a set of characters in a
       string and return the character which occurs next.
 CATEGORY:
       text/strings
 CALLING SEQUENCE:
       tok = textoidl_nexttok( strn, tokens )
 INPUTS:
       strn   -- string to be searched for sub/superscripts    in
       tokens -- string containing characters to be found.     in
 KEYWORD PARAMETERS:
       POSITION -- Set to a named variable to get position     out
                   of next token, or -1 if none found.
       /HELP    -- Print useful message and exit.
 OUTPUTS:
       tok    -- Contains the character among tokens which     out
                 occurs next in strn, or null '' if none found.
 COMMON BLOCKS:
 SIDE EFFECTS:
 NOTES:
 EXAMPLE:
       textoidl_nexttok( 'x^2 + N_j^3', '^_', position=pos ) returns '^' and sets
       pos to 1.
 MODIFICATION HISTORY:
       $Id: textoidl.pro,v 1.9 2007-08-28 17:04:45 blanton Exp $
       $Log: not supported by cvs2svn $
       Revision 1.8  2004/07/19 16:48:04  schlegel
       Replace calls to the obsolete function RSTRPOS() with STRPOS(/REVERSE_SEARCH).

       Revision 1.7  2000/11/20 02:27:24  dfink
       Added \AA option for Anstroms

       Revision 1.6  2000/07/12 14:31:33  hogg
       fixed another ()/[] bug.

       Revision 1.5  2000/06/15 18:21:23  hogg
       fixed tiny () -&gt; [] bugs

       Revision 1.4  2000/06/03 17:12:42  dfink
       Fink's new textoidl - all procedures in one file; avoid name conflict

       Revision 1.3  1996/06/14 20:00:27  mcraig
       Updated Copyright info.

       Revision 1.2  1996/05/09 00:22:17  mcraig
       Generalized so that the next occurence of any of a set of characters will
       be returned.

       Revision 1.1  1996/01/31 18:41:06  mcraig
       Initial revision

 RELEASE:
       $Name: not supported by cvs2svn $

 COPYRIGHT:
  Copyright (C) 1996 The Regents of the University of California, All
  Rights Reserved.  Written by Matthew W. Craig.
  See the file COPYRIGHT for restrictions on distrubting this code.
  This code comes with absolutely NO warranty; see DISCLAIMER for details.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/TeXtoIDL/textoidl.pro">$IDLUTILS_DIR/pro/TeXtoIDL/textoidl.pro</a>)</strong></p>
<hr />
<h3 id="TEXTOIDL_STRCNT">TEXTOIDL_STRCNT</h3>
<p><a href="#TEXTOIDL_NEXTTOK">[Previous Routine]</a></p>
<p><a href="#TEXTOIDL_STRTOK">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
       TEXTOIDL_STRCNT
 PURPOSE:
       Count number of occurrences of a substring in a string.
 CATEGORY:
       text/strings
 CALLING SEQUENCE:
       num = textoidl_strcnt(strn, substring, [pos])
 INPUTS:
       string    -- The string in which to count occurences.     in
       substring -- The substring to count occurrences of.       in
       pos       -- the position at which to begin the search.   [in]
                    If not supplied, start at beginning of
                    string.
 KEYWORD PARAMETERS:
       /HELP     -- Print useful message and return.
 OUTPUTS:
       num       -- Number of occurances of substring in string. out
 COMMON BLOCKS:
 SIDE EFFECTS:
 NOTES:
       Overlapping occurances are not counted separately.  For
       example, counting occurances of 'bb' in 'blah bbb' returns one
       occurance. 
 EXAMPLE:
 MODIFICATION HISTORY:
       $Id: textoidl.pro,v 1.9 2007-08-28 17:04:45 blanton Exp $
       $Log: not supported by cvs2svn $
       Revision 1.8  2004/07/19 16:48:04  schlegel
       Replace calls to the obsolete function RSTRPOS() with STRPOS(/REVERSE_SEARCH).

       Revision 1.7  2000/11/20 02:27:24  dfink
       Added \AA option for Anstroms

       Revision 1.6  2000/07/12 14:31:33  hogg
       fixed another ()/[] bug.

       Revision 1.5  2000/06/15 18:21:23  hogg
       fixed tiny () -&gt; [] bugs

       Revision 1.4  2000/06/03 17:12:42  dfink
       Fink's new textoidl - all procedures in one file; avoid name conflict

       Revision 1.3  1996/06/14 20:00:27  mcraig
       Updated Copyright info.

       Revision 1.2  1996/05/09 00:22:17  mcraig
       Added fast processing using BYTE arrays if we are counting occurences of
       a single character.  Added error handling.

       Revision 1.1  1996/01/31 18:47:37  mcraig
       Initial revision

 RELEASE:
       $Name: not supported by cvs2svn $

 COPYRIGHT:
  Copyright (C) 1996 The Regents of the University of California, All
  Rights Reserved.  Written by Matthew W. Craig.
  See the file COPYRIGHT for restrictions on distrubting this code.
  This code comes with absolutely NO warranty; see DISCLAIMER for details.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/TeXtoIDL/textoidl.pro">$IDLUTILS_DIR/pro/TeXtoIDL/textoidl.pro</a>)</strong></p>
<hr />
<h3 id="TEXTOIDL_STRTOK">TEXTOIDL_STRTOK</h3>
<p><a href="#TEXTOIDL_STRCNT">[Previous Routine]</a></p>
<p><a href="#TEXTOIDL_STRTRANS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
       TEXTOIDL_STRTOK
 PURPOSE:
       Retrieve portion of string up to token.
 CATEGORY:
       text/strings
 CALLING SEQUENCE:
       new = textoidl_strtok( old, token )
 INPUTS:
       old   -- String to be split.  Contains text after    in, out
                token on output.
       token -- Token to use in splitting old.              in
 KEYWORD PARAMETERS:
       /TRIM -- set to remove leading blanks from old 
                before returning.
       /HELP -- print useful message and exit.
 OUTPUTS:
       new   -- portion of string up to token.              out
       old   -- portion of old after token.                 out, in
 COMMON BLOCKS:
 SIDE EFFECTS:
       Input parameter old is modified.
 NOTES:
       Token may be one or more characters.
       If token is not found, returns old and sets old to ''.
 EXAMPLE:
       If old is 'foo44 bar', then textoidl_strtok( old, '44' ) would return
       'foo', and upon return, old will be left with ' bar'.  If /TRIM
       were set, old would be 'bar' on return.

       If old='xyz', then new=textoidl_strtok(old,'a') would return with
       new='xyz' and old=''.
 THANKS:
       To D. Linder who wrote GETTOK, part of the goddard library,
       upon which this is based.
 MODIFICATION HISTORY:
       $Id: textoidl.pro,v 1.9 2007-08-28 17:04:45 blanton Exp $
       $Log: not supported by cvs2svn $
       Revision 1.8  2004/07/19 16:48:04  schlegel
       Replace calls to the obsolete function RSTRPOS() with STRPOS(/REVERSE_SEARCH).

       Revision 1.7  2000/11/20 02:27:24  dfink
       Added \AA option for Anstroms

       Revision 1.6  2000/07/12 14:31:33  hogg
       fixed another ()/[] bug.

       Revision 1.5  2000/06/15 18:21:23  hogg
       fixed tiny () -&gt; [] bugs

       Revision 1.4  2000/06/03 17:12:42  dfink
       Fink's new textoidl - all procedures in one file; avoid name conflict

       Revision 1.3  1996/06/14 20:00:27  mcraig
       Updated Copyright info.

       Revision 1.2  1996/05/09 00:22:17  mcraig
       Added built in help.

       Revision 1.1  1996/01/31 18:47:37  mcraig
       Initial revision

 RELEASE:
       $Name: not supported by cvs2svn $

 COPYRIGHT:
  Copyright (C) 1996 The Regents of the University of California, All
  Rights Reserved.  Written by Matthew W. Craig.
  See the file COPYRIGHT for restrictions on distrubting this code.
  This code comes with absolutely NO warranty; see DISCLAIMER for details.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/TeXtoIDL/textoidl.pro">$IDLUTILS_DIR/pro/TeXtoIDL/textoidl.pro</a>)</strong></p>
<hr />
<h3 id="TEXTOIDL_STRTRANS">TEXTOIDL_STRTRANS</h3>
<p><a href="#TEXTOIDL_STRTOK">[Previous Routine]</a></p>
<p><a href="#TEXTOIDL_SUB_SUP">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
       TEXTOIDL_STRTRANS
 PURPOSE:
       Translate all occurences of one substring to another.
 CATEGORY:
       text/strings
 CALLING SEQUENCE:
       new = textoidl_strtrans(oldstr,from,to,ned)
 INPUTS:
       oldstr -- string on which to operate.              in
                 May be an array.
       from   -- substrings to be translated. May be      in
                 an array.
       to     -- what strings in from should be           in
                 translated to. May be an array.
 KEYWORD PARAMETERS:
       /HELP  -- Set this to print useful message and 
                 exit.
 OUTPUTS:
       new    -- Translated string. Array if oldstr is    out          
                 an array.
       ned    -- number of substitutions performed in     out
                 oldstr.  Array if oldstr is an array.
 COMMON BLOCKS:
 SIDE EFFECTS:
 NOTES:
       - Any of old, from, and to can be arrays.  
       - from and to must have the same number of elements.
 EXAMPLE:
       inp='Many*bad!chars+in_here'
       from=['*','!','+','_']
       to  =[' ',' ',' ',' ']
       out = textoidl_strtrans(inp,from,to,ned)
       Will produce out='Many bad chars in here', and set ned to 4.
 MODIFICATION HISTORY:
       $Id: textoidl.pro,v 1.9 2007-08-28 17:04:45 blanton Exp $
       $Log: not supported by cvs2svn $
       Revision 1.8  2004/07/19 16:48:04  schlegel
       Replace calls to the obsolete function RSTRPOS() with STRPOS(/REVERSE_SEARCH).

       Revision 1.7  2000/11/20 02:27:24  dfink
       Added \AA option for Anstroms

       Revision 1.7  2000/11/19 18:25:00  dfink / Jonathan Swift
       Added \AA option for Anstroms

       Revision 1.6  2000/07/12 14:31:33  hogg
       fixed another ()/[] bug.

       Revision 1.5  2000/06/15 18:21:23  hogg
       fixed tiny () -&gt; [] bugs

       Revision 1.4  2000/06/03 17:12:42  dfink
       Fink's new textoidl - all procedures in one file; avoid name conflict

       Revision 1.3  1996/06/14 20:00:27  mcraig
       Updated Copyright info.

       Revision 1.2  1996/05/09 00:22:17  mcraig
       Sped up significantly by using str_sep to handle the translation.  No longer
       relies on routines fromother user libraries.

       Revision 1.1  1996/01/31 18:47:37  mcraig
       Initial revision

 RELEASE:
       $Name: not supported by cvs2svn $

 COPYRIGHT:
  Copyright (C) 1996 The Regents of the University of California, All
  Rights Reserved.  Written by Matthew W. Craig.
  See the file COPYRIGHT for restrictions on distrubting this code.
  This code comes with absolutely NO warranty; see DISCLAIMER for details.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/TeXtoIDL/textoidl.pro">$IDLUTILS_DIR/pro/TeXtoIDL/textoidl.pro</a>)</strong></p>
<hr />
<h3 id="TEXTOIDL_SUB_SUP">TEXTOIDL_SUB_SUP</h3>
<p><a href="#TEXTOIDL_STRTRANS">[Previous Routine]</a></p>
<p><a href="#TEXTOIDL_TABLE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
       TEXTOIDL_SUB_SUP
 PURPOSE:
       Return the proper IDL font positioning command for TeX
       sub/superscripts. 
 CATEGORY:
       TeXtoIDL
 CALLING SEQUENCE:
       fnt = textoidl_sub_sup( strn )
 INPUTS:
       strn      -- Either '^' or '_', the TeX super/subscript       in
                    characters
 KEYWORD PARAMETERS:
       /FORCE_UD -- Set this to use !U/!D instead of !E/!I for
                    sub/superscripts .
       /HELP     -- Set to print useful message and exit.
 OUTPUTS:
       fnt       -- Either '!U' or !E' for superscripts,             out
                    or '!D' or '!I' for subscripts.
 COMMON BLOCKS:
 SIDE EFFECTS:
 NOTES:
       Used only by textoidl_trans_sub_super.  Should be kept in same
       file. 
 SPECIAL NOTE: 
       The file textoidl_trans_sub_super.pro contains two functions,
       textoidl_trans_sub_super, and textoidl_sub_sup.  The former is the
       generic routine for processing TeX sub/superscripts, the
       latter is used only by textoidl_trans_sub_super and has no general
       utility.  Hence it lives here.  You will see documentation for
       textoidl_trans_sub_super second if you use DOC_LIBRARY.
 EXAMPLE:
 MODIFICATION HISTORY:
       $Id: textoidl.pro,v 1.9 2007-08-28 17:04:45 blanton Exp $
       $Log: not supported by cvs2svn $
       Revision 1.8  2004/07/19 16:48:04  schlegel
       Replace calls to the obsolete function RSTRPOS() with STRPOS(/REVERSE_SEARCH).

       Revision 1.7  2000/11/20 02:27:24  dfink
       Added \AA option for Anstroms

       Revision 1.6  2000/07/12 14:31:33  hogg
       fixed another ()/[] bug.

       Revision 1.5  2000/06/15 18:21:23  hogg
       fixed tiny () -&gt; [] bugs

       Revision 1.4  2000/06/03 17:12:42  dfink
       Fink's new textoidl - all procedures in one file; avoid name conflict

       Revision 1.4  1996/06/14 20:00:27  mcraig
       Updated Copyright info.

       Revision 1.3  1996/05/09 00:22:17  mcraig
       Changed some function calls to reflect changes in those functions, moved
       some code out of the main loop that didn't need to be there, added
       documentation.

       Revision 1.1  1996/01/31 18:47:37  mcraig
       Initial revision

 RELEASE:
       $Name: not supported by cvs2svn $
 COPYRIGHT:
  Copyright (C) 1996 The Regents of the University of California, All
  Rights Reserved.  Written by Matthew W. Craig.
  See the file COPYRIGHT for restrictions on distrubting this code.
  This code comes with absolutely NO warranty; see DISCLAIMER for details.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/TeXtoIDL/textoidl.pro">$IDLUTILS_DIR/pro/TeXtoIDL/textoidl.pro</a>)</strong></p>
<hr />
<h3 id="TEXTOIDL_TABLE">TEXTOIDL_TABLE</h3>
<p><a href="#TEXTOIDL_SUB_SUP">[Previous Routine]</a></p>
<p><a href="#TEXTOIDL_TRANS_SUB_SUPER">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
       TEXTOIDL_TABLE
 PURPOSE:
       Returns a translation table from TeX to IDL.
 CATEGORY:
       text/strings
 CALLING SEQUENCE:
       table = textoidl_table()
 INPUTS:
       None
 KEYWORD PARAMETERS:
       /POSTSCRIPT -- If set, return postscript translation
                      table rather than vector fonts table.
                      Default is translations for vector
                      fonts.
       /HELP       -- Print help and exit.
 OUTPUTS:
       table -- a 2D text array.  table(0,*) contains          out
                the words to be translated away, table(1,*)
                contains the words to translate them to.   
 COMMON BLOCKS:
 SIDE EFFECTS:
 NOTES:
       To find out what TeX sequences are available, look at
       table(0,*).
 EXAMPLE:
 MODIFICATION HISTORY:
       $Id: textoidl.pro,v 1.9 2007-08-28 17:04:45 blanton Exp $
       $Log: not supported by cvs2svn $
       Revision 1.8  2004/07/19 16:48:04  schlegel
       Replace calls to the obsolete function RSTRPOS() with STRPOS(/REVERSE_SEARCH).

       Revision 1.7  2000/11/20 02:27:24  dfink
       Added \AA option for Anstroms

       Revision 1.6  2000/07/12 14:31:33  hogg
       fixed another ()/[] bug.

       Revision 1.5  2000/06/15 18:21:23  hogg
       fixed tiny () -&gt; [] bugs

       Revision 1.4  2000/06/03 17:12:42  dfink
       Fink's new textoidl - all procedures in one file; avoid name conflict

       Revision 1.7  1996/07/22 23:56:08  mcraig
       Added \vartheta.

       Revision 1.6  1996/07/12 21:31:42  mcraig
       Fixed \varphi in vector font, added \circ.

       Revision 1.5  1996/06/14 20:00:27  mcraig
       Updated Copyright info.

       Revision 1.4  1996/05/09 00:22:17  mcraig
       Added command to return to previous font after switching to Greek or
       symbol font.

       Revision 1.3  1996/02/08 19:49:35  mcraig
       Removed control sequence \perp because the postscript code for it is '^'.

       Revision 1.2  1996/02/08 18:53:38  mcraig
       Added translations for PostScript fonts, and added several new TeX
       control sequences.

       Revision 1.1  1996/01/31 18:47:37  mcraig
       Initial revision

 RELEASE:
       $Name: not supported by cvs2svn $

 COPYRIGHT:
  Copyright (C) 1996 The Regents of the University of California, All
  Rights Reserved.  Written by Matthew W. Craig.
  See the file COPYRIGHT for restrictions on distrubting this code.
  This code comes with absolutely NO warranty; see DISCLAIMER for details.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/TeXtoIDL/textoidl.pro">$IDLUTILS_DIR/pro/TeXtoIDL/textoidl.pro</a>)</strong></p>
<hr />
<h3 id="TEXTOIDL_TRANS_SUB_SUPER">TEXTOIDL_TRANS_SUB_SUPER</h3>
<p><a href="#TEXTOIDL_TABLE">[Previous Routine]</a></p>
<p><a href="#TMASS_ASCII2FITS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
       TEXTOIDL_TRANS_SUB_SUPER
 PURPOSE:
       Translate TeX sub/superscripts to IDL sub/superscripts.
 CATEGORY:
       text/strings
 CALLING SEQUENCE:
       new = textoidl_trans_sub_super( old )
 INPUTS:
       old       -- string to be translated from TeX to IDL.   in
 KEYWORD PARAMETERS:
       /RECURSED -- set if this function is being called 
                    recursively.                  
       /HELP     -- Set to print useful message and exit.
 OUTPUTS:
       new       -- string old converted from TeX to IDL       out
 COMMON BLOCKS:
 SIDE EFFECTS:
 NOTES:
       - For best results, when both a sub and superscript are used,
         place the shorter of the two first (e.g. 'N^{a}_{bbbb}' is
         better than 'N_{bbbb}^{a}').
       - Single character sub/super scripts do not need to be
         protected by braces.
       - Sub/superscripts may be nested (e.g. 'N^{N_1^N}').
 EXAMPLE:
       out = textoidl_trans_sub_super( 'N^2_{big}' )
       Then out='N!U2!N!Dbig!N' which looks like it should on the
       display. 
 LIBRARY FUNCTIONS CALLED:
       textoidl_strtok      -- Text/string (mcraig)
       textoidl_sub_sup -- contained in this file
 MODIFICATION HISTORY:
       $Id: textoidl.pro,v 1.9 2007-08-28 17:04:45 blanton Exp $
       $Log: not supported by cvs2svn $
       Revision 1.8  2004/07/19 16:48:04  schlegel
       Replace calls to the obsolete function RSTRPOS() with STRPOS(/REVERSE_SEARCH).

       Revision 1.7  2000/11/20 02:27:24  dfink
       Added \AA option for Anstroms

       Revision 1.6  2000/07/12 14:31:33  hogg
       fixed another ()/[] bug.

       Revision 1.5  2000/06/15 18:21:23  hogg
       fixed tiny () -&gt; [] bugs

       Revision 1.4  2000/06/03 17:12:42  dfink
       Fink's new textoidl - all procedures in one file; avoid name conflict

       Revision 1.4  1996/06/14 20:00:27  mcraig
       Updated Copyright info.

       Revision 1.3  1996/05/09 00:22:17  mcraig
       Changed some function calls to reflect changes in those functions, moved
       some code out of the main loop that didn't need to be there, added
       documentation.

       Revision 1.2  1996/02/08 18:54:20  mcraig
       Changed default sub/superscript size to be !D/!U rather than !I/!E to
       improve readability of plat annotations.

       Revision 1.1  1996/01/31 18:47:37  mcraig
       Initial revision

 RELEASE:
       $Name: not supported by cvs2svn $

 COPYRIGHT:
  Copyright (C) 1996 The Regents of the University of California, All
  Rights Reserved.  Written by Matthew W. Craig.
  See the file COPYRIGHT for restrictions on distrubting this code.
  This code comes with absolutely NO warranty; see DISCLAIMER for details.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/TeXtoIDL/textoidl.pro">$IDLUTILS_DIR/pro/TeXtoIDL/textoidl.pro</a>)</strong></p>
<hr />
<h3 id="TMASS_ASCII2FITS">TMASS_ASCII2FITS</h3>
<p><a href="#TEXTOIDL_TRANS_SUB_SUPER">[Previous Routine]</a></p>
<p><a href="#TMASS_CONE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   tmass_ascii2fits

 PURPOSE:
   Convert 2MASS ascii files to FITS tables

 CALLING SEQUENCE:
   tmass_ascii2fits, infile, outfile

 INPUTS:
   infile  - input file name
   outfile - output file name

 KEYWORDS:
   
 OUTPUTS:
   file named &lt;outfile&gt;

 RESTRICTIONS:
   
 EXAMPLES:
   
 COMMENTS:
   Recognizes gzip compression automatically. 

   I'm not keeping all the fields - just the useful ones. 
   Might want to keep everything in the future. 

 REVISION HISTORY:
   2003-Jun-26  Written by Douglas Finkbeiner, Princeton

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/2mass/tmass_ascii2fits.pro">$IDLUTILS_DIR/pro/2mass/tmass_ascii2fits.pro</a>)</strong></p>
<hr />
<h3 id="TMASS_CONE">TMASS_CONE</h3>
<p><a href="#TMASS_ASCII2FITS">[Previous Routine]</a></p>
<p><a href="#TMASS_DECSLICE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
       tmass_cone
+------------------------------------------------------------------------  
 PURPOSE:
       Determine RA,dec regions to read and call tmass_readzone
+------------------------------------------------------------------------  
 INPUTS:
   fitspath  - catalogue path
   racen     - RA of region center (J2000)    [degrees]
   deccen    - dec of region center (J2000)   [degrees]
   rad       - radius of region               [degrees]

+------------------------------------------------------------------------  
 OUTPUTS:
   result    - data structure defined by FITS file
+------------------------------------------------------------------------  
 COMMENTS:    
   calls tmass_readzone
+------------------------------------------------------------------------  
 REVISION HISTORY
   2003-Jul-14 
   Written  2000 Apr 15 by D. P. Finkbeiner
   2002-Nov-25  Split from tmass_read.pro
                  and modified to work with TMASS-B1.0 - DPF
+------------------------------------------------------------------------  
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/2mass/tmass_cone.pro">$IDLUTILS_DIR/pro/2mass/tmass_cone.pro</a>)</strong></p>
<hr />
<h3 id="TMASS_DECSLICE">TMASS_DECSLICE</h3>
<p><a href="#TMASS_CONE">[Previous Routine]</a></p>
<p><a href="#TMASS_FITS_FILES">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   tmass_decslice

 PURPOSE:
   rewrite 2MASS data in 0.1 deg declination slices for fast seeks

 CALLING SEQUENCE:
   
 INPUTS:
   inpath  - path of input files
   outpath - path of output files

 COMMENTS:
   called by tmass_ingest

 REVISION HISTORY:
   2003-July-12  Written by Douglas Finkbeiner, Princeton
   2005-June-25  Fix bug that corrupts .acc file if zero stars in any
           RA step.  - DPF

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/2mass/tmass_decslice.pro">$IDLUTILS_DIR/pro/2mass/tmass_decslice.pro</a>)</strong></p>
<hr />
<h3 id="TMASS_FITS_FILES">TMASS_FITS_FILES</h3>
<p><a href="#TMASS_DECSLICE">[Previous Routine]</a></p>
<p><a href="#TMASS_READ">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   tmass_fits_files

 PURPOSE:
   Convert 2MASS gzipped ASCII files to decsliced FITS tables

 CALLING SEQUENCE:
   tmass_fits_files

 INPUTS:
   &lt;hardwired paths&gt;

 OPTIONAL INPUTS:
   
 KEYWORDS:
   
 OUTPUTS:
   
 OPTIONAL OUTPUTS:
   
 RESTRICTIONS:
   
 EXAMPLES:
   
 COMMENTS:
   The first step, tmass_reformat_psc, can be run on several boxes
    in parallel. 

 REVISION HISTORY:
   2003-Jul-24  Written by Douglas Finkbeiner, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/2mass/tmass_fits_files.pro">$IDLUTILS_DIR/pro/2mass/tmass_fits_files.pro</a>)</strong></p>
<hr />
<h3 id="TMASS_READ">TMASS_READ</h3>
<p><a href="#TMASS_FITS_FILES">[Previous Routine]</a></p>
<p><a href="#TMASS_READZONE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
       tmass_read

 PURPOSE:
       Read 2MASS stars near a given RA, dec

 INPUTS:
   racen     - RA of region center (J2000)    [degrees]
   deccen    - dec of region center (J2000)   [degrees]
   rad       - radius of region               [degrees]


 OUTPUTS:
   result    - data structure defined by FITS file

 COMMENTS:    
   Determines RA,dec regions to read and calls tmass_readzone

 REVISION HISTORY
   2003-Jul-14   Written by D. P. Finkbeiner
   2005-Aug-18   Return 0 if no objects are within radius - DPF

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/2mass/tmass_read.pro">$IDLUTILS_DIR/pro/2mass/tmass_read.pro</a>)</strong></p>
<hr />
<h3 id="TMASS_READZONE">TMASS_READZONE</h3>
<p><a href="#TMASS_READ">[Previous Routine]</a></p>
<p><a href="#TMASS_REFORMAT_PSC">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
       tmass_readzone
+------------------------------------------------------------------------  
 PURPOSE:
       Read 2MASS FITS files given RA range out of one deczone.
+------------------------------------------------------------------------  
 INPUTS:
   fitspath  - path to catalogue files (.fits and .acc)
   zone      - zone number (float, 1/10 degrees)
   ra0,ra1   - ra limits [deg]
   prefix    - filename prefix: '2mass' for 2MASS

+------------------------------------------------------------------------  
 OUTPUTS:
   result    - 2mass data structure defined by the FITS files

+------------------------------------------------------------------------  
 COMMENTS:
   uses point_lun to skip to requested part of file.  Very fast. 

   Requests are padded by 1/10 the interpolation grid spacing.  This
     padding is trimmed unless that would yield a null result. 

   Warning - this routine interpolates file index positions
             and works only if the star distribution is approximately
             uniform within each interpolation grid patch (which it is).  
+------------------------------------------------------------------------
 MODIFICATION HISTORY:
  2003-Jul-14 Taken from usno_read by D. Finkbeiner, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/2mass/tmass_readzone.pro">$IDLUTILS_DIR/pro/2mass/tmass_readzone.pro</a>)</strong></p>
<hr />
<h3 id="TMASS_REFORMAT_PSC">TMASS_REFORMAT_PSC</h3>
<p><a href="#TMASS_READZONE">[Previous Routine]</a></p>
<p><a href="#TMASS_STRUC">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   tmass_reformat_psc

 PURPOSE:
   reformat 2MASS PSC from ASCII to FITS files

 CALLING SEQUENCE:
   tmass_reformat_psc, inpath, outpath

 INPUTS:
   inpath  - path to the gzipped psc files downloaded from IPAC
   outpath - path to temp dir to write FITS files, one per ASCII file.

 COMMENTS:
   convert the gzipped ASCII files to FITS files. 
   &quot;tmass_&quot; prepended to tag names for merge with SDSS data. 

   Data Revision 5: April 13, 2003: R. Stiening,
    Modified for ftp version: April 30, 2003: R. Cutri

 REVISION HISTORY:
   2003-Jul-17  Written by D. Finkbeiner &amp; D. Schlegel, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/2mass/tmass_reformat_psc.pro">$IDLUTILS_DIR/pro/2mass/tmass_reformat_psc.pro</a>)</strong></p>
<hr />
<h3 id="TMASS_STRUC">TMASS_STRUC</h3>
<p><a href="#TMASS_REFORMAT_PSC">[Previous Routine]</a></p>
<p><a href="#TMASS_XSC_READ">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   tmass_struc

 PURPOSE:
   Define data structure for FITS copy of 2MASS data

 CALLING SEQUENCE:
   struc = tmass_struc(N)

 INPUTS:
   N     - number of elements in structure array (default 1)

 OUTPUTS:
   struc - 2MASS data structure

 COMMENTS:
   Used by tmass_ascii2fits.  We use DEC instead of the 2MASS
   name of DECL for declination.

 REVISION HISTORY:
   2003-Jun-26  Written by Douglas Finkbeiner, Princeton

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/2mass/tmass_struc.pro">$IDLUTILS_DIR/pro/2mass/tmass_struc.pro</a>)</strong></p>
<hr />
<h3 id="TMASS_XSC_READ">TMASS_XSC_READ</h3>
<p><a href="#TMASS_STRUC">[Previous Routine]</a></p>
<p><a href="#TMASS_XSC_SFILES">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   tmass_xsc_read
 PURPOSE:
   Read in a region of 2MASS XSC data 
 CALLING SEQUENCE:
   objs= tmass_xsc_read(ra, dec, radius[, columns= ])
 INPUTS:
   ra, dec - central location (J2000 deg)
   radius - search radius (deg)
 OPTIONAL INPUTS:
   columns - which columns to return
 COMMENTS:
     Requires 2MASS XSC data installed
     in $TWOMASS_XSC_DIR
 REVISION HISTORY:
   12-Jan-2010 MRB, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/2mass/tmass_xsc_read.pro">$IDLUTILS_DIR/pro/2mass/tmass_xsc_read.pro</a>)</strong></p>
<hr />
<h3 id="TMASS_XSC_SFILES">TMASS_XSC_SFILES</h3>
<p><a href="#TMASS_XSC_READ">[Previous Routine]</a></p>
<p><a href="#TNMIN">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   tmass_xsc_sfiles
 PURPOSE:
   Convert full 2MASS XSC files into RA/Dec structured format
 CALLING SEQUENCE:
   tmass_xsc_sfiles
 COMMENTS:
   Requires that $TWOMASS_XSC_DIR is set. 
 REVISION HISTORY:
   12-Jan-2010 MRB, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/2mass/tmass_xsc_sfiles.pro">$IDLUTILS_DIR/pro/2mass/tmass_xsc_sfiles.pro</a>)</strong></p>
<hr />
<h3 id="TNMIN">TNMIN</h3>
<p><a href="#TMASS_XSC_SFILES">[Previous Routine]</a></p>
<p><a href="#TRACESET2PIX">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   TNMIN

 AUTHOR:
   Craig B. Markwardt, NASA/GSFC Code 662, Greenbelt, MD 20770
   craigm@lheamail.gsfc.nasa.gov
   UPDATED VERSIONs can be found on my WEB PAGE:
      http://cow.physics.wisc.edu/~craigm/idl/idl.html

 PURPOSE:
   Performs function minimization (Truncated-Newton Method)

 MAJOR TOPICS:
   Optimization and Minimization

 CALLING SEQUENCE:
   parms = TNMIN(MYFUNCT, X, FUNCTARGS=fcnargs, NFEV=nfev,
                 MAXITER=maxiter, ERRMSG=errmsg, NPRINT=nprint,
                 QUIET=quiet, XTOL=xtol, STATUS=status,
                 FGUESS=fguess, PARINFO=parinfo, BESTMIN=bestmin,
                 ITERPROC=iterproc, ITERARGS=iterargs, niter=niter)

 DESCRIPTION:

  TNMIN uses the Truncated-Newton method to minimize an arbitrary IDL
  function with respect to a given set of free parameters.  The
  user-supplied function must compute the gradient with respect to
  each parameter.  TNMIN is based on TN.F (TNBC) by Stephen Nash.

  If you want to solve a least-squares problem, to perform *curve*
  *fitting*, then you will probably want to use the routines MPFIT,
  MPFITFUN and MPFITEXPR.  Those routines are specifically optimized
  for the least-squares problem.  TNMIN is suitable for constrained
  and unconstrained optimization problems with a medium number of
  variables.  Function *maximization* can be performed using the
  MAXIMIZE keyword.

  TNMIN is similar to MPFIT in that it allows parameters to be fixed,
  simple bounding limits to be placed on parameter values, and
  parameters to be tied to other parameters.  See PARINFO below for
  discussion and examples.

 USER FUNCTION

  The user must define an IDL function which returns the desired
  value as a single scalar.  The IDL function must accept a list of
  numerical parameters, P.  Additionally, keyword parameters may be
  used to pass more data or information to the user function, via the
  FUNCTARGS keyword.

  The user function should be declared in the following way:

     FUNCTION MYFUNCT, p, dp [, keywords permitted ]
       ; Parameter values are passed in &quot;p&quot;
       f  = ....   ; Compute function value
       dp = ....   ; Compute partial derivatives (optional)
       return, f
     END

  The function *must* accept at least one argument, the parameter
  list P.  The vector P is implicitly assumed to be a one-dimensional
  array.  Users may pass additional information to the function by
  composing and _EXTRA structure and passing it in the FUNCTARGS
  keyword.

  User functions may also indicate a fatal error condition using the
  ERROR_CODE common block variable, as described below under the
  TNMIN_ERROR common block definition (by setting ERROR_CODE to a
  number between -15 and -1).

  ANALYTIC vs. NUMERICAL DERIVATIVES

  By default, the user must compute gradient components analytically
  using AUTODERIVATIVE=0.  As explained below, numerical derivatives
  can also be calculated using AUTODERIVATIVE=1.

  For analytic derivatives, the user should call TNMIN using the
  default keyword value AUTODERIVATIVE=0.  [ This is different
  behavior from MPFIT, where AUTODERIVATIVE=1 is the default. ] The
  IDL user routine should compute the gradient of the function as a
  one-dimensional array of values, one for each of the parameters.
  They are passed back to TNMIN via &quot;dp&quot; as shown above.

  The derivatives with respect to fixed parameters are ignored; zero
  is an appropriate value to insert for those derivatives.  Upon
  input to the user function, DP is set to a vector with the same
  length as P, with a value of 1 for a parameter which is free, and a
  value of zero for a parameter which is fixed (and hence no
  derivative needs to be calculated).  This input vector may be
  overwritten as needed.

  For numerical derivatives, a finite differencing approximation is
  used to estimate the gradient values.  Users can activate this
  feature by passing the keyword AUTODERIVATIVE=1.  Fine control over
  this behavior can be achieved using the STEP, RELSTEP and TNSIDE
  fields of the PARINFO structure.

  When finite differencing is used for computing derivatives (ie,
  when AUTODERIVATIVE=1), the parameter DP is not passed.  Therefore
  functions can use N_PARAMS() to indicate whether they must compute
  the derivatives or not.  However there is no penalty (other than
  computation time) for computing the gradient values and users may
  switch between AUTODERIVATIVE=0 or =1 in order to test both
  scenarios.

 CONSTRAINING PARAMETER VALUES WITH THE PARINFO KEYWORD

  The behavior of TNMIN can be modified with respect to each
  parameter to be optimized.  A parameter value can be fixed; simple
  boundary constraints can be imposed; limitations on the parameter
  changes can be imposed; properties of the automatic derivative can
  be modified; and parameters can be tied to one another.

  These properties are governed by the PARINFO structure, which is
  passed as a keyword parameter to TNMIN.

  PARINFO should be an array of structures, one for each parameter.
  Each parameter is associated with one element of the array, in
  numerical order.  The structure can have the following entries
  (none are required):

     .VALUE - the starting parameter value (but see the START_PARAMS
              parameter for more information).

     .FIXED - a boolean value, whether the parameter is to be held
              fixed or not.  Fixed parameters are not varied by
              TNMIN, but are passed on to MYFUNCT for evaluation.

     .LIMITED - a two-element boolean array.  If the first/second
                element is set, then the parameter is bounded on the
                lower/upper side.  A parameter can be bounded on both
                sides.  Both LIMITED and LIMITS must be given
                together.

     .LIMITS - a two-element float or double array.  Gives the
               parameter limits on the lower and upper sides,
               respectively.  Zero, one or two of these values can be
               set, depending on the values of LIMITED.  Both LIMITED
               and LIMITS must be given together.

     .PARNAME - a string, giving the name of the parameter.  The
                fitting code of TNMIN does not use this tag in any
                way.

     .STEP - the step size to be used in calculating the numerical
             derivatives.  If set to zero, then the step size is
             computed automatically.  Ignored when AUTODERIVATIVE=0.

     .MPSIDE - the sidedness of the finite difference when computing
               numerical derivatives.  This field can take four
               values:

                  0 - one-sided derivative computed automatically
                  1 - one-sided derivative (f(x+h) - f(x)  )/h
                 -1 - one-sided derivative (f(x)   - f(x-h))/h
                  2 - two-sided derivative (f(x+h) - f(x-h))/(2*h)

              Where H is the STEP parameter described above.  The
              &quot;automatic&quot; one-sided derivative method will chose a
              direction for the finite difference which does not
              violate any constraints.  The other methods do not
              perform this check.  The two-sided method is in
              principle more precise, but requires twice as many
              function evaluations.  Default: 0.

     .TIED - a string expression which &quot;ties&quot; the parameter to other
             free or fixed parameters.  Any expression involving
             constants and the parameter array P are permitted.
             Example: if parameter 2 is always to be twice parameter
             1 then use the following: parinfo(2).tied = '2 * P(1)'.
             Since they are totally constrained, tied parameters are
             considered to be fixed; no errors are computed for them.
             [ NOTE: the PARNAME can't be used in expressions. ]

  Future modifications to the PARINFO structure, if any, will involve
  adding structure tags beginning with the two letters &quot;MP&quot; or &quot;TN&quot;.
  Therefore programmers are urged to avoid using tags starting with
  these two combinations of letters; otherwise they are free to
  include their own fields within the PARINFO structure, and they
  will be ignored.

  PARINFO Example:
  parinfo = replicate({value:0.D, fixed:0, limited:[0,0], $
                       limits:[0.D,0]}, 5)
  parinfo(0).fixed = 1
  parinfo(4).limited(0) = 1
  parinfo(4).limits(0)  = 50.D
  parinfo(*).value = [5.7D, 2.2, 500., 1.5, 2000.]

  A total of 5 parameters, with starting values of 5.7,
  2.2, 500, 1.5, and 2000 are given.  The first parameter
  is fixed at a value of 5.7, and the last parameter is
  constrained to be above 50.


 INPUTS:

   MYFUNCT - a string variable containing the name of the function to
             be minimized (see USER FUNCTION above).  The IDL routine
             should return the value of the function and optionally
             its gradients.

   X - An array of starting values for each of the parameters of the
       model.

       This parameter is optional if the PARINFO keyword is used.
       See above.  The PARINFO keyword provides a mechanism to fix or
       constrain individual parameters.  If both X and PARINFO are
       passed, then the starting *value* is taken from X, but the
       *constraints* are taken from PARINFO.


 RETURNS:

   Returns the array of best-fit parameters.


 KEYWORD PARAMETERS:

   AUTODERIVATIVE - If this is set, derivatives of the function will
                    be computed automatically via a finite
                    differencing procedure.  If not set, then MYFUNCT
                    must provide the (analytical) derivatives.
                    Default: 0 (analytical derivatives required)

   BESTMIN - upon return, the best minimum function value that TNMIN
             could find.

   EPSABS - a nonnegative real variable.  Termination occurs when the
            absolute error between consecutive iterates is at most
            EPSABS.  Note that using EPSREL is normally preferable
            over EPSABS, except in cases where ABS(F) is much larger
            than 1 at the optimal point.  A value of zero indicates
            the absolute error test is not applied.  If EPSABS is
            specified, then both EPSREL and EPSABS tests are applied;
            if either succeeds then termination occurs.
            Default: 0 (i.e., only EPSREL is applied).

   EPSREL - a nonnegative input variable. Termination occurs when the
            relative error between two consecutive iterates is at
            most EPSREL.  Therefore, EPSREL measures the relative
            error desired in the function.  An additional, more
            lenient, stopping condition can be applied by specifying
            the EPSABS keyword.
            Default: 100 * Machine Precision

   ERRMSG - a string error or warning message is returned.

   FGUESS - provides the routine a guess to the minimum value.
            Default: 0

   FUNCTARGS - A structure which contains the parameters to be passed
               to the user-supplied function specified by MYFUNCT via
               the _EXTRA mechanism.  This is the way you can pass
               additional data to your user-supplied function without
               using common blocks.

               Consider the following example:
                if FUNCTARGS = { XVAL:[1.D,2,3], YVAL:[1.D,4,9]}
                then the user supplied function should be declared
                like this:
                FUNCTION MYFUNCT, P, XVAL=x, YVAL=y

               By default, no extra parameters are passed to the
               user-supplied function.

   ITERARGS - The keyword arguments to be passed to ITERPROC via the
              _EXTRA mechanism.  This should be a structure, and is
              similar in operation to FUNCTARGS.
              Default: no arguments are passed.

   ITERDERIV - Intended to print function gradient information.  If
               set, then the ITERDERIV keyword is set in each call to
               ITERPROC.  In the default ITERPROC, parameter values
               and gradient information are both printed when this
               keyword is set.

   ITERPROC - The name of a procedure to be called upon each NPRINT
              iteration of the TNMIN routine.  It should be declared
              in the following way:

              PRO ITERPROC, MYFUNCT, p, iter, fnorm, FUNCTARGS=fcnargs, $
                PARINFO=parinfo, QUIET=quiet, _EXTRA=extra
                ; perform custom iteration update
              END

              ITERPROC must accept the _EXTRA keyword, in case of
              future changes to the calling procedure.

              MYFUNCT is the user-supplied function to be minimized,
              P is the current set of model parameters, ITER is the
              iteration number, and FUNCTARGS are the arguments to be
              passed to MYFUNCT.  FNORM is should be the function
              value.  QUIET is set when no textual output should be
              printed.  See below for documentation of PARINFO.

              In implementation, ITERPROC can perform updates to the
              terminal or graphical user interface, to provide
              feedback while the fit proceeds.  If the fit is to be
              stopped for any reason, then ITERPROC should set the
              common block variable ERROR_CODE to negative value
              between -15 and -1 (see TNMIN_ERROR common block
              below).  In principle, ITERPROC should probably not
              modify the parameter values, because it may interfere
              with the algorithm's stability.  In practice it is
              allowed.

              Default: an internal routine is used to print the
                       parameter values.

   MAXITER - The maximum number of iterations to perform.  If the
             number is exceeded, then the STATUS value is set to 5
             and TNMIN returns.
             Default: 200 iterations

   MAXIMIZE - If set, the function is maximized instead of
              minimized.

   MAXNFEV - The maximum number of function evaluations to perform.
             If the number is exceeded, then the STATUS value is set
             to -17 and TNMIN returns.  A value of zero indicates no
             maximum.
             Default: 0 (no maximum)

   NFEV - upon return, the number of MYFUNCT function evaluations
          performed.

   NITER - upon return, number of iterations completed.

   NPRINT - The frequency with which ITERPROC is called.  A value of
            1 indicates that ITERPROC is called with every iteration,
            while 2 indicates every other iteration, etc.
            Default value: 1

   PARINFO - Provides a mechanism for more sophisticated constraints
             to be placed on parameter values.  When PARINFO is not
             passed, then it is assumed that all parameters are free
             and unconstrained.  Values in PARINFO are never modified
             during a call to TNMIN.

             See description above for the structure of PARINFO.

             Default value:  all parameters are free and unconstrained.

   QUIET - set this keyword when no textual output should be printed
           by TNMIN

   STATUS - an integer status code is returned.  All values greater
            than zero can represent success (however STATUS EQ 5 may
            indicate failure to converge).  Gaps in the numbering
            system below are to maintain compatibility with MPFIT.
            Upon return, STATUS can have one of the following values:

        -18  a fatal internal error occurred during optimization.

        -17  the maximum number of function evaluations has been
             reached without convergence.

        -16  a parameter or function value has become infinite or an
             undefined number.  This is usually a consequence of
             numerical overflow in the user's function, which must be
             avoided.

        -15 to -1
             these are error codes that either MYFUNCT or ITERPROC
             may return to terminate the fitting process (see
             description of MPFIT_ERROR common below).  If either
             MYFUNCT or ITERPROC set ERROR_CODE to a negative number,
             then that number is returned in STATUS.  Values from -15
             to -1 are reserved for the user functions and will not
             clash with MPFIT.

	   0  improper input parameters.

	   1  convergence was reached.

          2-4 (RESERVED)

	   5  the maximum number of iterations has been reached

          6-8 (RESERVED)


 EXAMPLE:

   FUNCTION F, X, DF, _EXTRA=extra  ;; *** MUST ACCEPT KEYWORDS
     F  = (X(0)-1)^2 + (X(1)+7)^2
     DF = [ 2D * (X(0)-1), 2D * (X(1)+7) ] ; Gradient
     RETURN, F
   END

   P = TNMIN('F', [0D, 0D], BESTMIN=F0)
   Minimizes the function F(x0,x1) = (x0-1)^2 + (x1+7)^2.


 COMMON BLOCKS:

   COMMON TNMIN_ERROR, ERROR_CODE

     User routines may stop the fitting process at any time by
     setting an error condition.  This condition may be set in either
     the user's model computation routine (MYFUNCT), or in the
     iteration procedure (ITERPROC).

     To stop the fitting, the above common block must be declared,
     and ERROR_CODE must be set to a negative number.  After the user
     procedure or function returns, TNMIN checks the value of this
     common block variable and exits immediately if the error
     condition has been set.  By default the value of ERROR_CODE is
     zero, indicating a successful function/procedure call.


 REFERENCES:

   TRUNCATED-NEWTON METHOD, TN.F
      Stephen G. Nash, Operations Research and Applied Statistics
      Department
      http://www.netlib.org/opt/tn

   Nash, S. G. 1984, &quot;Newton-Type Minimization via the Lanczos
      Method,&quot; SIAM J. Numerical Analysis, 21, p. 770-778


 MODIFICATION HISTORY:
   Derived from TN.F by Stephen Nash with many changes and additions,
      to conform to MPFIT paradigm, 19 Jan 1999, CM
   Changed web address to COW, 25 Sep 1999, CM
   Alphabetized documented keyword parameters, 02 Oct 1999, CM
   Changed to ERROR_CODE for error condition, 28 Jan 2000, CM
   Continued and fairly major improvements (CM, 08 Jan 2001):
      - calling of user procedure is now concentrated in TNMIN_CALL,
        and arguments are reduced by storing a large number of them
        in common blocks;
      - finite differencing is done within TNMIN_CALL; added
        AUTODERIVATIVE=1 so that finite differencing can be enabled,
        both one and two sided;
      - a new procedure to parse PARINFO fields, borrowed from MPFIT;
        brought PARINFO keywords up to date with MPFIT;
      - go through and check for float vs. double discrepancies;
      - add explicit MAXIMIZE keyword, and support in TNMIN_CALL and
        TNMIN_DEFITER to print the correct values in that case;
        TNMIN_DEFITER now prints function gradient values if
        requested;
      - convert to common-based system of MPFIT for storing machine
        constants; revert TNMIN_ENORM to simple sum of squares, at
        least for now;
      - remove limit on number of function evaluations, at least for
        now, and until I can understand what happens when we do
        numerical derivatives.
   Further changes: more float vs double; disable TNMINSTEP for now;
     experimented with convergence test in case of function
     maximization, 11 Jan 2001, CM
   TNMINSTEP is parsed but not enabled, 13 Mar 2001
   Major code cleanups; internal docs; reduced commons, CM, 08 Apr
     2001
   Continued code cleanups; documentation; the STATUS keyword
     actually means something, CM, 10 Apr 2001
   Added reference to Nash paper, CM, 08 Feb 2002
   Fixed 16-bit loop indices, D. Schelgel, 22 Apr 2003
   Changed parens to square brackets because of conflicts with
     limits function.  K. Tolbert, 23 Feb 2005

 TODO
  - scale derivatives semi-automatically;
  - ability to scale and offset parameters;

  $Id: tnmin.pro,v 1.3 2006-02-07 22:38:32 schlegel Exp $
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mpfit/tnmin.pro">$IDLUTILS_DIR/pro/mpfit/tnmin.pro</a>)</strong></p>
<hr />
<h3 id="TRACESET2PIX">TRACESET2PIX</h3>
<p><a href="#TNMIN">[Previous Routine]</a></p>
<p><a href="#TRACESET2XY">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   traceset2pix

 PURPOSE:
   Use a traceset to find the pixel numbers corresponding to a certain postion

 CALLING SEQUENCE:
   pixpos = traceset2pix(tset, lambda, [nicoeff=nicoeff] )

 INPUTS:
   tset       - Structure containing trace set
   lambda     - Wavelengths at which to find X pixel position

 OPTIONAL KEYWORDS:
   nicoeff    - Number of coefficients to use in inversion; default to using
                2 more coefficients than for the forward trace set
                (e.g., TSET.NCOEFF+2)
   silent     - suppress messages to stdout

 OUTPUTS:
   pixpos     - Pixel positions corresponding to LAMBDA as
                an [Nlambda,Ntrace] array

 OPTIONAL OUTPUTS:

 COMMENTS:

 EXAMPLES:

 BUGS:

 PROCEDURES CALLED:
   djs_laxisgen()
   fchebyshev()
   flegendre()
   fpoly()
   traceset2xy
   xy2traceset

 REVISION HISTORY:
   09-Nov-1999  Written by David Schlegel, Ringberg.
   01-Dec-2000  added silent keyword - D. Finkbeiner
   10-Jul-2001  added polynomial option
   25-Jan-2011  added &quot;xjump&quot; handling, A. bolton, U. of Utah
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/trace/traceset2pix.pro">$IDLUTILS_DIR/pro/trace/traceset2pix.pro</a>)</strong></p>
<hr />
<h3 id="TRACESET2XY">TRACESET2XY</h3>
<p><a href="#TRACESET2PIX">[Previous Routine]</a></p>
<p><a href="#TRACESET_TRIM">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   traceset2xy

 PURPOSE:
   Convert from a trace set to an array of x,y positions

 CALLING SEQUENCE:
   traceset2xy, tset, xpos, ypos, [ /ignore_jump ]

 INPUTS:
   tset       - Structure containing trace set

 OPTIONAL KEYWORDS:
   xpos       - Input positions to evaluate YPOS; if not specified (or 0),
                then generate an [NX,NTRACE] array of each pixel position
   ignore_jump- If set, then ignore the XJUMPVAL values in the structure

 OUTPUTS:
   xpos       - X positions corresponding to YPOS
   ypos       - Y centers as an [nx,nTrace] array

 OPTIONAL OUTPUTS:

 COMMENTS:

 EXAMPLES:

 PROCEDURES CALLED:
   djs_laxisgen()
   flegendre()
   fpoly()

 REVISION HISTORY:
   19-May-1999  Written by David Schlegel, Princeton.
   01-Dec-2000  Handle scalar xpos correctly - D. Finkbeiner
   10-Jul-2001  Added fpoly- S.Burles
   25-Jan-2011  added &quot;xjump&quot; handling, A. bolton, U. of Utah
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/trace/traceset2xy.pro">$IDLUTILS_DIR/pro/trace/traceset2xy.pro</a>)</strong></p>
<hr />
<h3 id="TRACESET_TRIM">TRACESET_TRIM</h3>
<p><a href="#TRACESET2XY">[Previous Routine]</a></p>
<p><a href="#TRACE_CRUDE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   traceset_trim

 PURPOSE:
   Trim a trace set to a selected number of traces

 CALLING SEQUENCE:
   newset = traceset_trim(tset, [ indx ] )

 INPUTS:
   tset       - Structure containing trace set

 OPTIONAL KEYWORDS:
   indx       - Indices (0-indexed) of trace numbers to select; if not set,
                then simply return the input structure

 OUTPUTS:
   newset     - Trimmed trace set

 OPTIONAL OUTPUTS:

 COMMENTS:
   This function returns the input structure (which cannot be an array)
   with exactly the same structure except for the tag name COEFF.
   That particular value is trimmed to the values COEFF[*,INDX].
   In our &quot;trace set&quot; notation, this returns a sub-set of the traces.

 EXAMPLES:

 PROCEDURES CALLED:

 REVISION HISTORY:
   14-Jan-2004  Written by David Schlegel, Princeton.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/trace/traceset_trim.pro">$IDLUTILS_DIR/pro/trace/traceset_trim.pro</a>)</strong></p>
<hr />
<h3 id="TRACE_CRUDE">TRACE_CRUDE</h3>
<p><a href="#TRACESET_TRIM">[Previous Routine]</a></p>
<p><a href="#TRACE_FWEIGHT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   trace_crude

 PURPOSE:
   Create a crude trace set given one position (eg, a center) in each trace.

 CALLING SEQUENCE:
   xset = trace_crude( fimage, [ invvar, xstart=, ystart=, radius=, yset=, $
    nave=, nmed=, thresh=, maxerr=, maxshifte=, maxshift0=, xerr=, /double ] )

 INPUTS:
   fimage     - Image

 OPTIONAL INPUTS:
   invvar     - Inverse variance (weight) image
   xstart     - Initial guesses for X centers (one for each trace).
                If not set, then this code searches for all peaks at YSTART.
   ystart     - Y positions corresponding to &quot;xstart&quot; (expected as integers).
                There are three options for this parameter:
                (1) One element of YSTART for each value of XSTART,
                (2) A scalar value that is used for every XSTART, or
                (3) Not set, in which case the center row is used.
   radius     - Radius for centroiding; default to 3.0
   nmed       - Median filtering size down columns before performing trace;
                default to 1
   nave       - Averaging size down columns before performing trace;
                default to 5
   thresh     - Threshold for initial peak finding; if not set, then use
                1.0 times the median of the row(s) used for the initial peaks.
   maxerr     - Maximum error in centroid allowed for valid recentering;
                default to 0.2
   maxshifte  - Maximum shift in centroid allowed for valid recentering;
                default to 0.1
   maxshift0  - Maximum shift in centroid allowed for initial row;
                default to 0.5
   double     - If set, then return values are double-precision; values are
                already double-precision if FIMAGE or XSTART already are

 OUTPUTS:
   xset       - X centers for all traces

 OPTIONAL OUTPUTS:
   yset       - Y centers for all traces
   xerr       - Errors for XSET

 COMMENTS:

 EXAMPLES:

 BUGS:
   This linked C code is always single-precision, even if /DOUBLE is set.

 PROCEDURES CALLED:
   djs_laxisgen()
   splog

   Dynamic link to trace_crude.c

 REVISION HISTORY:
   14-May-1999  Written by David Schlegel, Princeton.
   12-Jul-1999  Added optional output YSET (DJS).
   06-Aug-1999  Added optional outpust XERR (DJS).
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/trace/trace_crude.pro">$IDLUTILS_DIR/pro/trace/trace_crude.pro</a>)</strong></p>
<hr />
<h3 id="TRACE_FWEIGHT">TRACE_FWEIGHT</h3>
<p><a href="#TRACE_CRUDE">[Previous Routine]</a></p>
<p><a href="#TRACE_GWEIGHT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   trace_fweight

 PURPOSE:
   Recenter a trace using flux-weighting centers.

 CALLING SEQUENCE:
   xnew = trace_fweight( fimage, xcen, ycen, [radius=radius, xerr=xerr, 
    invvar=invvar] )

 INPUTS:
   fimage     - Image
   xcen       - Initial guesses for X centers
   ycen       - Y positions corresponding to &quot;xcen&quot; (expected as integers)

 OPTIONAL KEYWORDS:
   radius     - Radius for centroiding; default to 3.0
   invvar     - Inverse variance of image used only in computing errors XERR.
                If not set, then INVVAR=1 is used.

 OUTPUTS:
   xnew       - New X centers

 OPTIONAL OUTPUTS:
   xerr       - Formal errors for XNEW; set equal to 999.0 if there are any
                masked pixels in a centroiding region (e.g., if INVVAR=0)

 COMMENTS:

 EXAMPLES:

 PROCEDURES CALLED:
   Dynamic link to trace_fweight.c

 REVISION HISTORY:
   24-Mar-1999  Written by David Schlegel, Princeton.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/trace/trace_fweight.pro">$IDLUTILS_DIR/pro/trace/trace_fweight.pro</a>)</strong></p>
<hr />
<h3 id="TRACE_GWEIGHT">TRACE_GWEIGHT</h3>
<p><a href="#TRACE_FWEIGHT">[Previous Routine]</a></p>
<p><a href="#TVIMAGE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   trace_gweight

 PURPOSE:
   Recenter a trace using gaussian-weighted centers.

 CALLING SEQUENCE:
   xnew = trace_fweight( fimage, xcen, ycen, [sigma=sigma, xerr=xerr, 
    invvar=invvar] )

 INPUTS:
   fimage     - Image
   xcen       - Initial guesses for X centers
   ycen       - Y positions corresponding to &quot;xcen&quot; (expected as integers)

 OPTIONAL KEYWORDS:
   radius     - Sigma in pixels; default to 1.0
   invvar     - Inverse variance of image used only in computing errors XERR.
                If not set, then INVVAR=1 is used.

 OUTPUTS:
   xnew       - New X centers

 OPTIONAL OUTPUTS:
   xerr       - Formal errors for XNEW; set equal to 999.0 if there are any
                masked pixels in a centroiding region (e.g., if INVVAR=0)

 COMMENTS:

 EXAMPLES:

 REVISION HISTORY:
   17-Jan-2000  Written by Scott Burles, Chicago
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/trace/trace_gweight.pro">$IDLUTILS_DIR/pro/trace/trace_gweight.pro</a>)</strong></p>
<hr />
<h3 id="TVIMAGE">TVIMAGE</h3>
<p><a href="#TRACE_GWEIGHT">[Previous Routine]</a></p>
<p><a href="#TYCHO_EPOCH">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
     TVIMAGE

 PURPOSE:
     This purpose of TVIMAGE is to enable the TV command in IDL
     to be a completely device-independent and color-decomposition-
     state independent command. On 24-bit displays color decomposition
     is always turned off for 8-bit images and on for 24-bit images.
     The color decomposition state is restored for those versions of
     IDL that support it (&gt; 5.2). Moreover, TVIMAGE adds features
     that TV lacks. For example, images can be positioned in windows
     using the POSITION keyword like other IDL graphics commands.
     TVIMAGE also supports the !P.MULTI system variable, unlike the
     TV command. TVIMAGE was written to work especially well in
     resizeable graphics windows. Note that if you wish to preserve
     the aspect ratio of images in resizeable windows, you should set
     the KEEP_ASPECT_RATIO keyword, described below. TVIMAGE works
     equally well on the display, in the PostScript device, and in
     the Printer and Z-Graphics Buffer devices. The TRUE keyword is
     set automatically to the correct value for 24-bit images, so you
     don't need to specify it when using TVIMAGE.

 AUTHOR:
       FANNING SOFTWARE CONSULTING:
       David Fanning, Ph.D.
       1645 Sheely Drive
       Fort Collins, CO 80526 USA
       Phone: 970-221-0438
       E-mail: davidf@dfanning.com
       Coyote's Guide to IDL Programming: http://www.dfanning.com/

 CATEGORY:
     Graphics display.

 CALLING SEQUENCE:

     TVIMAGE, image

 INPUTS:
     image:    A 2D or 3D image array. It should be byte data.

       x  :    The X position of the lower-left corner of the image.
               This parameter is only recognized if the TV keyword is set.
               If the Y position is not used, X is taken to be the image
               &quot;position&quot; in the window. See the TV command documenation
               for details.

       y  :    The Y position of the lower-left corner of the image.
               This parameter is only recognized if the TV keyword is set.

 KEYWORD PARAMETERS:

     BACKGROUND:   This keyword specifies the background color. Note that
               the keyword ONLY has effect if the ERASE keyword is also
               set or !P.MULTI is set to multiple plots and TVIMAGE is
               used to place the *first* plot.

     ERASE:    If this keyword is set an ERASE command is issued
               before the image is displayed. Note that the ERASE
               command puts the image on a new page in PostScript
               output.

     _EXTRA:   This keyword picks up any TV keywords you wish to use.

     HALF_HALF: If set, will tell CONGRID to extrapolate a *half* row
               and column on either side, rather than the default of
               one full row/column at the ends of the array.  If you
               are interpolating images with few rows, then the
               output will be more consistent with this technique.
               This keyword is intended as a replacement for
               MINUS_ONE, and both keywords probably should not be
               used in the same call to CONGRID.

     KEEP_ASPECT_RATIO: Normally, the image will be resized to fit the
               specified position in the window. If you prefer, you can
               force the image to maintain its aspect ratio in the window
               (although not its natural size) by setting this keyword.
               The image width is fitted first. If, after setting the
               image width, the image height is too big for the window,
               then the image height is fitted into the window. The
               appropriate values of the POSITION keyword are honored
               during this fitting process. Once a fit is made, the
               POSITION coordiates are re-calculated to center the image
               in the window. You can recover these new position coordinates
               as the output from the POSITION keyword.

     MARGIN:   A single value, expressed as a normalized coordinate, that
               can easily be used to calculate a position in the window.
               The margin is used to calculate a POSITION that gives
               the image an equal margin around the edge of the window.
               The margin must be a number in the range 0.0 to 0.333. This
               keyword is ignored if the POSITION or OVERPLOT keywords are
               used. It is also ignored when TVImage is executed in a
               multi-plot window, EXCEPT if it's value is zero. In this
               special case, the image will be drawn into its position in
               the multi-plot window with no margins whatsoever. (The
               default is to have a slight margin about the image to separate
               it from other images or graphics.

     MINUS_ONE: The value of this keyword is passed along to the CONGRID
               command. It prevents CONGRID from adding an extra row and
               column to the resulting array, which can be a problem with
               small image arrays.

     NOINTERPOLATION: Setting this keyword disables the default bilinear
               interpolation done to the image when it is resized. Nearest
               neighbor interpolation is done instead. This is preferred
               when you do not wish to change the pixel values of the image.
               This keyword must be set, for example, when you are displaying
               GIF files that come with their own non-IDL color table vectors.

     NORMAL:   Setting this keyword means image position coordinates x and y
               are interpreted as being in normalized coordinates. This keyword
               is only valid if the TV keyword is set.

     OVERPLOT: Setting this keyword causes the POSITION keyword to be ignored
               and the image is positioned in the location established by the
               last graphics command. For example:

                    Plot, Findgen(11), Position=[0.1, 0.3, 0.8, 0.95]
                    TVImage, image, /Overplot

     POSITION: The location of the image in the output window. This is
               a four-element floating array of normalized coordinates of
               the type given by !P.POSITION or the POSITION keyword to
               other IDL graphics commands. The form is [x0, y0, x1, y1].
               The default is [0.0, 0.0, 1.0, 1.0]. Note that this can
               be an output parameter if the KEEP_ASPECT_RATIO keyword is
               used.

     TV:       Setting this keyword makes the TVIMAGE command work much
               like the TV command, although better. That is to say, it
               will still set the correct DECOMPOSED state depending upon
               the kind of image to be displayed (8-bit or 24-bit). It will
               also allow the image to be &quot;positioned&quot; in the window by
               specifying the coordinates of the lower-left corner of the
               image. The NORMAL keyword is activated when the TV keyword
               is set, which will indicate that the position coordinates
               are given in normalized coordinates rather than device
               coordinates.

               Setting this keyword will ensure that the keywords
               KEEP_ASPECT_RATIO, MARGIN, MINUS_ONE, MULTI, and POSITION
               are ignored.

 OUTPUTS:
     None.

 SIDE EFFECTS:
     Unless the KEEP_ASPECT_RATIO keyword is set, the displayed image
     may not have the same aspect ratio as the input data set.

 RESTRICTIONS:
     If the POSITION keyword and the KEEP_ASPECT_RATIO keyword are
     used together, there is an excellent chance the POSITION
     parameters will change. If the POSITION is passed in as a
     variable, the new positions will be returned in the same variable
     as an output parameter.

     If a 24-bit image is displayed on an 8-bit display, the
     24-bit image must be converted to an 8-bit image and the
     appropriate color table vectors. This is done with the COLOR_QUAN
     function. The TVIMAGE command will load the color table vectors
     and set the NOINTERPOLATION keyword if this is done. Note that the
     resulting color table vectors are normally incompatible with other
     IDL-supplied color tables. Hence, other graphics windows open at
     the time the image is display are likely to look strange.

 EXAMPLE:
     To display an image with a contour plot on top of it, type:

        filename = FILEPATH(SUBDIR=['examples','data'], 'worldelv.dat')
        image = BYTARR(360,360)
        OPENR, lun, filename, /GET_LUN
        READU, lun, image
        FREE_LUN, lun

        TVIMAGE, image, POSITION=thisPosition, /KEEP_ASPECT_RATIO
        CONTOUR, image, POSITION=thisPosition, /NOERASE, XSTYLE=1, $
            YSTYLE=1, XRANGE=[0,360], YRANGE=[0,360], NLEVELS=10

     To display four images in a window without spacing between them:

     !P.Multi=[0,2,2]
     TVImage, image, Margin=0
     TVImage, image, Margin=0
     TVImage, image, Margin=0
     TVImage, image, Margin=0
     !P.Multi = 0

 MODIFICATION HISTORY:
      Written by:     David Fanning, 20 NOV 1996.
      Fixed a small bug with the resizing of the image. 17 Feb 1997. DWF.
      Removed BOTTOM and NCOLORS keywords. This reflects my growing belief
         that this program should act more like TV and less like a &quot;color
         aware&quot; application. I leave &quot;color awareness&quot; to the program
         using TVIMAGE. Added 24-bit image capability. 15 April 1997. DWF.
      Fixed a small bug that prevented this program from working in the
          Z-buffer. 17 April 1997. DWF.
      Fixed a subtle bug that caused me to think I was going crazy!
          Lession learned: Be sure you know the *current* graphics
          window! 17 April 1997. DWF.
      Added support for the PRINTER device. 25 June 1997. DWF.
      Extensive modifications. 27 Oct 1997. DWF
          1) Removed PRINTER support, which didn't work as expected.
          2) Modified Keep_Aspect_Ratio code to work with POSITION keyword.
          3) Added check for window-able devices (!D.Flags AND 256).
          4) Modified PostScript color handling.
      Craig Markwart points out that Congrid adds an extra row and column
          onto an array. When viewing small images (e.g., 20x20) this can be
          a problem. Added a Minus_One keyword whose value can be passed
          along to the Congrid keyword of the same name. 28 Oct 1997. DWF
      Changed default POSITION to fill entire window. 30 July 1998. DWF.
      Made sure color decomposition is OFF for 2D images. 6 Aug 1998. DWF.
      Added limited PRINTER portrait mode support. The correct aspect ratio
          of the image is always maintained when outputting to the
          PRINTER device and POSITION coordinates are ignored. 6 Aug 1998. DWF
      Removed 6 August 98 fixes (Device, Decomposed=0) after realizing that
          they interfere with operation in the Z-graphics buffer. 9 Oct 1998. DWF
      Added a MARGIN keyword. 18 Oct 1998. DWF.
      Re-established Device, Decomposed=0 keyword for devices that
         support it. 18 Oct 1998. DWF.
      Added support for the !P.Multi system variable. 3 March 99. DWF
      Added DEVICE, DECOMPOSED=1 command for all 24-bit images. 2 April 99. DWF.
      Added ability to preserve DECOMPOSED state for IDL 5.2 and higher. 4 April 99. DWF.
      Added TV keyword to allow TVIMAGE to work like the TV command. 11 May 99. DWF.
      Added the OVERPLOT keyword to allow plotting on POSITION coordinates
         estabished by the preceding graphics command. 11 Oct 99. DWF.
      Added automatic recognition of !P.Multi. Setting MULTI keyword is no
         longer required. 18 Nov 99. DWF.
      Added NOINTERPOLATION keyword so that nearest neighbor interpolation
         is performed rather than bilinear. 3 Dec 99. DWF
      Changed ON_ERROR condition from 1 to 2. 19 Dec 99. DWF.
      Added Craig Markwardt's CMCongrid program and removed RSI's. 24 Feb 2000. DWF.
      Added HALF_HALF keyword to support CMCONGRID. 24 Feb 2000. DWF.
      Fixed a small problem with image start position by adding ROUND function. 19 March 2000. DWF.
      Updated the PRINTER device code to take advantage of available keywords. 2 April 2000. DWF.
      Reorganized the code to handle 24-bit images on 8-bit displays better. 2 April 2000. DWF.
      Added BACKGROUND keyword. 20 April 2000. DWF.
      Fixed a small problem in where the ERASE was occuring. 6 May 2000. DWF.
      Rearranged the PLOT part of code to occur before decomposition state
         is changed to fix Background color bug in multiple plots. 23 Sept 2000. DWF.
      Removed MULTI keyword, which is no longer needed. 23 Sept 2000. DWF.
      Fixed a small problem with handling images that are slices from 3D image cubes. 5 Oct 2000. DWF.
      Added fix for brain-dead Macs from Ben Tupper that restores Macs ability to
         display images. 8 June 2001. DWF.
      Fixed small problem with multiple plots and map projections. 29 June 2003. DWF.
      Converted all array subscripts to square brackets. 29 June 2003. DWF.
      Removed obsolete STR_SEP and replaced with STRSPLIT. 27 Oct 2004. DWF.
      Small modification at suggestion of Karsten Rodenacker to increase size of
         images in !P.MULTI mode. 8 December 2004. DWF.
      Minor modifications on Karsten Rodenacker's own account concerning margination
         and TV behaviour. 8 December 2004. KaRo
      There was a small inconsistency in how the image was resized for PostScript as
         opposed to the display, which could occasionally result in a small black line
         to the right of the image. This is now handled consistently. 3 January 2007. DWF.
      Made a small change to CMCONGRID to permit nearest-neighbor interpolation for 3D arrays.
         Previously, any 24-bit image was interpolated, no matter the setting of the NOINTERP
         keyword. 22 April 2007. DWF.
      Updated the program for the 24-bit Z-buffer in IDL 6.4. 11 June 2007. DWF.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/plot/tvimage.pro">$IDLUTILS_DIR/pro/plot/tvimage.pro</a>)</strong></p>
<hr />
<h3 id="TYCHO_EPOCH">TYCHO_EPOCH</h3>
<p><a href="#TVIMAGE">[Previous Routine]</a></p>
<p><a href="#TYCHO_READ">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   tycho_epoch

 PURPOSE:
   Apply proper motion corrections to an epoch other than 2000
   for the Tycho-2 catalog.

 CALLING SEQUENCE:
   tycho_epoch, epoch, tycdat

 INPUTS:
   epoch:       New epoch
   tycdat:      Tycho-2 data structure

 OUTPUTS:
   tycdat:      (Modified)

 COMMENTS:
   The fields RAMDEG,DEMDEG are assumed to be the epoch 2000 positions
   in degrees.  These positions are moved according to proper motions
   given by PMRA,PMDE, which should be in milliarcsec/yr.

 BUGS:
   I have not handled the case where proper motion will move stars
   over the poles, i.e. to DEC &gt; 90 deg. ???

 PROCEDURES CALLED:

 REVISION HISTORY:
   Written D. Schlegel, 31 December 2002, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/astrom/tycho_epoch.pro">$IDLUTILS_DIR/pro/astrom/tycho_epoch.pro</a>)</strong></p>
<hr />
<h3 id="TYCHO_READ">TYCHO_READ</h3>
<p><a href="#TYCHO_EPOCH">[Previous Routine]</a></p>
<p><a href="#UCAC2PATCH_READ">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   tycho_read

 PURPOSE:
   Read the Tycho catalog (and generate IDL save sets)

 CALLING SEQUENCE:
   bigdat = tycho_read( [ racen=, deccen=, radius=, node=, incl=, hwidth=, $
    epoch=, columns= ] )

 OPTIONAL INPUTS:
   racen:       Central RA for selecting a region of stars [J2000 deg]
   deccen:      Central DEC for selecting a region of stars [J2000 deg]
   radius:      Radius for selecting a region of stars [deg]
   node:        Node of great circle for selecting a stripe of stars [deg]
   incl:        Inclination of great circle for selecting a stripe [deg]
   hwidth:      Half-width of great circle for selecting a stripe [deg]
   epoch:       If set, then apply proper motion correction from epoch 2000.
                to that set by EPOCH.  Note that equinox is always J2000.
   columns:     Select only these columns from the data files.
                Must include 'ramdeg' and 'demdeg' if a circular or
                great circle region is selected.
                Must also include 'pmra' and 'pmde' if EPOCH is specified.

 OUTPUTS:
   bigdat:      Returned structure containing data

 COMMENTS:
   To trim to objects within a circle, RACEN, DECCEN and RADIUS must
   all be set.

   To trim to objects along a great circle, NODE, INCL and HWIDTH must
   all be set.

   The equinox of the returned data is always J2000, even if the epoch
   has been chosen to be different.

   Note that 104,189 of the stars (4.3%) do not have a mean position,
   and RAMDEG,DEMDEG are set to exactly zero.  These stars still have
   an observed position in the RADEG,DEDEG fields, which are typically
   from epoch ~1991.  The expected proper motion from that epoch to
   2000 is approximately 0.08 arcsec for stars in this catalog, or
   about 0.01 arcsec/yr.

 BUGS:

 DATA FILES:
   The following data files can be copied from:
     http://adc.gsfc.nasa.gov/adc-cgi/cat.pl?/catalogs/1/1259/
   and should be put in a directory pointed to by the environment
   variable $TYCHO2_DIR:
     $TYCHO2_DIR/index.dat.gz
     $TYCHO2_DIR/tyc2_*.dat.gz
   These files may be either left compressed, or uncompressed.
   This code looks for either.

 INTERNAL SUPPORT ROUTINES:
   tyc_convert()
   tyc_rdindex
   tyc_append_list
   tyc_readascii()
   tyc_readfits()

 PROCEDURES CALLED:
   djs_diff_angle()
   djs_filepath()
   hip_epoch
   mrdfits()
   mwrfits
   radec_to_munu
   splog
   tycho_epoch

 REVISION HISTORY:
   Written D. Schlegel, 31 December 2002, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/astrom/tycho_read.pro">$IDLUTILS_DIR/pro/astrom/tycho_read.pro</a>)</strong></p>
<hr />
<h3 id="UCAC2PATCH_READ">UCAC2PATCH_READ</h3>
<p><a href="#TYCHO_READ">[Previous Routine]</a></p>
<p><a href="#UCAC3_READ_F">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   ucac2patch_read
 PURPOSE:
   Read the public UCAC-2 and incorporate USNO's r14 internal catalog
 CALLING SEQUENCE:
   ucac= ucac2patch_read(ra, dec, radius, node=, incl=, hwidth=)
 INPUTS:
   ra, dec - central location (J2000 deg)
   radius - search radius (deg)
 OPTIONAL INPUTS:
   node - node along Equator of stripe to extract, e.g. 95. (deg)
   incl - inclination from Equator of great circle stripe to extract (deg)
   hwidth - half-width around great circle to get stars from (deg)
 COMMENTS:
   Either specify [ra, dec, radius] OR specify [node, incl, hwidth]
   We read in both UCAC-2 and the r14 supplement, and keep UCAC-2 
    stars where they overlap.
   UCAC r14 is the internal USNO catalog for Dec&gt;+38 deg 
    used by the SDSS DR7.2 for astrometric calibration
   Outputs a structure with fields:
      .RAMDEG
      .DEMDEG
      .RMAG
      .E_RAM
      .E_DEM
      .NOBS
      .RFLAG
      .EPRAM
      .EPDEM
      .PMRA
      .PMDE
 REVISION HISTORY:
   12-Jan-2010 MRB, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/astrom/ucac2patch_read.pro">$IDLUTILS_DIR/pro/astrom/ucac2patch_read.pro</a>)</strong></p>
<hr />
<h3 id="UCAC3_READ_F">UCAC3_READ()</h3>
<p><a href="#UCAC2PATCH_READ">[Previous Routine]</a></p>
<p><a href="#UCAC3_READINDEX_F">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   ucac3_read()

 PURPOSE:
   Read the UCAC-3 catalog

 CALLING SEQUENCE:
   outdat = ucac3_read( [ racen=, deccen=, radius=, node=, incl=, hwidth=, $
    decrange= ] )

 INPUTS:

 OPTIONAL INPUTS:
   racen:       Central RA for selecting a region of stars [J2000 deg]
   deccen:      Central DEC for selecting a region of stars [J2000 deg]
   radius:      Radius for selecting a region of stars [deg]
   node:        Node of great circle for selecting a stripe of stars [deg]
   incl:        Inclination of great circle for selecting a stripe [deg]
   hwidth:      Half-width of great circle for selecting a stripe [deg]
   decrange   - Declination range for data; default to [-90,90] degrees

 OUTPUT:
   outdat     - Structure with UCAC data in its raw catalog format;
                return 0 if no stars found

 OPTIONAL OUTPUTS:

 COMMENTS:
   Either RACEN, DECCEN, RADIUS must be set, or NODE, INCL, HWIDTH.
   If all keywords are set, the the catalog is trimmed with both sets
   of conditions.

 EXAMPLES:
   a=ucac3_read(racen=180.,deccen=0.,radius=0.1)

 BUGS:

 PROCEDURES CALLED:
   cirrange
   djs_diff_angle()
   radec_to_munu
   ucac3_readindex()
   ucac3_readzone()

 REVISION HISTORY:
   16-Aug-2005  ucac_read.pro written by D. Schlegel (LBL)
   08-May-2011  adjusted for UCAC-3 by Michael Blanton (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/astrom/ucac3_read.pro">$IDLUTILS_DIR/pro/astrom/ucac3_read.pro</a>)</strong></p>
<hr />
<h3 id="UCAC3_READINDEX_F">UCAC3_READINDEX()</h3>
<p><a href="#UCAC3_READ_F">[Previous Routine]</a></p>
<p><a href="#UCAC3_READZONE_F">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   ucac3_readindex()

 PURPOSE:
   Return the indices for seeking within the raw UCAC-3 data files.

 CALLING SEQUENCE:
   uindex = ucac3_readindex()

 INPUTS:

 OPTIONAL INPUTS:

 OUTPUT:
   uindex     - Structure with raw UCAC data indices

 OPTIONAL OUTPUTS:

 COMMENTS:

 EXAMPLES:

 BUGS:

 PROCEDURES CALLED:
   readfmt

 REVISION HISTORY:
   27-May-2003  ucac_readindex.pro written by David Schlegel, Princeton.
   05-May-2011  altered for UCAC-3 by Michael Blanton, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/astrom/ucac3_readindex.pro">$IDLUTILS_DIR/pro/astrom/ucac3_readindex.pro</a>)</strong></p>
<hr />
<h3 id="UCAC3_READZONE_F">UCAC3_READZONE()</h3>
<p><a href="#UCAC3_READINDEX_F">[Previous Routine]</a></p>
<p><a href="#UCACR14_EXTRACT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   ucac3_readzone()

 PURPOSE:
   Read the raw UCAC-3 data files for a specific declination zone within
   a given RA range.

 CALLING SEQUENCE:
   outdat = ucac3_readzone(zone, ra_min, ra_max)

 INPUTS:
   zone       - UCAC zone number (corresponding to a particular declination)
   ra_min     - Minimum RA [deg]
   ra_max     - Maximum RA [deg]

 OPTIONAL INPUTS:

 OUTPUT:
   outdat     - Structure with UCAC data in its raw catalog format;
                return 0 if no stars found

 OPTIONAL OUTPUTS:

 COMMENTS:
   Quantities are de-coded to meaningful units, e.g. converting RA to degrees.

 PROCEDURES CALLED:
   ucac3_readindex()

 REVISION HISTORY:
   27-May-2003  ucac_readzone.pro written by David Schlegel, Princeton.
   05-May-2011  altered for UCAC-3, Michael Blanton, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/astrom/ucac3_readzone.pro">$IDLUTILS_DIR/pro/astrom/ucac3_readzone.pro</a>)</strong></p>
<hr />
<h3 id="UCACR14_EXTRACT">UCACR14_EXTRACT</h3>
<p><a href="#UCAC3_READZONE_F">[Previous Routine]</a></p>
<p><a href="#UCACR14_READ">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   ucacr14_extract
 PURPOSE:
   Convert UCAC-2 r14 data file into a set of RA/Dec chunk files
 CALLING SEQUENCE:
   ucacr14_extract
 COMMENTS:
   Requires that $UCACR14_DIR is set. 
   Reads $UCACR14_DIR/ucac_r14.pos
    (provided by Jeff Munn and Norbert Zacharias, the USNO internal 
     results for UCAC used by SDSS DR7.2, Dec&gt;38 only)
   Writes:
       $UCACR14_DIR/
 REVISION HISTORY:
   03-Jun-2011 MRB, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/astrom/ucacr14_extract.pro">$IDLUTILS_DIR/pro/astrom/ucacr14_extract.pro</a>)</strong></p>
<hr />
<h3 id="UCACR14_READ">UCACR14_READ</h3>
<p><a href="#UCACR14_EXTRACT">[Previous Routine]</a></p>
<p><a href="#UCAC_READ_F">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   ucacr14_read
 PURPOSE:
   Read in a region of UCAC r14 data 
 CALLING SEQUENCE:
   ucac= ucacr14_read(ra, dec, radius [, node=, incl=, hwidth= ])
 INPUTS:
   ra, dec - central location (J2000 deg)
   radius - search radius (deg)
 OPTIONAL INPUTS:
   node - node along Equator of stripe to extract, e.g. 95. (deg)
   incl - inclination from Equator of great circle stripe to extract (deg)
   hwidth - half-width around great circle to get stars from (deg)
 COMMENTS:
   UCAC r14 is the internal USNO catalog for Dec&gt;+38 deg 
     used by the SDSS DR7.2 for astrometric calibration
   Either specify [ra, dec, radius] OR specify [node, incl, hwidth]
 REVISION HISTORY:
   12-Jan-2010 MRB, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/astrom/ucacr14_read.pro">$IDLUTILS_DIR/pro/astrom/ucacr14_read.pro</a>)</strong></p>
<hr />
<h3 id="UCAC_READ_F">UCAC_READ()</h3>
<p><a href="#UCACR14_READ">[Previous Routine]</a></p>
<p><a href="#UCAC_READINDEX_F">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   ucac_read()

 PURPOSE:
   Read the UCAC catalog

 CALLING SEQUENCE:
   outdat = ucac_read( [ racen=, deccen=, radius=, node=, incl=, hwidth=, $
    decrange= ] )

 INPUTS:

 OPTIONAL INPUTS:
   racen:       Central RA for selecting a region of stars [J2000 deg]
   deccen:      Central DEC for selecting a region of stars [J2000 deg]
   radius:      Radius for selecting a region of stars [deg]
   node:        Node of great circle for selecting a stripe of stars [deg]
   incl:        Inclination of great circle for selecting a stripe [deg]
   hwidth:      Half-width of great circle for selecting a stripe [deg]
   decrange   - Declination range for data; default to [-90,90] degrees

 OUTPUT:
   outdat     - Structure with UCAC data in its raw catalog format;
                return 0 if no stars found

 OPTIONAL OUTPUTS:

 COMMENTS:
   Note that PMRA is in COORDINATE units so needs to be multiplied
    by cos(dec) to yield PROPER units

   Either RACEN, DECCEN, RADIUS must be set, or NODE, INCL, HWIDTH.
   If all keywords are set, the the catalog is trimmed with both sets
   of conditions.

 EXAMPLES:
   a=ucac_read(racen=180.,deccen=0.,radius=0.1)

 BUGS:

 PROCEDURES CALLED:
   cirrange
   djs_diff_angle()
   radec_to_munu
   ucac_readindex()
   ucac_readzone()

 REVISION HISTORY:
   16-Aug-2005  Written by D. Schlegel (LBL)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/astrom/ucac_read.pro">$IDLUTILS_DIR/pro/astrom/ucac_read.pro</a>)</strong></p>
<hr />
<h3 id="UCAC_READINDEX_F">UCAC_READINDEX()</h3>
<p><a href="#UCAC_READ_F">[Previous Routine]</a></p>
<p><a href="#UCAC_READZONE_F">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   ucac_readindex()

 PURPOSE:
   Return the indices for seeking within the raw UCAC data files.

 CALLING SEQUENCE:
   uindex = ucac_readindex()

 INPUTS:

 OPTIONAL INPUTS:

 OUTPUT:
   uindex     - Structure with raw UCAC data indices

 OPTIONAL OUTPUTS:

 COMMENTS:

 EXAMPLES:

 BUGS:

 PROCEDURES CALLED:
   readfmt

 REVISION HISTORY:
   27-May-2003  Written by David Schlegel, Princeton.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/astrom/ucac_readindex.pro">$IDLUTILS_DIR/pro/astrom/ucac_readindex.pro</a>)</strong></p>
<hr />
<h3 id="UCAC_READZONE_F">UCAC_READZONE()</h3>
<p><a href="#UCAC_READINDEX_F">[Previous Routine]</a></p>
<p><a href="#UKIDSS_CSV2FITS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   ucac_readzone()

 PURPOSE:
   Read the raw UCAC data files for a specific declination zone within
   a given RA range.

 CALLING SEQUENCE:
   outdat = ucac_readzone(zone, ra_min, ra_max)

 INPUTS:
   zone       - UCAC zone number (corresponding to a particular declination)
   ra_min     - Minimum RA [deg]
   ra_max     - Maximum RA [deg]

 OPTIONAL INPUTS:

 OUTPUT:
   outdat     - Structure with UCAC data in its raw catalog format;
                return 0 if no stars found

 OPTIONAL OUTPUTS:

 COMMENTS:
   Quantities are de-coded to meaningful units, e.g. converting RA to degrees.
   Note that PMRA is in COORDINATE units so needs to be multiplied
    by cos(dec) to yield PROPER units

 EXAMPLES:

 BUGS:
   The values of TWOMASS_PH,TWOMASS_CC do not appear to make any
   sense relative to the UCAC documentation.

 PROCEDURES CALLED:
   ucac_readindex()

 REVISION HISTORY:
   27-May-2003  Written by David Schlegel, Princeton.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/astrom/ucac_readzone.pro">$IDLUTILS_DIR/pro/astrom/ucac_readzone.pro</a>)</strong></p>
<hr />
<h3 id="UKIDSS_CSV2FITS">UKIDSS_CSV2FITS</h3>
<p><a href="#UCAC_READZONE_F">[Previous Routine]</a></p>
<p><a href="#UKIDSS_MATCH">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   ukidss_csv2fits
 PURPOSE:
   Convert UKIDSS CSV file to hierarchical FITS structure
 CALLING SEQUENCE:
   ukidss_csv2fits, csvfile, fitsbase
 COMMENTS:
   Requires that $UKIDSS_DIR is set. 
 REVISION HISTORY:
   12-Jan-2010 MRB, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/ukidss/ukidss_csv2fits.pro">$IDLUTILS_DIR/pro/ukidss/ukidss_csv2fits.pro</a>)</strong></p>
<hr />
<h3 id="UKIDSS_MATCH">UKIDSS_MATCH</h3>
<p><a href="#UKIDSS_CSV2FITS">[Previous Routine]</a></p>
<p><a href="#UKIDSS_READ">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   ukidss_match
 PURPOSE:
   Match a set of RA/Decs to UKIDSS
 CALLING SEQUENCE:
   ukidss_match, ra, dec, type=, match=, imatch=, nmatch= [, tol=, $
     columns=, /fill ])
 INPUTS:
   ra, dec - [N] coordinates to match to  (J2000 deg)
   radius - search radius (deg)
   type - which catalog to extract data from (e.g. 'las')
 OPTIONAL INPUTS:
   tol - matching tolerance, arcsec (default 2.)
   columns - which columns to return
 OPTIONAL KEYWORDS:
   /fill - if set, make match of length N in same order as RA/Dec
 OUTPUTS:
   match - [Nmatch] (or [N] if /fill set) object parameters for
           matched UKIDSS objects
   imatch - [Nmatch] (or [N] if /fill set) index in ra/dec list of
            corresponding object in &quot;match&quot;
   nmatch - number of good matches
 COMMENTS:
   Catalogs available are 'las' and 'dxs'
   See http://www.ukidss.org for documentation.
   Requires UKIDSS_CSV2FITS to have been run for the type of 
     catalog requested and for $UKIDSS_DIR to be set. 
   If /fill is set, null values are returned in rows 
    of &quot;match&quot; corresponding to non-matches, &quot;imatch&quot; is 
    just 0..N-1.  &quot;nmatch&quot; is still the number of actual matches.
   Only one match is allowed for each RA/Dec value and for each
    UKIDSS object.
 REVISION HISTORY:
   12-Jan-2010 MRB, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/ukidss/ukidss_match.pro">$IDLUTILS_DIR/pro/ukidss/ukidss_match.pro</a>)</strong></p>
<hr />
<h3 id="UKIDSS_READ">UKIDSS_READ</h3>
<p><a href="#UKIDSS_MATCH">[Previous Routine]</a></p>
<p><a href="#UNIXFIND">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   ukidss_read
 PURPOSE:
   Read in a region of UKIDSS data 
 CALLING SEQUENCE:
   objs= ukidss_read(ra, dec, radius, type= [, columns= ])
 INPUTS:
   ra, dec - central location (J2000 deg)
   radius - search radius (deg)
   type - which catalog to extract data from (e.g. 'las')
 OPTIONAL INPUTS:
   columns - which columns to return
 COMMENTS:
   Catalogs available are 'las' and 'dxs'
   See http://www.ukidss.org for documentation.
   Requires UKIDSS_CSV2FITS to have been run for the type of 
     catalog requested and for $UKIDSS_DIR to be set. 
 REVISION HISTORY:
   12-Jan-2010 MRB, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/ukidss/ukidss_read.pro">$IDLUTILS_DIR/pro/ukidss/ukidss_read.pro</a>)</strong></p>
<hr />
<h3 id="UNIXFIND">UNIXFIND</h3>
<p><a href="#UKIDSS_READ">[Previous Routine]</a></p>
<p><a href="#USNOB10_EXTRACT">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:  
       unixfind

 PURPOSE: 
       recursively search for filenames faster than IDL's FILE_SEARCH family.

 IDL's file_search, etc. actually do a stat() call on each examined file, 
 which can make them pretty painful  over NFS.
 This is a shortcut for a few simple cases. 

 Over-optimization? Well, here is the search which prodded me into
 writing this:

   fl1 = unixfind('/u/dss/spectro_v5','spFluxcalib*')
     7.2860990 seconds (after cache load)

   fl2 = file_search('/u/dss/spectro_v5', 'spFluxcalib*')
     280.20624 seconds (after cache load, right after the above)

 OK, OK, filling the cache can still be huge.

 CALLING SEQUENCE:
       filelist = unixfind(rootdir, pattern, [/onlydirs, /onlyfiles,
       maxdepth=N, /striproot, debug=debug])

 INPUTS:
       rootdir   - the name of the root directory to search. No
                   single quotes allowed. If this is a symbolic link
                   it is followed.
       pattern   - a &quot;find&quot;-compatible pattern. No single-quotes
                   allowed.

 OPTIONAL INPUTS:
 KEYWORD PARAMETERS:
       /onlydirs   - limit search to directory names (i.e. &quot;-type d&quot;)
       /onlyfiles  - limit search to file names (i.e. &quot;-type f&quot;)
       maxdepth=N  - limit search to N directories below the root.
       /striproot  - if set, remove the rootdir from the returned filenames.
       debug       - if &gt;0, print command which we spawn.
                     if &gt;1, do not execute it.
 OUTPUTS:
       Return the list of matched files or directories.
       Returns '' if no matches or on error.

 SIDE EFFECTS:
       Spawn, of, the, unix, devil.

 RESTRICTIONS:
       Input strings are passed to a unix command unchecked. Fools beware.
       Few of the glitzy find options supported.
       Lists of roots or patterns should be supported.

 EXAMPLE:
   platedirs = unixfind('/u/dss/spectro', '[0-9]*', maxdepth=1, /onlydirs)
   maps = unixfind('/u/dss/astrolog', 'plPlugMap*')

 MODIFICATION HISTORY:

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/unixfind.pro">$IDLUTILS_DIR/pro/misc/unixfind.pro</a>)</strong></p>
<hr />
<h3 id="USNOB10_EXTRACT">USNOB10_EXTRACT</h3>
<p><a href="#UNIXFIND">[Previous Routine]</a></p>
<p><a href="#USNO_CONE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   usnob10_extract

 PURPOSE:
   Extract information from USNO-B1.0 binary data files

 CALLING SEQUENCE:
   a = usnob10_extract(data)
   
 INPUTS:
   data    - ulong array [20, Nstar] read from binary file

 OUTPUTS:
   a       - IDL data structure with positions, proper motions, and 
                up to five magnitudes. 
   
 COMMENTS:
   See http://ftp.nofs.navy.mil/data/fchpix/usnob_format.html
     for descriptions of the fields

 REVISION HISTORY:
   2002-Nov-26   Written by Douglas Finkbeiner, Princeton

</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/astrom/usnob10_extract.pro">$IDLUTILS_DIR/pro/astrom/usnob10_extract.pro</a>)</strong></p>
<hr />
<h3 id="USNO_CONE">USNO_CONE</h3>
<p><a href="#USNOB10_EXTRACT">[Previous Routine]</a></p>
<p><a href="#USNO_READ">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
       usno_cone
+------------------------------------------------------------------------  
 PURPOSE:
       Determine RA,dec regions to read and call usno_readzone
+------------------------------------------------------------------------  
 INPUTS:
   catpath   - catalogue path
   racen     - RA of region center (J2000)    [degrees]
   deccen    - dec of region center (J2000)   [degrees]
   rad       - radius of region               [degrees]

 OPTIONAL INPUTS:
   cattype   - Either 'USNO-A' or 'USNO-B'

+------------------------------------------------------------------------  
 OUTPUTS:
   result    - float(3,N) array of results.  
                 data[0,*] = RA (in .01 arcsec)
                 data[1,*] = (dec+90) (in .01 arcsec)
                 data[2,*] = magnitudes packed in 32-bit int (see below)
+------------------------------------------------------------------------  
 COMMENTS:    
   calls usno_readzone
+------------------------------------------------------------------------  
 REVISION HISTORY
   Written  2000 Apr 15 by D. P. Finkbeiner
   2002-Nov-25  Split from usno_read.pro
                  and modified to work with USNO-B1.0 - DPF
+------------------------------------------------------------------------  
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/astrom/usno_cone.pro">$IDLUTILS_DIR/pro/astrom/usno_cone.pro</a>)</strong></p>
<hr />
<h3 id="USNO_READ">USNO_READ</h3>
<p><a href="#USNO_CONE">[Previous Routine]</a></p>
<p><a href="#USNO_READGC_F">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
+------------------------------------------------------------------------  
 NAME:
       usno_read
+------------------------------------------------------------------------  
 PURPOSE:
       Read star list from the USNO-A2.0 catalogue
+------------------------------------------------------------------------  
 INPUTS:
   racen     - RA of region center (J2000)    (degrees) (may be array)
   deccen    - dec of region center (J2000)   (degrees) (may be array)
   rad       - radius of region               (degrees) (may be array)
+------------------------------------------------------------------------  
 OUTPUTS:
   racat,    - (RA,dec) of stars in region (J2000)  (degrees)
     deccat 
   magb      - B magnitude of stars
   magr      - R magnitude
+------------------------------------------------------------------------  
 COMMENTS:    
   Reads US Naval Observatory catalogue v. A2.0 (50,000,000 stars)
     and returns all stars within radius &quot;rad&quot; of (racen,deccen)

   Coords returned are RA,dec J2000 at the epoch of the plates.
   Beware of high proper motion stars.  Typical astrometric error is
   0.25&quot;, but can be much worse.  Local errors should be about .15&quot;
 
   For information on the USNO-A2.0 see http://www.usno.navy.mil
+------------------------------------------------------------------------  
 BUGS:
   - Outputs described in header all wrong.
+------------------------------------------------------------------------  
 REVISION HISTORY
   Loosely based on starlist.pro by Doug Finkbeiner and John
   Moustakas, 1999 mar 26

   Written  2000 Apr 15 by D. P. Finkbeiner
   Modified 2000 Apr 18 to use dot product in final trim (DPF)
   Modified 2001 Jul 17 R &amp; B mags were reversed !  (DPF)

+------------------------------------------------------------------------  
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/astrom/usno_read.pro">$IDLUTILS_DIR/pro/astrom/usno_read.pro</a>)</strong></p>
<hr />
<h3 id="USNO_READGC_F">USNO_READGC()</h3>
<p><a href="#USNO_READ">[Previous Routine]</a></p>
<p><a href="#USNO_READZONE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   usno_readgc()

 PURPOSE:
   Read the UCAC data files for a great circle on the sky.

 CALLING SEQUENCE:
   outdat = usno_readgc(node=node, incl=incl, hwidth=, [ decrange= ])

 INPUTS:
   node       - Node of great circle [degrees]
   incl       - Inclination of great circle [degrees]
   hwidth     - Half-width of great circle for selecting a stripe [deg]

 OPTIONAL INPUTS:
   decrange   - Declination range for data; default to [-90,90] degrees

 OUTPUT:
   outdat     - Structure with UCAC data in its raw catalog format;
                return 0 if no stars found

 OPTIONAL OUTPUTS:

 COMMENTS:

 EXAMPLES:
   a=usno_readgc(node=95.,incl=40.,hwidth=2.5)
   a=usno_readgc(node=95.,incl=10.,hwidth=1.0)

 BUGS:

 PROCEDURES CALLED:
   radec_to_munu
   usno_readindex()
   usno_readzone()

 REVISION HISTORY:
   28-May-2003  Written by D. Schlegel and N. Padmanabhan, Princeton.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/astrom/usno_readgc.pro">$IDLUTILS_DIR/pro/astrom/usno_readgc.pro</a>)</strong></p>
<hr />
<h3 id="USNO_READZONE">USNO_READZONE</h3>
<p><a href="#USNO_READGC_F">[Previous Routine]</a></p>
<p><a href="#UV2LL">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
+------------------------------------------------------------------------  
 NAME:
       usno_readzone
+------------------------------------------------------------------------  
 PURPOSE:
       Read given RA range out of one deczone. (USNO-A or B)
+------------------------------------------------------------------------  
 INPUTS:
   catpath   - path to catalogue files (.cat and .acc)
   zone      - zone number (float, 1/10 degrees)
   ra0,ra1   - ra limits [deg]
   rec_len   - record length for each object [bytes] (read as ulongs)
   prefix    - filename prefix: 'zone' for USNOA, 'b' for USNOB

 KEYWORDS:
   swap_if... - USNOA is written little endian, B is big endian(!)
+------------------------------------------------------------------------  
 OUTPUTS:
   data      - float(rec_len/4,N) array of results.  
                 data[0,*] = RA (in .01 arcsec)
                 data[1,*] = (dec+90) (in .01 arcsec)
       USNO-A:
                 data[2,*] = magnitudes packed in 32-bit int
       USNO-B:   
                 data[2:19,*] = all kinds of stuff
+------------------------------------------------------------------------  
 COMMENTS:
   uses point_lun to skip to requested part of file.  Very fast. 

   Requests are padded by 1/10 the interpolation grid spacing.  This
     padding is trimmed unless that would yield a null result. 

   Warning - this routine interpolates file index positions
             and works only if the star distribution is approximately
             uniform (which it is).  
+------------------------------------------------------------------------
 MODIFICATION HISTORY:
  2002-Nov-25 Taken from usno_read by D. Finkbeiner, Princeton
               Also works for USNO-B1.0 now. 
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/astrom/usno_readzone.pro">$IDLUTILS_DIR/pro/astrom/usno_readzone.pro</a>)</strong></p>
<hr />
<h3 id="UV2LL">UV2LL</h3>
<p><a href="#USNO_READZONE">[Previous Routine]</a></p>
<p><a href="#VAGC_READ">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
  NAME:
    uv2ll

  PURPOSE:
    To convert from unit vectors to longitude/latitude

  CALLING SEQUENCE:
    lon_lat = uv2ll(uv)

  INPUT:
    (n,3) unit vector array

  OUTPUT:
    (n,2) longitude/latitude array

  SUBROUTINES CALLED:
    None

  REVISION HISTORY

  SPR 10476  Add Documentation  J.M. Gales  01/21/93
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/astrom/uv2ll.pro">$IDLUTILS_DIR/pro/astrom/uv2ll.pro</a>)</strong></p>
<hr />
<h3 id="VAGC_READ">VAGC_READ</h3>
<p><a href="#UV2LL">[Previous Routine]</a></p>
<p><a href="#VMID">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   vagc_read
 PURPOSE:
   Read the VAGC files and return objects around a location
 CALLING SEQUENCE:
   objs= vagc_read(ra, dec, radius [, type=])
 INPUTS:
   ra, dec - central location (J2000 deg)
   radius - search radius (deg)
 OPTIONAL INPUTS:
   type - which catalog to extract data from, assuming file exists of
          form $VAGC_REDUX/object_[type].fits [default 'sdss_imaging']
 OPTIONAL KEYWORDS:
   /silent - suppress mrdfits verbosity
 COMMENTS:
   Assumes that VAGC directory is located at $VAGC_REDUX,
   and that index file (object_radec.fits) has been created
 REVISION HISTORY:
   12-Jun-2008 MRB, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/sdss/vagc_read.pro">$IDLUTILS_DIR/pro/sdss/vagc_read.pro</a>)</strong></p>
<hr />
<h3 id="VMID">VMID</h3>
<p><a href="#VAGC_READ">[Previous Routine]</a></p>
<p><a href="#VMIDC">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   vmid
 PURPOSE:
   Return vector within a given polygon
 CALLING SEQUENCE:
   vec=vmid(polygon [, /allcaps, ra=, dec=])
 INPUTS:
   polygon - spherical polygon specification
 OPTIONAL INPUTS:
   /allcaps - don't check whether use_caps is set, just assume all
              caps are used
 OUTPUTS:
   vec - [3] location of vector inside
 OPTIONAL OUTPUTS:
   ra, dec - RA, Dec coords
 REVISION HISTORY:
   16-Sep-2002  Written by Mike Blanton, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mangle/vmid.pro">$IDLUTILS_DIR/pro/mangle/vmid.pro</a>)</strong></p>
<hr />
<h3 id="VMIDC">VMIDC</h3>
<p><a href="#VMID">[Previous Routine]</a></p>
<p><a href="#WCS_COORD2PIX">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   vmidc
 PURPOSE:
   Return vector at barycenter of polygon edges (not necessarily inside!)
 CALLING SEQUENCE:
   vec=vmidc(polygon)
 INPUTS:
   polygon - spherical polygon specification
 OPTIONAL INPUTS:
   /allcaps - don't check whether use_caps is set, just assume all
              caps are used
 OUTPUTS:
   vec - [3] location of barycenter vector
 REVISION HISTORY:
   16-Sep-2002  Written by Mike Blanton, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mangle/vmidc.pro">$IDLUTILS_DIR/pro/mangle/vmidc.pro</a>)</strong></p>
<hr />
<h3 id="WCS_COORD2PIX">WCS_COORD2PIX</h3>
<p><a href="#VMIDC">[Previous Routine]</a></p>
<p><a href="#WCS_GETVAL">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   wcs_coord2pix

 PURPOSE:
   Transform from a world coordinate system (WCS) to (x,y) pixel numbers.
   This function returns the ZERO-INDEXED pixel position.

   If the FRACTIONAL flag is set, then a fractional pixel position is
   returned.

 CALLING SEQUENCE:
   wcs_coord2pix, lonvec, latvec, hdr, xpix, ypix, [ /fractional ]

 INPUTS:
   lonvec:     Galactic longitude [degrees]
   latvec:     Galactic latitude [degrees]
   hdr:        FITS header data

 OPTIONAL INPUTS:
   fractional: Set this to return fractional rather than integer
               pixel numbers

 OUTPUTS:
   xpix:       X pixel position in range [0,naxis1-1]
   ypix:       Y pixel position in range [0,naxis2-1]

 COMMENTS:
   This conversion routine is based upon the FITS standard of Griesen &amp;
   Calabretta (1996).  Equation numbers refer to that paper.

   At present, only zenithal equal area (ZEA) projections are supported.

   A special case is included for the Lambert projection as defined by
   Schlegel, Finkbeiner &amp; Davis (1998).  Galactic latitude runs clockwise
   from X-axis for NGP, counterclockwise for SGP.
   (CRPIX1, CRPIX2) define the 1-indexed central pixel location of
   the pole.  For example, if CRPIX1=512, then the pole is exactly in
   the middle of 1-indexed pixel number 512; if CRPIX1=512.5, then
   the pole falls between pixel numbers 512 and 513.

 PROCEDURES CALLED:
   djs_angpos()
   sxpar()

 REVISION HISTORY:
   Written by D. Schlegel, 30 May 1996, Durham
   18-Mar-1999  Use of TEMPORARY function to improve memory use
                (D. Finkbeiner).
   30-Mar-1999  Re-written as a general forward conversion for world
                coordinate systems (WCS), though most not yet implemented
                (DJS, DPF).
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/dust/wcs_coord2pix.pro">$IDLUTILS_DIR/pro/dust/wcs_coord2pix.pro</a>)</strong></p>
<hr />
<h3 id="WCS_GETVAL">WCS_GETVAL</h3>
<p><a href="#WCS_COORD2PIX">[Previous Routine]</a></p>
<p><a href="#WEIGHTED_QUANTILE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   wcs_getval

 PURPOSE:
   Read value(s) from NGP+SGP polar projections.

 CALLING SEQUENCE:
   value = wcs_getval(files, lonvec, latvec, [ path=path, $
    /interp, /noloop, /verbose ] )

 INPUTS:
   files:      File name(s); if Lambert or ZEA projection, one can pass
               two file names where the first is used for northern points
               and the second for southern points
   lonvec:     Longitude(s) [degrees]
   latvec:     Latitude(s) [degrees]

 OPTIONAL KEYWORDS:
   path:       File name path; default to ''
   interp:     Set this flag to return a linearly interpolated value
               from the 4 nearest pixels
   noloop:     Set this flag to read all values at once without a FOR loop.
               This is a faster option for reading a large number of values,
               but requires reading an entire FITS image into memory.
               (Actually, the smallest possible sub-image is read.)
   verbose:    Set this flag for verbose output, printing pixel coordinates
               and map values.  Setting NOLOOP disables this option.

 OUTPUTS:
   value:      Value(s) from maps

 PROCEDURES CALLED:
   fxread
   headfits()
   sxpar()
   wcs_coord2pix

 REVISION HISTORY:
   31-Mar-1999  Modified from lambert_getval() - D. Schlegel, Princeton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/dust/wcs_getval.pro">$IDLUTILS_DIR/pro/dust/wcs_getval.pro</a>)</strong></p>
<hr />
<h3 id="WEIGHTED_QUANTILE">WEIGHTED_QUANTILE</h3>
<p><a href="#WCS_GETVAL">[Previous Routine]</a></p>
<p><a href="#WHERE_ARRAY">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   weighted_quantile
 PURPOSE:
   given a set of values and weights, returns weighted quantile(s)
 CALLING SEQUENCE:
   quantile= weighted_quantile(values,weights,quant=0.25)
 REVISION HISTORY
   2002-07-ish  written - Blanton
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/math/weighted_quantile.pro">$IDLUTILS_DIR/pro/math/weighted_quantile.pro</a>)</strong></p>
<hr />
<h3 id="WHERE_ARRAY">WHERE_ARRAY</h3>
<p><a href="#WEIGHTED_QUANTILE">[Previous Routine]</a></p>
<p><a href="#WHERE_POLYGONS_OVERLAP">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
       WHERE_ARRAY

 PURPOSE:
 	Return the indices of those elements in vector B which
       exist in vector A.  Basically a WHERE(B IN A)
       where B and A are 1 dimensional arrays.

 CATEGORY:
       Array

 CALLING SEQUENCE:
       result = WHERE_ARRAY(A,B)

 INPUTS:
       A       vector that might contains elements of vector B
       B       vector that we would like to know which of its
               elements exist in A

 OPTIONAL INPUTS:

 KEYWORD PARAMETERS:
       iA_in_B         return instead the indices of A that are in
                       (exist) in B

 OUTPUTS:
       Index into B of elements found in vector A.  If no
       matches are found -1 is returned.  If the function is called
       with incorrect arguments, a warning is displayed, and -2 is
       returned (see SIDE EFFECTS for more info)

 OPTIONAL OUTPUTS:

 COMMON BLOCKS:
               None

 SIDE EFFECTS:
       If the function is called incorrectly, a message is displayed
       to the screen, and the !ERR_STRING is set to the warning
       message.  No error code is set, because the program returns
       -2 already

 RESTRICTIONS:
       This should be used with only Vectors.  Matrices other then
       vectors will result in -2 being returned.  Also, A and B must
       be defined, and must not be strings!

 PROCEDURE:

 EXAMPLE:
       IDL&gt; A=[2,1,3,5,3,8,2,5]
       IDL&gt; B=[3,4,2,8,7,8]
       IDL&gt; result = where_array(a,b)
       IDL&gt; print,result
                  0           0           2           2           3           5
 SEE ALSO:
       where

 MODIFICATION HISTORY:
       Written by:     Dan Carr at RSI (command line version) 2/6/94
                       Stephen Strebel         3/6/94
                               made into a function, but really DAN did all
                               the thinking on this one!
                       Stephen Strebel         6/6/94
                               Changed method, because died with Strings (etc)
                               Used ideas from Dave Landers.  Fast TOO!
                       Strebel 30/7/94
                               fixed checking structure check
                       Smith, JD 9/1/98
                       	Minor Tweak to case of no overlapping members
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/where_array.pro">$IDLUTILS_DIR/pro/misc/where_array.pro</a>)</strong></p>
<hr />
<h3 id="WHERE_POLYGONS_OVERLAP">WHERE_POLYGONS_OVERLAP</h3>
<p><a href="#WHERE_ARRAY">[Previous Routine]</a></p>
<p><a href="#WHICH">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   where_polygons_overlap
 PURPOSE:
   Check which polygons overlap a given polygon
 CALLING SEQUENCE:
   where_polygons_overlap, origpoly, matchpoly, matches, nmatches, $
    [ areamatch= ]
 INPUTS:
   origpoly  - single polygon to check against
   matchpoly - [N] array of polygons to check against origpoly
 OPTIONAL INPUTS:
 OUTPUTS:
   matches - [M&lt;=N] indices of matching polygons (-1 if none)
   nmatches - number of matching polygons
 OPTIONAL INPUT/OUTPUTS:
   areamatch - Overlapping area (Sr)
 COMMENTS:
 EXAMPLES:
 BUGS:
 PROCEDURES CALLED:
 REVISION HISTORY:
   25-Sep-2003  Written by Mike Blanton, NYU
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mangle/where_polygons_overlap.pro">$IDLUTILS_DIR/pro/mangle/where_polygons_overlap.pro</a>)</strong></p>
<hr />
<h3 id="WHICH">WHICH</h3>
<p><a href="#WHERE_POLYGONS_OVERLAP">[Previous Routine]</a></p>
<p><a href="#WHICH_PIX_POLYGON">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
       WHICH

 PURPOSE: 
       To search for any file in the IDL !path that contains the
       user-supplied IDL routine (procedure or function) name.  Also
       returns compilation status of each routine (in IDL lingo,
       whether or not the routine is &quot;resolved&quot;.)

 CALLING SEQUENCE:
       WHICH, file

 INPUTS:
       FILE - file name to search for.  The suffix .pro will be
              appended if not included.

 KEYWORD PARAMETERS:
       None.

 OUTPUTS:
       None.

 COMMON BLOCKS:
       None.

 RESTRICTIONS: 
       The IDL !path is searched for file names that are simply the
       module (in IDL documentation, &quot;module&quot; and &quot;routine&quot; are used
       interchangeably) name with a &quot;.pro&quot; suffix appended to them.
       A module stored inside a file whose name is different than the
       module name (followed by a &quot;.pro&quot;) will not be found UNLESS
       that module happens to be the currently-resolved module!
       E.g., if the module &quot;pro test_proc&quot; lives in a file named
       &quot;dumb_name.pro&quot;, then it will not be found:

       IDL&gt; which, 'test_proc'
       Module TEST_PROC Not Compiled.
       % WHICH: test_proc.pro not found on IDL !path.

       unless it happens to be resolved:

       IDL&gt; .run dumb_name
       % Compiled module: TEST_PROC.
       IDL&gt; which, 'test_proc'
       Currently-Compiled Module TEST_PROC in File:
       /hvc/robishaw/dumb_name.pro

       However, this is terrible programming style and sooner or
       later, if you hide generically-named modules in
       inappropriately-named files, bad things will (deservedly)
       happen to you.

       The routine further assumes that a file named &quot;dumb_name.pro&quot;
       actually contains a module named &quot;dumb_name&quot;!  If it doesn't,
       then you are a bad programmer and should seek professional
       counseling.
 
 PROCEDURES CALLED:
       STRSPLIT(), WHICH_FIND_ROUTINE()

 EXAMPLES:
       You haven't yet resolved (compiled) the routine (module)
       DEFROI.  Let's look for it anyway:

         IDL&gt; which, 'defroi
         Module DEFROI Not Compiled.

         Other Files Containing Module DEFROI in IDL !path:
         /usr/local/rsi/idl/lib/defroi.pro

       For some reason you have two modules with the same name.
       (This can occur in libraries of IDL routines such as the
       Goddard IDL Astronomy User's Library; an updated version of a
       routine is stored in a special directory while the old version
       is stored in its original directory.) Let's see which version
       of the module ADSTRING we are currently using:

         IDL&gt; which, 'adstring.pro'
         Currently-Compiled Module ADSTRING in File:
         /hvc/robishaw/idl/goddard/pro/v5.4+/adstring.pro

         Other Files Containing Module ADSTRING in IDL !path:
         /hvc/robishaw/idl/goddard/pro/astro/adstring.pro

 NOTES:
       First, all currently-compiled procedures and functions are searched.
       Then the remainder of the IDL !path is searched.

 MODIFICATION HISTORY:
   30 May 2003  Written by Tim Robishaw, Berkeley
   17 Feb 2004  Fixed oddity where user tries to call a function as
                if it were a procedure, thus listing the module in both
                the Compiled Functions and Compiled Procedures list.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/which.pro">$IDLUTILS_DIR/pro/misc/which.pro</a>)</strong></p>
<hr />
<h3 id="WHICH_PIX_POLYGON">WHICH_PIX_POLYGON</h3>
<p><a href="#WHICH">[Previous Routine]</a></p>
<p><a href="#WINDOW_IMAGE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   which_pix_polygon

 PURPOSE:
   given an input structure and a set of polygons with simple pixel
   information, return which polygon each objects in the structure
   resides in

 CALLING SEQUENCE:
   whichpoly = which_pix_polygon(objs, bosspoly, pixres, [/verbose ] )

 INPUTS:
   objs - a structure with at least ra, dec set 
   bosspoly - BOSS polygons pixelated in the simple pixelization 
              (see the scheme in radec_to_simplepix.pro)
   pixres - the pixel resolution in the simple scheme

 OPTIONAL INPUTS:
   /verbose - send to print out pixel messages for logging

 OUTPUTS:
   whichpoly - which polygon each object in objs lies in
                                
 COMMENTS: 

 EXAMPLES:

 REQUIREMENTS:
   idlutils

 REVISION HISTORY:
   23-Mar-2011  Written by Adam D. Myers, UWyo
    9-Jun-2011  Modified by Martin White (UCB) to handle large pixel files.
    3-Jul-2011  Handle the (unlikely) case that just one object is passed
                           Adam D. Myers, UWyo
   17-Nov-2011  Added /verbose keyword, Adam D. Myers, Uwyo
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mangle/which_pix_polygon.pro">$IDLUTILS_DIR/pro/mangle/which_pix_polygon.pro</a>)</strong></p>
<hr />
<h3 id="WINDOW_IMAGE">WINDOW_IMAGE</h3>
<p><a href="#WHICH_PIX_POLYGON">[Previous Routine]</a></p>
<p><a href="#WISE_ASCII2FITS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   window_image
 PURPOSE:
   Given a set of mangle polygons, create a pixelized image of the 
   window defined by the polygons. 
 CALLING SEQUENCE:
   image=window_image(polygons [, nx=, ny=, /random])
 INPUTS:
   polygons - list of polygons
 OPTIONAL INPUTS:
   nx - number of ra pixels
   ny - number of dec pixels
   /random - fill image by assigning random points
 OUTPUTS:
 OPTIONAL INPUT/OUTPUTS:
 COMMENTS:
 EXAMPLES:
 BUGS:
 PROCEDURES CALLED:
 REVISION HISTORY:
   30-Nov-2002  Written by MRB (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mangle/window_image.pro">$IDLUTILS_DIR/pro/mangle/window_image.pro</a>)</strong></p>
<hr />
<h3 id="WISE_ASCII2FITS">WISE_ASCII2FITS</h3>
<p><a href="#WINDOW_IMAGE">[Previous Routine]</a></p>
<p><a href="#WISE_MATCH">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   wise_ascii2fits

 PURPOSE:
   Reformat the WISE catalog release as FITS binary table files

 CALLING SEQUENCE:
   wise_ascii2fits

 INPUTS:

 OPTIONAL INPUTS:
   platenums  - Plate

 OUTPUTS:

 OPTIONAL OUTPUTS:

 COMMENTS:
   The ASCII files in $WISE_DIR/ascii are converted to FITS binary table
   files in $WISE_DIR/fits, with the same naming convention 

 EXAMPLES:

 BUGS:
    NULL entries for integer values are not written as NULL in the FITS
    files, as I don't know how to do that with MWRFITS.
    NULL entries for floating-point values are written as NaN.

 DATA FILES:
    The input files are:
      $WISE_DIR/wise-allsky-cat-schema.txt
      $WISE_DIR/ascii/wise-allsky-cat-part??.gz
    The output files are:
      $WISE_DIR/fits/wise-allsky-cat-part??.fits
      $WISE_DIR/fits/wise-allsky-cat-part??-radec.fits
    where the latter file contains the RA,Dec coordinates per object only.

 PROCEDURES CALLED:

 REVISION HISTORY:
   18-Apr-2012  Written by D. Schlegel, LBL
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/wise/wise_ascii2fits.pro">$IDLUTILS_DIR/pro/wise/wise_ascii2fits.pro</a>)</strong></p>
<hr />
<h3 id="WISE_MATCH">WISE_MATCH</h3>
<p><a href="#WISE_ASCII2FITS">[Previous Routine]</a></p>
<p><a href="#WRITE_FITS_POLYGONS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   wise_match

 PURPOSE:
   Match a set of RA/Decs to WISE

 CALLING SEQUENCE:
   wise_match, ra, dec, [ tol=, match=, mdat=, nmatch=, _EXTRA= ]

 INPUTS:
   ra         - RA coordinate(s) in deg [N]
   dec        - Dec coordinate(s) in deg [N]

 OPTIONAL INPUTS:
   tol        - Matching radius in arcsec; default to 3 arcsec

 OUTPUTS:

 OPTIONAL OUTPUTS:
   match      - Structure with catalog matches [N]
   mdat       - Structure with matching distances [N]
                Elements are IFILE (file name), ROWS (0-indexed row),
                MATCHDIST (match distance in degrees)
   nmatch     - Number of matches
   _EXTRA     - Keywords for MRDFITS, such as COLUMNS=

 COMMENTS:

 EXAMPLES:

 BUGS:
    All string values are blank-padded to the same length for each tag,
      even if it should be a NULL entry.
    NULL entries for floating-point values are returned as NaN.
    NULL entries for integer-values are returned as 0.

    Only the closest match is found to each object.

    For matches against denser catalogs (such as SDSS), it would be more
    efficient to load all rows from the WISE catalog in chunks and seek
    in memory rather than on disk.

 DATA FILES:
      $WISE_DIR/fits/wise-allsky-cat-part??.fits
      $WISE_DIR/fits/wise-allsky-cat-part??-radec.fits

 PROCEDURES CALLED:

 REVISION HISTORY:
   18-Apr-2012  Written by D. Schlegel, LBL
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/wise/wise_match.pro">$IDLUTILS_DIR/pro/wise/wise_match.pro</a>)</strong></p>
<hr />
<h3 id="WRITE_FITS_POLYGONS">WRITE_FITS_POLYGONS</h3>
<p><a href="#WISE_MATCH">[Previous Routine]</a></p>
<p><a href="#WRITE_MANGLE_POLYGONS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   write_fits_polygons
 PURPOSE:
   Write a &quot;polygon&quot; format fits file from the IDL format
 CALLING SEQUENCE:
   write_fits_polygons, outfile, polygons [, hdr= ]
 INPUTS:
   outfile - output file name
   polygons - arrays of structures (eg those made by construct_field_polygon) 
 OPTIONAL INPUTS:
   hdr - put this hdr in 
 COMMENTS:
   The main point of this is to replace caps.x and caps.cm with 
   xcaps and cmcaps columns
 REVISION HISTORY:
   03-Dec-2002  Written by MRB (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mangle/write_fits_polygons.pro">$IDLUTILS_DIR/pro/mangle/write_fits_polygons.pro</a>)</strong></p>
<hr />
<h3 id="WRITE_MANGLE_POLYGONS">WRITE_MANGLE_POLYGONS</h3>
<p><a href="#WRITE_FITS_POLYGONS">[Previous Routine]</a></p>
<p><a href="#WRITE_REGIONS_POLYGONS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   write_mangle_polygons
 PURPOSE:
   Create a &quot;polygon&quot; format ascii file that mangle will understand
 CALLING SEQUENCE:
   write_mangle_polygons, outfile, polygons [, id, weight, str, unit=]
 INPUTS:
   outfile - output file name
   polygons - arrays of structures (eg those made by construct_field_polygon) 
 OPTIONAL INPUTS:
   id - array of id's for polygons (should be unique)
   weight - arrays of weights for each polygon
   str - area of each polygon?
   unit - if present, use this unit instead of opening another
 COMMENTS:
   The format is lossy --- it only outputs &quot;used&quot; caps, and it throws 
     away auxiliary information about each polygon.
   It also does NOT write out any pixel information
 REVISION HISTORY:
   07-Nov-2002  Written by MRB (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mangle/write_mangle_polygons.pro">$IDLUTILS_DIR/pro/mangle/write_mangle_polygons.pro</a>)</strong></p>
<hr />
<h3 id="WRITE_REGIONS_POLYGONS">WRITE_REGIONS_POLYGONS</h3>
<p><a href="#WRITE_MANGLE_POLYGONS">[Previous Routine]</a></p>
<p><a href="#WRITE_YANNY_POLYGONS">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   write_regions_polygons
 PURPOSE:
   Create a Regions format ascii file of spherical polygons
 CALLING SEQUENCE:
   write_regions_polygons, outfile, polygons [, unit=]
 INPUTS:
   outfile - output file name
   polygons - arrays of structures (eg those made by construct_field_polygon) 
 OPTIONAL INPUTS:
   unit - if present, use this unit instead of opening another
 COMMENTS:
   The format is lossy --- it only outputs &quot;used&quot; caps, and it throws 
   away auxiliary information about each polygon.
 REVISION HISTORY:
   07-Nov-2002  Written by MRB (NYU) (as write_mangle_polygons)
   19-May-2008  Rewritten for Regions format
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mangle/write_regions_polygons.pro">$IDLUTILS_DIR/pro/mangle/write_regions_polygons.pro</a>)</strong></p>
<hr />
<h3 id="WRITE_YANNY_POLYGONS">WRITE_YANNY_POLYGONS</h3>
<p><a href="#WRITE_REGIONS_POLYGONS">[Previous Routine]</a></p>
<p><a href="#WSEX">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   write_yanny_polygons
 PURPOSE:
   Write a &quot;polygon&quot; format Yanny file from the IDL format
 CALLING SEQUENCE:
   write_yanny_polygons, outfile, polygons [, hdr= ]
 INPUTS:
   outfile - output file name
   polygons - arrays of structures (eg those made by construct_field_polygon) 
 OPTIONAL INPUTS:
   hdr - put this hdr in 
 COMMENTS:
   The main point of this is to replace caps.x and caps.cm with 
   xcaps and cmcaps columns
 REVISION HISTORY:
   03-Dec-2002  Written by MRB (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/mangle/write_yanny_polygons.pro">$IDLUTILS_DIR/pro/mangle/write_yanny_polygons.pro</a>)</strong></p>
<hr />
<h3 id="WSEX">WSEX</h3>
<p><a href="#WRITE_YANNY_POLYGONS">[Previous Routine]</a></p>
<p><a href="#XY2TRACESET">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
       WSEX

 PURPOSE:
       Write out arbitrary SExtractor format catalogs, using native
       header information &amp; data themselves.  Correctly reads longs,
       strings, and doubles.  

 INPUTS:
       A SExtractor-format catalog

 OUTPUTS:
       Prints out a catalog file for the given structure

 COMMON BLOCKS:
       None.

 RESTRICTIONS:
       None.

 PROCEDURE:
       Use syntax
       wset,catalog,outfile='catalog.cat'

 COMMENTS:
       To do -- 
       . better error checking, e.g. for existing output filename,
       etc. 

 PROCEDURES USED:
       VALID_NUM

 MODIFICATION HISTORY:
       L. Moustakas '04feb11 - created
       J. Moustakas, 09jul08, UCSD - check for arrays in the input
         structure 
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/misc/wsex.pro">$IDLUTILS_DIR/pro/misc/wsex.pro</a>)</strong></p>
<hr />
<h3 id="XY2TRACESET">XY2TRACESET</h3>
<p><a href="#WSEX">[Previous Routine]</a></p>
<p><a href="#XYZ_TO_ANGLES">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   xy2traceset

 PURPOSE:
   Convert from an array of x,y positions to a trace set

 CALLING SEQUENCE:
   xy2traceset, xpos, ypos, tset, [ invvar=, func=func, ncoeff=ncoeff, $
    xmin=xmin, xmax=xmax, maxiter=maxiter, inputfunc=inputfunc, $
    inmask=inmask, outmask=outmask, yfit=yfit, inputans=inputans, $
    double=double, silent=silent, _EXTRA=EXTRA ]

 INPUTS:
   xpos       - X positions corresponding to YPOS as an [nx,Ntrace] array
   ypos       - Y centers as an [nx,ntrace] array

 OPTIONAL KEYWORDS:
   invvar     - Inverse variance for weighted fits.
   func       - Function for trace set; options are:
                'poly'
                'legendre'
                'chebyshev'
                'chebyshev_split'
                Default to 'legendre'
   ncoeff     - Number of coefficients in fit; default to 3
   xmin       - Explicitly set XMIN for trace set rather than using minimum
                in XPOS
   xmax       - Explicitly set XMAX for trace set rather than using maximum
                in XPOS
   maxiter    - Maximum number of rejection iterations; set to 0 for no
                rejection; default to 10.
   inmask     - Mask set to 1 for good points and 0 for rejected points;
                same dimensions as XPOS, YPOS.  Points rejected by INMASK
                are always rejected from the fits (the rejection is &quot;sticky&quot;),
                and will also be marked as rejected in OUTMASK.
   inputans   - ???
   inputfunc  - An array which matches the size of ypos, which is multiplied
                  to the normal function before SVD decomposition
   double     - If set, then the traceset will contain all double-precision
                values, which will occur anyway if XPOS, YPOS or INVVAR
                are double-precision
   silent     - Set to suppress print and splog outputs
   xjumplo    - x position locating start of an x discontinuity
   xjumphi    - x position locating end of that x discontinuity
   xjumpval   - magnitude of the discontinuity &quot;jump&quot; between those bounds
                (previous 3 keywords motivated by BOSS 2-phase readout)
   EXTRA      - Keywords passed to either the function FUNC, or DJS_REJECT().
                Note that keywords like MAXREJ relate to each individual trace.

 OUTPUTS:
   tset       - Structure containing trace set

 OPTIONAL OUTPUTS:
   outmask    - Mask set to 1 for good points and 0 for rejected points;
                same dimensions as XPOS, YPOS.
   yfit       - Fit values at each XPOS.

 COMMENTS:
   The fits are done to one trace at a time, where each trace is treated
   completely independently.

   Note that both MAXDEV and MAXSIG can be set for applying both rejection
   schemes at once.

   Additional keywords can be passed to the fitting functions with _EXTRA.
   By not setting any of these rejection keywords, no rejection is performed.

 EXAMPLES:

 BUGS:

 PROCEDURES CALLED:
   djs_reject()
   fchebyshev()
   fchebyshev_split()
   flegendre()
   fpoly()
   func_fit()

 REVISION HISTORY:
   19-May-1999  Written by David Schlegel, Princeton.
   04-Aug-1999  Added chebyshev option (DJS).
   02-Sep-2000  Modify to use rejection schemes in DJS_REJECT() (DJS).
   07-Dec-2000  Added /silent keyword (DPF)
   10-Jul-2001  Add polynomial option
   25-Jan-2011  Added &quot;xjump&quot; functionality for BOSS 2-phase readout
                (A. Bolton, U. of Utah)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/trace/xy2traceset.pro">$IDLUTILS_DIR/pro/trace/xy2traceset.pro</a>)</strong></p>
<hr />
<h3 id="XYZ_TO_ANGLES">XYZ_TO_ANGLES</h3>
<p><a href="#XY2TRACESET">[Previous Routine]</a></p>
<p><a href="#YANNY_DIFF">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
  xyz_to_angles
 PURPOSE:
  Convert Cartesian coordinates (x,y,z) to spherical coordinates
  (r,phi,theta).  The returned angles are in the following ranges:
    0 &lt;= phi &lt; 360
    0 &lt;= theta &lt;= 180
  where theta=0 corresponds to the N pole, and theta=180 is the S pole.
  Note that RA=phi and DEC=90-theta.
 BUGS:
  - May have divide by zero issues. But why would anyone run this
    with r=0??
 REVISION HISTORY:
  2005-09-10  tweaked - Hogg (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/coord/xyz_to_angles.pro">$IDLUTILS_DIR/pro/coord/xyz_to_angles.pro</a>)</strong></p>
<hr />
<h3 id="YANNY_DIFF">YANNY_DIFF</h3>
<p><a href="#XYZ_TO_ANGLES">[Previous Routine]</a></p>
<p><a href="#YANNY_FREE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   yanny_diff

 PURPOSE:
   Compare two Yanny files, optionally copying values from one to another.

 CALLING SEQUENCE:
   yanny_diff, filename1, filename2, [ outfile, $
    cardnames=, stnames=, /verbose, count=, errcode= ]

 INPUTS:
   filename1  - Yanny parameter file from which copy cards
   filename2  - Yanny parameter file to which copy cards

 OPTIONAL INPUTS:
   outfile    - If specified, then write the modified 2nd file to this file.
   stnames    - The Yanny structure names to compare between the two
                input files; if not set, then compare all structures that
                exist in the 2nd file.  These names are case-insensitive.
   cardnames  - The tag names in any structure to compare; if not set,
                then compare all tags that exist in the 2nd file.
                Note that if this is set to 'FOO', then that tag is
                compared (if it exists) between all specified structures.
                These names are case-insensitive.
   verbose    - If set, then explicitly print each change that is made;
                if not set, then simply print the number of changes made.

 OUTPUT:

 OPTIONAL OUTPUTS:
   count      - The total number of elements that differ.
   errcode    - Return 0 upon successful completion, non-zero otherwise.
                A code of -1 means that there were errors reading the
                input files.  A code of +1 means that the number of
                rows or elements in the input structures did not agree.
                In the latter case, changes are still made to any other
                structure elements where the numbers do agree.

 COMMENTS:

 EXAMPLES:
   Simply compare two opECalib files, printing any differences:
     IDL&gt; yanny_diff,'opECalib-50000.par','opECalib-51430.par',/verbose

   Compare the same two files, but copy values for the structure
   ecalib.fullwelldn2 from the 1st file to the 2nd, creating a 3rd file:
     IDL&gt; yanny_diff,'opECalib-50000.par','opECalib-51430.par', $
     IDL&gt;  'opECalib-new.par', stnames='ecalib', cardnames='fullwelldn2'

 BUGS:

 PROCEDURES CALLED:
   splog
   yanny_free
   yanny_read
   yanny_write

 REVISION HISTORY:
   26-Feb-2002  Written by David Schlegel, Princeton.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/yanny/yanny_diff.pro">$IDLUTILS_DIR/pro/yanny/yanny_diff.pro</a>)</strong></p>
<hr />
<h3 id="YANNY_FREE">YANNY_FREE</h3>
<p><a href="#YANNY_DIFF">[Previous Routine]</a></p>
<p><a href="#YANNY_PAR">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   yanny_free

 PURPOSE:
   Free memory allocated from reading a Yanny parameter file

 CALLING SEQUENCE:
   yanny_free, pdata

 INPUTS:
   pdata      - Array of pointers to all strucutures read by YANNY_READ.

 OPTIONAL INPUTS:

 OUTPUT:

 OPTIONAL OUTPUTS:

 COMMENTS:

 EXAMPLES:

 BUGS:

 PROCEDURES CALLED:

 REVISION HISTORY:
   15-Nov-1999  Written by David Schlegel, Princeton.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/yanny/yanny_free.pro">$IDLUTILS_DIR/pro/yanny/yanny_free.pro</a>)</strong></p>
<hr />
<h3 id="YANNY_PAR">YANNY_PAR</h3>
<p><a href="#YANNY_FREE">[Previous Routine]</a></p>
<p><a href="#YANNY_READ">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   yanny_par

 PURPOSE:
   Obtain the value of a parameter in the header of a Yanny file.

 CALLING SEQUENCE:
   result = yanny_par( hdr, keyname, [count=, indx= ] )

 INPUTS:
   hdr        - Header lines in Yanny file, which are usually keyword pairs.
   keyname    - Keyword name of which to find its corresponding value.
                If this is an array, then this routine is called recursively
                and the results appended together.

 OPTIONAL INPUTS:

 OUTPUT:
   result     - Value of parameter in header as either a string or an
                array of strings; return '' if parameter not found

 OPTIONAL OUTPUTS:
   count      - Return the number of parameters found.  There may be more
                returned values than INDX, if there are several values on
                the same line.
   indx       - Index of the lines that match (0-indexed); -1 for no match.

 COMMENTS:
   This routine is meant to be analogous to the Goddard function SXPAR()
   for reading from FITS headers.

 EXAMPLES:

 BUGS:
   Wildcards are not supported for KEYNAME.

 PROCEDURES CALLED:

 INTERNAL SUPPORT ROUTINES:

 REVISION HISTORY:
   02-Nov-1999  Written by David Schlegel, Princeton.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/yanny/yanny_par.pro">$IDLUTILS_DIR/pro/yanny/yanny_par.pro</a>)</strong></p>
<hr />
<h3 id="YANNY_READ">YANNY_READ</h3>
<p><a href="#YANNY_PAR">[Previous Routine]</a></p>
<p><a href="#YANNY_READONE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   yanny_read

 PURPOSE:
   Read a Yanny parameter file into an IDL structure.

 CALLING SEQUENCE:
   yanny_read, filename, [ pdata, hdr=, enums=, structs=, $
    /anonymous, stnames=, /quick, errcode= ]

 INPUTS:
   filename   - Input file name for Yanny parameter file

 OPTIONAL INPUTS:

 OUTPUT:

 OPTIONAL OUTPUTS:
   pdata      - Array of pointers to all structures read.  The i-th data
                structure is then referenced with &quot;*pdata[i]&quot;.  If you want
                to pass a single structure (eg, FOOBAR), then pass
                ptr_new(FOOBAR).
   hdr        - Header lines in Yanny file, which are usually keyword pairs.
   enums      - All &quot;typedef enum&quot; structures.
   structs    - All &quot;typedef struct&quot; structures, which define the form
                for all the PDATA structures.
   anonymous  - If set, then all returned structures are anonymous; set this
                keyword to avoid possible conflicts between named structures
                that are actually different.
   stnames    - Names of structures.  If /ANONYMOUS is not set, then this
                will be equivalent to the IDL name of each structure in PDATA,
                i.e. tag_names(PDATA[0],/structure_name) for the 1st one.
                This keyword is useful for when /ANONYMOUS must be set to
                deal with structures with the same name but different defns.
   quick      - This keyword is only for backwards compatability, and
                has no effect.
   errcode    - Returns as non-zero if there was an error reading the file.

 COMMENTS:
   If the file name suffix is '.gz' or '.Z', the uncompress the file
   while reading.  The gunzip command is spawned for '.gz' files, and
   'uncompress' is spawned for '.Z' files.

   Return 0's if the file does not exist.

   Read and write variables that are denoted INT in the Yanny file
   as IDL-type LONG, and LONG as IDL-type LONG64.  This is because
   Yanny files assume type INT is a 4-byte integer, whereas in IDL
   that type is only 2-byte.

   I special-case the replacement of {{}} with &quot;&quot;, since it seems
   that some bonehead used the former to denote blank strings in
   the idReport files.  Otherwise, any curly-brackets are always ignored
   (as they should be).

 EXAMPLES:

 BUGS:
   The reading could probably be sped up by setting a format string for
   each structure to use in the read.

   Not set up yet to deal with multi-dimensional arrays, but neither
   is the fTCL-based reader.

 PROCEDURES CALLED:
   fileandpath()
   hogg_strsplit
   hogg_unquoted_regex()
   mrd_struct

 INTERNAL SUPPORT ROUTINES:
   yanny_strip_commas()
   yanny_add_comment
   yanny_getwords()
   yanny_add_pointer
   yanny_readstring
   yanny_nextline()

 REVISION HISTORY:
   05-Sep-1999  Written by David Schlegel, Princeton.
   18-Jun-2001  Fixed bug to allow semi-colons within double quotes
                C. Tremonti (added yanny_inquotes, modifed yanny_strip_commas,
                yanny_nextline)
   11-Oct-2002  Major changes by D. Schlegel and D. Hogg to get rid
                of the 2048-char line limit, dramatically speed up the
                code when reading large files by pre-allocating the memory,
                and use regular-expression matching for speed, robustness,
                and clarity.
   08-Mar-2012  Replace numlines() with FILE_LINES().
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/yanny/yanny_read.pro">$IDLUTILS_DIR/pro/yanny/yanny_read.pro</a>)</strong></p>
<hr />
<h3 id="YANNY_READONE">YANNY_READONE</h3>
<p><a href="#YANNY_READ">[Previous Routine]</a></p>
<p><a href="#YANNY_WRITE">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   yanny_readone

 PURPOSE:
   Read one structure from a Yanny parameter file into an IDL structure.

 CALLING SEQUENCE:
   data = yanny_readone( filename, [ selectname, hdr=, enums=, structs=, $
    /anonymous, stnames=, /quick, errcode= ] )

 INPUTS:
   filename   - Input file name for Yanny parameter file

 OPTIONAL INPUTS:
   selectname - Name of structure to select.  If not specified, then
                the first structure is returned.

 OUTPUT:
   data       - Selected structure, or 0 if not found.

 OPTIONAL OUTPUTS:
   hdr        - Header lines in Yanny file, which are usually keyword pairs.
   enums      - All &quot;typedef enum&quot; structures.
   structs    - All &quot;typedef struct&quot; structures, which define the form
                for all the PDATA structures.
   anonymous  - If set, then all returned structures are anonymous; set this
                keyword to avoid possible conflicts between named structures
                that are actually different.
   stnames    - Names of structures.  If /ANONYMOUS is not set, then this
                will be equivalent to the IDL name of each structure in PDATA,
                i.e. tag_names(PDATA[0],/structure_name) for the 1st one.
                This keyword is useful for when /ANONYMOUS must be set to
                deal with structures with the same name but different defns.
                Note that this will contain all of the structure names, even
                though this routine only returns that data from one of them.
   quick      - This keyword is only for backwards compatability, and
                has no effect.
   errcode    - Returns as non-zero if there was an error reading the file.

 COMMENTS:
   This is a simple wrapper for YANNY_READ.

 EXAMPLES:
   Select the IDCOMMENT structure from the Yanny file idReport-52522.par.
   Set the /ANONYMOUS flag to prevent conflicts with any other structures
   of the same name.
     IDL&gt; data = yanny_readone('idReport-52522.par', 'IDCOMMENT', /anon)

 BUGS:

 PROCEDURES CALLED:
   yanny_free
   yanny_read

 REVISION HISTORY:
   05-Oct-2002  Written by David Schlegel, Princeton.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/yanny/yanny_readone.pro">$IDLUTILS_DIR/pro/yanny/yanny_readone.pro</a>)</strong></p>
<hr />
<h3 id="YANNY_WRITE">YANNY_WRITE</h3>
<p><a href="#YANNY_READONE">[Previous Routine]</a></p>
<p><a href="#ZGROUP">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   yanny_write

 PURPOSE:
   Write a Yanny parameter file from an IDL structure.

 CALLING SEQUENCE:
   yanny_write, filename, [ pdata, hdr=, enums=, structs=, stnames=, $
    /align, formatcodes=, fdigit=, ddigit= ]

 INPUTS:
   filename   - Output file name for Yanny parameter file

 OPTIONAL INPUTS:
   pdata      - Array of pointers to all structures write.  The i-th data
                structure is then referenced with &quot;*pdata[i]&quot;
   hdr        - Header lines in Yanny file, which are usually keyword pairs.
   enums      - All &quot;typedef enum&quot; structures.
   structs    - All &quot;typedef struct&quot; structures, which define the form
                for all the PDATA structures.
   stnames    - Structure names, overriding the IDL structure names.
                Typically, you will want to use this if a structure was
                read using the /ANONYMOUS keyword.
   align      - If set, then align columns in the output file
   formatcodes- Passed to STRUCT_PRINT() if /ALIGN is also set.
   fdigit     - Passed to STRUCT_PRINT() if /ALIGN is also set.
   ddigit     - Passed to STRUCT_PRINT() if /ALIGN is also set.

 OUTPUT:

 OPTIONAL OUTPUTS:

 COMMENTS:
   Read and write variables that are denoted INT in the Yanny file
   as IDL-type LONG, and LONG as IDL-type LONG64.  This is because
   Yanny files assume type INT is a 4-byte integer, whereas in IDL
   that type is only 2-byte.

 EXAMPLES:
   Read a Yanny parameter file, then re-write as a different file with:
     yanny_read, 'testin.par', pdata, comments=comments
     yanny_write, 'testout.par', pdata, comments=comments

 BUGS:
   There is no testing that STRUCTS is consistent with PDATA when that
   keyword is explicitly passed to define the header of the file rather
   than auto-generating it from PDATA itself.

   If FORMATCODES is set, then it is possible to write invalid Yanny files.
   For example, if a format code of 'a5' is set for strings that are longer,
   then any terminating quotations beyond the 5th character will be lost.
   If a format code is too small for a numeric value, then a set of asterisks
   will be written.

 PROCEDURES CALLED:

 REVISION HISTORY:
   05-Sep-1999  Written by David Schlegel, Princeton.
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/yanny/yanny_write.pro">$IDLUTILS_DIR/pro/yanny/yanny_write.pro</a>)</strong></p>
<hr />
<h3 id="ZGROUP">ZGROUP</h3>
<p><a href="#YANNY_WRITE">[Previous Routine]</a></p>
<p><a href="#ZMATCH">[Next Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   zgroup
 PURPOSE:
   Group objects in ra, dec, and z
 CALLING SEQUENCE:
   ing= zgroup(z, ra, dec, mproj, mz, mult=, first=, next=)
 INPUTS:
   z          - [n] redshifts 
   ra         - [n] ra coordinates in degrees (N-dimensional array)
   dec        - [n] dec coordinates in degrees (N-dimensional array)
   mproj       - projected distance which defines a match (redshift units)
   mz          - redshift distance which defines a match (redshift units)
 OUTPUTS:
   mult - [ngroup] multiplicity of each group
   first - [ngroup] first member of each group
   next - [n] for each input target, the next member in same group 
          (-1 if last)
   ing - [n] for each input target, which group it is in
 COMMENTS:
   Calls zmatch and group_on_matches
 BUGS:
   Beta code
 REVISION HISTORY:
   Begun 2007-07-12 MRB (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/spheregroup/zgroup.pro">$IDLUTILS_DIR/pro/spheregroup/zgroup.pro</a>)</strong></p>
<hr />
<h3 id="ZMATCH">ZMATCH</h3>
<p><a href="#ZGROUP">[Previous Routine]</a></p>
<p><a href="#ROUTINELIST">[List of Routines]</a></p>
<pre>
 NAME:
   zmatch
 PURPOSE:
   Match objects in ra, dec, and z
 CALLING SEQUENCE:
   zmatch, z1, ra1, dec1, z2, ra2, dec2, mproj, mz, $
      match1, match2, dproj=, dz=, nmatch=, maxmatch=
 INPUTS:
   z1          - redshifts 
   ra1         - ra coordinates in degrees (N-dimensional array)
   dec1        - dec coordinates in degrees (N-dimensional array)
   z2          - redshifts 
   ra2         - ra coordinates in degrees (N-dimensional array)
   dec2        - dec coordinates in degrees (N-dimensional array)
   mproj       - projected distance which defines a match (redshift units)
   mz          - redshift distance which defines a match (redshift units)
 OPTIONAL INPUTS:
   maxmatch    - maximum number of matches per object (default to 1)
                 0 means unlimited
 OUTPUTS:
   dproj      - projected distance for each match
   dz         - redshift distance for each match
   match1     - List of indices of matches in list 1; -1 if no matches
   match2     - List of indices of matches in list 2; -1 if no matches
   nmatch     - number of matches
 COMMENTS:
   Calls matchnd. 
   Bases &quot;closest&quot; match on projected distance.
 REVISION HISTORY:
   Begun 2007-07-12 MRB (NYU)
</pre>
<p><strong>(See <a href="http://www.sdss3.org/svn/repo/idlutils/tags/v5_5_8/pro/spheregroup/zmatch.pro">$IDLUTILS_DIR/pro/spheregroup/zmatch.pro</a>)</strong></p>
<hr />
</div>
</div>
<div id="footer" class="content-info" role="contentinfo">
<div class="social">
	<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<p>Copyright &copy; 2014 Sloan Digital Sky Survey</p>
					</div>
					<div class="col-lg-6">
						<div class="pull-right">
						</div>
					</div> 
				</div>
			</div>
		</div>		
</div>

<script type='text/javascript' src='/wp-includes/js/admin-bar.min.js?ver=3.9.2'></script>
<script type='text/javascript' src='/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=3.50.0-2014.02.05'></script>
<script type='text/javascript'>
</script>

		</body>
</html>
