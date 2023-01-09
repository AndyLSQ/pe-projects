import React from 'react'
import { Box, Stack, Typography, Button } from '@mui/material';

import HeroBannerImage from '../assets/images/banner.png'

const HeroBanner = () => {
    return (
        <Box sx={{
            mt: { lg: '212ps', xs:'70px' },
            ml: { sm: '50px' }
        }} position="relative" p="20px">
        <img src={HeroBannerImage} alt='banner' className='heroBannerImg'/>
        <Typography color="#FF2625" fontWeight='600' fontSize='26px' sx={{mt:'60px'}}>
            Fitness Club
        </Typography>
        <Typography
            fontWeight={700}
            sx={{fontSize: {lg:'44px', xs:'40px'}}}
            mb='23px' mt='30px'
        >
            Sweat, Smile <br/> and Repeat
        </Typography>
        <Typography
            fontSize='22px'
            lineHeight='35px'
            mb={4}
        >
            Check out the most effective exercises personalized to you
        </Typography>
        <Button
            variant='contained' href="#exercises" sx={{ backgroundColor:'#FF2625', padding:'10px'}}
        >
            Explore Exercises
        </Button>

        <Typography
            fontWeight={600}
            color='#FF2625'
            sx={{
                opacity: 0.4,
                display: { lg:'block'}
            }}
            fontSize='200px'
        >
            Exercises
        </Typography>
        <Box
            position="absolute"
        >
        </Box>
    </Box>
  )
}

export default HeroBanner;