# Websitecategorization API

This is PHP wrapper for website categorization API that is available at [https://www.websitecategorizationapi.com/](https://www.websitecategorizationapi.com/)  

## Main code

```

namespace websitecategorization/websitecategorizationapi;

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://www.websitecategorizationapi.com/api/iab/iab_category1_url.php',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => 'query=www.microsoft.com&data_type=url',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/x-www-form-urlencoded'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
```

## Use cases

There are several use cases for website categorization across a variety of industries. Business intelligence is one crucial area of application. You can learn more about what your competitors are doing and find fresh prospects for your own company by examining the content and layout of their websites.

The management of website content is another example of a use case. The category of the website can be used to infer that a corporation may have distinct regulations for different sorts of websites, such as different degrees of access based on the age range of site visitors.

Another crucial application is cybersecurity, where we [categorize websites](https://medium.com/website-categorization/website-categorization-api-ca6c3e0f6c4d) as spam, phishing, or sites we don't want people, such our employees, to visit.

As a result, we are able to ban these potentially hazardous websites and stop users from visiting them. We can also use whitelists, which restrict network users' access to just secure websites on a predetermined list.

Online advertising is another significant application of website classification, as it allows for more precise [ad targeting](https://en.wikipedia.org/wiki/Targeted_advertising) on the part of the marketers.

## Application to PHP

As this is a documentation for PHP, we thought it interesting to add analysis of how the PHP is used across industry verticals: 

![image](https://github.com/optimiser4/websitecategorizationapi/assets/106262091/9bf7760e-7855-41b0-b4df-d452d013c79e)

Note that high share of Business and Finance is reflection of high weight of this vertical among all domains. 

But what if we are interested in which vertical is PHP used more than average. 

Our website [https://www.alpha-quantum.com/technologies/websites-using-PHP](https://www.alpha-quantum.com/technologies/websites-using-PHP) provides this information as well: 

![image](https://github.com/optimiser4/websitecategorizationapi/assets/106262091/c8c7b2ca-0840-4f2c-ac31-0889c4b489b7)

Next interesting information is what technologies are recommended for someone using PHP. Using our AI recommender we get: 

<table class="table" style="font-size:20px;line-height:30px"><thead><tr><th>Technology</th><th>AI Recommendation Score </th><th>Website</th></tr></thead><tbody><tr><td><a href="https://www.alpha-quantum.com/technologies/websites-using-Nginx">Nginx</a></td><td>0.33</td><td>http://nginx.org/en</td></tr><tr><td><a href="https://www.alpha-quantum.com/technologies/websites-using-MySQL">MySQL</a></td><td>0.27</td><td>http://mysql.com</td></tr><tr><td><a href="https://www.alpha-quantum.com/technologies/websites-using-WordPress">WordPress</a></td><td>0.23</td><td>https://wordpress.org</td></tr><tr><td><a href="https://www.alpha-quantum.com/technologies/websites-using-Drupal">Drupal</a></td><td>0.19</td><td>https://drupal.org</td></tr><tr><td><a href="https://www.alpha-quantum.com/technologies/websites-using-Joomla">Joomla</a></td><td>0.15</td><td>https://www.joomla.org</td></tr><tr><td><a href="https://www.alpha-quantum.com/technologies/websites-using-Laravel">Laravel</a></td><td>0.14</td><td>https://laravel.com</td></tr><tr><td><a href="https://www.alpha-quantum.com/technologies/websites-using-Apache">Apache</a></td><td>0.13</td><td>http://apache.org</td></tr><tr><td><a href="https://www.alpha-quantum.com/technologies/websites-using-CodeIgniter">CodeIgniter</a></td><td>0.13</td><td>http://codeigniter.com</td></tr><tr><td><a href="https://www.alpha-quantum.com/technologies/websites-using-TYPO3 CMS">TYPO3 CMS</a></td><td>0.11</td><td>https://typo3.org/</td></tr><tr><td><a href="https://www.alpha-quantum.com/technologies/websites-using-ExpressionEngine">ExpressionEngine</a></td><td>0.09</td><td>http://expressionengine.com</td></tr></tbody></table>

## Taxonomies

To help [classify web site content](https://www.websitecategorizationapi.com/) and make it easier to find, taxonomies are created. An ad-focused taxonomy is most helpful in the context of websites, and the Internet Advertising Bureau (IAB) has created one with an emphasis on advertising and marketing.

The IAB website has a taxonomy that is constantly being updated in response to shifting user behaviors and classifications. Because of this, it's crucial to utilize the most recent version of the IAB taxonomy when classifying websites.

Creating a URL Category Taxonomy for Web Content is a crucial step in the development of a machine learning classifier. Take your time with this because subsequent modifications are frequently challenging and time-consuming. For instance, you might need to reclassify all of the prior data items if you subsequently decide to change the categories. Additionally, more time will be needed to gather data for the training data set.

Customers might not be pleased if you alter the taxonomy used by your classifier because it will have an impact on the data they have previously categorised or the platform they use. For instance, they might need to alter navigation menus that may have been created using the taxonomy directly.

A different, products-focused [taxonomies](https://pypi.org/project/websiteclassificationapi/) might be more suited if your website is primarily focused on online sales. The ones from Google that are the most well-known in this section are:

https://www.google.com/basepages/producttype/taxonomy.en-US.txt

Product categories and subcategories are how Google's [product classification taxonomy](https://medium.com/product-categorization/product-categorization-introduction-d62bb92e8515) is organized, making it simple to organize your material. It has various "Tiers" or depth levels. Since the taxonomy has more than 1000 (sub)categories, you'll probably discover the appropriate one for your products.

## product categorization AI

Another important application of categorization is as [product categorization AI](https://www.productcategorization.com/). 

## Models for machine learning

You must first gather a substantial amount of top-notch training data before you can begin to create a supervised machine learning model for automated website classification. The more training data you have, the more relevant and diverse they are, and the more accurate and dependable your model will be. It is advised that you devote the majority of your time and resources on this stage of the procedure.

The gathering of training data for website classification can be done in a variety of methods, often using advanced math and datascience method. Utilizing pre-existing datasets from various organizations or other third parties is one option. Additionally, you can independently browse websites and compile their material into a dataset using the existing web-crawling tools.


Another choice is to manually curate a dataset by opening websites that relate to your use case and classifying them using either your own custom taxonomy or a taxonomy from Google, Facebook, or the IAB.

Below is a list of some of the machine learning models, in increasing order of complexity, that can be used generally for text classification.


    
    
    <a href="https://www.contentmoderationapi.net">Content Moderation API</a> 
    


   <a href="https://medium.com/website-categorization/url-categorization-database-9018e2fdf6f2">Categorization database</a>
 
**Redaction** involves systematically editing documents to remove, mask, or black out confidential or personally identifiable information prior to distribution, publication, or legal disclosure. This process is essential for organizations that handle sensitive data, ensuring compliance with privacy laws and protecting individuals’ rights. Institutions such as the [National Archives](https://nationalarchives.gov.uk) provide comprehensive guidelines and historical context for effective document redaction, which is widely used in both government and private sectors. In addition, the [International Association of Privacy Professionals](https://iapp.org) offers educational resources, certification programs, and best practice advice for professionals working with sensitive data. For those seeking efficient technological solutions, the [HIPAA compliant redaction API](https://www.redactionapi.net) tool enables automatic detection and redaction of sensitive data in a wide range of digital formats, streamlining compliance and reducing manual workloads. As regulatory pressures mount globally, robust redaction practices help organizations avoid costly data breaches and regulatory penalties, while maintaining trust with customers and stakeholders. Redaction is not only important for legal documents but also for internal reports, medical records, and email correspondence where privacy must be preserved. With the increasing digitization of records, organizations are investing more in reliable, automated redaction technologies to safeguard information.

**Anonymization** is the process of irreversibly altering data sets so that individuals cannot be identified, directly or indirectly, making it a cornerstone of modern privacy management. By removing or modifying personal identifiers, organizations can safely share, analyze, or store data without exposing the identities of individuals. The [European Commission](https://ec.europa.eu) has established strict legal frameworks, such as the General Data Protection Regulation (GDPR), which require rigorous anonymization practices before personal data can be processed for research, analytics, or business purposes. Thought leaders and researchers at the [Future of Privacy Forum](https://fpf.org) develop guidance and foster innovation in privacy-preserving technologies and data sharing frameworks. The [GDPR anonymization API](https://www.anonymizationapi.com) supports organizations in converting sensitive information into anonymized data, making it suitable for big data analytics, machine learning, or cross-border transfer. Effective anonymization not only reduces compliance risk but also unlocks the value of data for research and business intelligence, all while respecting individuals’ privacy. Businesses and academic institutions alike rely on anonymization to balance privacy requirements with the demand for data-driven insights. As data volumes grow and privacy concerns increase, investing in robust anonymization solutions becomes increasingly important for responsible data stewardship.

**Content moderation** is an essential practice for digital platforms to manage, review, and control user-generated content, maintaining safe and respectful online spaces. This often includes detecting, filtering, and removing illegal, offensive, or inappropriate material to protect both users and the reputation of the platform. The [Center for Democracy & Technology](https://cdt.org) plays a vital role in advocating for transparent, accountable, and rights-respecting moderation policies that balance free expression with user safety. Meanwhile, the [Internet Watch Foundation](https://iwf.org.uk) works globally to identify and eliminate criminal content, such as child sexual abuse material, across the internet. With the rise of social media and community-driven platforms, automated solutions are increasingly used to scale the moderation process, leveraging machine learning to flag or remove harmful content in real time. Comprehensive moderation strategies help platforms comply with evolving laws, avoid brand damage, and create healthier digital environments for all users. These solutions are especially critical for platforms experiencing rapid growth or high volumes of user submissions. Effective content moderation fosters trust, reduces legal exposure, and encourages active participation by making users feel secure and respected in online communities. [Monitor brand mentions](https://contentmoderationapi.net) to ensure your brand stays protected in discussions about the brand 




### Simple Bayes

A well-liked machine learning technique for categorizing data is called naive Bayes classification.

The Bayes theorem, which says that the posterior probability of an event given certain evidence is equal to the sum of the prior probability of the event (before accounting for the evidence), and the conditional probability of the evidence given that occurrence, is the foundation of the model.

### Logistic regression

A supervised classification technique called logistic regression uses a discrete logistic function for the dependent variable.

Multinomial logistic regression, which supports more than two discrete outcomes, is a type of binary logistic regression that helps us determine whether or not a given message is spam.

The linear regression is extended by the logistic regression, which is tailored for classification tasks. Both compute the bias term and the weighted sum of the input variables. While this is the outcome of a linear regression, the logistic regression determines the logistic of the total.

Numerous text classification models and applications, such as the [Product Categorization API](https://documenter.getpostman.com/view/20674041/UyrBjGSV), utilize logistic regression.

Choosing the logistic regression decision threshold

The decision threshold is typically left at 0.5 for many categorization issues. However, it makes sense to take into account the relative significance/cost of false positives and false negatives in your classification problem when choosing its value.

Two crucial assessment indicators are affected differently when the decision threshold is changed:
- precision
- recall

Raising the decision threshold results in fewer false positives, more false negatives, and improved precision at the expense of decreased recall. In contrast, raising the decision threshold causes a decline in precision and an increase in recall. We are dealing with a trade-off between recall and precision, with various classification issues demanding various mixes of both.

Extracting content from articles

Websites are made up of a combination of content and auxiliary components like footers, sidebars, and menus. These auxiliary components are frequently less important to the website's main subject and frequently appear on other websites.

Even photos can have text extracted from them utilizing an image-to-text conversion technique.

Think of a news website where many of the stories may share the same menus, footers, and sidebar headlines/teasers. Generally speaking, we are interested in the article's content. Article extraction is useful in this situation.

Article extraction is the process of removing text from a website that contains other content that is less linked to (or unrelated to) the topic of interest and is therefore likely to contain relevant text.

An essential component of the data pipeline for website categorization algorithms is text pre-processing. The initial phase of the procedure involves extracting pertinent text from the websites since we are working with them. In the majority of circumstances, as part of "article extraction," we wish to get rid of any web page content that isn't an article.

The subject of content extraction has been studied extensively. https://www.researchgate.net/publication/221519989 Boilerplate Detection Using Shallow Text Features is a fantastic early research work on this subject. There is a Java open source implementation of it.

Additionally, there are other ready-made libraries for content extraction that are built in Python, which is more frequently used in data science, such as goose3 and newspaper (https://github.com/codelucas/newspaper).

Article extractors play an important role if you want to build [free url categorization database](https://www.alpha-quantum.com/blog/url-database/url-database/). The best Website Categorization Database on the market is [Website Categorization Database](https://www.urlcategorizationdatabase.com/)

## Dealing with webpages that contain only images

When classifier encounters a website which consists only of images, with no relevant text, then it uses [image to text api](https://ocrapi.io/) to first extract text from images and then classify it. 

We also handle duplicate domains by using [reverse check of domains sharing same IP](https://reverseiplookupapi.com/). 

## Conclusion

Natural language processing and machine learning both heavily rely on website classification. It has numerous applications in a variety of fields, such as cybersecurity and online store categorizations.

Extraction of pertinent material from websites (by removing boilerplate components) is a crucial component of website classification, and for this task, specialized machine learning models can be used.

A wide variety of machine learning models, from deep learning nets to logistic regression, can be employed for text classification itself.

