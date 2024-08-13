from sklearn.feature_extraction.text import TfidfVectorizer
import numpy as np
import jieba 

tf_data = ['我喜欢计算机机器学习', '我爱计算机深度学习', '我喜欢计算机数据分析的机器学习', '我喜欢计算机行业']

tf_data_1 = [' '.join(jieba.cut(i)) for i in tf_data]
tf_data_1

tfidfvectorizer = TfidfVectorizer()
new_tf_data = tfidfvectorizer.fit_transform(tf_data_1)

weight = new_tf_data.toarray()
word = tfidfvectorizer.get_feature_names_out()

for i in range(len(weight)): 
    print('------------------------------')
    for j in range(len(word)):
        print(word[j],weight[i][j])

tfidfvectorizer.vocabulary_