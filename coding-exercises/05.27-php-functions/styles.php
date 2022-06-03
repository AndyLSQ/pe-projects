<style>

	
	html{
		box-sizing: border-box;
		color: white;
		font-family: helvetica, sans-serif;
		--canvas: hsla(248, 65%, 52%, 1.00);
		--ink: white;
		--card: hsla(256, 74%, 96%, 1.00);
		background-color: var(--canvas);

	}

	html *{
		border: 2px dashed orange;
	}

	.inner-column{
		max-width: 1200px;
		margin-left: auto;
		margin-right: auto;
	}

	h1 {
		font-size: 4rem;
		font-weight: normal;
		margin-bottom: 0;
	}


	h2{
		margin-top: 0;
		font-weight: normal;
	}

	ol{
		display: flex;
		flex-direction: column;
		justify-content: space-between;
		gap:  20px;
		margin:0;
		flex-wrap: wrap;
		padding-left: 0;
	}

	ol li {
		list-style-type: none;
		padding-left: 0;
	}

	li {
		/*display: flex;
		flex-direction: row;*/
		justify-content: center;
		align-items: center;
		border: 3px solid red;
		background-color: var(--card);
		color: var(--canvas);
	}

	monster-card{
		display: flex;
		flex-direction: row;
		justify-content: flex-start;
		align-items: center;
		gap: 20px;
	}

	card-text{
		display: flex;
		flex-direction: column;
	}

	.status{
		border: 2px solid var(--canvas);
		padding: 10px;
		width: 40%;
		text-align: center;
	}

@media (min-width: 900px){

	ol{
		display: flex;
		flex-direction: row;
		justify-content: space-between;
		gap:  20px;
		margin:0;
		flex-wrap: wrap;
		padding-left: 0;
	}

	monster-card{
		flex-direction: column;
	}

	li {
		display: flex;
		flex-direction: column;
		border: 3px solid red;
		width: 30%;
		background-color: var(--card);
		color: var(--canvas);
	}

	li:first-of-type{
		width:100%;
		flex-direction: row;
		justify-content: center;
		align-items: center;
	}

	li:first-of-type monster-card{
		flex-direction: row;
		justify-content: space-between;
		gap: 20px;
	}
}



</style>