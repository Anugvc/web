# # import pandas as pd
# #
# #
# # import numpy as np
# #
# # df1 = {'State': ['Arizona AZ', 'Georgia GG', 'Newyork NY', 'Indiana IN', 'Florida FL'],'Score1': [4, 47, 55, 74, 31]}
# # df1 = pd.DataFrame(df1, columns=['State', 'Score1'])
# #
# # print(df1)
# #
# # df1['State_code'] = df1.State.str.extract(r'\b(\w+)$', expand=True)
# #
# # print(df1)
#
#
# # Online Python - IDE, Editor, Compiler, Interpreter
#
# from bs4 import BeautifulSoup
# import requests
# import re
# import requests
# from urllib.parse import urlsplit
# from collections import deque
# import pandas as pd
# import time
#
# # from google.colab import files
#
#
# # read url from input
# original_url = input("Enter any url:\n")
# print("\n initiating crawling")
# time.sleep(1)
# print("\nPress Ctrl-C to stop crawling\n")
# time.sleep(1)
#
# reqs = requests.get(original_url)
# soup = BeautifulSoup(reqs.text, 'html.parser')
#
# urls = []
# for link in soup.find_all('a'):
#     if (link.get('href').startswith(('http://', 'https://'))):
#         urls.append(link.get('href'))
#     else:
#         urls.append(original_url + link.get('href'))
#
# unscraped = deque(urls)
#
# scraped = set()
#
# emails = set()
#
# scraped_url = []
#
# try:
#     while len(unscraped):
#         url = unscraped.popleft()
#         scraped.add(url)
#
#         parts = urlsplit(url)
#
#         base_url = "{0.scheme}://{0.netloc}".format(parts)
#         scraped_url.append(url)
#         if (url in scraped_url):
#             if '/' in parts.path:
#                 path = url[:url.rfind('/') + 1]
#             else:
#                 path = url
#
#             print("Crawling URL %s" % url)
#             try:
#                 response = requests.get(url)
#             except (requests.exceptions.MissingSchema, requests.exceptions.ConnectionError):
#                 continue
#
#             new_emails = set(re.findall(r"[a-z0-9\.\-+_]+@[a-z0-9\.\-+_]+\.com", response.text, re.I))
#             emails.update(new_emails)
#
#             soup = BeautifulSoup(response.text, 'lxml')
#
#             for anchor in soup.find_all("a"):
#                 if "href" in anchor.attrs:
#                     link = anchor.attrs["href"]
#                 else:
#                     link = ''
#
#                     if link.startswith('/'):
#                         link = base_url + link
#
#                     elif not link.startswith('http'):
#                         link = path + link
#
#                     if not link.endswith(".gz"):
#                         if not link in unscraped and not link in scraped:
#                             unscraped.append(link)
#                             print(link)
# except KeyboardInterrupt:
#
#     pass
#
# df = pd.DataFrame(emails, columns=["Email"])
# print(emails)
# df.to_csv('email.csv', index=False)
#
# # files.download("email.csv")
import tkinter
from random import random

import matplotlib
from numpy.random.mtrand import randn
from scipy.stats import norm
import matplotlib.pyplot as plt
import numpy as np
axes= plt.axes()
plt.xkcd()
matplotlib.use('TkAgg')
x = np.arange(-3,3,0.001)
plt.plot(x,norm.pdf(x))
plt.plot(x, norm.pdf(x,1.0,0.5))
axes.grid()
plt.show()
y= randn(500)
print(y)
