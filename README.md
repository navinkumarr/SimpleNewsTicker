#Simple News Ticker

You can manage the tickers from the options provided in the admin panel to create group of tickers and add tickers to your groups and display it on the website .
There are many options available to control the behaviour of ticker which is based on bxslider jquery plugin.

#### You can download this module from <a target="_blank" href="http://www.magentocommerce.com/magento-connect/simple-news-ticker.html">here</a>

#Set Up

In file,
app/design/frontend/base/default/template/page/html/breadcrumbs.phtml
you can call using

````
<?php echo $this->getChildHtml('newsticker');?>
````
or you can call below code in any phtml file . Please test below code once before deploying on live .

````
<?php 
  echo $this->getLayout()->createBlock('newsticker/newsticker')->setTemplate('newsticker/newsticker.phtml')->toHtml();
?>
````
