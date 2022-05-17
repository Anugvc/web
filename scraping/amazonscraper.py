from os import name
from urllib.request import urlopen
from selenium import webdriver
from bs4 import BeautifulSoup
import pandas as pd

url="https://www.amazon.in/s?bbn=976419031&rh=n%3A976419031%2Cp_89%3Arealme&dc&qid=1624216249&rnid=3837712031&ref=lp_976420031_nr_p_89_3"

# page= urlopen(url)

# html_page= page.read()
# html = html_page.decode("utf-8")

# print(html)

driver = webdriver.Chrome("/usr/bin/chromedriver")
driver.get(url)
content = driver.page_source
soup = BeautifulSoup(content, features="lxml")

product={}
list_of_lists=[]

for a in soup.findAll('div', attrs={'data-component-type':'s-search-result'}):
    #extract product name
    productName=a.find('h2')
    #extract image tag
    img = a.find('img')
    #extract image url
    img=img.get('src')
    #extract rating string 4.1 out of 5 stars
    rating = a.find('div', attrs={'class':'a-section a-spacing-none a-spacing-top-micro'})
    #extract final rating from string 4.1
    rating= rating.text.partition(' out')[0]
    #extract price
    price=a.find('span', attrs={'class:', 'a-price-whole'}).text
    
    list_of_page = []
    product[productName.text] = {} 
    product[productName.text]['image']=img
    product[productName.text]['rating']=float(rating)
    product[productName.text]['price']=price

    list_of_page.append(productName.text)
    list_of_page.append(img)
    list_of_page.append(float(rating))
    list_of_page.append(price)
    list_of_lists.append(list_of_page)
    

    # price=a.find('div', attrs={'class':'_1vC4OE _2rQ-NK'})
    # rating=a.find('div', attrs={'class':'hGSR34 _2beYZw'})
    # product.append(name.text)
    # prices.append(price.text)
    # ratings.append(rating.text) 
    # Creating the DataFrame
df = pd.DataFrame(list_of_lists, columns=['product_name', 'image', 'rating', 'price'])
# Exporting the DataFrame as csv
df.to_csv('quotes-list.csv', index=False, sep=';')
print(product)
