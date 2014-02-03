<? set_include_path("inc"); ?>
<html lang="en">
<head>
<?php include($INC_DIR. "header.php"); ?>
</head>
<body>
<?php include($INC_DIR. "analytics.php"); ?>

<header>
<nav><?php include($INC_DIR. "menu.php"); ?></nav>
</header>

<div id="hero"></div>

<div id="wrapper">

<section>
<h1>onLoad Animation applied to an image</h1>
<img class="ui medium left floated image slideUp" src="/img/temp-guide.png">
</section>

<section>
<!-- Grid Example -->
<h1>Grid</h1>
<div class="ui vertically divided grid">
  <div class="two column row">
    <div class="column">
    		<h1>Heading 1</h1> 
				<h2>Sub Heading</h2>
				<p>
				<!-- start slipsum code -->
				Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass.
				Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass.
				The lysine contingency - it's intended to prevent the spread of the animals is case they ever got off the island. Dr. Wu inserted a gene that makes a single faulty enzyme in protein metabolism. The animals can't manufacture the amino acid lysine. Unless they're continually supplied with lysine by us, they'll slip into a coma and die.
				Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass.
				</p>    </div>
    <div class="column">
    		<h1>Heading 2</h1> 
				<h2>Sub Heading</h2>
				<p>
				<!-- start slipsum code -->
				Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass.
				Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass.
				Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass.
				</p>    </div>
  </div>
  <div class="three column row">
    <div class="column">
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
    </div>
    <div class="column">
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
    </div>
    <div class="column">
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
    </div>
  </div>
</div>

</section>


<!-- Responsive Grid -->
<section>
<div class="ui grid">
  <div class="two column mobile only row">
    <div class="column">
      <div class="ui segment">
        Mobile
      </div>
    </div>
    <div class="column">
      <div class="ui segment">
        Mobile
      </div>
    </div>
  </div>
  <div class="three column row">
    <div class="computer only column">
      <div class="ui segment">
        Computer
      </div>
    </div>
    <div class="tablet mobile only column">
      <div class="ui segment">
        Tablet and Mobile
      </div>
    </div>
    <div class="column">
      <div class="ui segment">
        All Sizes
      </div>
    </div>
    <div class="column">
      <div class="ui segment">
        All Sizes
      </div>
    </div>
  </div>
  <div class="four column computer only row">
    <div class="column">
      <div class="ui segment">
        Computer
      </div>
    </div>
    <div class="column">
      <div class="ui segment">
        Computer
      </div>
    </div>
    <div class="column">
      <div class="ui segment">
        Computer
      </div>
    </div>
    <div class="column">
      <div class="ui segment">
        Computer
      </div>
    </div>
  </div>
  <div class="three column tablet only row">
    <div class="column">
      <div class="ui segment">
        Tablet
      </div>
    </div>
    <div class="column">
      <div class="ui segment">
        Tablet
      </div>
    </div>
    <div class="column">
      <div class="ui segment">
        Tablet
      </div>
    </div>
  </div>
</div>
</section>

   
<!-- Animation --> 
<section>
<h1>onScroll Animation applied to an image</h1>
	<img src="/img/temp-guide.png" id="phone" class="animate">
</section>

<!-- Fixed Sub Menu -->
<section>		
	<div id="fooBar">
		<ul>
			<li>overview day</li> 
			<li>by Day gallery</li> 
			<li>reviews</li>
			<li>more</li>
		</ul>
	</div>
</section>
			 
 

<!-- Accordion -->
<section>
<h1>Accordion</h1>
<div class="ui fluid accordion">
  <div class="active title">
    <i class="dropdown icon"></i>
    What is a dog?
  </div>
  <div class="active content">
    <p>A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a welcome guest in many households across the world.</p>
  </div>
  <div class="title">
    <i class="dropdown icon"></i>
    What kinds of dogs are there?
  </div>
  <div class="content">
    <p>There are many breeds of dogs. Each breed varies in size and temperament. Owners often select a breed of dog that they find to be compatible with their own lifestyle and desires from a companion.</p>
  </div>
  <div class="title">
    <i class="dropdown icon"></i>
    How do you acquire a dog?
  </div>
  <div class="content">
    <p>Three common ways for a prospective owner to acquire a dog is from pet shops, private owners, or shelters.</p>
    <p>A pet shop may be the most convenient way to buy a dog. Buying a dog from a private owner allows you to assess the pedigree and upbringing of your dog before choosing to take it home. Lastly, finding your dog from a shelter, helps give a good home to a dog who may not find one so readily.</p>
  </div>
</div> 
</section>          

<!--Rating-->
<section class="ui two column relaxed grid">
<div class="column">
<h1>Star Rating</h1>
<div class="ui rating">
  <i class="icon"></i>
  <i class="icon"></i>
  <i class="icon"></i>
  <i class="icon"></i>
  <i class="icon"></i>
</div>
</div>

<div class="column">

</div>

</section>

