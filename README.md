# About Kunai

Kunai is an starting template for a faster website development.

It has already declared most common wordpress functions, php, javascript and sass files.

It also suggest a folders and files organization to prevent messy development.

Feel free to suggest and change anything for the best!

Happy developing! :)

# Other Notes

## Structured Data
Introduction DOCS: http://schema.org/docs/gs.html#microdata_how

More is better, except for hidden text. In general, the more content you mark up, the better. However, as a general rule, you should mark up only the content that is visible to people who visit the web page and not content in hidden div's or other hidden page elements.

Example:

<div itemscope itemtype ="http://schema.org/Movie">
  <h1 itemprop="name">Avatar</h1>
  <div itemprop="director" itemscope itemtype="http://schema.org/Person">
    Director: <span itemprop="name">James Cameron</span> (born <span itemprop="birthDate">August 16, 1954</span>)
  </div>
  <span itemprop="genre">Science fiction</span>
  <a href="../movies/avatar-theatrical-trailer.html" itemprop="trailer">Trailer</a>
</div>

###Full list of all *item types*
http://schema.org/docs/full.html


**Blog**
http://schema.org/Blog

**CreativeWork**
http://schema.org/CreativeWork

**Like**
http://schema.org/LikeAction

**Additional Type**
https://www.w3.org/wiki/WebSchemas/additionalTypeProposal
http://www.productontology.org/

**Organization Markup**

<div itemscope itemtype="http://schema.org/Organization">
  <span itemprop="name">Google.org (GOOG)</span>
Contact Details:
  <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
    Main address:
      <span itemprop="streetAddress">38 avenue de l'Opera</span>
      <span itemprop="postalCode">F-75002</span>
      <span itemprop="addressLocality">Paris, France</span>
    ,
  </div>
    Tel:<span itemprop="telephone">( 33 1) 42 68 53 00 </span>,
    Fax:<span itemprop="faxNumber">( 33 1) 42 68 53 01 </span>,
    E-mail: <span itemprop="email">secretariat(at)google.org</span>
Members:
- National Scientific Members in 100 countries and territories: Country1, Country2, ...
- Scientific Union Members, 30 organizations listed in this Yearbook:
List of Alumni:
 <span itemprop="alumni" itemscope itemtype="http://schema.org/Person">
   <span itemprop="name">Jack Dan</span>
 </span>,
 <span itemprop="alumni" itemscope itemtype="http://schema.org/Person">
   <span itemprop="name">John Smith</span>
 </span>,
History:
</div>

### Testing your markup 

**Google Testing Tool: **
https://developers.google.com/structured-data/testing-tool/