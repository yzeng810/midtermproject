# Midterm Project | World's Best Resorts

## Quick Glimpse

- CSC 174 Midterm Project: World's Best Resorts 
- Date: March 12, 2019
- Information Archetect: Yuqi Zeng
- Visual Designer: Yuqi Zeng
- Coder: Yuqi Zeng

## Ontology

- Domain: World's Best Resorts 
- Quick Intro: The website is intended to be an information page of my selections of the best resort places. Readers of these website can use this website as a guide to search for their dream vacation resort. Additionaly, readers can subscribe to the newsletter of this website to recieve the latest added recommendations and any promotions on all recommended resorts in the website. 
- Relationships:
  - As a whole the website, all resorts are sorted into several subclasses: Sea Breeze, Cultural Inspiration, Jungle Adventure and Winter Wonderland
    - Relationship 
      - Each resort can be categorized into different sections according to its themes. 
      - Sea Breeze, Cultural Inspiration, Jungle Adventure and Winter Wonderland are themes of resorts
    - The Rationale behind these are Users' intended occasion for their vacations and the theme of resorts. 
      - Readers who want to go to beaches and enjoy sunlights and want to swim can browse under the Sea Breeze section. Resorts under this are all nearby beaches and sea.
      - Readers who want to go somewhere where can represent certain culture and expect the resorts are very cultural infused can browse under the Cultural Inpiration section. Resorts under this category are architecture materpiece of certain culture, and the resorts are also surrounded with very strong cultural vibes.
      - Readers who want to go for a adventure in jungle can browse under the Jungle Adventure section. Resorts under this section are all in the jungle.
      - Readers who want to go for ski and enjoy snows. Resorts under this section are all in popular ski mountains and always cover with snows. 
  - As each resort pages, there are several sections: Discover the Resort*, One of A Kind, Gallery and More Info 
    - Relationship
      - Each resort has an overview, features, photos and additional info about its destination and its brand.
    - The Rationale behind these are information inquiry of a resort
      - Reader want to have an overview of a resort - Discover the Resort 
      - Reader want to know the features and hashtag of a resort - One of A Kind 
      - Reader want to visualize staying at the resort - Gallery of picture 
      - Reader want to know additional information of the resort , like destination, resort brand and a reservation link - More Info
    - *Discover the Resort is furthur seperated into three sections: adventures, dining and accommodation
      - An overview of a resort should include what travelers most care about, which are adventures-where to play, dining-what to eat, and accommodation-where to rest.

## Choreography

- Navigation overview
  1. All Resorts
  2. Sea Breeze
  3. Cultural Inspiration
  4. Jungle Adventure
  5. Winter Wonderland
- Rationale for this order
  - Start from the All Resorts tab, readers can browse all resorts to see the scope of the website, what resorts are included in the website and if there's any resort in particular they are looking for more info.
  - If readers they do not have anything in particular and the scope of this website fits his/her interests, they can proceed to explore the following tabs which are presented according to the theme of resorts and the occassions of travelers 
  - These themes are in order according to popularity of travel themes, from most popular to the least. 
- Reasons for no Home buttom in navigation
  - Most internet users today know that click on the title (h1 heading) will automatically take you back to the home page
  - The home page did not contain more important info. All important info is accessible when users are on any other pages of the website. 

## Taxonomy

### Index page

- Photos of different themes 
- Seasonal Recommendation of Two Resorts

<!-- There is no home page for each themes since I consider that readers do not need info about the theme and this website is for resort info so the website can just introduce the resort directly  -->

### Resort Page

- Discover the resort 
  - Adventures 
  - Dinning 
  - Accommodation 
- One of a kind 
- Gallery 
- More Info

## Application of Z-pattern

### Location

- Index Page

### Reasons for contents in each quadrant

- Point #1: Since it's primary optical area, it's the best place to show the name of the website.
- Point #2: Because it's the center area of the page, and the primary goal of this website is to present information about the topic, putting navigation here can let readers to immediately start browsing information about the topic.
- Point #3: Since the primary goal of this website is to present information about resort, here I want to entice readers to start browsing the website by showing two overview of the best resort I've chosen for this season. 
- Point #4: Here is the call-to-action, and it is intended to let readers start browsing the website. The link to start browsing the website is a link to the first resort ranked by alphabet.

## Application of F-pattern

### Location 

- Resort Page Discover The Resort Section

### Reasons for the layout

- Second Section - Discover the resort 
  - The picture with heading can grab readers' attentions and the heading inform users about the content, so that it can entice readers to continue to the next content section - paragraph of text.

## C.R.A.P principles 

### Contrast

1. Resort Page Discover The Resort Section Paragraph Texts
   - Bigger font-size and darker color emphasize the important contents in the paragraph 
2. Subscribe button in the Resort page navigation 
   - With same font size with the nav element but lighter color, the subscribe button is highlighted in the nav section so that it can users' eyeballs to the subscribe button

### Repetition 

1. Resort Page 
   - Every resort page has the same sections so it looks like to the user that these pages belong to one website 
2. Contents inside the Discover The Resort, One of A Kind, Gallary sections
   - Layout inside these sections has repetition so that it tells user that these subcontents belongs to one section

### Alignment 

1. All text element except figure caption in the body part 
   - All are align to the left so that readers can better read the text avoiding readability problems.

### Proximity

1. Between each sections in resort page 
   - Between each sections has wider margin so that it helps readers know that they have different contents
2. Between each subsections
   - They have smaller margins than sections so that they know subsections belong to one section 

## Fonts Selection

### Title & Heading - Bellefair

- It's serif which is better for Title & heading than sans-serif 
- It's lighter than other serif fonts so that it fits the website style - modern and minimalism 

### Body - Assistant 

- It's light and sans-serif so it looks simple and easy. It's better for readers to read when there are many words. So I use it in the body section 
- Latin typeface which are the same as the Title & heading fonts

## CSS Structure 

- I use my own CSS architecture. I arranged all CSS files according to the page contents with pseudo class element section in the end so that i can easily find each element and modify it.





 







