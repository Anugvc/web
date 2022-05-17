from bs4 import BeautifulSoup
import requests
import re
import requests
from urllib.parse import urlsplit
from collections import deque
import pandas as pd
# from google.colab import files

# BASE_URL = "https://www.linkedin.com/company/linkedin/"

# regex = '^[a-z0-9]+[\._]?[a-z0-9]+[@]\w+[.]\w{2,3}$'
#
#
# HEADERS = ({
#     'User-Agent': 'Mozilla/5.0 (X11; Linux x86_64)AppleWebKit / 537.36(KHTML, like Gecko)Chrome / 44.0.2403.157 Safari / 537.36',
#     'Accept-Language': 'en-US, en;q=0.5'})
#
# webpage = requests.get(BASE_URL, headers=HEADERS)
# soup = BeautifulSoup(webpage.content, "lxml")
# print(soup)
# # response = requests.get(BASE_URL)
# # data = response.text
# # print(data)
# # soup = BeautifulSoup(data, features='html.parser')
#
# post_listings = soup.find_all('div')
#
# print(post_listings)
# final_list = []
#
# for post in post_listings:
#     email = post.find('*').text
#     print(post)
#     # if (re.search(regex, email)):

# read url from input
original_url = input("Enter any url:\n")


reqs = requests.get(original_url)
soup = BeautifulSoup(reqs.text, 'html.parser')

urls = []
for link in soup.find_all('a'):
    if(link.get('href').startswith(('http://', 'https://'))):
        urls.append(link.get('href'))
    else:
        urls.append(original_url+link.get('href'))

unscraped = deque(urls)

scraped = set()

emails = set()

scraped_url = []

try:
    while len(unscraped):
        url = unscraped.popleft()
        scraped.add(url)

        parts = urlsplit(url)

        base_url = "{0.scheme}://{0.netloc}".format(parts)
        scraped_url.append(url)
        if (url in scraped_url):
            if '/' in parts.path:
                path = url[:url.rfind('/') + 1]
            else:
                path = url

            print("Crawling URL %s" % url)
            try:
                response = requests.get(url)
            except (requests.exceptions.MissingSchema, requests.exceptions.ConnectionError):
                continue

            new_emails = set(re.findall(r"[a-z0-9\.\-+_]+@[a-z0-9\.\-+_]+\.com", response.text, re.I))
            emails.update(new_emails)

            soup = BeautifulSoup(response.text, 'lxml')

            for anchor in soup.find_all("a"):
                if "href" in anchor.attrs:
                    link = anchor.attrs["href"]
                else:
                    link = ''

                    if link.startswith('/'):
                        link = base_url + link

                    elif not link.startswith('http'):
                        link = path + link

                    if not link.endswith(".gz"):
                        if not link in unscraped and not link in scraped:
                            unscraped.append(link)
                            print(link)
except KeyboardInterrupt:

    print("Press Ctrl-C to terminate while statement")

    pass


df = pd.DataFrame(emails, columns=["Email"])
print(emails)
df.to_csv('email.csv', index=False)


# files.download("email.csv")