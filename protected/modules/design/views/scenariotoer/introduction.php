<h1>Introduction</h1>

<h2>ER Diagramming Defined</h2>
<p>An E-R Diagram is, essentially, a map of the entities in a system and their 
relationships. <strong>Entities</strong> are anything of importance that needs 
to be represented in a database. <strong>Relationships</strong>, then, are the 
association between any number of entities.</p>

<p>The number of entities involved in a relationship is defined as the 
<strong>degree</strong> of that relationship. The most common relationships are 
a degree 2, or <strong>binary relationship</strong>, meaning that two entity 
classes are involved.</p>

<p>Likewise, <strong>ternary relationships</strong> have a degree of 3 and 
involve three entities, while <strong>unary</strong> or 
<strong>recursive</strong> relationships have a degree of 1 and involve only a 
single entity.</p>



<h2>Identifying Entities and Relationships</h2>
<p>One of the most important tasks when designing a database is to identify 
entities and relationships in a given scenario. The first step to identifying 
entities and relationships is to view company documents. These documents could 
include anything from forms, data reports, spreadsheets, or company letters. 
Once you have these documents, determine what information is relevant to the 
database that is being created. Since every database serves a unique purpose, 
some data obtained from company documents may be superfluous and unnecessary. 
Because of this, it is important to interview the database user and ensure you 
are meeting his or her requirements. Once you have determined which data is 
needed, logically group data instances together into an entity. For example, the 
instances, "Name", "Address", and "Zip", may be logically grouped into a 
Customer entity.</p>

<p>Once entities have been set up, relationships between those entities should 
be determined. When determining relationships, the common check is to see of one 
entity can "have" another entity. For example, Customer has an Order or, in 
other words, Customer places an Order. There is never one correct way to set up 
a database system, so be sure to check your entities and relationships to see if 
they work efficiently. Finally, a person designing a database system should be 
sure to ask users for their opinions. After all, it is the end user that will be 
using the database system, so you will need to ensure it meets their 
expectations.</p>



<h2>The Three Types of Cardinality</h2>

<h3>1:1</h3>

<figure class="pull-left">
    <img src="" alt="Example diagram of a 1 to 1 relationship"/>
    <figcaption>Example diagram of a 1:1 relationship</figcaption>
</figure>

<p>In a 1:1 Relationship, a single instance of an entity is linked to a single 
instance of another entity. Here, one club member can have one locker 
assignment.</p>


<h3>1:N</h3>
<figure class="pull-left">
    <img src="" alt="Example diagram of a 1 to N relationship"/>
    <figcaption>Example diagram of a 1:N relationship</figcaption>
</figure>
<p>In a 1:N, a single instance of one entity is linked to many instances
of another entity. Here, one company can have many departments.</p>


<h3>N:M</h3>
<figure class="pull-left">
    <img src="" alt="Example diagram of a N to M relationship"/>
    <figcaption>Example diagram of a N:M relationship</figcaption>
</figure>
<p>In a N:M (or many to many) many instances of one entity can be linked
to many instances of another entity. Here, many companies can make many
parts. Likewise, many parts can be made by many companies.</p>