<!-- Form w/Validation -->
<section>
<h1>Form</h1>
<div class="ui form segment">
  <p>Let's go ahead and get you signed up.</p>
  <div class="two fields">
    <div class="field">
      <label>First Name</label>
      <input placeholder="First Name" name="first-name" type="text">
    </div>
    <div class="field">
      <label>Last Name</label>
      <input placeholder="Last Name" name="last-name" type="text">
    </div>
  </div>
  <div class="field">
    <label>Username</label>
    <input placeholder="Username" name="username" type="text">
  </div>
  <div class="field">
    <label>Password</label>
    <input type="password" name="password">
  </div>
  <div class="inline field">
    <div class="ui checkbox">
      <input type="checkbox" name="terms">
      <label>I agree to the Terms and Conditions</label>
    </div>
  </div>
  <div class="ui blue submit button">Submit</div>
  <div class="ui error message"></div>
</div>
</section>


<!-- Messaging -->
<section>
<h1>Messaging</h1>
<div class="ui message">
  <div class="header">
    Welcome back!
  </div>
  <p>
    It's good to see you again. I have had a lot to think about since our last visit, I've changed much as a person and I can see that you have too.
  </p>
  <p>
    Perhaps we can talk about it if you have the time.
  </p>
</div>

<div class="ui icon message">
  <i class="inbox icon"></i>
  <div class="content">
    <div class="header">
      Have you heard about our mailing list?
    </div>
    <p>Get all the best inventions in your e-mail every day. Sign up now!</p>
  </div>
</div>

<!-- Info -->
<div class="ui info message">
  <i class="close icon"></i>
  <div class="header">
    Info message. Was this what you wanted?
  </div>
  <ul class="list">
    <li>It's good to see you again.</li>
    <li>Did you know it's been a while?</li>
  </ul>
</div>

<!-- Success -->
<div class="ui success message">
  <i class="close icon"></i>
  <div class="header">
    Success Message. Congratulations, you are now a member!
  </div>
</div>

<!-- Warning -->
<div class="ui warning message">
  <i class="close icon"></i>
  <div class="header">
    
    Warning Message. You must register before you can do that!
  </div>
  Visit our registration page, then try again
</div>

<!-- Error -->
<div class="ui error message">
  <i class="close icon"></i>
  <div class="header">
    Error Message. Was this what you wanted?
  </div>
  <ul class="list">
    <li>It's good to see you again.</li>
    <li>Did you know it's been a while?</li>
  </ul>
</div>


</section>



<!~-- Sortable Table -->
<section>
<h1>Sortable Table</h1>

<table class="ui sortable table segment">
    <thead>
      <tr><th class="ascending">Name</th>
      <th class="ascending">Status</th>
      <th class="ascending">Notes</th>
    </tr></thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>No Action</td>
        <td>None</td>
      </tr>
      <tr>
        <td>Jamie</td>
        <td class="positive">Approved</td>
        <td class="warning">Requires call</td>
      </tr>
      <tr>
        <td>Jill</td>
        <td class="negative">Denied</td>
        <td>None</td>
      </tr>
    </tbody>
    <tfoot>
      <tr><th>3 People</th>
      <th>2 Approved</th>
      <th></th>
    </tr></tfoot>
  </table>
</section>

<!-- Breadcrumb -->
<section>
<h1>Breadcrumb</h1>
<div class="ui breadcrumb">
  <a class="section">Food</a>
  <div class="divider"> / </div>
  <a class="section">Fruit</a>
  <div class="divider"> / </div>
  <div class="active section">Apples</div>
</div>
</section>

<!-- Reveal -->
<section>
<h1>Hover Reveal</h1>
<div class="ui fade reveal">
  <img class="visible content" src="/img/temp-guide.png">
  <img class="hidden content" src="/img/temp-guide-reveal.png">
</div>
</section>

<!-- Steps -->
<section>
<h1>Steps</h1>
<div class="ui steps">
  <div class="ui step">
    Shipping
  </div>
  <div class="ui active step">
    Billing
  </div>
  <div class="ui disabled step">
    Confirm Order
  </div>
  <div class="ui disabled step">
    Complete
  </div>
</div>
</section>



<!-- End wrapper -->
</div>
<?php include($INC_DIR. "footer.php"); ?>
<script>
$('.ui.form')
  .form({
    firstName: {
      identifier  : 'first-name',
      rules: [
        {
          type   : 'empty',
          prompt : 'Please enter your first name'
        }
      ]
    },
    lastName: {
      identifier  : 'last-name',
      rules: [
        {
          type   : 'empty',
          prompt : 'Please enter your last name'
        }
      ]
    },
    username: {
      identifier : 'username',
      rules: [
        {
          type   : 'empty',
          prompt : 'Please enter a username'
        }
      ]
    },
    password: {
      identifier : 'password',
      rules: [
        {
          type   : 'empty',
          prompt : 'Please enter a password'
        },
        {
          type   : 'length[6]',
          prompt : 'Your password must be at least 6 characters'
        }
      ]
    }
    terms: {
      identifier : 'terms',
      rules: [
        {
          type   : 'checked',
          prompt : 'You must agree to the terms and conditions'
        }
      ]
    }
  })
;
</script>

</body>
</html>